<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * gd库画曲线图
 */
class Picture extends CI_Controller 
{
        var $image; // 定义图像
        var $title; // 定义标题
        var $ydata; // 定义Y轴数据
        var $xdata; // 定义X轴数据
        var $seriesName; // 定义每个系列数据的名称
        var $color; // 定义条形图颜色
        var $bgcolor; // 定义图片背景颜色
        var $width; // 定义图片的宽
        var $height; // 定义图片的长
        
        
        /*
        * 构造函数
        * String title 图片标题
        * Array xdata 索引数组，X轴数据
        * Array ydata 索引数组，数字数组,Y轴数据
        * Array series_name 索引数组，数据系列名称
        */
         
        public function index()
         {
             $start = '2017-06-05';
             $end = '2017-07-05';
//              $start ='';
//              $end = '';
             if (isset($start)&&$start==''&&isset($end)&&$end=='')
             {
                 $start = date('Y-m-d',(time()-2678400));
                 $end = date('Y-m-d',time());
             }
             $s = strtotime($start);
             $e = strtotime($end);
             $arr = [];
             array_push($arr, $start);
             $count = ($e-$s)/60/60/24;
             for ($i=1;$i<$count;$i++)
             {
                 $t = date("Y-m-d",($s+86400));
                 array_push($arr, $t);
                 $s = $s+86400;
             }
             array_push($arr, $end);
             if (count($arr)<31)
             {
                 $disparity = 31-count($arr)+1;
                 for ($j=0;$j<$disparity;$j++)
                 {
                     $et = date("Y-m-d",($e+86400));
                     array_push($arr, $et);
                     $e = $e+86400;
                 }
             }
             array_push($arr, '');
             $xdata = $arr;
             $this->load->model('Blog_model');
             //为了保持数据的排序一致
             foreach ($xdata as $kk=>$vv)
             {
                 if ($vv!='')
                 {
                     //新闻
//                     $result[$kk] = $this->Blog_model->check_news($vv);
                    //日活跃用户总数
                     $result[$kk] = $this->Blog_model->search_activity($vv);
                 }
             }
                $yarr = [];
             foreach ($result as $key=>$val)
             {
                 if (isset($val['data_date']))
                 {
                     $yarr[$key] = $val['zs'];
                 }
                 else
                 {
                     $yarr[$key] = 0;
                 }
             }
             $ydata = $yarr ;
//              $ydata = array(100,300,405,540,605,10,55,79,106,320,444,875,35);
             $color = array();
             $seriesName = array("日活跃用户");
             $title = "日活跃用户";
             $this->paintLineChart($title,$xdata,$ydata,$seriesName);
         }
                 
        /*
        * 公有方法，设置条形图的颜色
        * Array color 颜色数组,元素取值为'#058DC7'这种形式
        */
//         function setBarColor($color){
//               $color = $color;
//           }       
                 
