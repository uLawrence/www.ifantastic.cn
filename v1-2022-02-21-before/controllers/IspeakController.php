<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

use yii\helpers\Json;

class IspeakController extends Controller
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
        // return $this->render('index');
        return $this->render('consumetype');
    }

    /**
     * Displays iSpeak Consume Type
     *
     * @return string
     */
    public function actionConsumetype()
    {
        return $this->render('consumetype');
    }

    /**
     * Displays iSpeak partner
     *
     * @return string
     */
    public function actionPartnerlist()
    {
        return $this->render('partnerlist');
    }

    /**
     * Displays iSpeak partner
     *
     * @return string
     */
    public function actionClientconfig()
    {
        return $this->render('clientconfig');
    }

    /**
     * Displays iSpeak partner
     *
     * @return string
     */
    public function actionConsumelevel()
    {
        return $this->render('consumelevel');
    }

}
