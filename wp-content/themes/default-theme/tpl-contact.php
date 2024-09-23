<?php
/**
 * Template Name: Liên hệ
 */
    get_header();
?>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php echo do_shortcode('[advanced_form form="FORM_ID_OR_KEY"]') ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>