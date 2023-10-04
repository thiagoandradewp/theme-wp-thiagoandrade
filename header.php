<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php 
    $theme_url = get_template_directory_uri();
    $images_path = '/assets/images';
    $images_url = $theme_url . $images_path;
?>

<header class="theme-header">
    <div class="theme-header_container">
        <div class="theme-header-contents">
            <div class="theme-header-logo">
            <img src="<?php echo $images_url ?>/THIAGO ANDRADE FINAL_ (18).png" width="230" height="180" alt="Thiago Andrade">
            </div>
            <nav class="theme-header-menu">
                <ul>
                    <li>Home</li>
                    <li>Sobre</li>
                    <li>Contato</li>
                </ul>
            </nav>
        </div>

    </div>
</header>
