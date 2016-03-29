<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACTL现代通信实验室</title>
    <link href="/Locate/Home/Public/Index/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body {
            padding-bottom: 40px;
            color: #5a5a5a;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;

        }

        /* 轮播广告 */

        .carousel {
            height: 500px;
            margin-bottom: 60px;
        }

        .carousel .item {
            height: 500px;
            background-color: #000;
        }

        .carousel .item img {
            width: 100%;
        }

        .carousel-caption {
            z-index: 10;
        }

        .carousel-caption p {
            margin-bottom: 20px;
            font-size: 20px;
            line-height: 1.8;
        }

        /* 简介 */

        .summary {
            padding-right: 15px;
            padding-left: 15px;
        }

        .summary .col-md-4 {
            margin-bottom: 20px;
            text-align: center;
        }

        /* 特性 */

        .feature-divider {
            margin: 40px 0;
        }

        .feature {
            padding: 30px 0;
        }

        .feature-heading {
            font-size: 50px;
            color: #2a6496;
        }

        .feature-heading .text-muted {
            font-size: 28px;
        }

        /* 响应式布局 */

        @media (max-width: 768px) {

            .summary {
                padding-right: 3px;
                padding-left: 3px;
            }

            .carousel {

                height: 300px;
                margin-bottom: 30px;
            }

            .carousel .item {
                height: 300px;
            }

            .carousel img {
                min-height: 300px;
            }

            .carousel-caption p {
                font-size: 16px;
                line-height: 1.4;
            }

            .feature-heading {
                font-size: 34px;
            }

            .feature-heading .text-muted {
                font-size: 22px;
            }
        }

        @media (min-width: 992px) {
            .feature-heading {
                margin-top: 120px;
            }
        }
    </style>

</head>

<body>

<!-- 顶部导航 -->
<div class="section">
  <div class="container">
    <div class="row">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="menu-nav" aria-expanded="false">
        <div class="navbar-header">
         <a class="navbar-brand" href="#summary-container">ACTL现代通信实验室</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-gbtag" >
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-gbtag">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#summary-container">简述</a></li>
                <li><a href="#summary-container">CSS室内定位</a></li>
                <li><a href="#summary-container">TOA室内定位</a></li>
            </ul>
            <form class="navbar-form navbar-right" action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="username">
                    <input type="password" class="form-control" placeholder="password">
                </div>
                <button type="submit" class="btn btn-default">Login</button>

                <a href="http://localhost/Home/User/login">
                 <button type="button" class="btn btn-default">regist</button>
                </a>
            </form>
        </div>
    </div>
    </div>
  </div>
</div>


<!-- 广告轮播 -->
<div id="ad-carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#ad-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#ad-carousel" data-slide-to="1"></li>

    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="/Locate/Home/Public/Index/images/1.jpg" alt="1 slide">

            <div class="container">
                <div class="carousel-caption">
                    <h1>CSS</h1>

                    <p>在远距离处以CSS技术主，通过SDS-TWR测距算法实现测距，利用加权矫正三点定位算法实现多目标点跟踪室内定位系统。</p>

                    <p><a class="btn btn-lg btn-primary" href="http://www.google.cn/intl/zh-CN/chrome/browser/"
                          role="button" target="_blank">进入配置</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="/Locate/Home/Public/Index/images/2.jpg" alt="2 slide">

            <div class="container">
                <div class="carousel-caption">
                    <h1>TOA</h1>

                    <p>基于射频信号相位（POA）的测距方法是一种新型定位技术，通过在接收端对发射端依次产生的相同初相位不同频率的射频信号进行相位测量，计算出节点间的距离。</p>

                    <p><a class="btn btn-lg btn-primary" href="http://www.firefox.com.cn/download/" target="_blank"
                          role="button">进入配置</a></p>
                </div>
            </div>
        </div>

    </div>
    <a class="left carousel-control" href="#ad-carousel" data-slide="prev"><span
            class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#ad-carousel" data-slide="next"><span
            class="glyphicon glyphicon-chevron-right"></span></a>
</div>


