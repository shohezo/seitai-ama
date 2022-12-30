<?php get_header(); ?>
<div class="ly_section" id="blog-archive">
    <div class="ly_inner hp_flex">
        <div class="bl_blog_wrapper">
            <h2 class="el_section_ttl">新着一覧</h2>
            <!-- メインループ始まり -->
            <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <a href="<?php the_permalink();?>">
                <div class="bl_blog_card hp_flex">
                    <figure class="bl_blog_thumbnail">
                        <?php the_post_thumbnail();?>
                        <?php the_category(); ?>
                    </figure>
                    <div class="bl_blog_body">
                        <p class="bl_blog_date"><?php echo get_the_date('Y.m.d'); ?></p>
                        <h3 class="bl_blog_ttl"><?php the_title(); ?></h3>
                        <p class="bl_blog_excerpt">
                            <?php
                            $p = get_post(get_the_ID());
                            $content = strip_shortcodes( $p->post_content );
                            echo '<p>' .wp_html_excerpt($content, 100, '[...]'). '</p>'; 
                            ?>
                        </p>
                    </div>
                </div>
            </a>
            <?php endwhile;endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>