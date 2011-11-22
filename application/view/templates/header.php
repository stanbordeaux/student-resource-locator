<!DOCTYPE html>
	<head>
		<title></title>
		<meta charset="utf-8" />
		<!-- base stylesheets -->
		<link rel="stylesheet" type="text/css" href="<?php url::base();?>css/resources/css/960/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php url::base();?>css/resources/css/960/grid.css" />
		<!-- theme stylesheets -->
        <link rel="stylesheet" href="<?php url::base();?>css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php url::base();?>css/resources/css/text.css" />
		<link rel="stylesheet" type="text/css" href="<?php url::base();?>css/resources/css/default.css" media="screen, projection" />

        <link href='http://fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css' />
		<!-- scripts (jquery) -->
		<script src="<?php url::base();?>css/resources/scripts/jquery-1.4.2.min.js" type="text/javascript"></script>
		<script src="<?php url::base();?>css/resources/scripts/jquery-ui-1.8.custom.min.js" type="text/javascript"></script>
		<script src="<?php url::base();?>css/resources/scripts/jquery.ui.selectmenu.js" type="text/javascript"></script>
		<!-- scripts (custom) -->
		<script src="<?php url::base();?>css/resources/scripts/falcon.js" type="text/javascript"></script>
        
        
		<script type="text/javascript">
			$(document).ready(function () {
				$("#published").datepicker({
					showOn: 'button',
					buttonImage: '<?php url::base();?>resources/images/calendar.png',
					buttonImageOnly: true
				});

				$("select").selectmenu({
					style: 'dropdown',
					width: 200,
					menuWidth: 200, 
					icons: [
						{ find: '.locked', icon: 'ui-icon-locked' },
						{ find: '.unlocked', icon: 'ui-icon-unlocked' },
						{ find: '.folder-open', icon: 'ui-icon-folder-open' }
					]
				});

				$("input[type=file]").file({
					image: "<?php url::base();?>resources/images/browse.gif",
					image_height: 24,
					image_width: 71,
					width: 250,
					text: 'Browse'
				});

				$("#box_tabs_example").tabs();
				$("input:submit, input:reset").button();
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function () {
				$("#statistics").tabs();
				$("table[class='chart']").bar();
			});
		</script>
        
  <script type="text/javascript" src="<?php echo url::base();?>js/tinytable.js"></script>
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
</head>
<body>
