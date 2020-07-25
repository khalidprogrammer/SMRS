<?php

$localhosts = array(
						'::1',
						'127.0.0.1',
						'localhost'
						);

						$protocol = 'mail';
						if (in_array($_SERVER['REMOTE_ADDR'], $localhosts)) {
						$protocol = 'smtp';
						} 

$config = array(
						'protocol' => 'smtp',
						'smtp_host' => 'ssl://smtp.googlemail.com',
						'smtp_port' => 465,
						'smtp_user' => 'Khalid.csit1234@gmail.com',
						'smtp_pass' => 'Khalid@12345',
						'mailtype' => 'html',
						'starttls'  => true,
						'newline'   => "\r\n",
						);



 ?>