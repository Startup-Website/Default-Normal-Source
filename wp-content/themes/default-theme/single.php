<?php
get_header();

?>
EPAL Solution - Team Website Info - Nội dung trang chi tiết.
<?php while (have_posts()): the_post();
the_content();
endwhile;  ?>
<?php get_footer(); ?>