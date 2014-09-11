<?php
require_once("global.php");
if(RANK <= OWNER - 1)
{
	header("Location: logout.php");
	exit;
}
/* Start logs */
echo 'Timestamp: Thu Sep 11, 2014 13:04 pm | IP Addr: 127.0.0.1 | Attempted user: root - Password hash: e99a18c428cb38d5f260853678922e03<br />';

echo 'Timestamp: Thu Sep 11, 2014 13:04 pm | IP Addr: 127.0.0.1 | Attempted user: Liam - Password hash: e6e2cfc931da72a9f2f16fd8264aae11<br />';

echo 'Timestamp: Thu Sep 11, 2014 13:05 pm | IP Addr: 127.0.0.1 | Attempted user: Liam - Password hash: e6e2cfc931da72a9f2f16fd8264aae11<br />';