<!-- 主要内容 -->
<div class="container summary">

    <!-- 简介 -->
    <div class="row" id="summary-container">
        <div class="col-md-4">
            <img class="img-circle" src="/Locate/Home/Public/Index/images/chrome-logo-small.jpg" alt="chrome">

            <h2>ACTL</h2>

            <p>实验室隶属华中师范大学电子与信息工程系</p>
            <p>拥有两个教学实验室:电子电工实验室</p>

        </div>
        <div class="col-md-4">
            <img class="img-circle" src="/Locate/Home/Public/Index/images/firefox-logo-small.jpg" alt="firefox">

            <h2>TOA</h2>

            <p>基于射频信号相位（POA）的测距方法是一种新型定位技术，通过在接收端对发射端依次产生的相同初相位不同频率的射频信号进行相位测量，计算出节点间的距离。</p>


        </div>
        <div class="col-md-4">
            <img class="img-circle" src="/Locate/Home/Public/Index/images/safari-logo-small.jpg" alt="safari">

             <h2>CSS</h2>

            <p>在远距离处以CSS技术主，通过SDS-TWR测距算法实现测距，利用加权矫正三点定位算法实现多目标点跟踪室内定位系统。并且引入改进的卡尔曼滤波算法减少测距数据抖动，增强系统定位精度。</p>


        </div>
    </div>

    <!-- 特性 -->

    <hr class="feature-divider">

    <ul class="nav nav-tabs" role="tablist" id="feature-tab">
        <li class="active"><a href="#tab-chrome" role="tab" data-toggle="tab">ACTL现代通信实验室</a></li>
        <li><a href="#tab-firefox" role="tab" data-toggle="tab">CSS室内定位</a></li>
        <li><a href="#tab-safari" role="tab" data-toggle="tab">TOA室内定位</a></li>
        <li><a href="#tab-opera" role="tab" data-toggle="tab">实验室环境监测</a></li>
        <li><a href="#tab-ie" role="tab" data-toggle="tab">地磁检测</a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="tab-chrome">
            <div class="row feature">
                <div class="col-md-7">

                    <h2 class="feature-heading">ACTL现代通信实验室
                    <span class="text-muted">研究性实验室</span></h2>

                    <p class="lead">ACTL现代通信实验室是一所拥有完备的实验设施和扎实的理论基础的综合性实验室。</p>
                </div>
                <div class="col-md-5">
                    <img class="feature-image img-responsive" src="/Locate/Home/Public/Index/images/chrome-logo.jpg"
                         alt="Chrome">
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab-firefox">
            <div class="row feature">
                <div class="col-md-5">
                    <img class="feature-image img-responsive" src="/Locate/Home/Public/Index/images/firefox-logo.jpg"
                         alt="Firefox">
                </div>
                <div class="col-md-7">

                    <h2 class="feature-heading">Mozilla Firefox <span class="text-muted">美丽的狐狸</span>
                    </h2>

                    <p class="lead">Mozilla Firefox，中文名通常称为“火狐”或“火狐浏览器”，是一个开源网页浏览器，
                        使用Gecko引擎（非ie内核），支持多种操作系统如Windows、Mac和linux。</p>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab-safari">
            <div class="row feature">
                <div class="col-md-7">

                    <h2 class="feature-heading">Safari <span class="text-muted">Mac用户首选</span></h2>

                    <p class="lead">Safari，是苹果计算机的最新操作系统Mac OS X中的浏览器，使用了KDE的KHTML作为浏览器的运算核心。
                        Safari在2003年1月7日首度发行测试版，并成为Mac OS X v10.3与之后的默认浏览器，也是iPhone与IPAD和iPod touch的指定浏览器。</p>
                </div>
                <div class="col-md-5">
                    <img class="feature-image img-responsive" src="/Locate/Home/Public/Index/images/safari-logo.jpg"
                         alt="Safari">
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab-opera">
            <div class="row feature">
                <div class="col-md-5">
                    <img class="feature-image img-responsive" src="/Locate/Home/Public/Index/images/opera-logo.jpg"
                         alt="Opera">
                </div>
                <div class="col-md-7">

                    <h2 class="feature-heading">Opera <span class="text-muted">小众但易用</span>
                    </h2>

                    <p class="lead">Opera浏览器，是一款挪威Opera Software ASA公司制作的支持多页面标签式浏览的网络浏览器。
                        是跨平台浏览器可以在Windows、Mac和Linux三个操作系统平台上运行。.</p>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab-ie">
            <div class="row feature">
                <div class="col-md-7">

                    <h2 class="feature-heading">IE <span class="text-muted">你懂的</span></h2>

                    <p class="lead">Internet Explorer，原称Microsoft Internet Explorer(6版本以前)和Windows Internet
                        Explorer(7，8，9，10版本)，
                        简称IE，是美国微软公司推出的一款网页浏览器。它采用的排版引擎(俗称内核)为Trident。</p>
                </div>
                <div class="col-md-5">
                    <img class="feature-image img-responsive" src="/Locate/Home/Public/Index/images/ie-logo.jpg"
                         alt="IE">
                </div>
            </div>
        </div>
    </div>

    <!-- 关于 -->
    <div class="modal fade" id="about-modal" tabindex="-1" role="dialog" aria-labelledby="modal-label"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
                    <h4 class="modal-title" id="modal-label">关于</h4>
                </div>
                <div class="modal-body">
                    <p>ACTL现代通信实验室是一所拥有完备的实验设施和扎实的理论基础的综合性实验室</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">了解了</button>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <p class="pull-right"><a href="#top">回到顶部</a></p>

        <p>&copy; ACTL.Lab </p>
    </footer>

</div>
    <script src="/Locate/Home/Public/Index/js/jquery-1.11.1.min.js"></script>
    <script src="/Locate/Home/Public/Index/js/bootstrap.min.js"></script>
</body>
</html>