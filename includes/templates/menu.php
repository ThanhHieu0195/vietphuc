<?php
$classMenu = 'menu-overflow';
$checkOnePage = includes\Bootstrap::bootstrap()->helper->checkOnePage();
if ( !$checkOnePage ) {
    $classMenu .= ' js-navbar affix-top';
}
?>
<div class="<?php echo esc_attr($classMenu) ?>" id="contenerDeco">
	<div class="sidelong-menu">
		<div class="contenu-menu">
			<div class="background-menu"><img src="<?php echo get_template_directory_uri() ?>/assets/images/background-menu.png" alt="Việt Phúc Menu"></div>
			<a href="/" class="btn-logo" id="btnLogo">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/title-menu.png" />
			</a>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
                'menu_class' => 'sidelong-nav',
                'items_wrap' => '<div class="%2$s">%3$s</div>'
			) );
			?>

		</div>
	</div>
	<div class="rorate" id="backDeco"></div><div class="clearfix"></div>
</div>

<div class="click-capture"></div>

<!-- Navbar -->
<header class="navbar navbar-2 boxed js-navbar">

    <a class="brand" href="./">
        <img class="brand-img" alt="" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png">
    </a>
    <address class="navbar-address visible-lg">Hotline: <span class="text-dark-gray">(028) 32 45 789</span></address>
    <div class="social-list hidden-xs">
        <a href="" class="fa fa-facebook"></a>
        <a href="" class="fa fa-google-plus"></a>
        <a href="" class="fa fa-linkedin"></a>
        <a href="" class="fa fa-twitter"></a>
    </div>
</header>
