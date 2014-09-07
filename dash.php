<?php
/*
| HablitASE - A secure management system for
| RevCMS, coded by Chenaho (AKA. Liam)
| ----------------------------------------------
| This is a development build, please report
| all errors or bugs to: report@chenaho.me
*/

// Require the global file
require_once("global.php");

// If the user is not logged in, they don't have access to this page!
if(!LOGGED_IN)
{
	header("Location: index.php");
	exit;
}

// Checks to see if the user is minimum rank (moderator)
if(RANK <= MODERATOR - 1)
{
	header("Location: logout.php");
	exit;
}

require(I . T . "top.tpl");
?>

<section id="main" class="column">
		
		<h4 class="alert_info"><?php echo HOTEL_NAME; ?> is powered by HablitASE</h4>
		
		<article class="module width_full">
		
		
			<header><h3>ase dashboard</h3></header>
				<div class="module_content">
					<h1>Welcome back, <?php echo USER_NAME; ?></h1>
					<h4>Being apart of the staff team here at <?php echo HOTEL_NAME; ?> Hotel is a serious thing, and we like to make things easier for you!
					<?php echo HOTEL_NAME; ?> Hotel's <i>All Seeing Eye</i> allows you to manage the hotel much more easier than it normally would be
					without it. If you have any problems, or you do not know how to use a feature please contact a higher rank of staff
					for further assistance! If you do not know how to use something then please ask how it works before using it, if found
					messing around with these tools you may loose your privileges and/or be demoted!</h4><br />
					<p>As a member of the staff team you are expected to abide by a few ground rules and procedures, which have been listed below for you.</p>

					<ul>
						<li>You must not give out credits unless permission is given from a member of senior staff/administration</li>
						<li>Don't discriminate against race, sex, sexual orientation, size.</li>
						<li>When banning a user, please make the reason as detailed as possible and provide proof if necessary.</li>
						<li>Make sure everyone is having a fun time, ban/kick users if they're ruining it for everyone else!</li>
						<li>Report any errors you, or users are experiencing VIA our "Notes" in the ASE Panel.</li>
						<li>Make sure you get approval from a hotel owner or manager before writing any news articles.</li>
						<li>Do not give any users VIP unless a hotel owner approves.</li>
						<li>Do not share any users account details with anyone, you have a privilege to be able to view their details for good.</li>
						<li>Only log onto users accounts when troubleshooting.</li>
					</ul>
					
					<p>You are a respected member of the hotel, you are "an icon" to many other players, so please make sure you act like one! <br><br><i>If you have any queries then please contact a senior staff member.</i>
				</div>
		</article><!-- end of styles article -->
		<div class="spacer"></div>
	</section>
	</body>

</html>