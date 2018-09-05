<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
header("content-type:text/html;charset=utf-8");
class Mem extends Model
{
	static function getMem()
	{
		return '你爸爸来了';
	}
}