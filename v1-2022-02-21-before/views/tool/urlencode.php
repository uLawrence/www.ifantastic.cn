<?php
$this->title = 'Url编码、Url解码';
$this->registerMetaTag(['name' => 'keywords', 'content' => 'Url编码, Url解码, Url, 编码, 解码, iFantastic'], 'keywords');
?>
<?php $this->beginBlock('tool.urlencode.css');?>

<?php $this->endBlock();?>
<?php $this->registerCss($this->blocks['tool.urlencode.css']);?>

<div class="page-header text-center">
    <h4>Url编码、Url解码</h4>
</div>
<div class="main-div">
    <form class="">
        <div class="form-group col-sm-12">
            <textarea id="source-str" class="form-control" rows="10" spellcheck="false" placeholder='哪些字符是需要转化的呢？
1. ASCII 的控制字符：这些字符都是不可打印的，自然需要进行转化。
2. 一些非ASCII字符：这些字符自然是非法的字符范围。转化也是理所当然的了。
3. 一些保留字符：很明显最常见的就是“&”了，这个如果出现在url中了，那你认为是url中的一个字符呢，还是特殊的参数分割用的呢？
4. 就是一些不安全的字符：例如：空格。为了防止引起歧义，需要被转化为“+”。'></textarea>
        </div>
        <div class="form-group col-sm-12">
            <div class="form-inline">
                <button class="btn btn-primary" type="button" data-opt="decode">解码(decode)</button>
                <button class="btn btn-info" type="button" data-opt="encode">编码(encode)</button>
                <select id="method" class="form-control">
                    <option value="encodeURIComponent">encodeURIComponent/decodeURIComponent （javascript）</option>
                    <option value="encodeURI">encodeURI/decodeURI （javascript）</option>
                    <option value="rawurlencode">rawurlencode/rawurldecode（php、RFC3986）</option>
                    <option value="urlencode">urlencode/urldecode（php）</option>
                </select>
            </div>
        </div>
        <div class="form-group col-sm-12">
            <textarea id="target-str" class="form-control" rows="10" spellcheck="false" placeholder=''></textarea>
        </div>
        <div class="form-group col-sm-12">
            <div id="res-desc" class="alert" role="alert" style="display:none;"></div>
        </div>
    </form>
    <div class="form-group col-sm-12">
        <p>URL编码(URL encoding)，也称作百分号编码(Percent-encoding)， 是特定上下文的统一资源定位符 (URL)的编码机制。
适用于统一资源标识符(URI)的编码，也用于为"application/x-www-form-urlencoded" MIME准备数据， 因为它用于通过HTTP的请求操作(request)提交HTML表单数据。</p>
        <p>urleocode是基于字符编码的，目的是正确无误地被传输。同样的一个汉字，不同的编码类型，肯定对应不同的urleocode的串。gbk编码的有gbk的encode结果。</p>
        <p>编码原理：将需要转码的字符转为16进制，然后从右到左，取4位(不足4位直接处理)，每2位做一位，前面加上%，编码成%XY格式。
        <p>比如：空格ASCII码是32，对应16进制是20，那么urlencode编码结果是:%20,但在新标准中空格对应的是+,见RFC-1738</p>
        <p>比如：中ASCII码是-10544，对应的16进制是FFFFFFFFFFFFD6D0，那么urlencode编码结果是:%D6%D0</p>
        <p>哪些字符是需要转化的呢？</p>
        <p>1. ASCII 的控制字符：这些字符都是不可打印的，自然需要进行转化。</p>
        <p>2. 一些非ASCII字符：这些字符自然是非法的字符范围。转化也是理所当然的了。</p>
        <p>3. 一些保留字符：很明显最常见的就是“&”了，这个如果出现在url中了，那你认为是url中的一个字符呢，还是特殊的参数分割用的呢？</p>
        <p>4. 一些不安全的字符：例如：空格。为了防止引起歧义，需要被转化为“+”。</p>
    </div>
</div>
<?php $this->beginBlock('tool.urlencode.script');?>
$(document).on('click', '.btn', function(){
    var me = $(this),
        opt = me.data('opt'),
        method = $('#method').val(),
        source = $('#source-str').val().replace(/^[ ]+$/gm, ''),
        target;
    if (source == '') return false;

    switch (opt+'-'+method) {
        case 'encode-encodeURIComponent':
            target = encodeURIComponent(source);
            break;
        case 'decode-encodeURIComponent':
            target = decodeURIComponent(source);
            break;
        case 'encode-encodeURI':
            target = encodeURI(source);
            break;
        case 'decode-encodeURI':
            target = decodeURI(source);
            break;
        case 'encode-rawurlencode':
            target = urlencode(source, 'rawurlencode');
            break;
        case 'decode-rawurlencode':
            target = urlencode(source, 'rawurldecode');
            break;
        case 'encode-urlencode':
            target = urlencode(source, 'urlencode');
            break;
        case 'decode-urlencode':
            target = urlencode(source, 'urldecode');
            break;
        default:
    }
    console.log(opt+'-'+method, target);
    $('#target-str').val(target);
});

function urlencode(source, encode) {
    $.post('/tool/urlencode', {"source":source,"encode":encode}, function(res){
        if (res.code == 0) return res.target;
    });
}

<?php $this->endBlock();?>
<?php $this->registerJs($this->blocks['tool.urlencode.script']);?>
