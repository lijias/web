<script src="<?php echo base_url();?>js/jquery.js"></script>
<script type="text/javascript">

$(function(){
        //如果是必填的，则加红星标识.
        $("form :input.required").each(function(){
            var $required = $("<strong class='high'> *</strong>"); //创建元素
            $(this).parent().append($required); //然后将它追加到文档中
        });
         //文本框失去焦点后
        $('form :input').blur(function(){
             var $parent = $(this).parent();
             $parent.find(".formtips").remove();
             //验证用户名
             if( $(this).is('#username') ){
                    if( this.value=="" || this.value.length < 6 ){
                        var errorMsg = '请输入至少6位的用户名.';
                        $parent.append('<span class="formtips onError">'+errorMsg+'</span>');
                    }else{
                        var okMsg = '输入正确.';
                        $parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
                    }
             }
             //验证邮件
             if( $(this).is('#email') ){
                if( this.value=="" || ( this.value!="" && !/.+@.+\.[a-zA-Z]{2,4}$/.test(this.value) ) ){
                      var errorMsg = '请输入正确的E-Mail地址.';
                      $parent.append('<span class="formtips onError">'+errorMsg+'</span>');
                }else{
                      var okMsg = '输入正确.';
                      $parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
                }
             }
        }).keyup(function(){
           $(this).triggerHandler("blur");
        }).focus(function(){
             $(this).triggerHandler("blur");
        });//end blur

        
        //提交，最终验证。
         $('#send').click(function(){
                $("form :input.required").trigger('blur');
                var numError = $('form .onError').length;
                if(numError){
                    return false;
                } 
                alert("注册成功,密码已发到你的邮箱,请查收.");
         });

        //重置
         $('#res').click(function(){
                $(".formtips").remove(); 
         });
})

</script>
<body>

<form method="post" action="<?php echo site_url()?>/blog/text">
    <div class="int">
        <label for="username">用户名:</label>
        <!-- 为每个需要的元素添加required -->
        <input type="text" id="username" class="required" />
    </div>
    <div class="int">
        <label for="email">邮箱:</label>
        <input type="text" id="email" class="required" />
    </div>
    <div class="int">
        <label for="personinfo">个人资料:</label>
        <input type="text" id="personinfo" />
    </div>
    <div class="sub">
        <input type="submit" value="提交" id="send"/><input type="reset" id="res"/>
    </div>   
</form>

</body>