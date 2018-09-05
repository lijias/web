<?php
$url = 'http://www.ebrun.com/rss/article.json';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($ch);
curl_close($ch);

$res = iconv('gbk', 'utf-8//IGNORE', $res);
echo '<pre>';
$res = json_decode($res, true, 512);
print_r($res);
foreach($res as $v)
{
    echo $v['id'].'<br>';
}