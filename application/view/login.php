<!doctype html>
<head>
	<title></title>
</head>
<body>
	
	<div>
	<?php 
		if (isset($result))
		{
			echo $result.'<br>';
		}


	?>

	</div>
	<form action="<?php echo url::page('user_manager/validate_user');?>" method="post">
		<div>
			<label for="username">Username:</label>
			<input type="text" name="username" id="username" value="" tabindex="1" />
		</div>

		<div>
			<label for="password">password:</label>
			<input type="password" name="password" id="password" value="" tabindex="1" />
		</div>
	
		
			<input type="submit" value="Submit" />
		</div>
	</form>
	<div><p>not registered? Then <a href="<?php echo url::page('user_manager/reg_frm');?>"> register here</a></div>
</body>
</html>