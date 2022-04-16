<?php
$this->title = 'UNIX时间戳和普通时间互相转换';
$this->registerMetaTag(['name' => 'keywords', 'content' => '时间戳, unix timestamp, 转换, iFantastic'], 'keywords');
?>

<?php $this->beginBlock('tool.timestamp.css');?>
#current-timestamp:hover:after {content:" [已暂停]";color:#888;}
<?php $this->endBlock();?>
<?php $this->registerCss($this->blocks['tool.timestamp.css']);?>

<div class="page-header text-center">
    <h4>UNIX时间戳和普通时间互相转换</h4>
</div>
<div class="main-div container">
    <form class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-12">
                <p>UNIX时间戳的概念为世界协调时间（Coordinated Universal Time，即UTC，位于零度时区）的1970年01月01日00时00分00秒到现在（所有时区的此时此刻）的总秒数，不考虑闰秒，与时区无关。</p>
                <p>当前UNIX时间戳（基于本地浏览器）：<kbd id="current-timestamp"></kbd></p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="exclude-chars">unix时间戳:</label>
            <div class="col-sm-10 form-inline">
                <input class="form-control" id="input-timestamp" type="text" placeholder="">
                <button class="btn btn-default btn-copy" type="button" data-clipboard-target="#input-timestamp" data-clipboard-action="copy" alt="Copy to clipboard">复制</button>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-primary btn-datetime" type="button">转换成普通时间<span class="glyphicon glyphicon-arrow-down  glyphicon-align-right"></span></button>
                <button class="btn btn-primary btn-timestamp" type="button">转换成unix时间戳<span class="glyphicon glyphicon-arrow-up  glyphicon-align-right"></span></button>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="exclude-chars">普通时间:</label>
            <div class="col-sm-10 form-inline">
                <select id="timezone" class="form-control">
                    <option value="-12">UTC-12:00</option>
                    <option value="-11">UTC-11:00</option>
                    <option value="-10">UTC-10:00</option>
                    <option value="-9">UTC-09:00</option>
                    <option value="-8">UTC-08:00</option>
                    <option value="-7">UTC-07:00</option>
                    <option value="-6">UTC-06:00</option>
                    <option value="-5">UTC-05:00</option>
                    <option value="-4">UTC-04:00</option>
                    <option value="-3">UTC-03:00</option>
                    <option value="-2">UTC-02:00</option>
                    <option value="-1">UTC-01:00</option>
                    <option value="0">UTC±00:00</option>
                    <option value="1">UTC+01:00</option>
                    <option value="2">UTC+02:00</option>
                    <option value="3">UTC+03:00</option>
                    <option value="4">UTC+04:00</option>
                    <option value="5">UTC+05:00</option>
                    <option value="6">UTC+06:00</option>
                    <option value="7">UTC+07:00</option>
                    <option value="8" selected>UTC+08:00</option>
                    <option value="9">UTC+09:00</option>
                    <option value="10">UTC+10:00</option>
                    <option value="11">UTC+11:00</option>
                    <option value="11">UTC+12:00</option>
                </select>
                <input id="input-datetime" class="form-control" type="text" placeholder="普通时间">
                <button class="btn btn-default btn-copy" type="button" data-clipboard-target="#input-datetime" data-clipboard-action="copy" alt="Copy to clipboard">复制</button>
            </div>
        </div>
    </form>
    <div class="form-group">
        <table class="table table-striped table-hover table-condensed table-bordered">
            <caption>获取当前Unix时间戳(Unix timestamp)</caption>
            <tbody>
                <tr><th scope="row">Unix / Linux Shell</th><td>date +%s</td></tr>
                <tr><th scope="row">Java</th><td>纯java版: (int) (System.currentTimeMillis() / 1000); joda版:  (int) (DateTime.now().getMillis() / 1000) </td></tr>
                <tr><th scope="row">JavaScript</th><td>Math.round(new Date().getTime()/1000)</td></tr>
                <tr><th scope="row">PHP</th><td>纯PHP版：time(); Carbon版: Carbon::now()->timestamp</td></tr>
                <tr><th scope="row">MySQL</th><td>SELECT unix_timestamp(now())</td></tr>
                <tr><th scope="row">Python</th><td>先 import time 然后 time.time()</td></tr>
                <tr><th scope="row">Go</th><td>import ("time")  int32(time.Now().Unix())</td></tr>
                <tr><th scope="row">Perl</th><td>time</td></tr>
                <tr><th scope="row">Ruby</th><td>获取Unix时间戳：Time.now 或 Time.new, 显示Unix时间戳：Time.now.to_i</td></tr>
                <tr><th scope="row">Lua</th><td>os.time()</td></tr>
                <tr><th scope="row">Swift</th><td>NSDate().timeIntervalSince1970NSDat</td></tr>
                <tr><th scope="row">Object-C</th><td>[[NSDate date] timeIntervalSince1970]</td></tr>
                <tr><th scope="row">Erlang</th><td>calendar:datetime_to_gregorian_seconds(calendar:universal_time())-719528*24*3600.</td></tr>
                <tr><th scope="row">PostgreSQL</th><td>SELECT extract(epoch FROM now())</td></tr>
                <tr><th scope="row">SQLite</th><td>SELECT strftime('%s', 'now')</td></tr>
                <tr><th scope="row">SQL Server</th><td>SELECT DATEDIFF(s, '1970-01-01 00:00:00', GETUTCDATE())</td></tr>
                <tr><th scope="row">.NET / C#</th><td>(DateTime.Now.ToUniversalTime().Ticks - 621355968000000000) / 10000000</td></tr>
                <tr><th scope="row">VBScript / ASP</th><td>DateDiff("s", "01/01/1970 00:00:00", Now())</td></tr>
                <tr><th scope="row">其他操作系统(如果Perl被安装在系统中)</th><td>命令行状态：perl -e "print time"</td></tr>
            </tbody>
        </table>
        <table class="table table-striped table-hover table-condensed table-bordered">
            <caption>Unix时间戳 → 普通时间</caption>
            <tbody>
                <tr><th scope="row">Unix / Linux Shell</th><td>date -d @Unix timestamp</td></tr>
                <tr><th scope="row">Java</th><td>String date = new java.text.SimpleDateFormat("dd/MM/yyyy HH:mm:ss").format(new java.util.Date(Unix timestamp * 1000))</td></tr>
                <tr><th scope="row">JavaScript</th><td>先 var unixTimestamp = new Date(Unix timestamp * 1000) 然后 commonTime = unixTimestamp.toLocaleString()</td></tr>
                <tr><th scope="row">PHP</th><td>date('r', Unix timestamp)</td></tr>
                <tr><th scope="row">MySQL</th><td>from_unixtime(Unix timestamp)</td></tr>
                <tr><th scope="row">Python</th><td>先 import time 然后 time.gmtime(Unix timestamp)</td></tr>
                <tr><th scope="row">Perl</th><td>先 my $time = Unix timestamp 然后 my ($sec, $min, $hour, $day, $month, $year) = (localtime($time))[0,1,2,3,4,5,6]</td></tr>
                <tr><th scope="row">Ruby</th><td>Time.at(Unix timestamp)</td></tr>
                <tr><th scope="row">PostgreSQL</th><td>SELECT TIMESTAMP WITH TIME ZONE 'epoch' + Unix timestamp) * INTERVAL '1 second'</td></tr>
                <tr><th scope="row">SQL Server</th><td>DATEADD(s, Unix timestamp, '1970-01-01 00:00:00')</td></tr>
                <tr><th scope="row">VBScript / ASP</th><td>DateAdd("s", Unix timestamp, "01/01/1970 00:00:00")</td></tr>
                <tr><th scope="row">其他操作系统(如果Perl被安装在系统中)</th><td>命令行状态：perl -e "print scalar(localtime(Unix timestamp))"</td></tr>
            </tbody>
        </table>
        <table class="table table-striped table-hover table-condensed table-bordered">
            <caption>普通时间 → Unix时间戳</caption>
            <tbody>
                <tr><th scope="row">Unix / Linux Shell</th><td>date +%s -d"Jan 1, 1970 00:00:01"</td></tr>
                <tr><th scope="row">Java</th><td>long epoch = new java.text.SimpleDateFormat("dd/MM/yyyy HH:mm:ss").parse("01/01/1970 01:00:00")</td></tr>
                <tr><th scope="row">JavaScript</th><td>var commonTime = new Date(Date.UTC(year, month - 1, day, hour, minute, second))</td></tr>
                <tr><th scope="row">PHP</th><td>mktime(hour, minute, second, month, day, year)</td></tr>
                <tr><th scope="row">MySQL</th><td>SELECT unix_timestamp(time) 时间格式: YYYY-MM-DD HH:MM:SS 或 YYMMDD 或 YYYYMMDD</td></tr>
                <tr><th scope="row">Python</th><td>先 import time 然后 int(time.mktime(time.strptime('YYYY-MM-DD HH:MM:SS', '%Y-%m-%d %H:%M:%S')))</td></tr>
                <tr><th scope="row">Perl</th><td>先 use Time::Local 然后 my $time = timelocal($sec, $min, $hour, $day, $month, $year)</td></tr>
                <tr><th scope="row">Ruby</th><td>Time.local(year, month, day, hour, minute, second)</td></tr>
                <tr><th scope="row">PostgreSQL</th><td>SELECT extract(epoch FROM date('YYYY-MM-DD HH:MM:SS'));</td></tr>
                <tr><th scope="row">SQL Server</th><td>SELECT DATEDIFF(s, '1970-01-01 00:00:00', time)</td></tr>
                <tr><th scope="row">VBScript / ASP</th><td>DateDiff("s", "01/01/1970 00:00:00", time)</td></tr>
            </tbody>
        </table>
    </div>
