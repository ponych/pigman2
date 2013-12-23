<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://topthink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 定义应用目录
define('APP_PATH','./Application/');

include ('FirePHP.class.php');
function _fb($value , $label ,$type = 'info') {
    static $fire = null;
    if (!$fire) {
        $fire = FirePHP::getInstance(true);
    }
    switch ($type) {
        case 'info' :
            $fire->info($value , $label);
            break;
        case 'warn' :
        case 'warning' :
            $fire->warn($value, $label);
            break;
        case 'error':
        case 'err':
            $fire->error($value, $label);
            break;
        case 'dump':
            $fire->dump($value, $label);
            break;
        default:
            $fire->info($value, $label);
    }
}

_fb($_SERVER['PATH_INFO'],'$_SERVER[\'PATH_INFO\']');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单