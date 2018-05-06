<?php 
$redis = new Redis();
$status=$redis->connect('127.0.0.1', 6379);//自定义配置   redis
if(!$status){
    echo json_encode(array('success'=>false,'msg'=>"redis can't run"));die;
}

$raw_proxy_queue = 'raw_proxy';
$useful_proxy_queue = 'useful_proxy';
$total=$redis->hlen($raw_proxy_queue);
$userful=$redis->hlen($useful_proxy_queue);
echo json_encode(array('raw_proxy'=>total, 'useful_proxy'=>userful));














 ?>