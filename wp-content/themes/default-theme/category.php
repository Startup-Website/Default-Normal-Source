<?php
$id = get_queried_object_id();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$list = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 3,
    'cat' => $id,
    'paged' => $paged,
]);
while ($list->have_posts()) : $list->the_post()
    ?>
    <a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail() ?>
        <?php echo get_the_title(); ?>
        <?php echo get_the_excerpt() ?>
        <?php echo get_the_date() ?>
        <?php echo get_the_time() ?>
    </a>
<?php endwhile;
wp_reset_query(); ?>

<div class="pagenavi">
    <?php if (function_exists('devvn_wp_corenavi')) devvn_wp_corenavi($list); ?>
</div>