<?php
$this->title = 'JSON格式化、JSON压缩、JSON在线解析、JSON验证';
$this->registerMetaTag(['name' => 'keywords', 'content' => 'JSON格式化, JSON压缩, JSON验证, iFantastic, 工具'], 'keywords');
?>
<?php $this->beginBlock('tool.json.css');?>
.main-div{min-height:600px;}
#content{background-color:#272822;color:#F8F8F2;border-radius:0;}
<?php $this->endBlock();?>
<?php $this->registerCss($this->blocks['tool.json.css']);?>

<div class="page-header text-center">
    <h4>JSON格式化、JSON压缩、JSON在线解析、JSON验证</h4>
</div>
<div class="main-div">
    <form class="form-horizontal">
        <div class="form-group col-sm-12">
            <textarea id="content" class="form-control" rows="20" spellcheck="false" placeholder='{
  "name": "JSON格式化、JSON压缩、JSON在线解析、JSON验证",
  "description": "JSON格式化/压缩工具由JS在本地客户端完成，所有输入都不会提交到服务端",
  "url": "http://iFantastic.cn/json"
}'></textarea>
        </div>
        <div class="form-group col-sm-12">
            <button class="btn btn-primary" type="button" data-opt="format">格式化</button>
            <button class="btn btn-primary" type="button" data-opt="compress">压 缩</button>
        </div>
        <div class="form-group col-sm-12">
            <div id="res-desc" class="alert" role="alert" style="display:none;"></div>
        </div>
    </form>
</div>
<?php $this->registerJsFile(
    '@web/js/auto-line-number.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);?>
<?php $this->beginBlock('tool.json.script');?>
$(document).on('click', '.btn', function(){
    var me = $(this),
        opt = me.data('opt'),
        content = $('#content'),
        contentStr = content.val();
    if (contentStr == '') {
        contentStr = content.attr('placeholder');
    }
    if (contentStr.replace(/^[ ]+$/gm, '') == '') {
        return showRes('输入为空', 'alert-success');
    }

    switch (opt) {
        case 'compress':
            jsonPrint(contentStr, 0);
            break;
        case 'format':
        default:
            jsonPrint(contentStr, 2);
    }
});

function jsonPrint(jsonStr, placeNum) {
    var jsonObj,
        jsonStr = jsonStr.replace(/\\"/gm, '"');
    try {
        jsonObj = JSON.parse(jsonStr);
    } catch (err) {
        return showRes(['失败: ', err.name, err.message].join('') , 'alert-danger');
    }
    $('#content').val(JSON.stringify(jsonObj, undefined, placeNum)).trigger('keydown');
    showRes('成功', 'alert-success');
}
function showRes(str, flag) {
    $('#res-desc').removeClass('alert-success alert-danger').addClass(flag).text(str).css('display', 'block');
}

$("#content").setTextareaCount({
    width: "30px",
    bgColor: "#000",
    color: "#FFF",
    display: "inline-block"
});
<?php $this->endBlock();?>
<?php $this->registerJs($this->blocks['tool.json.script']);?>
