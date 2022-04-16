<?php
$this->title = '客户端版本';
$this->registerMetaTag(['name' => 'keywords', 'content' => '客户端版本, partner, iFantastic'], 'keywords');
?>

<div class="page-header text-center">
    <h4>客户端版本</h4>
</div>
<table class="table table-striped table-hover table-condensed table-bordered">
    <caption>clientversionconfig 客户端版本</caption>
    <thead>
        <tr>
            <th scope="col">name<br />版本名称</th>
            <th scope="col">vertyp<br />版本类型，exe=0，ini=1，默认值0</th>
            <th scope="col">version<br />版本号，比如：1.0.13.1022</th>
            <th scope="col">partneridlist<br />合作伙伴列表</th>
            <th scope="col">state<br />版本类型，正常=0，静默升级=1，禁用=2，默认值0</th>
            <th scope="col">adddate<br />添加时间</th>
            <th scope="col">client_type<br />客户端类型：1-PC, 2-IOS, 4-iPad, 8-web, 16-Android，默认值1</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>exe2013-02-21(精简版)</td><td>0</td><td>1.1.14.124</td><td>0,1,10001</td><td>0</td><td>2013/10/23 16:39:39</td><td>1</td></tr>
        <tr><td>ini-1288(精简版,勿删,勿禁)</td><td>1</td><td>8.0.2014.1288</td><td>0,1,10001</td><td>0</td><td>2014/12/5 14:58:08</td><td>1</td></tr>
        <tr><td>exe-2015-03-27</td><td>0</td><td>8.0.2015.0327</td><td>0,1,10001</td><td>0</td><td>2015/3/27 15:53:04</td><td>1</td></tr>
        <tr><td>ini-debug</td><td>1</td><td>1.0.2013.8888</td><td>0,1,127,10001</td><td>0</td><td>2015/4/7 12:13:10</td><td>1</td></tr>
        <tr><td>FlashFish-exe-2016-1</td><td>0</td><td>1.0.2016.1123</td><td>127,10001</td><td>0</td><td>2016/11/23 11:46:31</td><td>1</td></tr>
        <tr><td>ios_105</td><td>0</td><td>2.0.7</td><td>126</td><td>0</td><td>2016/12/22 11:01:47</td><td>2</td></tr>
        <tr><td>android_107</td><td>0</td><td>2.0.9</td><td>126</td><td>0</td><td>2016/12/22 11:03:09</td><td>16</td></tr>
        <tr><td>ini-1.0.1704.1502(R)</td><td>1</td><td>1.0.1704.1502</td><td>127,10001</td><td>0</td><td>2017/4/17 18:05:06</td><td>1</td></tr>
        <tr><td>ini-8.1.1812.1902</td><td>1</td><td>8.1.1812.1902</td><td>0,1</td><td>2</td><td>2018/12/20 10:26:58</td><td>1</td></tr>
        <tr><td>ini-8.1.1903.1702</td><td>1</td><td>8.1.1903.1702</td><td>0,1</td><td>2</td><td>2019/3/18 16:40:20</td><td>1</td></tr>
        <tr><td>ini-8.1.1903.2191</td><td>1</td><td>8.1.1903.2191</td><td>0,1</td><td>2</td><td>2019/3/21 9:26:53</td><td>1</td></tr>
        <tr><td>ini-8.1.1903.2902</td><td>1</td><td>8.1.1903.2902</td><td>0,1</td><td>2</td><td>2019/3/29 14:26:40</td><td>1</td></tr>
        <tr><td>ini-8.1.1904.1002</td><td>1</td><td>8.1.1904.1002</td><td>0,1</td><td>2</td><td>2019/4/10 20:25:13</td><td>1</td></tr>
        <tr><td>ini-8.1.1905.2001</td><td>1</td><td>8.1.1905.2001</td><td>0,1</td><td>2</td><td>2019/5/20 17:50:37</td><td>1</td></tr>
        <tr><td>ini-8.1.1905.2404</td><td>1</td><td>8.1.1905.2404</td><td>0,1</td><td>2</td><td>2019/5/24 20:02:51</td><td>1</td></tr>
        <tr><td>ini-8.1.1906.2403</td><td>1</td><td>8.1.1906.2403</td><td>0,1</td><td>2</td><td>2019/6/24 18:00:12</td><td>1</td></tr>
        <tr><td>ini-8.1.1907.2901</td><td>1</td><td>8.1.1907.2901</td><td>0,1,10001</td><td>0</td><td>2019/7/29 16:31:01</td><td>1</td></tr>
        <tr><td>ini-8.1.1907.2902</td><td>1</td><td>8.1.1907.2902</td><td>0,1,10001</td><td>0</td><td>2019/7/29 16:31:08</td><td>1</td></tr>
        <tr><td>ini-8.1.1908.0601</td><td>1</td><td>8.1.1908.0601</td><td>0,1,10001</td><td>0</td><td>2019/8/8 10:34:42</td><td>1</td></tr>
    </tbody>
</table>

<table class="table table-striped table-hover table-condensed table-bordered">
    <caption>partnerconfig 合作伙伴表</caption>
    <thead>
        <tr>
            <th scope="col">partnerid<br />合作伙伴ID</th>
            <th scope="col">partnername<br />合作伙伴名称</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>0</td><td>iSpeak</td></tr>
        <tr><td>1</td><td>iShow</td></tr>
        <tr><td>126</td><td>hotlive</td></tr>
        <tr><td>127</td><td>feitianmao</td></tr>
        <tr><td>10001</td><td>内网</td></tr>
    </tbody>
</table>