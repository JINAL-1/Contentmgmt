<?php
/**
 * 					The header for our theme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset')?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- import custom css  -->
	<title>Jinal's Ecomm Site</title>
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(home_url('wp-content/themes/assignmentone/assets/css/custom-style.css')); ?>">
</head>
<body <?php body_class(); ?>>
	<header>
		<nav>
			<a href="<?php echo esc_url(home_url()); ?>">
				<img src="<?php echo esc_url(home_url('wp-content/uploads/2021/02/logo.jpg'));?>" alt="logo" height="250px" width="250px">
			</a>
			<?php
				wp_nav_menu(array(
					'menu' => 'header-main',
					'theme_location' => '',
					'depth' => 2,
					'fallback_cd' => false,
				));
			?>
		</nav>
	</header>
