<html>
  <head>
    <title>发表文章</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <script type="text/javascript" src="kindeditor/kindeditor.js"></script>
    <script type="text/javascript">
      var editor;//编辑器对象
      //加载编辑器
      KindEditor.ready(function(e){
          //创建编辑器
          editor = e.create("[name=content]",{
              "width":"700px",
              "height":"200px",
              "items":["source","undo","redo","|","bold","italic","underline"]
          });
          //设置编辑器里的内容
          editor.html("请留下留言内容...");
      });
      //表单验证
      function checkAdd()
      {
          var a = editor.html();
          alert(a);
 		
          if(document.frm.title.value == "")
          {
              alert("请输入标题内容！");
              document.frm.title.focus();
              return false;
          }else if(editor.html() == " ")
          {
             alert("请输入内容！");
              editor.focus();
              return false;
          } 
      }
    </script>
  </head>
  <body>
    <form name="frm" method="post" action="check.php" onsubmit="return checkAdd()">
    <table border="1" align="center" width="700">
      <tr>
        <td>标题：</td>
        <td><input type="text" name="title" size="50"></td>
      </tr>
      <tr>
        <td colspan="2"><textarea name="content"></textarea></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="发表文章">
          &nbsp;&nbsp;&nbsp;
          <input type="reset" value="全部重写">
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>





