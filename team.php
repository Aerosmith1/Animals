<?php
define("title", "Team Happy Day's ");
require_once('Includes/header.php');

?>

<div id="team-members" class="cf">
	
		<h1>Our Team at Happy Days</h1>
		<p>We're small, but mighty. Happy Dayshas been a family-owned and run business since the dirty thirties, and we're proud of it! When you get these three together, you never know what can happen. But you can count on one thing:</p>
		
		<hr>

		<?php 

foreach($teamMembers as $member){


		?>

		<div class="member">
<img src="img/<?php echo $member['img']; ?>.png" alt="<?php echo $member['name']; ?>">
<h2><?php echo $member['name']; ?></h2>
<p><?php echo $member['bio']?></p>
		</div>

<?php 

}

		?>

	</div>

	<?php require_once('Includes/footer.php'); ?>