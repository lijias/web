<html>
<head>
    <base href="<?php echo base_url() ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="mao.JPEG">
    <title>js</title>
</head>
<body>
<center>
    <br/><br/>
    <h2>js增删改 v1.0</h2>
    <br/><br/>
    <a href="javascript:showAddInput();">添加数据</a>
    <br/><br/>
    <div class="table">
        <table border="1" style="text-align:center" id="table">
            <tr>
                <th>用户名</th>
                <th>密码</th>
                <th>姓名</th>
                <th>邮箱</th>
                <th>电话</th>
                <th>qq</th>
                <th>身份证号</th>
                <th>操作</th>
            </tr>
            <tr>
                <td>A1</td>
                <td>123</td>
                <td>a</td>
                <td>a@qq.com</td>
                <td>123456789</td>
                <td>40040044</td>
                <td>270205197405213513</td>
                <td><a style="color:blue;cursor:pointer;" onclick="updateRow(this);">修改<a> <a
                                style="color:blue;cursor:pointer;" onclick="delRow(this);">删除</a></td>
            </tr>
            <tr>
                <td>A2</td>
                <td>456</td>
                <td>b</td>
                <td>b@qq.com</td>
                <td>987654321</td>
                <td>30030033</td>
                <td>470205197405213513</td>
                <td><a style="color:blue;cursor:pointer;" onclick="updateRow(this);">修改<a> <a
                                style="color:blue;cursor:pointer;" onclick="delRow(this);">删除</a></td>
            </tr>
            <tr>
                <td>A3</td>
                <td>789</td>
                <td>c</td>
                <td>c@qq.com</td>
                <td>800800820</td>
                <td>30030030</td>
                <td>570205197405213513</td>
                <td><a style="color:blue;cursor:pointer;" onclick="updateRow(this);">修改<a> <a
                                style="color:blue;cursor:pointer;" onclick="delRow(this);">删除</a></td>
            </tr>
        </table>
    </div>

    <div style="display:none" id="addinfo">
        <form>
            <br>
            用户名:（用户名只能用英文+数字或下划线）<br><input type="text" id="username"/><br><!--限制用户名只能用英文 下划线 或数字-->
            密码:（英文+数字或下划线，长度不小于6）<br><input type="text" id="password"/><br>
            姓名:（只能是汉字）<br><input type="text" id="name"/><br>
            邮箱:<br><input type="text" id="email"/><br>
            电话:<br><input type="text" id="phone"/><br>
            qq:<br><input type="text" id="qq"/><br>
            身份证:<br><input type="text" id="uid"/><br><br>
            <input type="button" value="提交" onclick="addInfo()" id="btn_add">
            <input type="button" value="提交" onclick="updateInfo()" style="display:none" id="btn_update">
            <input type="button" value="取消" onclick="hideAddInput()">
        </form>
    </div>
