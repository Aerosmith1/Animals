<?php

include('Includes/header.php');

 ?>

<div id="menu-items">
	

<h1>Our dogs menu</h1>

<hr>

<ul>
	
<?php foreach ($menuItems as $dish =>$item){?> 

	<li><a href="dish.php?item=<?php echo $dish;?>"><?php echo $item['title']; ?>$<?php echo $item['price'] ?></a></li>

<?php } ?>
</ul>

</div>



 <?php

include('Includes/footer.php');

 ?>