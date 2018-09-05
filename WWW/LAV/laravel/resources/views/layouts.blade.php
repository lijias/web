<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<style type="text/css">
	#header
	{
		align: center;
		width:1000px;
		height:150px;
		margin:0 auto;
		background: #f5f5f5;
		border: 1px solid #dd;
	}
#left
	{
		float:left;
		width:150px;
		height:300px;
		margin:15px 20px 15px 170px;
		background: #f5f5f5;
	}
#mean
	{
		float:left;
		width:835px;
		height:300px;
		margin:15px 0 15px; 
		background: #f5f5f5;
		
	}
#foot
	{
		clear:both;
		margin:0 0 0 170px;
		width:1000px;
		height:150px;
		background: #f5f5f5;
		
	}	
</style>
</head>
<body>
	<div id='header'>
	@section('header')
	头
	@show
	</div>
	<div id='left'>
	@section('left')
	左
	@show
	</div>
	<div id='mean'>
	@yield('content','主要内容')
	</div>
	<div id='foot'>
	@section('foot')
	尾
	@show
	</div>
</body>
</html>