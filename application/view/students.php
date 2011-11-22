<?php

echo '<h1>hello shithead</h1>';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset='utf-08' />
    <meta description='' />
    <title>dingo test</title>
    <link rel='stylesheet' href='css/style.css' />
    <style>
    .mytable {
    width: 50%;
    border:  1px solid #000;
    }
    .mytable th {
    text-align: left;
    background-color: #fff;
    }
    .mytable .odd {
    background-color: #999;
    }
    </style>
    <script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"> </script>
</head>
<body>
<?php //foreach ($students as $student):?>
<?php //echo $student->student_lname .'<br>';?>
<?php //endforeach;?>

<?php

$extra = 'mytable';
load::library('make_table');
$mytable = new Make_table();
$mytable->render($heads, $students, $extra);?>
<?php if ($page->next()):?>
<a href="<?php echo url::page("main/page/{$page->next_page()}");?>">Next</a>
<?php endif;?>
<a href="">click me</a>
<script>
$(document).ready(function() {
   $("a").click(function() {
     alert("Hello world!");
   });
 });
</script>
</body>
</html>