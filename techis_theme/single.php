<?php get_header(); ?>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post(); ?>
        <!-- アイキャッチ画像 -->
        <?php the_post_thumbnail('full'); ?>
        <!-- タイトル -->
        <?php the_title(); ?>
        <!-- 本文 -->
        <?php the_content(); ?>
        <!-- カテゴリ -->
        <?php if (has_category()) : ?>
            <span class="cat-data">
                <?php echo get_the_category_list(' '); ?>
            </span>
        <?php endif; ?>
<?php
    endwhile;
endif;
?>
<?php get_footer(); ?>