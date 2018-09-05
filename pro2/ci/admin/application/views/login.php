<!DOCTYPE html>
<html>
<style>
    #wrap {
        position: fixed;
        top: 50%;
        left: 0;
        width: 100%;
    }

    #cen {
        position: relative;
        height: 200px;
        top: -100px;
        width: 500px;
        margin: 0px auto;
    }
</style>
<script language="javascript" type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script>
<head>
    <title>登录页</title>
</head>
<body>
<script>
    $(function () {
        $('#sub').click(function () {
            if ($('#username').val() == '') {
                $('.username').show();
                $('#usertis').html('用户名不能为空');
                return false;
            }
            if ($('#password').val() == '') {
                $('.password').show();
                $('#passtis').html('密码不能为空');
                return false;
            }
            var form = new FormData(document.getElementById('form'));
            $.ajax({
                url: '<?php echo site_url() ?>/login/sign_in',
                type: 'post',
                data: form,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function (data) {
                    if (data.code == 'success') {
                        window.location = '<?php echo site_url() ?>/index';
                    } else if (data.code == 'error') {
                        alert(data.message);
                    }
                }
            });
        });

        $('#username').focus(function () {
            $('.username').hide();
        });

        $('#password').focus(function () {
            $('.password').hide();
        });
    });
</script>
<div id="wrap">
    <div id="cen">
        <table>
            <form method="post" action="<?php echo site_url() ?>/login/sign_in" id="form" name="form">
                <tr>
                    <div class="int">
                        <td><span><label for="username">用户名:</label></span></td>
                        <!-- 为每个需要的元素添加required -->
                        <td>
                            <input type="text" id="username" name="username"/>
                        </td>
                        <td style="display: none;" class="username">
                            <span style="color: red;" id="usertis"></span>
                        </td>
                    </div>
                </tr>
                <tr>
                    <div class="int">
                        <td><span><label for="password">密 码:</label></span></td>
                        <td>
                            <input type="password" id="password" name="password"/>
                        </td>
                        <td style="display: none;" class="password">
                            <span style="color: red;" id="passtis"></span>
                        </td>
                    </div>
                </tr>
            </form>
            <tr>
                <div class="sub">
                    <td colspan="2" align="right">
                        <button id="sub">提交</button>
                    </td>
                </div>
            </tr>
        </table>
    </div>
</div>
</body>
</html>