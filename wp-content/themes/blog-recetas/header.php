<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!--Let browser know website is optimized for mobile-->
    <?php if (is_single()) : ?>
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php else : ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php endif; ?>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<header>
    <nav class="nav-extended blue-custom">

        <?php if ( has_nav_menu( 'main' ) ) : ?>
            <div class="nav-wrapper hide-on-med-and-down">
                <?php wp_nav_menu( array('theme_location' => 'main')); ?>
            </div>
        <?php endif; ?>
    </nav>

    <div class="side-nav" id="mobile-menu">
        <h4 class="black-text truncate center-align"><?php bloginfo("name") ?></h4>
		<?php if ( has_nav_menu( 'main' ) ) : ?>
			<?php wp_nav_menu( array('theme_location' => 'main')); ?>
		<?php endif; ?>

		<?php if ( has_nav_menu( 'actions_mobile' ) ) : ?>
            <div class="fixed-action-btn horizontal click-to-toggle hide-on-large-only">
                <a class="btn-floating btn-large grey pulse">
                    <i class="material-icons">more_vert</i>
                </a>
				<?php wp_nav_menu( array('theme_location' => 'actions_mobile', 'container' => '')); ?>
            </div>
		<?php endif; ?>
    </div>

    <ul id="slide-out" class="side-nav">
        <li>
            <div class="user-view">
				<?php
				global $current_user;
				wp_get_current_user();
				?>
                <div class="background">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/profile-bg.jpg'); ?>">
                </div>
                <a href="<?php echo esc_url( get_edit_user_link( $current_user->ID ) ); ?>"><img class="circle" src="<?php echo esc_url( get_avatar_url( $current_user->ID )); ?>"></a>
                <a href="<?php echo esc_url( get_edit_user_link( $current_user->ID ) ); ?>"><span class="white-text text-lighten-2 name"><?php echo esc_attr($current_user->display_name); ?></span></a>
                <a href="<?php echo esc_url( get_edit_user_link( $current_user->ID ) ); ?>"><span class="white-text text-lighten-3 email"><?php echo esc_attr($current_user->user_email); ?></span></a>
            </div>
        </li>
		<?php if ( has_nav_menu( 'profile_1' ) ) : ?>
			<?php wp_nav_menu( array('theme_location' => 'profile_1')); ?>
		<?php endif; ?>
        <li>
            <div class="divider"></div>
        </li>
		<?php if ( has_nav_menu( 'profile_2' ) ) : ?>
			<?php wp_nav_menu( array('theme_location' => 'profile_2')); ?>
		<?php endif; ?>
    </ul>

</header>
