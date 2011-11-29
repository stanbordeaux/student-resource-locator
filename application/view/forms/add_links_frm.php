<?php load::view('header');?>

<div id="container">
<h1>Add Web Links Here</h1>

<form action="<?php echo url::page('links/add_link');?>" method='post'>
<p><label for='url_address'>Enter the web address here (<strong>http://www</strong> not required): &nbsp;</label></p>
<p><input type='text' name='url_address' id='url_address'></p>
<p><label for='url_link_txt'>Enter the Link text here: &nbsp;</label></p>
<p><input type='text' name='url_link_txt' id='url_link_txt'></p>
<p><label for='category'>Choose a category:&nbsp;</label><select name='category' id='category'>

<!-- display the categories for the drop down list -->
<option value='all'>All</option>
<?php for ($i=0; $i < count($cats); $i++):?>
<option value="<?php echo $cats[$i]['value'];?>"><?php echo $cats[$i]['name'];?></option>
<?php endfor;?>
</select></p>


<p><input type='submit' name='submit' id='submit' value='Add Link'></p>
</form>
</div><!--end container-->