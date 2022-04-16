<?php
$this->title = 'HTTP状态码、HTTP Status Code查询';
$this->registerMetaTag(['name' => 'keywords', 'content' => 'HTTP, HTTP状态码, iFantastic'], 'keywords');
?>

<div class="page-header text-center">
    <h4>HTTP状态码（HTTP Status Code）是用以表示网页服务器HTTP响应状态的3位十进制数字代码。它由 RFC 2616 规范定义的，并得到RFC 2518、RFC 2817、RFC 2295、RFC 2774、RFC 4918等规范扩展。</h4>
</div>
<table class="table table-hover table-condensed table-bordered">
    <caption>HTTP状态码分类（5种类型）</caption>
    <thead>
        <tr>
            <th scope="col">类别</th>
            <th scope="col">说明</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>1**</td><td>信息，服务器收到请求，需要客户端继续执行操作。
        <p class="text-info">这类响应是临时响应，只包含状态行和某些可选的响应头信息，并以空行结束。HTTP/1.0协议规范中没有定义任何1xx状态码，所以除非在某些试验条件下，服务器禁止向此类客户端发送1xx响应。 这些状态码代表的响应都是信息性的，标示客户应该采取的其他行动。</p></td></tr>
        <tr><td>2**</td><td>成功，操作被成功接收并处理。</td></tr>
        <tr><td>3**</td><td>重定向，需要客户端进一步的操作以完成请求。
            <p class="text-info">后续的请求地址（重定向目标）在本次响应的Location域中指明。当且仅当后续的请求所使用的方法是GET或者HEAD时，用户浏览器才可以在没有用户介入的情况下自动提交所需要的后续请求。按照HTTP/1.0协议规范的建议，浏览器不应自动访问超过5次的重定向。</p></td></tr>
        <tr><td>4**</td><td>客户端错误，请求包含语法错误或无法完成请求。</td></tr>
        <tr><td>5**</td><td>服务器错误，服务器在处理请求的过程中发生了错误。</td></tr>
    </tbody>
</table>

