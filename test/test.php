<!DOCTYPE>
<html>
<head></head>
<body>
<button type="button" id="t" onclick="all();">
test
</button>
<script type="text/javascript">
function all()
{
	alert(1);
}
document.getElementById('t').onclick = function(){
	all();
}

</script>
</body>
</html>