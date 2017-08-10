/**
 * Created by Administrator on 2017/2/13.
 */
$(function () {
    tabActive();
    // 3d图片轮播
    li_positon();

});
function tabActive() {
    $(".tab_box ul li a").on("click", function () {
        act($(this));
        $(this).children("i").addClass("active");
        $(this).children("p").addClass("act");
    });
    $(".tab_box ul li a").hover(function () {
        //样式改变1
        act($(this));
        $(this).children("i").addClass("active");
        $(this).children("p").addClass("act");
        //    显示选项卡

    });
    function act($this) {
        $(".tab_box ul li a i").removeClass("active");
        $(".tab_box ul li a p").removeClass("act");
    }
}

/*------------------------------*/
function li_positon() {
    var go = true;

    //获取json,相对整个文档的路径,因为走了网络请求
    var data=get_position_data();
        move_li(data);
        move(data);

    //轮播的点击事件
    function move(data) {
        var timer =null;
        auto_loop();
        //显示前一个，向左走，第一个移除，添加到最后一个
        $(".tab_box .tab_content .prev").on("click", function () {
            clearInterval(timer);
            if (go) {
                go = false;
                data.unshift(data.pop());
                move_li(data);
            }
            auto_loop();
        });
        //显示后一个，向右走，移除最后一个，添加到第一个
        $(".tab_box .tab_content .next").on("click", function () {
            clearInterval(timer);
            if (go) {
                next();
            }
            auto_loop()
        });
        function next() {
            if (go) {
                go = false;
                data.push(data.shift());
                move_li(data);
            }
        }
        //设置2秒后轮播
      function auto_loop(){
            timer=setInterval(function () {
                next();
            }, 3000);
        }

    }

    //每个li的位置布局
    function move_li(data) {
    $(".tab_box .moving_box li").each(function (i, item) {
        var item = $(item);
        item.animate({
            "opacity": data[i].opacity,
            "left": data[i].left + "px",
            "top": data[i].top + "px",
            "zIndex": data[i].z,
            "width": data[i].width + "px"
        }, function () {
            go = true

        });

    });

    }
}
function get_position_data() {
    var data=[
        {
            "top":47,
            "left":0,
            "width":215,
            "opacity":0.8,
            "z":2
        },
        {
            "top":24,
            "left":180,
            "width":242,
            "opacity":0.9,
            "z":3
        },
        {
            "top":0,
            "left":390,
            "width":269,
            "opacity":1,
            "z":4
        },
        {
            "top":24,
            "left":650,
            "width":242,
            "opacity":0.9,
            "z":3
        },
        {
            "top":47,
            "left":850,
            "width":215,
            "opacity":0.8,
            "z":2
        }

    ];
    return data;

}


