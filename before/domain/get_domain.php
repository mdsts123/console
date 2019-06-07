<?php
header("Content-Type: text/html;charset=utf-8");
header("Access-Control-Allow-Origin:*");

$s=$_GET['server'];
echo $s;
/*
@$web_name=$_GET['get_web_domains'];
@$is_get_webs=$_GET['get_server_webs_name'];
@$is_sync=$_GET['refresh_webs'];
@$webDomaintree=$_GET['webDomaintree'];
$target_path='/www/wwwroot/cdn/backup_server/vhost/nginx/';

$sync_src='/www/server/panel/vhost/nginx/';
$sync_dst='/www/wwwroot/cdn/backup_server/vhost/';

include '/www/wwwroot/cdn/api/console.php';
$exclude_files=['47.75.123.190','0.default','test.al','phpinfo'];
if(!empty($is_get_webs)){
//输出文件列表
     echo get_filter_file_array($target_path,$exclude_files);
}
if(!empty($web_name)) {
    echo get_domain_array($target_path,$web_name);
    
}
if(!empty($webDomaintree)) {
    echo webDomaintree();;
}
*/