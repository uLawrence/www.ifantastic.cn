<?php
$this->title = 'base64编码、base64解码';
$this->registerMetaTag(['name' => 'keywords', 'content' => 'base64, base64_encode, base64_decode, 编码, 解码, iFantastic'], 'keywords');
?>
<?php $this->beginBlock('tool.base64.css');?>
.main-div{min-height:600px;}
#content{background-color:#223c34;color:#F8F8F2;border-radius:0;}
<?php $this->endBlock();?>
<?php $this->registerCss($this->blocks['tool.base64.css']);?>

<div class="page-header text-center">
    <h4>base64编码、base64解码</h4>
</div>
<div class="main-div">
    <form class="form-horizontal">
        <div class="form-group col-sm-12">
            <textarea id="content" class="form-control" rows="20" spellcheck="false" placeholder='Base64是网络上最常见的用于传输8Bit字节码的编码方式之一，可用于在HTTP环境下传递较长的标识信息。'></textarea>
        </div>
        <div class="form-group col-sm-12">
            <button class="btn btn-primary" type="button" data-opt="decode">解码(decode)</button>
            <button class="btn btn-info" type="button" data-opt="encode">编码(encode)</button>
        </div>
        <div class="form-group col-sm-12">
            <div id="res-desc" class="alert" role="alert" style="display:none;"></div>
        </div>
    </form>
    <div class="form-group col-sm-12">
        <p>Base64是一种基于64个可打印字符(0-9、A-Z、a-z、+、/)来表示二进制数据的方法。标准的Base64并不适合直接放在URL里传输，因为URL编码器会把标准Base64中的“/”和“+”字符变为形如“%XX”的形式，而这些“%”号在存入数据库时还需要再进行转换，因为ANSI SQL中已将“%”号用作通配符。</p>
        <p>Base64编码要求把3个8位字节（3*8=24）转化为4个6位的字节（4*6=24），之后在6位的前面补两个0，形成8位一个字节的形式，编码后的字串长度增加约33%，结尾可能带有1或2个“=”等号。</p>
        <p>base64编码一般用于email传输，可满足email中不能直接使用feiASCII码字符传输数据的规定。</p>
        <p>base64编码能把不可打印的内容塞进可打印内容里，如把图片文件base64编码后存到数据库。</p>
    </div>

</div>
<?php $this->beginBlock('tool.base64.script');?>
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
        case 'encode':
            base64Print(contentStr, 'encode');
            break;
        case 'decode':
        default:
            base64Print(contentStr, 'decode');
    }
});

function base64Print(str, option) {
    var ret;
    if (option && option == 'encode') {
        ret = Base64.encode(str);
    } else {
        try {
            ret = Base64.decode(str);
        } catch (err) {
            return showRes(['失败: ', err.name, err.message].join('') , 'alert-danger');
        }
    }
    $('#content').val(ret).trigger('keydown');
    showRes('成功', 'alert-success');
}

function showRes(str, flag) {
    $('#res-desc').removeClass('alert-success alert-danger').addClass(flag).text(str).css('display', 'block');
}

window.Base64 = {
    encode(str) {
        // first we use encodeURIComponent to get percent-encoded UTF-8,
        // then we convert the percent encodings into raw bytes which
        // can be fed into btoa.
        return btoa(encodeURIComponent(str).replace(/%([0-9A-F]{2})/g,
            function toSolidBytes(match, p1) {
                return String.fromCharCode('0x' + p1);
            }));
    },
    decode(str) {
        // Going backwards: from bytestream, to percent-encoding, to original string.
        return decodeURIComponent(atob(str).split('').map(function (c) {
            return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
        }).join(''));
    }
};
<?php $this->endBlock();?>
<?php $this->registerJs($this->blocks['tool.base64.script']);?>
