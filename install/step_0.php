<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $html_title; ?></title>
    <link href="css/install.css" rel="stylesheet" type="text/css">
    <link href="css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
</head>
<body>
<?php echo $html_header; ?>
<div class="main">
    <div class="text-box" id="text-box">
        <div class="license">
            <h1 align="center">
                V免签 —— 个人开发者收款解决方案
            </h1>
            <div>
                <hr/>
            </div>
            <p>
                <span style="font-size:16px;">V免签(PHP - Modified By Dreamn) 是基于Speedphp + mysql 实现的一套免签支付程序，主要包含以下特色：</span>
            </p>
            <blockquote>
                <div align="left">
                    <ol>
                        <li>
                            <span style="font-size:16px;">收款即时到账，无需进入第三方账户，收款更安全</span>
                        </li>
                        <li>
                            <span style="font-size:16px;">提供示例代码简单接入</span>
                        </li>
                        <li>
                            <span style="font-size:16px;">超简单Api使用，提供统一Api实现收款回调</span>
                        </li>
                        <li>
                            <span style="font-size:16px;">免费、开源，无后门风险</span>
                        </li>
                        <li>
                            <span style="font-size:16px;">支持监听店员收款信息，可使用支付宝微信小号/模拟器挂机，方便IOS用户</span>
                        </li>
                        <li>
                            <span style="font-size:16px;">免root，免xp框架，不修改支付宝/微信客户端，防封更安全</span>
                        </li>
                        <li>
                            <span style="font-size:16px;">如果您不熟悉PHP环境的配置，您可以使用Java版本的服务端（ </span><a
                                    href="https://github.com/szvone/Vmq"><span style="font-size:16px;">https://github.com/szvone/Vmq</span></a><span
                                    style="font-size:16px;"> ）</span>
                        </li>
                        <li>
                            <span style="font-size:16px;">监控端的开源地址位于： </span><a href="https://github.com/szvone/VmqApk"><span
                                        style="font-size:16px;">https://github.com/szvone/VmqApk</span></a>
                        </li>
                        <li>
                            <span style="font-size:16px;">V免签的运行环境为PHP版本&gt;=5.6。</span>
                        </li>
                        <li>
                            <span style="font-size:16px;">V免签仅供个人开发者调试测试使用，请勿用于非法用途，商用请您申请官方商户接口</span>
                        </li>
                        <li>
                            <span style="font-size:16px;">v免签开发交流群：992029073</span>
                        </li>
                        <li>
                            <span style="font-size:16px;">bug反馈请建立issues</span>
                        </li>
                    </ol>
                </div>
            </blockquote>
            <p>
                <br/>
            </p>
            <hr/>
            <p>
                <br/>
            </p>
            <p>
                <br/>
            </p>
            <p align="center">
                <span style="font-size:16px;">V免签遵循 MIT License 开源协议发布，并提供免费使用，请勿用于非法用途。</span>
            </p>
            <p align="center">
                <span style="font-size:16px;">版权所有Copyright &copy; 2019 by vone (</span><a href="http://szvone.cn"><span
                            style="font-size:16px;">http://szvone.cn</span></a><span style="font-size:16px;">)</span>
            </p>
            <p align="center">
                <span style="font-size:16px;">All rights reserved。</span>
            </p>
            <p>
                <br/>
            </p>
        </div>
    </div>
    <div class="btn-box"><a href="index.php?step=1" class="btn btn-primary">同意协议进入安装</a><a
                href="javascript:window.close()" class="btn">不同意</a></div>
</div>
<?php echo $html_footer; ?>
<script type="text/javascript">
    $(document).ready(function () {
        //自定义滚定条
        $('#text-box').perfectScrollbar();
    });
</script>
</body>
</html>
