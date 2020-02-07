<?php 
function my_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('main_js', get_template_directory_uri(). '/main.js', array() );
    wp_enqueue_script('swiper_js', get_template_directory_uri(). '/dist/swiper.js', array() );
    wp_enqueue_style('my_styles', get_template_directory_uri(). '/css/style.css', array() );
    wp_enqueue_style('my_swiper', get_template_directory_uri(). '/dist/swiper.css', array() );
}
add_action('wp_enqueue_scripts','my_enqueue_scripts');

// ヘッダー、フッターのカスタムメニュー化
register_nav_menus(
    array(
        'place_global_left' => 'グローバルレフト',
        'place_global_right' => 'グローバルライト',
        'place_global_drawer' => 'グローバルドロワー',
        'place_footer' => 'フッターナビ',
    )
    );

//メイン画像上にテンプレートごとの文字列を表示
function get_main_title() {
    if ( is_singular('post')):
        $category_obj = get_the_category();
        return $category_obj[0]->name;
    elseif (is_page()):
        return get_the_title();
    //アーカイブページの名前を出力//
    elseif (is_category()):
        return single_cat_title();
    endif;
}

//子ページを取得する関数
function get_child_pages( $number = -1) {
    $parent_id = get_the_ID();
    $args = array(
        'posts_per_page' => $number,
        'post_type' => 'page',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'post_parent' => $parent_id,
    );
    $child_pages = new WP_Query( $args );
    return $child_pages;

}

//アイキャッチ画像を利用できるようにする
add_theme_support( 'post-thumbnails');

//全幅・幅広を有効化
add_theme_support( 'align-wide');

add_image_size( 'course', 482, 321, true);

add_image_size( 'menu', 482, 321, true);

//抜粋機能を固定ページに使えるよう設定
add_post_type_support( 'page', 'excerpt');

//各テンプレートごとのメイン画像を表示
function get_main_image() {
    if (is_page()):
        return get_the_post_thumbnail( $post->ID, 'detail');
    elseif (is_category( 'news') || is_singular('post') ):
        return '<img src="' . get_template_directory_uri(). '/image/news-black.jpg" />';
    else: 
        return '<img src="' . get_template_directory_uri(). '/image/bar.jpg" />';
    endif;
}

//特定の記事を抽出する関数
function get_specific_posts( $post_type, $taxonomy = null, $term = null, $number = -1) {
    $args = array(
        'post_type' => $post_type,
        'tax_query' =>array(
            array(
                'taxonomy' => $taxonomy,
                'field' => 'slug',
                'terms' => $term,
            ),
        ),
        'posts_per_page' => $number,
    );
    $specific_posts = new WP_Query( $args );
    return $specific_posts;
}

//ウィジェット機能を有効化
function theme_widgets_init() {
    register_sidebar( array(
        'name' => 'サイドバーウィジェットエリア',
        'id' => 'primary-widget-area',
        'description' => '固定ページのサイドバー',
        'before_widget' => '<div class="side-inner>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="sidebar-title">',
        'after_title' => '</h2>',
    ));
}
add_action( 'widgets_init', 'theme_widgets_init');
