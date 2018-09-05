@extends('layouts')

@section('header')
	@parent
	大头鬼
@stop

@section('left')
	左手
@stop

@section('content')
	body
	
	<!-- 1.模板中PHP变量 -->
	<!-- <p>{{$name}}</p> -->
	
	<!-- 2.模板中调用PHP代码 -->
	<!-- <p>{{date('Y-m-d H:i:s',time())}}</p>
	<p>{{in_array($name,$arr)?'t':'f'}}</p>
	 -->
	<!-- 3.原样输出 -->
	<!-- <p>@{{$name}}</p> -->
	
	<!-- {{-- 4.模板中的注释 --}}
	
	{{-- 5.引入子视图 include --}} -->
	<!-- @include('student.common',['message'=>'我是你爹']) -->
	
	<!-- if -->
	<br>
	@if($name == '猪八戒')
		二师兄
	@elseif($name == '孙悟空')
		大师兄
	@else
		我他妈是谁
	@endif
	<br>
	@if(in_array($name,$arr))
		师徒四人
	@else
		妖魔鬼怪
	@endif
	
	<br>
	<!-- unless跟if相反 -->
	@unless($name != '如来')
		我是爸爸
	@endunless
	
	<!-- for -->
	<!-- @for($i=1;$i<=2;$i++)
		<p>{{$i}}</p>
	@endfor -->
	
	<!-- foreach -->
	<!-- @foreach($studentArr as $k)
	<p>{{$k->name}}</p>
	@endforeach -->
	<!-- @forelse($studentArr as $k)
		<p>{{$k->name}}</p>
	@empty
		<p>咩都无沃</p>
	@endforelse -->
	<p><a href="{{url('url')}}">点我啦我系url</a></p>
	<p><a href="{{action('StudentController@url')}}">点我啦我系action</a></p>
	<p><a href="{{route('u')}}">点我啦我系route</a></p>
@stop

@section('foot')
	脚
@stop