          /*
           * 绘制折线图
           */
          public function paintLineChart($title,$xdata,$ydata,$seriesName) {
              $colors = array('#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4');
              $ydataNum = $this->arrayNum($ydata); // 取得数据分组的个数
              $max = $this->arrayMax($ydata); // 取得所有呈现数据的最大值
              $max = ($max > 100)? $max : 100;
              $multi = $max/100; // 如果最大数据是大于100的则进行缩小处理
              $barHeightMulti = 2.2; // 条形高缩放的比例
              $lineWidth = 50;
              $chartLeft = (1+strlen($max))*12; // 设置图片左边的margin
          
              $lineY = 250; // 初始化条形图的Y的坐标
              // 设置图片的宽、高
              //$width = $lineWidth*count($xdata) + $chartLeft - $lineWidth/1.6;
          
              $margin = 10; // 小矩形描述右边margin
              $recWidth = 20; // 小矩形的宽
              $recHeight = 15; // 小矩形的高
              $space = 20; // 小矩形与条形图的间距
              $tmpWidth = 0;
              // 设置图片的宽、高
              $lineChartWidth =  $lineWidth*count($xdata) + $chartLeft - $lineWidth/1.6 ;
              // 两个系列数据以上的加上小矩形的宽
              if($ydataNum > 1) {
                  $tmpWidth = $this->arrayLengthMax($seriesName)*10*4/3 + $space + $recWidth + $margin;
              }
              $width = $lineChartWidth + $tmpWidth;
          
              $height = 350;
              $image = imagecreatetruecolor($width ,$height); // 准备画布
              $bgcolor = imagecolorallocate($image,255,255,255); // 图片的背景颜色
          
              // 设置条形图的颜色
              $color = array();
              foreach($colors as $col) {
                  $col = substr($col,1,strlen($col)-1);
                  $red = hexdec(substr($col,0,2));
                  $green = hexdec(substr($col,2,2));
                  $blue = hexdec(substr($col,4,2));
                  $color[] = imagecolorallocate($image ,$red, $green, $blue);
              }
          
              // 设置线段的颜色、字体的颜色、字体的路径
              $lineColor = imagecolorallocate($image ,0xcc,0xcc,0xcc);
              $fontColor = imagecolorallocate($image, 0x95,0x8f,0x8f);
              $fontPath = 'font/simsun.ttc';
//               print_r($fontPath);exit;
          
              imagefill($image,0,0,$bgcolor); // 绘画背景
          
              // 绘画图的分短线与左右边线
              for($i = 0; $i < 6; $i++ ) {
                  imageline($image,$chartLeft-10,$lineY-$barHeightMulti*$max/5/$multi*$i,$lineChartWidth,$lineY-$barHeightMulti*$max/5/$multi*$i,$lineColor);
                  imagestring($image,4,5,$lineY-$barHeightMulti*$max/5/$multi*$i-8,floor($max/5*$i),$fontColor);
              }
              imageline($image,$chartLeft-10,30,$chartLeft-10,$lineY,$lineColor);
              imageline($image,$lineChartWidth-1,30,$lineChartWidth-1,$lineY,$lineColor);
              $style = array($lineColor,$lineColor,$lineColor,$lineColor,$lineColor,$bgcolor,$bgcolor,$bgcolor,$bgcolor,$bgcolor);
              imagesetstyle($image,$style);
          
              // 绘制折线图的分隔线（虚线）
              foreach($xdata as $key => $val) {
                  $lineX = $chartLeft + 3 + $lineWidth*$key;
                  imageline($image,$lineX,30,$lineX,$lineY,IMG_COLOR_STYLED);
              }
          
              // 绘画图的折线
              foreach($ydata as $key => $val) {
                  if($ydataNum == 1) {
                      // 一个系列数据时
                      if($key == count($ydata) - 1 ) break;
                      $lineX = $chartLeft + 3 + $lineWidth*$key;
                      $lineY2 = $lineY-$barHeightMulti*($ydata[$key+1])/$multi;
          
                      // 画折线
                      if($key == count($ydata) - 2 ) {
                          imagefilledellipse($image,$lineX+$lineWidth,$lineY2,10,10,$color[0]);
                      }
                      imageline($image,$lineX,$lineY-$barHeightMulti*$val/$multi,$lineX+$lineWidth,$lineY2,$color[0]);
                      imagefilledellipse($image,$lineX,$lineY-$barHeightMulti*$val/$multi,10,10,$color[0]);
                  }elseif($ydataNum > 1) {
                      // 多个系列的数据时
                      foreach($val as $ckey => $cval) {
          
                          if($ckey == count($val) - 1 ) break;
                          $lineX = $chartLeft + 3 + $lineWidth*$ckey;
                          $lineY2 = $lineY-$barHeightMulti*($val[$ckey+1])/$multi;
                          // 画折线
                          if($ckey == count($val) - 2 ) {
                              imagefilledellipse($image,$lineX+$lineWidth,$lineY2,10,10,$color[$key%count($color)]);
                          }
                          imageline($image,$lineX,$lineY-$barHeightMulti*$cval/$multi,$lineX+$lineWidth,$lineY2,$color[$key%count($color)]);
                          imagefilledellipse($image,$lineX,$lineY-$barHeightMulti*$cval/$multi,10,10,$color[$key%count($color)]);
                      }
                  }
          
              }
          
              // 绘画条形图的x坐标的值
              foreach($xdata as $key => $val) {
                  $lineX = $chartLeft + $lineWidth*$key + $lineWidth/3 - 20;
                  imagettftext($image,10,-65,$lineX,$lineY+15,$fontColor,$fontPath,$xdata[$key]);
              }
          
              // 两个系列数据以上时绘制小矩形及之后文字说明
              if($ydataNum > 1) {
                  $x1 = $lineChartWidth + $space;
                  $y1 = 20 ;
                  foreach($seriesName as $key => $val) {
                      imagefilledrectangle($image,$x1,$y1,$x1+$recWidth,$y1+$recHeight,$color[$key%count($color)]);
                      imagettftext($image,10,0,$x1+$recWidth+5,$y1+$recHeight-2,$fontColor,$fontPath,$seriesName[$key]);
                      $y1 += $recHeight + 10;
                  }
              }
          
              // 绘画标题
              $titleStart = ($width - 5.5*strlen($title))/2;
              imagettftext($image,11,0,$titleStart,20,$fontColor,$fontPath,$title);
          
              // 输出图片
              header("Content-Type:image/png");
              imagepng ( $image );
          }

