<?php load::view('header');?>

<h1>View Web Links Here</h1>
<form action='<?php echo url::page('links/view_links');?>' method='post'>
<p><label for='type'>Choose a category:&nbsp;</label><select name='type' id='type'>
<option value='all'>All</option>
<option value='Web Design'>Web Design</option>
<option value='News'>News</option>
<option value='Sports'>Sports</option>
</select></p>
<p><label for='sort_type'>Choose a field to sort by:&nbsp;</label><select name='sort_type' id='sort_type'>
<option value='no_sort'>No Sort</option>
<option value='category'>Category</option>
<option value='link'>Link</option>
<option value='date'>Date Added</option>
</select></p>
<p><input type='submit' name='submit' id='submit' value='View Links'></p>
</form>
</body>