<?php
return array(
	//'配置项'=>'配置值'
    'MODULE_ALLOW_LIST' =>    array('Home','Admin',),
    //我们用了入口版定 所以下面这行可以注释掉
    //'DEFAULT_MODULE'    =>    'Home',  // 默认模块
    'SHOW_PAGE_TRACE'   =>  true,
    'LOAD_EXT_CONFIG'   => 'db',
    'URL_CASE_INSENSITIVE'  =>  true,  //url不区分大小写
    'URL_MODEL'   =>0,
    'URL_HTML_SUFFIX'  =>'html',
    //主题静态文件路径
    'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__.'/Application/'.MODULE_NAME.'/View/' . '/Public/static',),
);