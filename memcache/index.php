<?php
$memcache = new Memcache;
$memcache->connect('localhost',11211) or die('Could not connect');

//memcache 版本
$version = $memcache->getversion();

//php手册中的demo
//$tmp_object = new stdClass;
//$tmp_object->str_attr = 'test';
//$tmp_object->int_attr = 123;
//$memcache->set('key',$tmp_object,MEMCACHE_COMPRESSED,10) or die('Fail to save data at the server');//存数据 key,data,是否使用zlib进行压缩,10秒后失效 0为永不过期
//$get_result = $memcache->get('key');//取数据

/**
 * memcache 各种操作
 */
 
//add 增加一个条目到缓存服务器 如果key已经存在则返回false 参数同set
//$memcache->add('key2',123,false,0);

//减小元素的值 与之相对应的increment增加元素的值
//$memcache->decrement('key2',100);

//删除元素 第二个参数表示多少秒后删除
//$memcache->delete('key2',30);

//清空所有元素
//$memcache->flush();

//取元素
//$memcache->get('key2');

//向连接池中添加一个memcache服务器
//$memcache->addserver('memcache_host2', 11211);

//获取服务的在线离线状态 0:离线 非0:在线
//echo $memcache->getserverstatus('localhost',11211);

//获取所有服务器的详细信息 return array
$arr = $memcache->getextendedstats();

//获取当前服务器的详细信息
//$arr = $memcache->getstats();

//设置key 与add的区别是如果key存在则替换key的值 replace和set相同
//$memcache->replace('key','abc');

//开启大值自动压缩
//$memcache->setcompressthreshold(20000, 0.2);

//运行时修改服务器参数和状态
//$memcache->setserverparams('memcache_host', 11211, 1, 15, true, '_callback_memcache_failure');// 使该服务器变为在线状态

echo '<pre>';
print_r($arr);
echo '</pre>';

//关闭memcache链接
$memcache->close();




