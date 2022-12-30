<?php
/* グーテンベルグのCSSをテーマ側で読み込み */
function mytheme_setup(){
	//theme.min.cssの有効化
	add_theme_support('wp-block-styles');

	//縦横比を維持したレスポンシブを有効化
	add_theme_support('responsive-embeds');

	//editor-style.cssを有効化&読み込み
	add_theme_support('editor-styles');
	add_editor_style('editor-style.css');

	//ページタイトルを有効化
	add_theme_support('title-tag');

	//link,style,scriptのHTML5を有効化
	add_theme_support('html5',array(
		'style',
		'script'
	));
	//アイキャッチ画像の有効化
	add_theme_support('post-thumbnails');

	//カスタム投稿タイプ"インストラクター"で画像挿入機能追加（150×150でトリミング）
	add_theme_support( 'post-thumbnails', array( 'instructor' ) );
	// set_post_thumbnail_size( 150, 150, true );
}
add_action('after_setup_theme','mytheme_setup');


//管理画面でカスタム投稿の項目にアイコンの追加
function add_menu_icons_styles(){
	echo '<style>
		 #adminmenu #menu-posts-instructor div.wp-menu-image:before {
			  content: "\f307";
		 }
	</style>';
	echo '<style>
		 #adminmenu #menu-posts-schedule div.wp-menu-image:before {
			  content: "\f489";
		 }
	</style>';
}
add_action( 'admin_head', 'add_menu_icons_styles' );

/* archive.phpの設定 */
function post_has_archive($args,$post_type){ //設定後に必ずパーマリンクを設定すること
    if('post' == $post_type){
        $args['rewrite'] = true;
        $args['has_archive'] = 'news';//アーカイブページのurlを定義
        $args['label'] = 'ニュース'; //管理画面の投稿ラベル名をブログに変換
    }
    return $args;
}
add_filter('register_post_type_args','post_has_archive',10,2);

//アーカイブページ 投稿表示件数の設定
function custom_posts_per_page($query) {
    if(is_admin() || ! $query->is_main_query()){
        return;
    }
    // 制作実績
    if($query->is_archive('news')) {
        $query->set('posts_per_page', '10'); //ここで表示件数を変更
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');

//Breadcrumb NavXTのパンくずで”投稿一覧”を追加（”ブログ”で表示）
function bcn_add($bcnObj) {
	// デフォルト投稿のアーカイブの場合、TOP＞投稿一覧という形で追加
	if (is_post_type_archive('post')) {
        	// 新規のtrailオブジェクトを末尾に追加する
		$bcnObj->add(new bcn_breadcrumb('news', null, array('archive', 'post-clumn-archive', 'current-item')));
		// trailオブジェクト0とtrailオブジェクト1の中身を入れ替える
		$trail_tmp = clone $bcnObj->trail[1];
		$bcnObj->trail[1] = clone $bcnObj->trail[0];
        $bcnObj->trail[0] = $trail_tmp;
    // デフォルト投稿の詳細ページの場合、TOP > 投稿一覧 > カテゴリー1 >（投稿タイトル）で表示
	}elseif (is_singular('post')) {
        // 新規のtrailオブジェクトを追加する
        $bcnObj->add(new bcn_breadcrumb('news', null, array('post-clumn-archive'), home_url('news'), null, true));
		$trail_tmp = clone $bcnObj->trail[3];	//配列の最後（一番左）に追加
		$bcnObj->trail[3] = clone $bcnObj->trail[2]; //配列の最後から2番目に追加
		$bcnObj->trail[2] = $trail_tmp; //配列の最後から2番にあった値を最後（一番左に追加）
}
	return $bcnObj;
}
add_action('bcn_after_fill', 'bcn_add');

//アーカイブのタイトルから「アーカイブ：」を消すカスタマイズ
function custom_archive_title($title){
    $titleParts=explode(': ',$title);
    if($titleParts[1]){
        return $titleParts[1];
    }
    return $title;
}
add_filter('get_the_archive_title','custom_archive_title');

//「投稿一覧」の「クイック編集」で表示される「この投稿を先頭に固定表示」を非表示
function custom_hidden_quick_page_sticky() {
    ?>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $(".inline-edit-col-right .inline-edit-group:eq(1) label:eq(1)").css("display", "none");
});
</script>
<?php
}
add_action( 'admin_head-edit.php', 'custom_hidden_quick_page_sticky' ); //ファイルを読み込む

//「投稿の編集」で表示される「ブログのトップに固定」を非表示
function custom_hidden_post_page_sticky() {
    ?>
<style type="text/css">
.edit-post-post-status .components-panel__row:nth-of-type(3) {
    display: none !important;
}
</style>
<?php
}
add_action( 'admin_print_styles-post.php', 'custom_hidden_post_page_sticky' ); //スタイルを直接書き込む

//「新規投稿の追加」で表示される「ブログのトップに固定」「レビュー待ち」を非表示
function custom_hidden_postnew_page_sticky() {
    ?>
<style type="text/css">
.edit-post-post-status .components-panel__row:nth-of-type(n+3) {
    display: none !important;
}
</style>
<?php
}
add_action( 'admin_print_styles-post-new.php', 'custom_hidden_postnew_page_sticky' ); //スタイルを直接書き込む