</center>
</body>
</html>
<script>
    var row = 0; //定义全局行数用于修改
    var reg_email = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/; //用于判断邮箱格式
    var reg_name = /^((\w*\d\w*[a-z]\w*)|(\w*[a-z]\w*\d\w*))$/i; //用于判断用户名格式
    var reg_chinese = /^[\u0391-\uFFE5]+$/; //用于判断姓名格式
    var reg_pass = /^((\w*\d\w*[a-z]\w*)|(\w*[a-z]\w*\d\w*))$/i;//用于判断密码格式
    //----获取行号-----
    function getRow(r) {
        return  r.parentNode.parentNode.rowIndex;
    }
    //----获取行号-----

    //----删除某一行-----
    function delRow(r) {
        document.getElementById('table').deleteRow(getRow(r));
    }
    //----删除某一行-----

    //----清除添加信息框的内容-----
    function cleanAddInput() {
        document.getElementById('username').value = '';
        document.getElementById('password').value = '';
        document.getElementById('name').value = '';
        document.getElementById('email').value = '';
        document.getElementById('phone').value = '';
        document.getElementById('qq').value = '';
        document.getElementById('uid').value = '';
    }
    //----清除添加信息框的内容-----

    //----显示添加信息框-----
    function showAddInput() {
        document.getElementById('addinfo').style = "display:block-inline";
        document.getElementById('btn_add').style = "display:block-inline";
        document.getElementById('btn_update').style = "display:none";
        cleanAddInput();
    }
    //----显示添加信息框-----

    //----隐藏添加信息框-----
    function hideAddInput() {
        document.getElementById('addinfo').style = "display:none";

    }
    //----隐藏添加信息框-----

    //----判断输入框的信息是否符合要求-----
    function judge() {
        //根据id获取表单信息
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var qq = document.getElementById('qq').value;
        var uid = document.getElementById('uid').value;
        var judge = true; //用于判断表单信息是否符合
        if (username == '') {
            judge = false;
            alert('请输入用户名');
        } else if (password == '') {
            judge = false;
            alert('请输入密码');
        } else if (name == '') {
            judge = false;
            alert('请输入姓名');
        } else if (email == '') {
            judge = false;
            alert('请输入邮箱');
        } else if (phone == '') {
            judge = false;
            alert('请输入电话');
        } else if (qq == '') {
            judge = false;
            alert('请输入qq');
        } else if (uid == '') {
            judge = false;
            alert('请输入身份证');
        } else if (uid.length != 18) {
            judge = false;
            alert('身份证应为18位，请正确填写');
        } else if (qq.length <= 5 && qq.length >= 13) {
            judge = false;
            alert('请正确输入qq号码');
        } else if (phone.length < 3 && qq.length > 12) {
            judge = false;
            alert('请正确输入电话');
        } else if (!reg_email.test(email)) {
            judge = false;
            alert('邮箱格式不正确');
        } else if (!reg_name.test(username)) {
            judge = false;
            alert('用户名格式不正确');
        } else if (!reg_chinese.test(name)) {
            judge = false;
            alert('姓名格式不正确');
        } else if ((!reg_pass.test(password)) || password.length < 6) {
            judge = false;
            alert('密码格式不正确');
        }

        return judge;
    }
    //----判断输入框的信息是否符合要求-----

    //----新增信息的插入方法-----
    function insertInfo() {
        //根据id获取表单信息
        var arr = new Array();
        arr[0] = document.getElementById('username').value;
        arr[1] = document.getElementById('password').value;
        arr[2] = document.getElementById('name').value;
        arr[3] = document.getElementById('email').value;
        arr[4] = document.getElementById('phone').value;
        arr[5] = document.getElementById('qq').value;
        arr[6] = document.getElementById('uid').value;
        arr[7] = "<a style='text-align:center;color:blue;cursor:pointer;' onclick='updateRow(this);'>修改</a> <a style='text-align:center;color:blue;cursor:pointer;' onclick='delRow(this);'>删除</a>";
        var x = document.getElementById('table').insertRow(1); //获取第一行对象

        for (var i = 0; i < arr.length; i++) {
            x.insertCell(i).innerHTML = arr[i]; //用循环把每个数据插入第一行的每一列
        }

    }
    //----新增信息的插入方法-----

    //----新增信息-----
    function addInfo() {

        if (judge() == true) {
            alert('添加成功');
            insertInfo(); //执行插入
            hideAddInput(); //隐藏添加信息框

        } else {
            alert('添加失败');
        }
    }
    //----新增信息-----


    //----根据行号修改信息-----
    function updateRow(r) {
        row = getRow(r); //把该行号赋值给全局变量
        showAddInput(); //显示修改表单
        //提交按钮替换
        document.getElementById('btn_add').style = "display:none";
        document.getElementById('btn_update').style = "display:block-inline";
        insertInputFromQuery(queryInfoByRow(row));

    }
    //----根据行号修改信息-----


    //----根据行号查信息----
    function queryInfoByRow(r) {

        var arr = new Array();
        for (var m = 0; m < 7; m++) {
            arr[m] = document.getElementById('table').rows[row].cells[m].innerText;
        }
        return arr; //返回该行数据

    }
    //----根据行号查信息----

    //----把查询到的信息放入修改的表单里----
    function insertInputFromQuery(arr) {
        document.getElementById('username').value = arr[0];
        document.getElementById('password').value = arr[1];
        document.getElementById('name').value = arr[2];
        document.getElementById('email').value = arr[3];
        document.getElementById('phone').value = arr[4];
        document.getElementById('qq').value = arr[5];
        document.getElementById('uid').value = arr[6];

    }
    //----把查询到的信息放入修改的表单里----


    function updateInfo() {
        if (judge() == true) {
            alert('修改成功');
            document.getElementById('table').deleteRow(row);//删除原来那行
            insertInfo(); //插入修改后的值
            hideAddInput(); //隐藏添加模块
        } else {
            alert('修改失败');
            hideAddInput();
        }
    }
</script>