<?php get_header(); ?>

<?php
/* 
Template Name: 問い合わせページ
*/
?>
<section class="ly_section hp_ptLg hp_pbLg" id="page-contact">
    <div class="ly_inner">
        <h2 class="el_section_ttl hp_mb50 hp_jp">お問い合わせ</h2>
        <p class="el_section_lead">お問い合わせは下記フォーマットに必要な情報をご記載の上、<br class="hp_br-pc">「入力内容の確認」ボタンをクリックし送信してください。<br><br>
            担当者より、2営業日以内にご返信いたします（土・日・祝日除く）。<br>
            <?php the_content(); ?>
    </div>
</section>
<!-- ループ終わり -->
<?php get_footer(); ?>