          /*
           * 私有方法，当数组为二元数组时，统计数组的长度
           * Array arr 要做统计的数组
           */
          private function arrayNum($arr) {
              $num = 0;
              if(is_array($arr)) {
                  $num++;
                  for($i = 0; $i < count($arr); $i++){
                      if(is_array($arr[$i])) {
                          $num = count($arr);
                          break;
                      }
                  }
              }
              return $num;
          }
          
          /*
           * 私有方法，计算数组的深度
           * Array arr 数组
           */
          private function arrayDepth($arr) {
              $num = 0;
              if(is_array($arr)) {
                  $num++;
                  for($i = 0; $i < count($arr); $i++){
                      if(is_array($arr[$i])) {
                          $num += $this->arrayDepth($arr[$i]);
                          break;
                      }
                  }
              }
              return $num;
          }
          
          /*
           * 私有方法，找到一组中的最大值
           * Array arr 数字数组
           */
          private function arrayMax($arr) {
              $depth = $this->arrayDepth($arr);
              $max = 0;
              if($depth == 1) {
                  rsort($arr);
                  $max = $arr[0];
              }elseif($depth > 1) {
                  foreach($arr as $val) {
                      if(is_array($val)) {
                          if($this->arrayMax($val) > $max) {
                              $max = $this->arrayMax($val);
                          }
                      }else{
                          if($val > $max){
                              $max = $val;
                          }
                      }
                  }
              }
              return $max;
          }
          
          /*
           * 私有方法，求数组的平均值
           * Array arr 数字数组
           */
          public function arrayAver($arr) {
              $aver = array();
              foreach($arr as $val) {
                  if(is_array($val)) {
                      $aver = array_merge($aver,$val);
                  }else{
                      $aver[] = $val;
                  }
              }
              return array_sum($aver)/count($aver);
          }
          
          /*
           * 私有方法，求数组中元素长度最大的值
           * Array arr 字符串数组,必须是汉字
           */
          private function arrayLengthMax($arr) {
              $length = 0;
              foreach($arr as $val) {
                  $length = strlen($val) > $length ? strlen($val) : $length;
              }
              return $length/3;
          }
          
          // 析构函数
//           function __destruct(){
//               imagedestroy($image);
//           }
              

}