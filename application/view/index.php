<?php load::view('header');?>

<div id="container">
	<p class="right">Welcome <?php echo ucfirst($username);?></p>
	<h1>Links Management System</h1>
	<h2>store::retrieve::share</h2>
	
	<ul>
		<li><a href="<?php echo url::page('links/get_cats');?>">Add Book Marks</a></li>
		<li><a href="view_links_frm.php">View Book Marks</a></li>
        <li><a href="add_cat_frm.php">Manage Book Mark Categories</a></li>

	</ul>
</div><!--end container-->
</body>
</html>