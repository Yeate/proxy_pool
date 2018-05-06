<?php 
$redis = new Redis();
$status=$redis->connect('127.0.0.1', 6379);//自定义配置   redis
if(!$status){
    echo json_encode(array('success'=>false,'msg'=>"redis can't run"));die;
}
$useful_proxy_queue = 'useful_proxy';
$arr = $redis->hkeys($useful_proxy_queue);
if(!empty($arr)){
	shuffle($arr);
	echo json_encode(array('success'=>true,'msg'=>$arr['0']));die;
}else{
	echo json_encode(array('success'=>false,'msg'=>"no enough proxy"));die;
}




 ?>