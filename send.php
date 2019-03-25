<?php

include_once 'src/AliYunDm.php';

use whalephp\tool\AliYunDm;

$aliYunDm = new AliYunDm("xxxxxxxxx", "xxxxxxxxxxx", "xxxxxxxxxxxxxxxxxxxxxxxxxx");
$aliYunDm->sendMail([
    'account_name'  => "push@exem.yunceku.com",     // 发件邮箱
    'from_alias'    => "发信人昵称123",             // 发信人昵称
	'subject'	    => "这是标题",
	'body'		    => "哒哒哒<br/>啦啦啦啦啦<b>平台</b>的啊",
	'receiver'	    => '1243463730@qq.com',
	'addresser'	    => '云测库-派题系统',
]);
?>