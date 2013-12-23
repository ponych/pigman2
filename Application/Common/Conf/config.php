<?php
return array(
	//'配置项'=>'配置值'
    'asset_cdn' => 'http://cdn.pigman.local.com/Public' ,



    'TMPL_ENGINE_TYPE'      => 'PHP' ,
    'TMPL_TEMPLATE_SUFFIX'  => '.php',
    'URL_MODEL'             => 2,
    'URL_ROUTER_ON'         => true,
    'URL_ROUTE_RULES'   => array(
        '/^reg/'   => 'User/User/reg'
    ),
    'URL_CASE_INSENSITIVE'  => true,
);