<?php
	/**
	 +=========================================================
	 
	 * email.inc.php      邮件配置
	 +=========================================================
	 */
	return array(
		'mail_config' => array(
				'host' => 'smtp.exmail.qq.com',
				'username' => 'monitor@tencent.com',
				'password' => '123456',
				'port' => 25,
				'from' => 'monitor@tencent.com',
				'subject' => '邮件中心',
				'fromname' => 'tencent_monitor',

				'charset' => 'UTF-8',
				'altbody' => 'text/html',
			)
	);
        
?>
