<!DOCTYPE HTML>
<html dir="<?php bloginfo('text_direction'); ?>" xml:lang="<?php bloginfo('language'); ?>">
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title>
            <?php
                global $page, $paged;
                wp_title('|', true, 'right');
                bloginfo('name');
                $site_description = get_bloginfo('description', 'display');
                if ( $site_description && ( is_home() || is_front_page()))
                    echo " | $site_description";
                if ($paged >= 2 || $page >= 2)
                    echo ' | ' . sprintf( __('Page %s'), max($paged, $page));
            ?>
        </title>
        <meta http-equiv="Content-language" content="<?php bloginfo('language'); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favico.gif" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/pagenavi-css.css" />
        <!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/ie.css" /><![endif]-->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>"/>
        <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
        <?php
			wp_enqueue_script('jquery');
			wp_enqueue_script('lazyload', get_template_directory_uri() . '/js/jquery.lazyload.mini.js', 'jquery', false);
            wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', 'jquery', false);
		?>
        <?php wp_head(); ?>
        <!--GOOGLE ANALYTICS-->
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-34163861-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
<!--GOOGLE ANALYTICS-->
	</head>
	<body>
        <div class="wrapper">
            <div class="header clear">
                <h1><a href="<?php bloginfo('home'); ?>"><img src="http://www.equus.com.br/blog/logo-blog.png" alt="Equus" style="margin:-20px 0 20px 0" /></a></h1>

                <?php wp_nav_menu(array('menu' => 'Header', 'theme_location' => 'Header', 'depth' => 1, 'container_class' => 'menu')); ?>

                <?php get_search_form(); ?>
                
    </div>
            <div class="middle clear">
