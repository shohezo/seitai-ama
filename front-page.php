<?php get_header(); ?>
<?php
/* 
Template Name: フロントページ
*/
?>

<div class="ly_fv">
    <img class="el_fv_img" src="<?php bloginfo(
        "template_url"
    ); ?>/img/fv01.jpg" alt="整体をしている様子" />
    <div class="el_icon_wrapper">
        <div class="el_icon">
            <a href="https://www.instagram.com/hongoekimaeseitai_ama/" target="_blank" rel="noopener noreferrer"><img
                    src="<?php bloginfo(
                        "template_url"
                    ); ?>/img/icon_insta.png" alt="インスタグラムのリンクアイコン" /></a>
        </div>
        <div class="el_icon">
            <a href="https://www.facebook.com/seitaiama" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo(
                        "template_url"
                    ); ?>/img/icon_fb.png" alt="フェイスブックのリンクアイコン" /></a>
        </div>
        <div class="el_icon">
            <a href="https://lin.ee/DtgJo6Z" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo(
                    "template_url"
                ); ?>/img/icon_line.png" alt="LINEのリンクアイコン" /></a>
        </div>
    </div>
    <div class="bl_fv_copy">
        <div class="bl_fv_copy_main" data-aos="fade-right" data-aos-duration="3000">身体<span>と</span>心<span>を</span>整える
        </div>
        <div class="bl_fv_copy_txt">AMAは整体を通じて</div>
        <div class="bl_fv_copy_txt">あなたの生活をサポートする</div>
        <div class="bl_fv_copy_txt">本郷のリラクゼーション整体サロンです。</div>
    </div>

</div>
<section class="ly_section hp_ptLg" id="blog">
    <div class="ly_inner">
        <h2 class="el_section_ttl">News</h2>
        <span class="el_section_ttl_sub hp_mbSm">お知らせ</span>
        <div class="bl_blog_list hp_ptSm">
            <!-- メインループ始まり -->
            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
            <a class="bl_blog_card" data-aos="fade-up" href="<?php the_permalink(); ?>">
                <!-- <div class="bl_blog_thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div> -->
                <div class="bl_blog_body hp_flex hp_jcsb">
                    <p class="bl_blog_date"><?php echo get_the_date(
                        "Y.m.d"
                    ); ?></p>
                    <p class="bl_blog_ttl"><?php if (
                        mb_strlen($post->post_title) > 20
                    ) {
                        $title = mb_substr($post->post_title, 0, 20);
                        echo $title . "...";
                    } else {
                        echo $post->post_title;
                    } ?></p>
                    <!-- <p class="bl_blog_excerpt">
                        <?php
                        $p = get_post(get_the_ID());
                        $content = strip_shortcodes($p->post_content);
                        echo "<p>" .
                            wp_html_excerpt($content, 20, "[...]") .
                            "</p>";
                        ?>
                    </p> -->
                </div>
            </a>
            <?php
                endwhile;
            endif; ?>
        </div>
    </div>
    <a href="<?php bloginfo(
        "url"
    ); ?>/news" class="el_btn hp_mtSm"><span>VIEW MORE</span></a>
</section>
<section class="ly_section hp_ptLg" id="concept">
    <div class="ly_inner">
        <h2 class="el_section_ttl">Concept</h2>
        <span class="el_section_ttl_sub hp_mbSm">私たちの想い</span>
        <div class="bl_section hp_flex hp_ptSm hp_column_tb">
            <figure class="bl_section_imgWrapper">
                <img src="<?php bloginfo(
                    "template_url"
                ); ?>/img/concept00.jpg" alt="ヨガのレッスン風景" />
            </figure>
            <div class="bl_section_body">
                <h3 class="bl_section_header hp_mb30" data-aos="fade-up">
                    10年先のカラダのために
                </h3>
                <p class="bl_section_txt">
                    本郷駅前整体アマと併設のYOGA AMAでは、
                    西洋、東洋、自然療法、ヨガ哲学などの療法や思想を統合した視点から、日常における姿勢・動作・食事・睡眠・ストレスなどを見直しし、病気や不調を未然に防ぐチカラを育てる、健康長寿のための包括的なカラダのケアを提案しています。<br>
                    不調の原因を突き止めて解消し、日常的なセルフケアやヨガ、ワークアウトによってカラダとココロの機能を向上させていきましょう。
                </p>
            </div>
        </div>
    </div>
</section>
<section class="ly_section hp_ptLg" id="beginner">
    <div class="ly_inner">
        <h2 class="el_section_ttl">For Beginner</h2>
        <span class="el_section_ttl_sub hp_mbSm">初めての方へ</span>
        <div class="bl_section hp_flex hp_ptSm hp_reverse hp_column_tb">
            <figure class="bl_section_imgWrapper">
                <img src="<?php bloginfo(
                    "template_url"
                ); ?>/img/beginner00.jpg" alt="ヨガをする親子" />
            </figure>
            <div class="bl_section_body">
                <h3 class="bl_section_header hp_mb30" data-aos="fade-up">
                    まずは体感してみてください。
                </h3>
                <p class="bl_section_txt">
                    普段リラクゼーションサロンを利用しない、身体のメンテナンスは初めて...といった方にも身体の仕組みから丁寧にご説明させていただきます。

                </p>
            </div>
        </div>
        <a href="<?php bloginfo(
            "url"
        ); ?>/beginner" class="el_btn hp_mtSm"><span>VIEW MORE</span></a>
    </div>
