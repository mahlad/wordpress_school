<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
	<title><?php
		wp_title('|', true,'right'); 
		$site_description=get_bloginfo('description','display');
		if($site_description&&(is_home()||is_front_page()))
			echo $site_description.'-';
		echo get_bloginfo('name');
		 ?>
	</title>
</head>
<body>
<?php 
$test=array(
'menu'=>'منو اصلی',
'echo'     =>'true',
'container'=>'nav'
	);
wp_nav_menu($test);
 ?>
</body>
</html>