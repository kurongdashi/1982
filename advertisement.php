<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>1982传媒-移动广告营销平台</title>
    <meta name="keywords" content="1982传媒，手机广告，广告app推广，移动营销">
    <meta name="description" content="智能化的移动广告交易平台，通过与手机应用APP、DSP平台以及广告交易平台合作，能使广告主的投放效果得到显著提升、开发者降低广告管理成本并大幅提升广告收入">

    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/advertise.css">
</head>
<body class="clear_x">
<!--顶部固定导航条-->
<div class="header">
    <?php include 'top.php';?>
</div>
<!--通栏广告-->
<div class="img_box">
    <img src="images/bg2.jpg" alt="">
</div>
<!--流程详情-->
<div class="flow_content">
    <div class="container">
        <div class="tab_box">
            <ul>
                <li>
                    <a href="javascript:;">
                        <img src="images/adv_t1.jpg" alt="">
                        <p class="name act">一站式投放</p>
                        <p>移动全渠道覆盖</p>
                        <p>一站式解决所有问题</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <img src="images/adv_t2.jpg" alt="">
                        <p class="name">多种结算模式</p>
                        <p>个性定制品效套餐</p>
                        <p> 单渠道多种付费模式</p>

                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <img src="images/adv_t3.jpg" alt="">
                        <p class="name">资深专业团队</p>
                        <p>BAT资深专业团队</p>
                        <p> 大客户专项服务机制</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <img src="images/adv_t4.jpg" alt="">
                        <p class="name">超强执行力</p>
                        <p>效果第一，使命必达</p>
                        <p>只做不容易做的事</p>

                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <img src="images/adv_t5.jpg" alt="">
                        <p class="name">预算灵活可控 </p>
                        <p>全网监控，效果付费</p>
                        <p>投放透明，实时可调</p>
                    </a>
                </li>
            </ul>
            <div class="tab_content">
                <div class="moving_box">
                    <p class="prev"></p>
                    <p class="next"></p>
                    <ul>
                        <li>
                            <img src="images/adv1.jpg" alt="">
                            <div class="desc">首页大图</div>
                        </li>
                        <li>
                            <img src="images/adv2.jpg" alt="">
                            <div class="desc">开屏广告</div>
                        </li>
                        <li>
                            <img src="images/adv3.jpg" alt="">
                            <div class="desc">苹果榜单</div>
                        </li>
                        <li>
                            <img src="images/adv4.jpg" alt="">
                            <div class="desc">分类排名</div>
                        </li>
                        <li>
                            <img src="images/adv5.jpg" alt="">
                            <div class="desc">个性推荐</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--我们自己-->
<div class='footer_box'>
<?php include 'footer.php';?>
</div>
</body>
<script src="libs/jquery/jquery.min.js"></script>
<script src="js/base.js"></script>
<script src="js/advertise.js"></script>
<script>
   (function(){
        //设置导航条active状态
        $(".nav li:eq(1) a").addClass("active");
   }());
</script>
</html>