</section>
<section class="ly_section hp_ptLg" id="menu">
    <div class="ly_inner">
        <h2 class="el_section_ttl">Menu</h2>
        <span class="el_section_ttl_sub hp_mbSm">メニュー・料金</span>
        <div class="bl_section hp_flex hp_jcc">
            <h2 class="bl_section_lead">お得な初回限定料金コース</h2>
            <!-- 2カラム -->
            <div class="bl_cardUnit bl_cardUnit__col2 hp_jcc">
                <div class="bl_card hp_mbSm" data-aos="fade-up" data-aos-duration="1500">
                    <div class="bl_card_body">
                        <h3 class="bl_card_ttl">スッキリ爽快！ドライヘッドスパ</h3>
                        <figure>
                            <img src="<?php bloginfo(
                        "template_url"
                    ); ?>/img/menu01.jpg" alt="施術風景" />
                        </figure>
                        <p class="bl_card_price">
                            <span>初回限定価格</span>
                            1,100 <span>円</span>
                        </p>
                        <p class="bl_card_des">
                            頭・首・背中を中心に全身リリースでリフレッシュ
                        </p>
                        <p>施術時間／20分
                        </p>
                    </div>
                </div>
                <!-- /.bl_card -->
                <div class="bl_card hp_mbSm" data-aos="fade-up" data-aos-duration="2000">
                    <div class="bl_card_body">
                        <h3 class="bl_card_ttl">ドライヘッドスパ＋美顔マシン</h3>
                        <figure>
                            <img src="<?php bloginfo(
                        "template_url"
                    ); ?>/img/menu02.jpg" alt="施術風景" />
                        </figure>
                        <p class="bl_card_price">
                            <span>初回限定価格</span>
                            1,650 <span>円</span>
                        </p>
                        <p class="bl_card_des">
                            頭皮と頭筋だけで無く目元や顎から首のラインまでスッキリ。快眠と憧れの小顔に
                        </p>
                        <p>施術時間／30分
                        </p>
                    </div>
                </div>
                <!-- /.bl_card -->
            </div>
        </div>
        <a href="<?php bloginfo(
            "url"
        ); ?>/menu" class="el_btn hp_mtSm"><span>VIEW MORE</span></a>
    </div>
</section>
<section class="ly_section hp_ptLg hp_pbMd" id="access">
    <div class="ly_inner">
        <h2 class="el_section_ttl">Access</h2>
        <span class="el_section_ttl_sub hp_mbSm">アクセス</span>
        <div class="bl_section hp_flex hp_column_sp hp_ptSm hp_pbMd">
            <figure class="bl_section_imgWrapper">
                <img src="<?php bloginfo(
                    "template_url"
                ); ?>/img/logo.png" alt="ロゴ" />
            </figure>
            <div class="bl_section_body">
                <p class="bl_section_txt">
                    〒465-0024<br />
                    愛知県名古屋市名東区本郷二丁目１６３番地<br />
                    (地下鉄東山線本郷駅2番出口南側徒歩30秒)<br />
                    営業時間 9:00~21:00<br />
                <div class="el_tel hp_mtSm hp_mbSm">
                    tel:<a href="tel:+81-052-726-6590">
                        <span>052-726-6590</span>
                    </a>
                </div>
                <div class="el_notice">
                    ※駐車場はございません。近隣のコインパーキングをご利用くださいませ
                </div>
                </p>
            </div>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.254636380229!2d137.01196875019727!3d35.175205465068984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60036570b6ed8cd1%3A0x31b2e4098c0c9ce2!2z44CSNDY1LTAwMjQg5oSb55-l55yM5ZCN5Y-k5bGL5biC5ZCN5p2x5Yy65pys6YO377yS5LiB55uu77yR77yW77yT!5e0!3m2!1sja!2sjp!4v1657249687368!5m2!1sja!2sjp"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- <img src="<?php bloginfo(
            "template_url"
        ); ?>/img/map.jpg" alt=""> -->
    </div>
</section>
<section class="ly_section hp_pbMd" id="banner">
    <div class="ly_inner">
        <div class="bl_section hp_tac hp_flex hp_jcc hp_column_sp">
            <div class="bl_section_imgWrapper" data-aos="fade-up" data-aos-duration="1500">
                <a href="https://yoga-ama.com/" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo(
                            "template_url"
                        ); ?>/img/yogaama.jpg" alt="本郷駅前整体アマのリンク画像"></a>
            </div>
            <div class="bl_section_imgWrapper" data-aos="fade-up" data-aos-duration="2000">
                <a href="http://ama-hongou.info/index.php" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo(
                            "template_url"
                        ); ?>/img/banner_onlinestore.png" alt="オンラインストアリンク画像"></a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>