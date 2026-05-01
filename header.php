<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
<header class="site-header">
    <div class="header-container container">

        <nav class="nav">
           <?php if (has_custom_logo()) : ?>
                 <?php the_custom_logo(); ?>
            <?php endif; ?>
            <div class="nav__menu" id="nav-menu">
                <?php get_template_part('inc/nav'); ?>
            </div>

            <!-- MOBILE TOGGLE -->
            <button class="menu-toggle nav__toggle" id="nav-toggle" aria-label="Toggle menu">
                <svg xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24"
                    viewBox="0 0 24 24"
                    style="fill: rgb(0, 0, 0);">
                    <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
                </svg>
            </button>

        </nav>
    </div>
</header>