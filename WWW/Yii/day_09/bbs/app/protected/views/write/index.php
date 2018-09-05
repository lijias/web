<script type="text/javascript" src="assets/kindeditor/kindeditor.js"></script>
<script type="text/javascript">
  KindEditor.ready(function(e){
	  e.create("[name=content]",{
		  width:"700px",
		  height:"300px"
      });
  });
</script>
<form name="frm" method="post" action="index.php?r=write/add">
<table border="1" align="center">
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



