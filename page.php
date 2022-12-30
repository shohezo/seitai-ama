<?php get_header(); ?>
<!-- ループ始まり -->
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div class="ly_inner">
    <?php the_category(); ?>
    <h2 class="el_sectionTtl hp_txtLeft"><?php the_title(); ?></h2>
    <p class="bl_blog_date"><?php echo get_the_date('Y.m.d'); ?></p>
    <figure class="bl_blog_thumbnail">
        <?php the_post_thumbnail();?>
    </figure>
    <?php the_content(); ?>
</div>

<?php endwhile;endif; ?>
<!-- ループ終わり -->
<?php get_footer(); ?>