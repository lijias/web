<?php
namespace App\Http\Controllers;
use App\Mem;
header("content-type:text/html;charset=utf-8");
class MemController extends Controller
{
	public function info($id)
	{
		return Mem::getMem();
		//return 'mem-id-'.$id;
		//return route('m');
		/*return view('mem/info',
				[
					'name'=>'你爸爸',
					'age' =>18
				]);*/
	}
}