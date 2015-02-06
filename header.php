<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
  
			<div class="vcubar">
			    <div class="inner-vcubar">
			      <a href="http://vcu.edu" target="_blank" class="vcu"><?php include (TEMPLATEPATH . '/library/images/svg/logo-vcu.svg'); ?></a>
			      <a href="http://vcu.edu" target="_blank" class="vcu-fallback"></a>
			      <a href="http://arts.vcu.edu" target="_blank" class="vcuarts"><?php include (TEMPLATEPATH . '/library/images/svg/logo-vcuarts.svg'); ?></a>
			      <a href="http://arts.vcu.edu" target="_blank" class="vcuarts-fallback"></a>
			    </div>
 			 </div>

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<p id="logo" class="h2" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>


					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					'container' => false,                           // remove nav container
    					'container_class' => 'menu',                 // class of container (should you choose to use it)
    					'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					'menu_class' => 'nav top-nav',               // adding custom nav class
    					'theme_location' => 'main-nav',                 // where it's located in the theme
    					'before' => '',                                 // before the menu
        			'after' => '',                                  // after the menu
        			'link_before' => '',                            // before each link
        			'link_after' => '',                             // after each link
        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>


<?php
// // Wrap in a function, for later output;
// function wpse47989_list_pages() {
//     // Get an array of pages using default arguments
//     // See Codex for list of arguments
//     $wpse47989_pages = get_pages();

//     // print_r($wpse47989_pages);

//     // Open the unordered list
//     $page_list = '<ul>';

//     // Loop through the results, and output an HTML list
//     foreach ( $wpse47989_pages as $wpse47989_page ) {
//         // Open the list item
//         $page_list .= '<li>';
//         // Open the link
//         $page_list .= '<a href="#post-' . $wpse47989_page->ID . '">';
//         // Link anchor text (post slug)
//         $page_list .= $wpse47989_page->post_name;
//         // Close the link
//         $page_list .= '</a>';
//         // Close the list item
//         $page_list .= '</li>';
//     }

//     // Close the unordered list
//     $page_list .= '</ul>';

//     return $page_list;
// }

// echo wpse47989_list_pages();

?>

            <?php 
            $args = array(
              'child_of'     => 0,
              'depth'        => 0,
              'echo'         => 1,
              'exclude'      => '',
              'include'      => '',
              'link_after'   => '',
              'link_before'  => '',
              'post_type'    => 'page',
              'post_status'  => 'publish',
              'sort_column'  => 'menu_order, post_title',
                    'sort_order'   => '',
              'title_li'     => __(''), 
              'walker' => new skips_walker()
            ); 
            wp_list_pages( $args ); 
            ?>

					</nav>


				</div>

			</header>
