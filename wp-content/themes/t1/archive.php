<?php get_header(); ?>


<?php
  if ( have_posts() ) :
    $postIndex = 0;
    while ( have_posts() ) : the_post();
      $postIndex++;
      //投稿タイトル
      $postTitle  = $post->post_title;
      //投稿日
      $postDate   = date('Y.m.d', strtotime($post->post_date));
      //パーマリンク
      $postPermalink    = get_the_permalink($post->ID);

      //アイキャッチ画像
      $thumbnailPath  = "";
      $thumbnailId    = get_post_thumbnail_id($post->ID);
      $image          = wp_get_attachment_image_src($thumbnailId, "full");
      $thumbnailPath      = $image[0];
  ?>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  記事がありません
<?php endif; ?>



<?php get_footer(); ?>
