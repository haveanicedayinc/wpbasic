<?php get_header(); ?>

<?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      global $post;
      //カスタムフィールド値
      $postCf     = get_fields($post->ID);
      //投稿のURL
      $postUrl = get_permalink();
      //投稿タイトル
      $postTitle  = get_the_title();
      //投稿日
      $postDate     = get_the_date("Y.n.j", $post->ID);

      //所属カテゴリ
      $catList    = get_the_category();
      //所属タグ
      $tagList    = get_the_tags();

      //アイキャッチ画像
      $thumbnailPath  = "";
      $thumbnailId    = get_post_thumbnail_id($post->ID);
      $image          = wp_get_attachment_image_src($thumbnailId, "full");
      $imagePath      = $image[0];
      if (empty($imagePath) === false) {
        $thumbnailPath = $imagePath;
      }

  ?>


  <?php endwhile; ?>

<?php endif;?>





<?php get_footer(); ?>
