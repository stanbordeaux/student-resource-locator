<?php load::view('header');?>

<div id="container">
	<div id="header">
		<h1>
			<?php echo $site_title;?>
		</h1>
		<h3 class='sub_head'><?php echo $sub_title;?></h3>
	</div><!--end header-->

	<div id="navigation">
		<?php load::view('nav_top');?>
	</div><!--end navigation-->

	<div id="content-container">
		<div id="section-navigation">
			<ul>
				<li><a href="<?php echo url::page('links/add_form');?>">Add Book Marks</a></li>
				<li><a href="<?php echo url::page('links/links_form');?>">View Book Marks</a></li>
		        <li><a href="<?php echo url::page('links/category_form');?>">Manage Book Mark Categories</a></li>

			</ul>
		</div><!--end section navigation-->
		<div id="content">
			<?php echo load::view($content);?>
		</div><!--end content-->
		<div id="aside">
			<h3>
				Aside heading


			</h3>
			<p>
				
			</p>
		</div>
		
	</div><!--end content container-->
	<div id="footer">
			Copyright © Stan Bordeaux, 2011
		</div><!--end footer-->
</div><!--end container-->