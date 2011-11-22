<?php load::view('templates/header', array("page_title" => $page_title));?>
<h1>hello shithead from the add form</h1>
<form action="<?php echo url::page('main/student_form');?>" method="post" id="" class="">

<h2>Please enter student enrolment details</h2>

<p><label for="student_fname">Given Name</label></p>
<p><input type="text" id="student_fname" class="" name="student_fname" value=""/></p>

<p><label for="student_lname">Family Name</label></p>
<p><input type="text" id="student_lname" class="" name="student_lname" value=""/></p>

<p><label for="student_number">Student Number</label></p>
<p><input type="text" id="student_number" class="" name="student_number" value=""/></p>
</form>