<!DOCTYPE html>
<!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>" />
	<?php $wl_theme_options = kadima_get_options(); ?>
	<?php if($wl_theme_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo esc_url($wl_theme_options['upload_image_favicon']); ?>" />
	<?php } ?>
	<?php
		if (is_home()) {
			echo '<meta http-equiv="x-dns-prefetch-control" content="on" />
			<link rel="dns-prefetch" href="//cdn.yunclever.com">
			<link rel="dns-prefetch" href="//analytics.yunclever.com">
			<link rel="dns-prefetch" href="//statics.yunclever.com">
			<link rel="dns-prefetch" href="//cdn.bootcss.com">
			<link rel="dns-prefetch" href="//use.typekit.net">
			<link rel="dns-prefetch" href="//static.addtoany.com">';
		} elseif (isset($_COOKIE['yc_visit_cookie'])) {
			echo '';
		}
		else {
			echo '<meta http-equiv="x-dns-prefetch-control" content="on" />
			<link rel="dns-prefetch" href="//cdn.yunclever.com">
			<link rel="dns-prefetch" href="//analytics.yunclever.com">
			<link rel="dns-prefetch" href="//statics.yunclever.com">
			<link rel="dns-prefetch" href="//cdn.bootcss.com">
			<link rel="dns-prefetch" href="//use.typekit.net">
			<link rel="dns-prefetch" href="//static.addtoany.com">';
		}
	?>
	<?php wp_head(); ?>
	<!--script src="https://use.typekit.net/onu7wui.js"></script>
	<script>//try{Typekit.load({ async: true });}catch(e){}</script-->
	<script type="text/javascript">
	  var _paq = _paq || [];
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
		var u="//analytics.yunclever.com/";
		_paq.push(['setTrackerUrl', u+'piwik.php']);
		_paq.push(['setSiteId', '11']);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>

</head>
<body <?php body_class(); ?>>
<div class="header">
	<div class="container" id="home">
	    <div class="header-bottom row">
			<div class="col-md-2">
				<div class="logo">
					<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php if($wl_theme_options['upload_image_logo']){ ?>
						<img src="<?php echo $wl_theme_options['upload_image_logo']; ?>" style="height:<?php if($wl_theme_options['height']!='') { echo $wl_theme_options['height']; }  else { "80"; } ?>px; width:<?php if($wl_theme_options['width']!='') { echo $wl_theme_options['width']; }  else { "200"; } ?>px;" />
						<?php } else {
							echo get_bloginfo('name');
						} ?>
					</a>
				</div>
			</div>
			<div class="col-md-10">
				<div class="top-menu-first">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
							<span class="sr-only"><?php _e('Toggle navigation','kadima');?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="row">
						<div class="col-md-4 pull-right" style="padding: 0px;">						
							<form method="post" class="form-inline pull-right" action="<?php echo home_url( '/' ); ?>" style="margin-top: 6px;">
								<div class="form-group">						
									<label class="sr-only" for="s">Search for:</label>
									<input type="text" name="s" id="s" class="form-control" placeholder="<?php the_search_query(); ?>"/>
								</div>
								<button type="submit" class="btn btn-default">Search</button>
							</form>
						</div>
						<div class="col-md-8">
							<div id="menutop" class="collapse navbar-collapse pull-right">
								<?php 
									wp_nav_menu( array(
										'theme_location' => 'secondary',
										'menu_class' => 'nav cl-effect-5',
										'walker' => new kadima_nav_walker(),
									) );
								?>
							</div>
						</div>						
					</div>
				</div>
				<div class="top-menu-sec">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
							<span class="sr-only"><?php _e('Toggle navigation','kadima');?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div id="menu" class="collapse navbar-collapse " style="float: left;">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_class' => 'nav',
								'walker' => new kadima_nav_walker(),
							) );
						?>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
