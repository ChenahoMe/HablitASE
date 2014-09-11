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

if(isset($_GET['submit']))
{


}

require(I . T . "top.tpl");
?>

<section id="main" class="column">
		
		<article class="module width_full">
		
		
			<header><h3>add a note</h3></header>
				<div class="module_content">
					
					<form method="post">
						<h2>Create a note:</h2><textarea cols="40" rows="4" placeholder="Your note goes here, be aware other staff members & owners can read these!" name="content"></textarea><br /><br />
						<input type="submit" name="submit" value="Add">
					</form>
					
					
					</div>
		</article><!-- end of styles article -->
		
		<article class="module width_full">
		
		
			<header><h3>notes</h3></header>
				<div class="module_content">
					

					
					
					</div>
		</article><!-- end of styles article -->
		
		<div class="spacer"></div>
	</section>
	</body>

</html>