<?php
header("Content-Type:text/html;charset=utf-8");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Access-Control-Allow-Origin:*");
$name=$_POST['name'];
$pwd=$_POST['pwd'];
$serverIP= $_GET['server'];
$getIP= $_GET['getIP'];
if($name&&$pwd){
    if($name=='ad'&&$pwd=='1e'){
        echo '{"msg":"ok"}';
    }else{
        echo '{"msg":"no"}';
    }
}
if($serverIP){
    $target_path='/www/wwwroot/console/backup_server/'.$serverIP.'/vhost/nginx/';
    $exclude_files=['47.75.123.190','0.default','test.al','phpinfo','phpfpm_status','f-console.f','47.52.119.33','f.src','47.244.13.1','125.88.144.55','47.91.209.144.cdn','47.91.209.144','47.244.34.198'];
    echo get_server_domain_array($target_path,$exclude_files);

}
if($getIP){
echo getip();
}
/*-----------------------*/
function get_server_domain_array($path,$exclude){
    $server_domains=array();
    $files=get_filter_file_array($path,$exclude);
    foreach ($files as $key=>$web){
        $server_domains[$web]=get_domain_array($path,$web);
    }
    return  json_encode($server_domains);
}
function getFile($dir) {
    $fileArray[]=NULL;
    if (false != ($handle = opendir ( $dir ))) {
        $i=0;
        while ( false !== ($file = readdir ( $handle )) ) {
            //去掉"“.”、“..”以及带“.xxx”后缀的文件
            if ($file != "." && $file != ".."&&strpos($file,".")) {
                $fileArray[$i]=$file;
                if($i==100){
                    break;
                }
                $i++;
            }
        }
        //关闭句柄
        closedir ( $handle );
    }
    return $fileArray;
}
//获得站点列表
function get_filter_file_array($target_path,$exclude_file){
    $file_arr=array();
    $files=getFile($target_path);
    foreach($files as $k=>$v){
        if(in_array(str_replace('.conf', '', $v),$exclude_file)){
            unset($files[$k]);
            continue;
        }
        array_push($file_arr,str_replace('.conf', '', $v));
    }
    return $file_arr;
}
//获得没有默认配置的列表
function get_domain_array($target_path,$web_name){
    $filter_domain_arr=array();
    if(!empty($web_name)){
        $get_domains_path = file_get_contents($target_path.$web_name.'.conf');
        $getDomainsPattern = '/(?<=server_name ).*[^\;](?=\;)/';
        preg_match($getDomainsPattern,$get_domains_path,$dir);
        $domain_array=preg_split('/ /',$dir[0]);

        //筛除 站点名域名
        
        foreach($domain_array as $k=>$v){
            if($k==$web_name){
                unset($domain_array [$k]);
                continue;
            }
            array_push($filter_domain_arr ,$v);
        }
        return $filter_domain_arr;
        //echo json_encode($filter_domain_arr) ;//json_decode();
        
    }
}
/*get ip*/
function getip()
{
  $arr=array();
    static $realip;
    if (isset($_SERVER)) {
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $realip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $realip = $_SERVER['HTTP_CLIENT_IP'];
        } else {
            $realip = $_SERVER['REMOTE_ADDR'];
        }
    } else {
        if (getenv('HTTP_X_FORWARDED_FOR')) {
            $realip = getenv('HTTP_X_FORWARDED_FOR');
        } else if (getenv('HTTP_CLIENT_IP')) {
            $realip = getenv('HTTP_CLIENT_IP');
        } else {
            $realip = getenv('REMOTE_ADDR');
        }
    }
  $arr['ip']=$realip;
    return json_encode($arr);
}
