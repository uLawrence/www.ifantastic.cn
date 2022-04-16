<?php
$this->title = '随机密码、随机数生成器';
$this->registerMetaTag(['name' => 'keywords', 'content' => '随机密码, 随机数, 生成器, iFantastic'], 'keywords');
?>

<div class="page-header text-center">
    <h4>随机密码、随机数生成器</h4>
</div>
<div class="main-div container">
    <form class="form-horizontal">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="contain-chars">使用字符:</label>
            <div class="col-sm-10">
                <label class="checkbox-inline"><input id="input-number" type="checkbox" checked>0-9</label>
                <label class="checkbox-inline"><input id="input-uppercase" type="checkbox" checked>A-Z</label>
                <label class="checkbox-inline"><input id="input-lowercase" type="checkbox" checked>a-z</label>
                <label class="checkbox-inline"><input id="input-specialchar" type="checkbox" >~!@#$%^&*()_+</label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="exclude-chars">排除字符:</label>
            <div class="col-sm-10">
                <input class="form-control" id="input-exclude" type="text" placeholder="排除字符，如1，0，i，l，o，O等易混淆字符">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="repeat-chars">是否重复:</label>
            <div class="col-sm-10">
                <label class="checkbox-inline"><input id="input-repeat" type="checkbox" value="option1">字符不重复(生成长度不超过使用字符数量时起作用)</label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="length-chars">生成长度:</label>
            <div class="col-sm-10">
                <select id="input-length" class="form-control">
                    <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
                    <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
                    <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
                    <option selected>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
                    <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
                    <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
                    <option>31</option><option>32</option><option>33</option><option>34</option><option>35</option>
                    <option>36</option><option>37</option><option>38</option><option>39</option><option>40</option>
                    <option>41</option><option>42</option><option>43</option><option>44</option><option>45</option>
                    <option>46</option><option>47</option><option>48</option><option>49</option><option>50</option>
                    <option>51</option><option>52</option><option>53</option><option>54</option><option>55</option>
                    <option>56</option><option>57</option><option>58</option><option>59</option><option>60</option>
                    <option>61</option><option>62</option><option>63</option><option>64</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="quantity-chars">生成数量:</label>
            <div class="col-sm-10">
                <select id="input-quantity" class="form-control">
                    <option>1</option><option>2</option><option selected>3</option><option>4</option><option>5</option>
                    <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
                    <option>15</option><option>20</option><option>25</option><option>30</option><option>35</option>
                    <option>40</option><option>45</option><option>50</option><option>55</option><option>60</option>
                    <option>65</option><option>70</option><option>75</option><option>80</option><option>85</option>
                    <option>90</option><option>95</option><option>100</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="quantity-chars">生成结果:</label>
            <div class="col-sm-10">
                <textarea id="input-result" class="form-control" cols="30" rows="10" spellcheck="false"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-primary btn-generate" type="button">生成(generate)</button>
                <button class="btn btn-default btn-copy" type="button" data-clipboard-target="#input-result" data-clipboard-action="copy" alt="Copy to clipboard">复制(copy)</button>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="form-group col-sm-12">
                    <div id="res-desc" class="alert" role="alert" style="display:none;"></div>
                </div>
            </div>
        </div>
    </form>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <p>密码是一种用来混淆的技术，使用者希望将正常的（可识别的）信息转变为无法识别的信息。但这种无法识别的信息部分是可以再加工并恢复和破解的。密码在中文里是“口令”（password）的通称。</p>
            <p>登录网站、电子邮箱和银行取款时输入的“密码”其实严格来讲应该仅被称作“口令”，因为它不是本来意义上的“加密代码”，但是也可以称为秘密的号码。</p>
        </div>
    </div>

</div>
<?php $this->beginBlock('tool.random.script');?>
$(document).on('click', '.btn-generate', function(){
    var conf = {"number":false,"uppercase":false,"lowercase":false,"specialchar":false,"repeat":true},
        _excludeStr = '', _len = 0, _quantity = 0, res = [];
    if ($('#input-number').prop('checked')) conf.number = true;
    if ($('#input-uppercase').prop('checked')) conf.uppercase = true;
    if ($('#input-lowercase').prop('checked')) conf.lowercase = true;
    if ($('#input-specialchar').prop('checked')) conf.specialchar = true;
    if (!conf.number && !conf.uppercase && !conf.lowercase && !conf.specialchar) {
        return showRes('请选择使用字符', 'alert-danger');
    }
    _excludeStr = $('#input-exclude').val().replace(/^[ ]+$/gm, '');
    if (_excludeStr.length > 0) conf.excludechar = _excludeStr;
    if ($('#input-repeat').prop('checked')) conf.repeat = false;

    _len = parseInt($('#input-length').val());
    _quantity = parseInt($('#input-quantity').val());

    for (var i = 0; i < _quantity; i++) {
        res.push(generateRandomStr(_len, conf));
    }
    $('#input-result').val(res.join("\n"));
    showRes('成功', 'alert-success');
}).ready(function(){
    var clipboard = new ClipboardJS('.btn-copy');
    clipboard.on('success', function(e) {
        //console.info('Trigger:', e.trigger);
        //console.info('Action:', e.action);
        //console.info('Text:', e.text);
        //e.clearSelection();
        //clipboard.on('error', function(e) {
        //    console.error('Action:', e.action);
        //    console.error('Trigger:', e.trigger);
        //});
        showRes('已复制', 'alert-success');
    });

});

function showRes(str, flag) {
    $('#res-desc').removeClass('alert-success alert-danger').addClass(flag).text(str).show(200);
}

function generateRandomStr(len, conf) {
    var _number = '0123456789',
        _upperCase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        _lowerCase = 'abcdefghijklmnopqrstuvwxyz',
        _specialChar = '~!@#$%^&*()_+',
        _defaultConf = {
            "number":true, // 是否包含数字
            "uppercase":true, // 是否包含大写字母
            "lowercase":true, // 是否包含小写字母
            "specialchar":false, // 是否包含特殊字符，~!@#$%^&*()_+
            "excludechar":"", // 排除的字符
            "repeat":true, // 是否允许重复
        },
        _conf = Object.assign({}, _defaultConf, conf),
        _chars = '',
        _curChar = '',
        res = '';

    _conf.number && (_chars = _chars.concat(_number));
    _conf.uppercase && (_chars = _chars.concat(_upperCase));
    _conf.lowercase && (_chars = _chars.concat(_lowerCase));
    _conf.specialchar && (_chars = _chars.concat(_specialChar));
    _conf.excludechar.length && (_chars = _chars.replace(_conf.excludechar, ''));

    if (_chars.length < len) _conf.repeat = true;
    for (var i=0;i<len;i++) {
        _curChar = _chars[Math.floor(Math.random() * _chars.length)];
        res += _curChar;
        if (!_conf.repeat) _chars = _chars.replace(_curChar, '');
    }

    return res;
}

<?php $this->endBlock();?>
<?php $this->registerJs($this->blocks['tool.random.script']);?>
<?php $this->registerJsFile('https://cdn.bootcss.com/clipboard.js/2.0.4/clipboard.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);?>
