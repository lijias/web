<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>jquery li循环轮播切换</title>
    <script type="text/javascript" src="<?php echo base_url() ?>/js/jquery.js"></script>
    <style>
        #scroll {
            width: 100%;
            height: 180px;
            background-color: white;
            position: relative;
            border-bottom: 1px solid gray;
        }

        #scroll ul {
            height: 180px;
            list-style: none;
        }

        #scroll ul li {
            width: 100%;
            height: 180px;
            margin: 0px;
            padding: 0px;
            display: none;
        }

        .subl {
            position: absolute;
            bottom: 20px;
            left: 40%;
            width: 80px;
            height: 20px;
            line-height: 20px;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .subr {
            position: absolute;
            bottom: 20px;
            right: 40%;
            width: 80px;
            height: 20px;
            line-height: 20px;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .subr:hover {
            background: yellow;
            border-radius: 10px;
        }

        .subl:hover {
            background: yellow;
            border-radius: 10px;
        }
    </style>
</head>

<body>
<div id="scroll">

    <p class="subl">上一张
    <p/>

    <p class="subr">下一张
    <p/>

    <ul>

        <li style="background:red;display:block;"></li>

        <li style="background:green;"></li>

        <li style="background:gray;"></li>

        <li style="background:orange;"></li>

    </ul>

</div>
<script type="text/javascript">
    $(document).ready(function () {

        $(".jhtab ul").delegate("li", "click", function () {
            var index = $(this).index();
            if (index != 0) {
                var slideLiWidth = $(".jhtab ul").children().outerWidth(true) * index;
                $(".jhtab ul").animate({marginLeft: "-" + slideLiWidth + "px"}, function () {
                    $(".jhtab ul li.active").prevAll().appendTo($(".jhtab ul"));
                    $(".jhtab ul").css("margin-left", 0);
                    console.log(slideLiWidth);
                });
            }
        })

    })
</script>
<script type="text/javascript">

    /*轮播*/

    $(function () {

        var i = 0;

        var len = $("#scroll ul li").length - 1;

        $(".subl").click(function () {
            if (i == len) {
                i = -1;
            }
            i++;
            $("#scroll ul li").eq(i).fadeIn().siblings().hide();
        });

//到这里分开！上面的是上一张点击的效果代码，下面的是下一张点击的效果代码．

        $(".subr").click(function () {//获取类名的点击事件．
            if (i == 0) {
                i = len + 1;
            }
            i--;
            $("#scroll ul li").eq(i).fadeIn().siblings().hide();

        });

    });

    /*轮播*/

</script>
</body>
</html>
