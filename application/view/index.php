<?php load::view('header');?>

<div id="container">

	<?php 
		if (is_array($data)):

	?>
	<p class="right">Welcome <?php echo ucfirst($username);?></p>
	<?php endif;?>
	<h1>Links Management System</h1>
	<h2>store::retrieve::share</h2>
	
	<ul>
		<li><a href="<?php echo url::page('links/add_form');?>">Add Book Marks</a></li>
		<li><a href="<?php echo url::page('links/links_form');?>">View Book Marks</a></li>
        <li><a href="<?php echo url::page('links/category_form');?>">Manage Book Mark Categories</a></li>

	</ul>
</div><!--end container-->
</body>
</html>