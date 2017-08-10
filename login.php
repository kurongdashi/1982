<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>一九八二传媒-移动广告营销平台</title>
    <meta name="keywords" content="一九八二传媒，手机广告，广告app推广，移动营销">
    <meta name="description" content="智能化的移动广告交易平台，通过与手机应用APP、DSP平台以及广告交易平台合作，能使广告主的投放效果得到显著提升、开发者降低广告管理成本并大幅提升广告收入">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<!--顶部固定导航条-->
     <?php include 'top.php';?>
<div class="reg_content">
    <div class="reg_box">
        <h3><span class="txtOrange">一九八二用户登录</span> <span class="float_right txt">如有账户疑问请联系客服专员一九八二用户登录</span></h3>
        <!--登录提交到某个页面-->
        <form action="">
        <div class="form_row">
                <div class="form_name">用户名： </div>
                <div class="form_cont">
                    <input type="text" class="ipt w250" name="email" autocomplete="off">
                </div>
            </div>
        <div class="form_row">
                <div class="form_name">密码： </div>
                <div class="form_cont">
                    <input type="password" class="ipt w250" name="password" autocomplete="off">
                </div>

            </div>
        <div class="form_row btn_row">
                <div class="form_name">&nbsp;</div>
                <div class="form_cont">
                    <input type="button" value="登录" class="reg_btn">
                </div>
            </div>
        </form>
    </div>
</div>

<!--底部脚注-->
</body>
<script src="libs/jquery/jquery.js"></script>
<script>
   (function(){
        //设置导航条active状态
        $(".nav li:eq(4) a").addClass("active");
   }());
</script>
</html>