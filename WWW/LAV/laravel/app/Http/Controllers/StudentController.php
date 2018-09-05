<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Student;
class StudentController extends Controller{
	public function test()
	{
		/*新增
		 * $b=DB::insert('insert into student(name,age) value (?,?)'
				,['小鸡鸡',18]);
		var_dump($b);*/
		
		/*删除
		 * $num=DB::delete('delete from student where age > ?'
				,[25]);
		var_dump($num);*/
		
		/*修改
		 * $num = DB::update('update student set age = ? where name = ?'
				,[35,'大鸡鸡']);
		var_dump($num);*/
		
		/*查询
		 * $b=DB::select('select * from student where age > ?'
				,[28]);
		dd($b);	*/	
	}
	
	public function q1()
	{
		/*使用查询构造器新增数据
		 * $b=DB::table('student')->insert(['name' => '朱古力', 'age' => 23]);
		var_dump($b);*/
		
		/*使用查询构造器新增数据（获取受影响id）
		 * $num=DB::table('student')->insertGetId(['name' => '芝士', 'age' => 55]);
		var_dump($num);*/
		
		/*新增多条
		 * $b=DB::table('student')->insert([
											['name' => '麻花辫', 'age' => 98],
											['name' => '豆花奶', 'age' => 20],
										]);
		var_dump($b);*/
	}
	
	public function q2()
	{
		/*使用查询构造器修改数据
		 * $num=DB::table('student')
		->where('id',1002)
		->update(['age'=>13]);
		*/
		
		//自增
		//$num=DB::table('student')->increment('age');
		//$num=DB::table('student')->increment('age',5);
		
		//自减
		//$num=DB::table('student')->decrement('age');
		//$num=DB::table('student')->decrement('age',10);
		
		//指定行数自增
		/*$num=DB::table('student')
		->where('id',1002)
		->increment('age');*/
		
		$num=DB::table('student')
		->where('id',1002)
		->decrement('age',3,['name'=>'迷你鸡']);
		var_dump($num);
	}
	
	public function q3()
	{
		/*使用查询构造器删除指定数据
		 * $num=DB::table('student')
		->where('id',1008)
		->delete();*/
		
		$num=DB::table('student')
		->where('id','>=',1006)
		->delete();
		var_dump($num);
	}
	
	public function q4()
	{
		/* get()
		 * $studentArr = DB::table('student')->get(); */
		
		/* first()查询一条数据
		 * $studentArr = DB::table('student')->orderBy('id','desc')->first();*/
		
		/* where条件查询
		 * $studentArr = DB::table('student')->where('id','>=',1003)->get();*/
		
		/* whereRaw多条件查询
		 * $studentArr = DB::table('student')
		->whereRaw('id >= ? and age >= ?',[1003,15])
		->get();*/
		
		/* pluck()指定字段查询
		 * $name = DB::table('student')->pluck('name');*/
		
		/* lists()指定字段查询还可以指定字段为下标
		 * $name = DB::table('student')->lists('name','age');*/
		
		/* select()指定多个字段查询
		 * $studentArr = DB::table('student')->select('id','name','age')->get();*/
		//dd($studentArr);
		
		//chunk数据量大的时候使用
		echo '<pre>';
		DB::table('student')->chunk(2,function($studentArr)
		{
			var_dump($studentArr);
			//满足条件时return false即可
			if ('你的条件') 
			{
				return false;
			}
		});
	}
	
	public function q5()
	{
		//聚合函数
		
		/* count
		 * $num = DB::table('student')->count();*/
		
		/* sum
		 * $num = DB::table('student')->sum('age');*/
		
		/* avg
		 * $num = DB::table('student')->avg('age');*/
		
		/* max
		 * $num = DB::table('student')->max('age');*/
		
		//min
		$num = DB::table('student')->min('age');
		var_dump($num);
	}
	
	public function o1()
	{
		//使用模型查找数据
		
		//all()查找全部
		//$studentArr = Student::all();
		
		//find()查找指定一条
		//$student = Student::find(1002);
		
		//findOrFail()查找指定一条没有这报错
		//$student = Student::findOrFail(1001);
		
		//get()
		//$studentArr = Student::get();
		$n=1;
		$t=3;
		$studentArr = Student::skip($n)->take($t)->get();
		dd($studentArr);
		
		//first()
		/*$student = Student::where('id','>',1000)
		->orderBy('age','desc')
		->first();
		dd($student);*/
		
		//chunk()
		/*echo '<pre>';
		Student::chunk(2,function($student){
				var_dump($student);	
		});*/

		//聚合函数
		//$num = Student::count();
		//$num = Student::where('id','>',1002)->max('age');
		//$num = Student::min('age');
		//$num = Student::avg('age');
		//$num = Student::sum('age');
		/* var_dump($num); */
	}
	
	public function o2()
	{
		/*$student = new Student();
		$student->name = "牛肉松";
		$student->age = 18;
		$b=$student->save();
		dd($b);*/
		
		//$student = Student::find(1010);
		//echo date('Y-m-d H:i:s',$student->created_at);
		
		//使用模型的Create方法新增数据
		//Student::create(['name'=>'牛肉丝','age'=>16]);
		
		//firstOrCreate()
		/*$student = Student::firstOrCreate(
					['name'=>'牛肉丝炒番茄']
				);*/
		
		//firstOrNew()
		$student = Student::firstOrNew(
					['name'=>'牛肉丝炒番茄再加皮条']
				);
		$b=$student->save();
		dd($b);
	}
	
	public function o3()
	{
		//通过模型更新数据
		
		/*方法1  返回布尔
		 * $student = Student::find(1012);
		$student->name = '牛肉干';
		$b = $student->save();*/
		
		//方法2  返回受影响个数
		$n = Student::where('id','>',1012)->update(['age'=>23]);
		var_dump($n);
	}
	
	public function o4()
	{
		//通过模型删除数据
		
		/* 方法1 返回布尔
		 * $student = Student::find(1010);
		$b=$student->delete();
		var_dump($b);*/
		
		//通过主键删除
		//$n = Student::destroy(1014);
		//$n = Student::destroy(1012,1013);
		//$n = Student::destroy([1012,1013]);
		
		//加where条件
		$n = Student::where('id','>',1005)->delete();
		var_dump($n);
	}
	
	public function section1()
	{
		//$studentArr = Student::get();
		$studentArr = [];
		$name = '如来';
		$arr = ['孙悟空','沙僧','猪八戒'];
		
		return view('student.section1',[
										'name'=>$name,
										'arr'=>$arr,
										'studentArr'=>$studentArr,
									   ]);
	}
	
	public function url()
	{
		return 'url';
	}
}