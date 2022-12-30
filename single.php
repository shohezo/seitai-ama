<?php get_header(); ?>
<div class="ly_section" id="single-blog">
    <div class="ly_inner hp_flex hp_ptMd hp_column_tb">
        <main>
            <!-- ループ始まり -->
            <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <!-- <div class="bl_blog_category">
                <?php
                $category = get_the_category(); 
                    echo $category[0]->cat_name;
                ?>
            </div> -->
            <p class="bl_blog_date">
                <time datetime="<?php echo esc_attr(get_the_date( DATE_W3C ));?>">
                    <?php echo esc_html(get_the_date('Y.m.d')); ?>
                </time>
            </p>
            <h2 class="el_single_ttl"><?php the_title(); ?></h2>
            <div class="bl_blog_cont">
                <?php the_content(); ?>
            </div>
            <?php endwhile;endif; ?>
            <!-- ループ終わり -->
            <p class="el_backBtn hp_mbMd"><a href="#" onclick="history.back(); return false;">
                    < 一覧へ戻る</a>
            </p>
        </main>
    </div>
</div>
<?php get_footer(); ?>