<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <script type="text/javascript" src="<?php echo base_url()?>/js/jquery.js"></script>
    <script type="text/javascript">


        var index = 1;
        $(function(){
            //为添加按钮，绑定点击事件的回调处理函数
            $("#id4").click(function(){
                //构建隔行换色
                var _trstart = "";
                if(index%2==0){
                    _trstart = "<tr style='background-color:red'>";
                }else{
                    _trstart = "<tr style='background-color:green'>";
                }


                //得到新增商品的信息
                var namev = $("#id1").val();
                var pricev = $("#id2").val();
                var countv= $("#id3").val();
                //创建jquery的tr行
                var $tr = _trstart + "<td>"+index+"</td>"
                    +"<td>"+namev+"</td>"
                    +"<td id='db"+index+"'>"+pricev+"</td>"
                    +"<td id='a'><input type='button' value='-' id='jian"+index+"'/>"
                    +"<div id='div1'>"+countv+"</div>"+
                    "<input type='button' value='+' id='jia"+index+"'/></td>"
                    +"<td>"+pricev*countv+"</td>"
                    +"<td><input type='button' value='删除' id='sc"+index+"'/></td></tr>";
                $("table").append($tr);//把新商品的tr添加到table中

                //计算总计,,用已有的总计加上新添加商品的小计
                var zj = parseFloat($("#spanlast").text())+pricev*countv;
                $("#spanlast").text(zj);
                //给减按钮添加点击事件监听
                $("#jian"+index).click(function(){
                    //alert($(this).attr("id"));
                    var oldcount = $(this).next().text();
                    //修改数量。数量减1
                    $(this).next().text(parseInt(oldcount)-1);//数量减1，设置到界面中
                    //修改小计,,先得到单价和之前的小计
                    var price = $(this).parent().prev().text();//得到单价
                    var xjObj = $(this).parent().next();//得到小计元素标签
                    var oldxj = parseInt(xjObj.text());//得到小计，转换为数字
                    xjObj.text(oldxj-parseInt(price));
                    //总价减去单价
                    var zj = $("#spanlast");
                    zj.text(parseInt(zj.text())-parseInt(price));

                });
                //给加按钮添加点击事件监听
                $("#jia"+index).click(function(){
                    //alert($(this).attr("id"));
                    var oldcount = $(this).prev().text();
                    //修改数量。数量加1
                    $(this).prev().text(parseInt(oldcount)+1);//数量减1，设置到界面中
                    //修改小计,,先得到单价和之前的小计
                    var price = $(this).parent().prev().text();//得到单价
                    var xjObj = $(this).parent().next();//得到小计元素标签
                    var oldxj = parseInt(xjObj.text());//得到小计，转换为数字
                    xjObj.text(oldxj+parseInt(price));
                    //总价减去单价
                    var zj = $("#spanlast");
                    zj.text(parseInt(zj.text())+parseInt(price));

                });

                $("#db"+index).dblclick(function(){
//      alert($(this).attr("id"));
                    //得到旧单价
                    var oldprice = $(this).text();
                    $(this).html("<input type='text' id='newprice"+index+"' value='"+oldprice+"' />");
                    //给单价修改输入框添加失去焦点事件的监听
                    $("#newprice"+index).blur(function(){
                        //设置新单价，修改小计和总计,,$(this)代表当前输入框对象
                        var newPrice = $(this).val();
                        var priceTd = $(this).parent();
                        priceTd.text(newPrice);//把新单价设置给td
                        var count = priceTd.next().children()[1].innerText;
                        //得到小计td
                        var xj = priceTd.next().next();
                        xj.text(count*newPrice);//修改小计
                        var zjObj = $("#spanlast");
                        var newzj = zjObj.text()-oldprice*count+newPrice*count;
                        zjObj.text(newzj);
                    });
                });

                //给删除按钮添加点击事件的回调函数
                $("#sc"+index).click(function(){
                    //alert("删除按钮的id:"+$(this).attr("id"));
//                    console.log($(this).parent());return false;
                    $(this).parent().parent().remove();
                    //重新计算总价

                });


                index++;//索引下移
            });
        });
    </script>
    <style type="text/css">
        table{
            text-align: center;

        }
        #div1{
            width: 100px;
            display: inline;
        }
    </style>
</head>
<body>
<center>
    <div>
        商品：<input type="text" id="id1"/><br />
        价格：<input type="number" id="id2"/><br />
        数量：<input type="number" id="id3"/><br />
        <br />
        <input type="button" id="id4" value="添加"/>

    </div>
    <div>
        <table width="600px" border="1">
            <tr style="background-color: grey;">
                <th>序号</th>
                <th>商品</th>
                <th>单价</th>
                <th>数量</th>
                <th>小计</th>
                <th>操作</th>
            </tr>


        </table>
        总计：<span style="width: 300px;background-color: red;" id="spanlast">0</span>
    </div>
</center>

</body>
</html>