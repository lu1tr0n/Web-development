<?php get_header(); ?>
<body <?php body_class(); ?>>
<div id="container">
    <div id="header">
        <div id="header-info-wrap">
            <h1 id="site-title"><?php bloginfo( 'name' ); ?></h1>ss
            <h4 id="site-description"><?php bloginfo( 'description' ); ?></h4>
        </div>
    </div>
    <nav id ="nav">
        <?php 
            wp_nav_menu( array(
                'theme_location' =>  'menu-primary',
                'container'      =>  false,
                'fallback_cb'    =>  'wp_page_menu' 
            ) );

        ?>
    </nav>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>
        <?php the_content(); ?>
    </div>

<?php endwhile; else: ?>

    <h2> Publicación o página no encontrada! </h2>

<?php endif; ?>

<div id="bottom-navi">
    <div><?php next_posts_link( '&laquo; Publicaciones más antiguas' ); ?></div>
    <div><?php previous_posts_link( 'Publicaciones más nuevas &raquo;' ); ?></div>
</div>
<div id="sidebar" >
    <?php if ( is_active_sidebar( 'sidebar_widgets'  ) ) : ?>
        <div id="sidebar-widgets-wrap">
            <?php dynamic_sidebar( 'sidebar_widgets' ); ?>
        </div>
    <?php endif; ?>
</div>