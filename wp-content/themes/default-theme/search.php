<?php
get_header();

?>
    <section id="search-page">
        <?php
        $s = get_search_query();
        $args = array(
            's' => $s
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {

            while ($the_query->have_posts()) {
                $the_query->the_post();
                ?>
                <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail() ?>
                    <?php echo get_the_title(); ?>
                    <?php echo get_the_excerpt() ?>
                    <?php echo get_the_date() ?>
                    <?php echo get_the_time() ?>
                </a>
                <?php
            } ?>
            <?php
        } else {
            ?>
            <h3>Không tìm thấy kết quả</h3>
            <p>Rất xin lỗi, nhưng không có nội dung nào phù hợp với yêu cầu tìm kiếm của bạn. Vui
                lòng
                thử
                lại với một số từ khóa khác nhau.</p>
        <?php } ?>
    </section>
<?php
get_footer()
?>