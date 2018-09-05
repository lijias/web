<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script>
    <style type="text/css">
        .toolTip {
            background: rgba(0, 0, 0, 0.2);
            height: 100%;
            width: 100%;
            position: fixed;
            top: 0px;
            display: none;
            z-index: 9999;
        }

        .toolTip_box {
            font-size: 15px;
            border: 1px solid #999;
            position: fixed;
            top: 50%;
            left: 50%;
            padding: 20px;
            background: #fff;
        }

        .toolTip_box span {
            display: block;
        }

        .ensure_but {
            text-align: center;
        }

        .toolTip_box p {
            padding-left: 5px;
        }
    </style>
    <meta charset="utf-8">
    <title>菜鸟教程(runoob.com)</title>
</head>
<body>
<?php
$date = '2017-9-18';
$day = ($date . ' ' . date("H:i:s", time()));
echo strtotime($day);
echo date("Y-m-d H:i:s", 1505709406);
?>
<script>
    function changeImage() {
        element = document.getElementById('myimage');
        console.log(element);
        console.log(document.getElementById('tis').value);
        if (document.getElementById('tis').value == 1) {
            element.src = "<?php echo base_url('/uploads/pic_bulbon.gif');?>";
            document.getElementById('tis').value = 0;
        }
        else {
            element.src = "<?php echo base_url('/uploads/pic_bulboff.gif');?>";
            document.getElementById('tis').value = 1;
        }
    }
    function changeFont() {
        var font = document.getElementById('font');
        if (font.style.color == '') {
            font.style.color = 'red';
            font.innerHTML = '讲紧你啊傻仔！！';
        }
        else {
            font.style.color = '';
            font.innerHTML = '点击灯泡就可以打开或关闭这盏灯';
        }
    }


</script>
<img id="myimage" onclick="changeImage()" style="width: 100px;"
     src="<?php echo base_url('/uploads/pic_bulboff.gif'); ?>">
<p id='font'>点击灯泡就可以打开或关闭这盏灯</p>
<input type='hidden' id='tis' value=1>
<button onclick="changeFont()">点击字体变色</button>
<br>
<script>
    document.write('‘document.write’');
</script>
<br>
<span style="font-size:24px;">tagsValues.length = 0;</span>
<img style="width: 100px;" class="errorimg" title="图片报错，换成默认图片" alt="图片报错，换成默认图片" src="http://localhost/pro2/ci/1.JPEG"
     onerror="nojpg();"
/>
<script>
    function nojpg() {
        var img = document.getElementsByClassName("errorimg");
        img[0].src = "http://localhost/pro2/ci/uploads/logo.PNG";
    }
</script>
<h3>js简易计算器</h3>
<table border=1 cellspacing=0>
    <tr>
        <td colspan="4">结果：<input type="text" id='end' style='width:115px;' readonly></td>
    </tr>
    <tr>
        <td colspan="4"><input type="text" id='first' style='width:160px;'></td>
    </tr>
    <tr>
        <td colspan="4"><input type="text" id='twice' style='width:160px;'></td>
    </tr>
    <tr>
        <td>
            <button onclick='jia()'>+</button>
        </td>
        <td>
            <button onclick='jian()'>-</button>
        </td>
        <td>
            <button onclick='cheng()'>*</button>
        </td>
        <td>
            <button onclick='chu()'>/</button>
        </td>
    </tr>
</table>
<input type="checkbox" id='typeall' onclick="alltype()">全选<br/>
<input type="checkbox" name='type' value=1>1<br/>
<input type="checkbox" name='type' value=2>2<br/>
<input type="checkbox" name='type' value=3>3<br/>
<input type="checkbox" name='type' value=4>4<br/>
<img id="target" src="http://localhost/pro2/ci/uploads/logo.PNG" width="100px" onclick="clos_but()" class="clos_but"
     alt="">
<div class="toolTip">
    <div class="toolTip_box">
        <img id="target" src="http://localhost/pro2/ci/uploads/logo.PNG" alt="">
    </div>
</div>
<script>
    function clos_but(id) {
        $(".toolTip").css("display", "block");
        var width = $(".toolTip_box").width();
        var height = $(".toolTip_box").height();
        $(".toolTip_box").css("margin-left", -width / 2);
        $(".toolTip_box").css("margin-top", -height / 2);
    }
    //         window.onload = function(){

    //             var current = 0;

    //             document.getElementById('target').onclick = function(){

    //                 current = (current+90)%360;

    //                 this.style.transform = 'rotate('+current+'deg)';
    //             }
    //         };
</script>
<script>
    function alltype() {
        var type = document.getElementsByName('type');
        if (document.getElementById('typeall').checked) {
            for (var i = 0; i < type.length; i++) {
                type[i].checked = "checked";
            }
        }
        else {
            for (var i = 0; i < type.length; i++) {
                type[i].checked = "";
            }
        }
    }
    function jia() {
        var first = document.getElementById('first').value;
        var twice = document.getElementById('twice').value;
        if (first && twice) {
            document.getElementById('end').value = Number(first) + Number(twice);
        }
    }
    function jian() {
        var first = document.getElementById('first').value;
        var twice = document.getElementById('twice').value;
        if (first && twice) {
            document.getElementById('end').value = Number(first) - Number(twice);
        }
    }
    function cheng() {
        var first = document.getElementById('first').value;
        var twice = document.getElementById('twice').value;
        if (first && twice) {
            document.getElementById('end').value = Number(first) * Number(twice);
        }
    }
    function chu() {
        var first = document.getElementById('first').value;
        var twice = document.getElementById('twice').value;
        if (first && twice) {
            document.getElementById('end').value = Number(first) / Number(twice);
        }
    }
</script>
<hr>
<hr>
<hr>
<hr>
<hr>
<?php for ($i = 0; $i < 3; $i++) { ?>
    <button>+</button> <?php echo $i; ?><input type="checkbox"><br>
<?php } ?>
</body>
</html>
<?php

interface iTemplate
{
    function setVariable($name, $var);

    function getHtml($template);
}

class Template implements iTemplate
{
    private $vars = array();

    function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    function getHtml($template)
    {

        foreach ($this->vars as $name => $value) {
//             print_r($this->vars);
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}

$name = 'baidu';
$var = 'google';
$Template = new Template();
$template = $Template->setVariable($name, $var);
echo $Template->getHtml('www.baidu.com');
?>
