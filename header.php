<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My First Wordpress Theme</title>
		<?php wp_head(); ?>
	</head>

	<?php

		if( is_front_page() ):
			$myfirsttheme_classes = array('myfirst-class', 'my-class');
		else:
			$myfirsttheme_classes = array('not-myfirsttheme');
		endif;

	?>

	<body <?php body_class( $myfirsttheme_classes); ?>>

		<div class="container">
		
			<div class="row">
				
				<div class="col-xs-12">
					
					<nav class="navbar navbar-inverse">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="#">Rebel HeART</a>
					    </div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php 
									wp_nav_menu(array(
											'theme_location' => 'primary',
											'container' => false,
											'menu_class' => 'nav navbar-nav navbar-right'
											)
									);
							?>
						</div>
					  </div><!-- /.container-fluid -->
					</nav>
				
				</div>
				
				<div class="search-form-container">
					<?php get_search_form() ?>
				</div>

			</div>
			
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />