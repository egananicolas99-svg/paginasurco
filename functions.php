<?php
// functions.php - Grilli WP


// Helper para rutas de assets
function grilli_asset($path = '') {
    return get_template_directory_uri() . '/' . ltrim($path, '/');
}

// Soportes del tema
function grilli_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    register_nav_menus(array(
        'primary' => __('Menú Principal', 'grilli-wp'),
    ));
}
add_action('after_setup_theme', 'grilli_setup');

// Encolar estilos y scripts (usa filemtime para versionado local)
function grilli_enqueue_assets() {
    // Google Fonts (misma que el HTML original)
    wp_enqueue_style('grilli-google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap', array(), null);

    // Estilo principal del theme (style.css header)
    wp_enqueue_style('grilli-style', get_stylesheet_uri(), array('grilli-google-fonts'), filemtime(get_stylesheet_directory() . '/style.css'));

    // Estilos del template (assets/css/style.css)
    $css_file = get_template_directory() . '/assets/css/style.css';
    if ( file_exists( $css_file ) ) {
        wp_enqueue_style('grilli-main', get_template_directory_uri() . '/assets/css/style.css', array('grilli-style'), filemtime($css_file));
    }

    // Ionicons (si lo usa la plantilla)
    wp_enqueue_script('grilli-ionicons', 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js', array(), null, true);

    // Script principal
    $js_file = get_template_directory() . '/assets/js/script.js';
    if ( file_exists( $js_file ) ) {
        wp_enqueue_script('grilli-script', get_template_directory_uri() . '/assets/js/script.js', array(), filemtime($js_file), true);
    }
}
add_action('wp_enqueue_scripts', 'grilli_enqueue_assets');

// Widgets (sidebar)
function grilli_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar Principal', 'grilli-wp'),
        'id' => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'grilli_widgets_init');
