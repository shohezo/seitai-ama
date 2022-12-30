<?php get_header(); ?>
<div class="ly_section hp_ptLg hp_pbLg" id="blog-archive">
    <div class="ly_inner">
        <div class="hp_mbMd">
            <h2 class="el_section_ttl hp_mbSm">お知らせ</h2>
        </div>
        <ul class="bl_blog_list hp_mtSm">
            <!-- メインループ始まり -->
            <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <a class="bl_blog_card" href="<?php the_permalink();?>">
                <li class="bl_blog_item hp_flex hp_column_sp">
                    <!-- <div class="bl_blog_thumbnail">
                        <?php if( has_post_thumbnail()): ?>
                        <figure>
                            <?php the_post_thumbnail(); ?>
                        </figure>
                        <?php else: ?>
                        <figure>
                            <img src="<?php bloginfo('template_url');?>/img/dummy.jpg" alt=”ダミー画像”>
                        </figure>
                        <?php endif; ?>
                    </div> -->
                    <div class="bl_blog_body">
                        <p class="bl_blog_date"><?php echo get_the_date('Y.m.d'); ?></p>
                        <h3 class="bl_blog_ttl"><?php
                            if(mb_strlen($post->post_title)>20) {
                            $title= mb_substr($post->post_title,0,20) ;
                                echo $title . '...';
                            } else {
                                echo $post->post_title;
                            }
                            ?></h3>
                        <!-- <p class="bl_blog_excerpt"><?php
                                        $p = get_post(get_the_ID());
                                        $content = strip_shortcodes( $p->post_content );
                                        echo '<p>' .wp_html_excerpt($content, 50, '[...]'). '</p>'; 
                                        ?></p> -->
                    </div>
                    <!-- <div class="post-categories">
                        <?php
                          $category = get_the_category(); 
                           echo $category[0]->cat_name;
                            ?>
                    </div> -->
                </li>
            </a>
            <?php endwhile;endif; ?>
        </ul>
        <!-- メインループ終わり -->
        <!-- ページネーションの実装 -->
        <?php the_posts_pagination(
        array(
            'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
            'prev_next'     => false, // 「前へ」「次へ」のリンクを表示する場合はtrue
            'prev_text' => '<i class="fa fa-caret-left"></i>', // 「前へ」リンクのテキスト
            'next_text' => '<i class="fa fa-caret-right"></i>', // 「次へ」リンクのテキスト
            'type'          => 'list', // 戻り値の指定 (plain/list)
            )
        ); ?>
        <!-- ページネーションの実装 ここまで -->
    </div>
</div>
<?php get_footer(); ?>