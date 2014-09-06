<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title><?php echo HOTEL_NAME; ?>: Staff Management Panel</title>
	<link rel="shortcut icon" href="eye.ico">
	<link rel="stylesheet" href="includes/required/cssjsimg/css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="includes/required/cssjsimg/js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="includes/required/cssjsimg/js/hideshow.js" type="text/javascript"></script>
	<script src="includes/required/cssjsimg/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="includes/required/cssjsimg/js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
	</script>
	<script type="text/javascript">

	function Toggle(id)
	{
		var List = document.getElementById('list-' + id);
		var Button = document.getElementById('plus-' + id);
		
		if (List.style.display == 'block' || List.style.display == '')
		{
			List.style.display = 'none';
			Button.innerHTML = '+';
		}
		else
		{
			List.style.display = 'block';
			Button.innerHTML = '-';
		}
		
		setCookie('tab-' + id, List.style.display, 9999);	
	}

	function t(id)
	{
		var el = document.getElementById(id);
		
		if (el.style.display == 'block' || el.style.display == '')
		{
			el.style.display = 'none';
		}
		else
		{
			el.style.display = 'block';
		}
	}

	function setCookie(c_name,value,expiredays)
	{
		var exdate=new Date();
		exdate.setDate(exdate.getDate()+expiredays);
		document.cookie=c_name+ "=" +escape(value)+
		((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
	}

	function checkCookies()
	{
		ca = document.cookie.split(';');

		for (i = 0; i < ca.length; i++)
		{
			bits = ca[i].split('=');
			
			key = trim(bits[0]);
			value = trim(bits[1]);
			
			if (key.substr(0, 3) == 'tab')
			{
				tabName = key.substr(4);
				
				if (value == 'none')
				{
					Toggle(tabName);
				}
			}
		}
	}

	function trim(value)
	{
		value = value.replace(/^\s+/,''); 
		value = value.replace(/\s+$/,'');
		return value;
	}

	function popSsoClient(sso)
	{
		window.open('http://haboa.co/external-client.php?forceTicket=' + sso, 'Haboa Hotel: External user sign on', 'width=980,height=600,location=no,status=no,menubar=no,directories=no,toolbar=no,resizable=no,scrollbars=no'); return false;
	}
	</script>
</head>
<body onLoad="checkCookies();">

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="dash.php">HablitASE <?php if(DEVELOPMENT) { echo '- Development mode'; } else { echo '- BETA R100'; } ?></a></h1>
			<h2 class="section_title"><a href="https://chenaho.me" target="_blank">Chenaho</a></h2><div class="btn_view_site"><a href="../me">Main Site</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>Logged in as: <?php if (LOGGED_IN) { echo USER_NAME; } ?></p>
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="">Housekeeping</a></article>
		</div>
	</section><!-- end of secondary bar -->

<aside id="sidebar" class="column">
		<h3>General</h3>
		<ul class="toggle">
			<li class="icn_tags"><a href="index.php?_cmd=main">Dashboard</a></li>
		</ul>
		<?php if (LOGGED_IN) { ?>
		<h3>Moderation</h3>
		<ul class="toggle">
			
			<li class="icn_profile"><a href="index.php?_cmd=iptool">User IP Lookup</a></li>
			<li class="icn_profile"><a href="index.php?_cmd=bans">Bans & appeals</a></li>
			
		</ul>
		<?php } ?>
	</aside>