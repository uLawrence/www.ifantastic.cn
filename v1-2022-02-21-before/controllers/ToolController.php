<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use yii\helpers\Json;

class ToolController extends Controller
{
    public $layout = 'tool';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays json format etc.
     *
     * @return string
     */
    public function actionJson()
    {
        return $this->render('json');
    }

    /**
     * Displays ascii.
     *
     * @return string
     */
    public function actionAscii()
    {
        return $this->render('ascii');
    }

    /**
     * Displays base64 encode
     *
     * @return string
     */
    public function actionBase64()
    {
        return $this->render('base64');
    }

    /**
     * Displays random
     *
     * @return string
     */
    public function actionRandom()
    {
        return $this->render('random');
    }

    /**
     * Displays random
     *
     * @return string
     */
    public function actionTimestamp()
    {
        return $this->render('timestamp');
    }

    /**
     * Displays Http Status Code
     *
     * @return string
     */
    public function actionHttpstatuscode()
    {
        return $this->render('httpstatuscode');
    }

    /**
     * Displays URL encode & decode
     *
     * @return string
     */
    public function actionUrlencode()
    {
        if (Yii::$app->request->isAjax) {
            $source = Yii::$app->request->post('source', '');
            $encode = Yii::$app->request->post('encode', '');
            // return json_encode('{"code":0,"message":"ok:'.$source . $encode.'"}');
            return Json::encode('{"code":0,"message":"ok:'.$source . $encode.'"}');
        }
        return $this->render('urlencode');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
