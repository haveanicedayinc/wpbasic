<?php
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

//カノニカルURL対応
remove_action('wp_head', 'rel_canonical');

/**************

管理画面

***************/
//ACF Options Page の設定
if( function_exists('acf_add_options_page') ) {
  // acf_add_options_page(
  //   array(
  //     'page_title' => 'トップページ設定', // ページタイトル
  //     'menu_title' => 'トップページ設定', // メニュータイトル
  //     'menu_slug' =>  'option_toppage_setting', // メニュースラッグ
  //     'capability' => 'edit_posts',
  //     'redirect' => false
  //   )
  // );
}
//

//カスタム投稿
function create_post_type() {

  register_post_type( 'news', // URLになる部分
    array(
      'label' => 'お知らせ', // 管理画面の左メニューに表示されるテキスト
      'labels' => array(
      'all_items' => 'お知らせ一覧'// 管理画面の左メニューの下層に表示されるテキスト
    ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 1,
      'supports' => array(
        'title', // 記事タイトル
        'editor', // 記事本文
        'thumbnail', // アイキャッチ画像
        'author', //投稿者
      ),
    )
  );
  //カテゴリタイプの設定（カスタムタクソノミーの設定）
  register_taxonomy(
    'news_cat', //カテゴリー名（任意）
    'news', //カスタム投稿名
    array(
      'hierarchical' => true, //カテゴリータイプの指定
      'update_count_callback' => '_update_post_term_count',
      //ダッシュボードに表示させる名前
      'label' => 'お知らせカテゴリ',
      'public' => true,
      'show_ui' => true
    )
  );
}
add_action( 'init', 'create_post_type' );

//グローバルメニュー登録
register_nav_menu('header-navi', 'ヘッダーナビ' );
//グローバルメニュー登録
register_nav_menu('footer-navi', 'フッターナビ' );


//モバイル判定
function is_mobile(){
  $useragents = array(
      'iPhone', // iPhone
      'iPod', // iPod touch
      'Android', // 1.5+ Android
      'dream', // Pre 1.5 Android
      'CUPCAKE', // 1.5+ Android
      'blackberry9500', // Storm
      'blackberry9530', // Storm
      'blackberry9520', // Storm v2
      'blackberry9550', // Storm v2
      'blackberry9800', // Torch
      'webOS', // Palm Pre Experimental
      'incognito', // Other iPhone browser
      'webmate' // Other iPhone browser
  );
  $pattern = '/'.implode('|', $useragents).'/i';
  return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}


?>
