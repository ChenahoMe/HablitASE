<!-- -------------------------------------------------------------------------------- -->
<!-- Powered by HablitASE | A secure management system for RevCMS | Index initialized -->
<!-- -------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>HablitASE: Login</title>
        <meta name="description" content="hablit, ase, hablitase, allseeingeye, habbo" />
        <link rel="shortcut icon" href="/images/favicon.ico"/>
    </head>
	<style type="text/css">
	body {
	background: #EFEFEF;
	color: #999;
	font: 12px "Trebuchet MS", Arial, Helvetica, sans-serif;
	}
	#container {
	background: #FFF;
	width: 400px;
	border: 1px solid #CCC;
	margin: auto;
	padding: 10px;
	}
	#h1 {
	font-size: 22px;
	font-weight: bold;
	margin: 0;
	padding: 0;
	}
	.alert h4 {
	margin-top: 0;
	color: inherit;
	}
	.alert-danger {
	background-color: #f2dede;
	border-color: #eed3d7;
	color: #b94a48;
	}
	.alert-danger hr {
	border-top-color: #e6c1c7;
	}
	.alert-danger .alert-link {
	color: #953b39;
	}
	</style>
    <body>
	<center>
	<?php
	if(isset($_GET['logout'])) { echo '<div id="container">You\'ve been successfully logged out!</div>'; } else if(isset($_GET['nologin'])) { echo '<div id="container">There was no active session to end.</div>'; }
	?>
	</center>
	
	<div id="container">
	<h1>Hablit ASE | Login</h1>
		<?php 
		//define('ERROR', '1');
		//if(null !== ERROR) { echo "<div class='alert alert-danger'> Invalid login details. Attempt has been logged. IP: $ip</div>"; } ?>
			<form method="post" style="margin-top:10px;">
			<td><input type="text" name="username" id="username" placeholder="Username" autofocus /></td>
			<td><input type="password" name="password" id="password" placeholder="Password" /></td>
			<td><input type="submit" name="login" id="login" value="Login" style="margin-top:5px;" /></td>
		</form>
		<br /><hr>
		This panel has integrated security features protecting staffs' accounts. All failed attempts are logged. If a bruit force is detected, your IP will be blacklisted.
	</div>
	<center>Powered by <a href="https://github.com/ChenahoMe/HablitASE/" target="_blank">HablitASE</a></center>
	</body>
</html>