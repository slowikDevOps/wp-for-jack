<?php
// Rejestracja CPT
add_action('init', function() {
    register_post_type('nieruchomosci', [
        'labels' => [
            'name' => 'Nieruchomości',
            'singular_name' => 'Nieruchomość',
        ],
        'public' => true,
        'menu_icon' => 'dashicons-admin-home',
        'supports' => ['title','editor','thumbnail','excerpt'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'nieruchomosci'],
    ]);
});

// Meta boxy (proste pola)
add_action('add_meta_boxes', function() {
    add_meta_box('nieruchomosci_fields','Dane nieruchomości','nieruchomosci_fields_callback','nieruchomosci','normal','default');
});

function nieruchomosci_fields_callback($post){
    $cena = get_post_meta($post->ID,'cena',true);
    $pow = get_post_meta($post->ID,'powierzchnia',true);
    $lok = get_post_meta($post->ID,'lokalizacja',true);
    $pokoje = get_post_meta($post->ID,'pokoje',true);
    wp_nonce_field('nieruchomosci_nonce','nieruchomosci_nonce_field');
    echo '<p><label>Cena (PLN): <input type="number" name="cena" value="'.esc_attr($cena).'" style="width:200px"></label></p>';
    echo '<p><label>Powierzchnia (m2): <input type="number" name="powierzchnia" value="'.esc_attr($pow).'" style="width:200px"></label></p>';
    echo '<p><label>Lokalizacja: <input type="text" name="lokalizacja" value="'.esc_attr($lok).'" style="width:100%"></label></p>';
    echo '<p><label>Ilość pokoi: <input type="number" name="pokoje" value="'.esc_attr($pokoje).'" style="width:100px"></label></p>';
}

// Save meta
add_action('save_post', function($post_id){
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!isset($_POST['nieruchomosci_nonce_field']) || !wp_verify_nonce($_POST['nieruchomosci_nonce_field'],'nieruchomosci_nonce')) return;
    if (array_key_exists('cena', $_POST)) update_post_meta($post_id,'cena',sanitize_text_field($_POST['cena']));
    if (array_key_exists('powierzchnia', $_POST)) update_post_meta($post_id,'powierzchnia',sanitize_text_field($_POST['powierzchnia']));
    if (array_key_exists('lokalizacja', $_POST)) update_post_meta($post_id,'lokalizacja',sanitize_text_field($_POST['lokalizacja']));
    if (array_key_exists('pokoje', $_POST)) update_post_meta($post_id,'pokoje',sanitize_text_field($_POST['pokoje']));
});

// Enqueue style
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('agencja-style', get_stylesheet_directory_uri() . '/style.css');
});