</div>
<?php $this->beginBlock('tool.timestamp.script');?>
// Date()参数形式有7种
// new Date("month dd,yyyy hh:mm:ss");
// new Date("month dd,yyyy");
// new Date("yyyy/MM/dd hh:mm:ss");
// new Date("yyyy/MM/dd");
// new Date(yyyy,mth,dd,hh,mm,ss);
// new Date(yyyy,mth,dd);
// new Date(ms);
Date.prototype.Format = function(fmt) {
    var o = {
        "M+": this.getMonth()+1, //月份
        "d+": this.getDate(), //日
        "H+": this.getHours(), //小时
        "m+": this.getMinutes(), //分
        "s+": this.getSeconds(), //秒
        "q+": Math.floor((this.getMonth()+3)/3), //季度
        "S+": this.getMilliseconds() //毫秒
    };
    if (/(y+)/.test(fmt)) fmt = fmt.replace( RegExp.$1, (this.getFullYear()+"").substr(4-RegExp.$1.length) );
    for (var k in o) {
        if (new RegExp("(" + k + ")").test(fmt)) {
            fmt = fmt.replace( RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)) );
        }
    }
    return fmt;
};
var timer;
$(document).on('click', '.btn-datetime', function(){
    var timestamp = parseInt($('#input-timestamp').val()), timezone = parseInt($('#timezone').val()),
        oDate = new Date(timestamp*1000), localOffset = oDate.getTimezoneOffset() * 60000, // 当地时间偏移的毫秒数
        utc = oDate.getTime() + localOffset; // GMT时间
    oDate.setTime(utc + timezone * 3600000);
    console.log('时间戳【' + timestamp + '】在时区【' + timezone + '】对应时间为：' + oDate.Format("yyyy-MM-dd HH:mm:ss"));
    $('#input-datetime').val(oDate.Format("yyyy-MM-dd HH:mm:ss"));
}).on('click', '.btn-timestamp', function(){
    var datetime = $('#input-datetime').val(), timezone = parseInt($('#timezone').val()),
        oDate = new Date(datetime), localOffset = oDate.getTimezoneOffset() * 60000, // 当地时间偏移的毫秒数
        destTime;
    destTime = oDate.getTime() - (timezone * 3600000 + localOffset);
    console.log('时间【' + datetime + '】在时区【' + timezone + '】对应时间戳为：' + Math.round(destTime/1000));
    $('#input-timestamp').val(Math.round(destTime/1000));
}).on('mouseenter', '#current-timestamp', function(){
    clearInterval(timer);
}).on('mouseleave', '#current-timestamp', function(){
    var curTimestamp = Math.round((new Date()).getTime() / 1000);
    $('#current-timestamp').text(curTimestamp);
    timer = setInterval(function(){
        $('#current-timestamp').text(++curTimestamp);
    }, 1000);
}).ready(function(){
    var oDate = new Date(),
        curTimestamp = Math.round(oDate.getTime() / 1000);
    $('#current-timestamp').text(curTimestamp);
    $('#input-timestamp').val(curTimestamp);
    oDate.setTime(curTimestamp*1000);
    $('#input-datetime').val(oDate.Format("yyyy-MM-dd HH:mm:ss"));

    timer = setInterval(function(){
        $('#current-timestamp').text(++curTimestamp);
    }, 1000);

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
    });

});

<?php $this->endBlock();?>
<?php $this->registerJs($this->blocks['tool.timestamp.script']);?>
<?php $this->registerJsFile('https://cdn.bootcss.com/clipboard.js/2.0.4/clipboard.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);?>
