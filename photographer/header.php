<?php
/**
 * The header for our theme
 *
 * @package photographer
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/photos/logo.png" type="image/x-icon" />
    
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet" />

 
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
    <div class="header__container">
        <div class="header__logo-container">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/photos/logo.png" alt="Site Logo" class="header__logo" />
                <span class="header__logo-text"><?php bloginfo( 'name' ); ?></span>
            <?php endif; ?>
        </div>
        <ul class="menu__list">
            <li class="menu__item"><a href="<?php echo home_url(); ?>">Gallery</a></li>
            <li class="menu__item"><a href="<?php echo home_url(); ?>">Pricing</a></li>
            <li class="menu__item"><a href="<?php echo home_url(); ?>">Contact us</a></li>
        </ul>
    </div>
</header>
<div class="menu">  
    <div class="menu__container">
        <ion-icon name="menu-outline" class="menu-icon menu-icon--open" onclick="openMenu()"></ion-icon>
        <ion-icon name="close-outline" class="menu-icon menu-icon--close" onclick="closeMenu()"></ion-icon>
    </div>
    <nav class="menu__nav">
        <ul class="menu__list popup">
            <li class="menu__item"><a href="<?php echo get_permalink(get_page_by_path('#')); ?>">Gallery</a></li>
            <li class="menu__item"><a href="<?php echo get_permalink(get_page_by_path('#')); ?>">Pricing</a></li>
            <li class="menu__item"><a href="<?php echo get_permalink(get_page_by_path('#')); ?>">Contact us</a></li>
        </ul>
    </nav>
</div>
<?php
?>
