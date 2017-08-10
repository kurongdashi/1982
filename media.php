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
    <link rel="stylesheet" href="css/media.css">
</head>
<body class="clear_x">

<!--顶部固定导航条-->
<div class="header">
     <?php include 'top.php';?>
</div>
<!--通栏广告-->
<div class="img_box">
    <img src="images/bg3.jpg" alt="">
</div>
<!--流程详情-->
<div class="flow_content">
    <div class="container clear">
        <div class="item">
            <div class="icon bg_position1"></div>
            <div class="desc_box">
                <p class="tit">丰富的广告资源</p>
                <p class="txt">1982网络与海量优质广告主合作，并严格把控广告质量，确保协调一致的用户体验。众多的广告主及高质量的广告形式，保证了广告的点击率，提升站长的收入。</p>
            </div>
        </div>
        <div class="item">
            <div class="icon bg_position2"></div>
            <div class="desc_box">
                <p class="tit">详细的数据统计</p>
                <p class="txt">1982网络的智能统计分析系统，为站长提供透明、实时的流量数据和收入数据，站长可随时监测。诚信为本，做站长最值得信赖的移动广告联盟。</p>
            </div>
        </div>
        <div class="item">
            <div class="icon bg_position3"></div>
            <div class="desc_box">
                <p class="tit">强大的技术力量</p>
                <p class="txt">1982网络拥有业内领先的技术团队，对广告平台系统拥有独特的技术优势。强大的技术力量保证了系统的正常运行，同时能给站长的日常技术问题提供专业的解决方案。</p>
            </div>
        </div>
        <div class="item">
            <div class="icon bg_position4"></div>
            <div class="desc_box">
                <p class="tit">贴心周到的服务</p>
                <p class="txt">1982网络拥有专业的运营客服团队，对新提交的网站进行快速审核。对于站长广告费用提现审核及时响应快速到帐。同时，如果站长有什么建议或意见我们也会及时跟进反馈。</p>
            </div>
        </div>
    </div>
</div>
<div class="footer_box">
      <!--我们自己-->
       <?php include 'footer.php';?>
</div>

</body>
<script src="libs/jquery/jquery.min.js"></script>
<script src="js/base.js"></script>
<script>
   (function(){
        //设置导航条active状态
        $(".nav li:eq(2) a").addClass("active");
   }());
</script>
</html>