<table class="table table-hover table-condensed table-bordered">
    <caption>常见的HTTP状态码</caption>
    <thead>
        <tr>
            <th scope="col">状态码</th>
            <th scope="col">状态码英文名称</th>
            <th scope="col">说明</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>100</td><td>Continue</td><td>继续。客户端应继续其请求</td></tr>
        <tr><td>101</td><td>Switching Protocols</td><td>切换协议。服务器根据客户端的请求切换协议。只能切换到更高级的协议，例如，切换到HTTP的新版本协议</td></tr>
        <tr><td>102</td><td>Processing</td><td>由WebDAV（RFC 2518）扩展的状态码，代表处理将被继续执行</td></tr>
        <tr><td>200</td><td>OK</td><td>请求成功。一般用于GET与POST请求</td></tr>
        <tr><td>201</td><td>Created</td><td>已创建。成功请求并创建了新的资源</td></tr>
        <tr><td>202</td><td>Accepted</td><td>已接受。已经接受请求，但未处理完成</td></tr>
        <tr><td>203</td><td>Non-Authoritative Information</td><td>非授权信息。请求成功。但返回的meta信息不在原始的服务器，而是一个副本</td></tr>
        <tr><td>204</td><td>No Content</td><td>无内容。服务器成功处理，但未返回内容。在未更新网页的情况下，可确保浏览器继续显示当前文档</td></tr>
        <tr><td>205</td><td>Reset Content</td><td>重置内容。服务器处理成功，用户终端（例如：浏览器）应重置文档视图。可通过此返回码清除浏览器的表单域</td></tr>
        <tr><td>206</td><td>Partial Content</td><td>部分内容。服务器成功处理了部分GET请求</td></tr>
        <tr><td>300</td><td>Multiple Choices</td><td>多种选择。请求的资源可包括多个位置，相应可返回一个资源特征与地址的列表用于用户终端（例如：浏览器）选择</td></tr>
        <tr><td>301</td><td>Moved Permanently</td><td>永久移动。请求的资源已被永久的移动到新URI，返回信息会包括新的URI，浏览器会自动定向到新URI。今后任何新的请求都应使用新的URI代替</td></tr>
        <tr><td>302</td><td>Found</td><td>临时移动。与301类似。但资源只是临时被移动。客户端应继续使用原有URI</td></tr>
        <tr><td>303</td><td>See Other</td><td>查看其它地址。与301类似。使用GET和POST请求查看</td></tr>
        <tr><td>304</td><td>Not Modified</td><td>未修改。所请求的资源未修改，服务器返回此状态码时，不会返回任何资源。客户端通常会缓存访问过的资源，通过提供一个头信息指出客户端希望只返回在指定日期之后修改的资源</td></tr>
        <tr><td>305</td><td>Use Proxy</td><td>使用代理。所请求的资源必须通过代理访问</td></tr>
        <tr><td>306</td><td>Unused</td><td>已经被废弃的HTTP状态码</td></tr>
        <tr><td>307</td><td>Temporary Redirect</td><td>临时重定向。与302类似。使用GET请求重定向</td></tr>
        <tr><td>400</td><td>Bad Request</td><td>客户端请求的语法错误，服务器无法理解</td></tr>
        <tr><td>401</td><td>Unauthorized</td><td>请求要求用户的身份认证</td></tr>
        <tr><td>402</td><td>Payment Required</td><td>保留，将来使用</td></tr>
        <tr><td>403</td><td>Forbidden</td><td>服务器理解请求客户端的请求，但是拒绝执行此请求</td></tr>
        <tr><td>404</td><td>Not Found</td><td>服务器无法根据客户端的请求找到资源（网页）。通过此代码，网站设计人员可设置"您所请求的资源无法找到"的个性页面</td></tr>
        <tr><td>405</td><td>Method Not Allowed</td><td>客户端请求中的方法被禁止</td></tr>
        <tr><td>406</td><td>Not Acceptable</td><td>服务器无法根据客户端请求的内容特性完成请求</td></tr>
        <tr><td>407</td><td>Proxy Authentication Required</td><td>请求要求代理的身份认证，与401类似，但请求者应当使用代理进行授权</td></tr>
        <tr><td>408</td><td>Request Time-out</td><td>服务器等待客户端发送的请求时间过长，超时</td></tr>
        <tr><td>409</td><td>Conflict</td><td>服务器完成客户端的PUT请求是可能返回此代码，服务器处理请求时发生了冲突</td></tr>
        <tr><td>410</td><td>Gone</td><td>客户端请求的资源已经不存在。410不同于404，如果资源以前有现在被永久删除了可使用410代码，网站设计人员可通过301代码指定资源的新位置</td></tr>
        <tr><td>411</td><td>Length Required</td><td>服务器无法处理客户端发送的不带Content-Length的请求信息</td></tr>
        <tr><td>412</td><td>Precondition Failed</td><td>客户端请求信息的先决条件错误</td></tr>
        <tr><td>413</td><td>Request Entity Too Large</td><td>由于请求的实体过大，服务器无法处理，因此拒绝请求。为防止客户端的连续请求，服务器可能会关闭连接。如果只是服务器暂时无法处理，则会包含一个Retry-After的响应信息</td></tr>
        <tr><td>414</td><td>Request-URI Too Large</td><td>请求的URI过长（URI通常为网址），服务器无法处理</td></tr>
        <tr><td>415</td><td>Unsupported Media Type</td><td>服务器无法处理请求附带的媒体格式</td></tr>
        <tr><td>416</td><td>Requested range not satisfiable</td><td>客户端请求的范围无效</td></tr>
        <tr><td>417</td><td>Expectation Failed</td><td>服务器无法满足Expect的请求头信息</td></tr>
        <tr><td>500</td><td>Internal Server Error</td><td>服务器内部错误，无法完成请求</td></tr>
        <tr><td>501</td><td>Not Implemented</td><td>服务器不支持请求的功能，无法完成请求</td></tr>
        <tr><td>502</td><td>Bad Gateway</td><td>作为网关或者代理工作的服务器尝试执行请求时，从远程服务器接收到了一个无效的响应</td></tr>
        <tr><td>503</td><td>Service Unavailable</td><td>由于超载或系统维护，服务器暂时的无法处理客户端的请求。延时的长度可包含在服务器的Retry-After头信息中</td></tr>
        <tr><td>504</td><td>Gateway Time-out</td><td>充当网关或代理的服务器，未及时从远端服务器获取请求</td></tr>
        <tr><td>505</td><td>HTTP Version not supported</td><td>服务器不支持请求的HTTP协议的版本，无法完成处理</td></tr>
        <tr><td>506</td><td>Variant Also Negotiates</td><td>由《透明内容协商协议》（RFC 2295）扩展，代表服务器存在内部配置错误：被请求的协商变元资源被配置为在透明内容协商中使用自己，因此在一个协商处理中不是一个合适的重点</td></tr>
        <tr><td>507</td><td>Insufficient Storage</td><td>服务器无法存储完成请求所必须的内容。这个状况被认为是临时的。WebDAV (RFC 4918)</td></tr>
        <tr><td>509</td><td>Bandwidth Limit Exceeded</td><td>服务器达到带宽限制。这不是一个官方的状态码，但是仍被广泛使用</td></tr>
        <tr><td>510</td><td>Not Extended</td><td>获取资源所需要的策略并没有被满足。（RFC 2774）</td></tr>
        <tr><td>600</td><td>Unparseable Response Headers</td><td>源站没有返回响应头部，只返回实体内容</td></tr>
    </tbody>
</table>
