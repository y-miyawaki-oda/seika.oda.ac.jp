<?php get_header(); ?>
<div class="box_white_under">
	<section class="sec_ttl sec_ttl_bg movie">
		<div class="wrap w960">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/movie/ttl_bg.jpg" alt="" class="cut_img contain img">
			<h1 class="ttl">料理動画</h1>
		</div>
	</section>
	<!-- /.sec_ttl -->
	<section class="breadcrumb">
		<div class="wrap w1080">
			<ul class="list">
				<li><a href="<?php echo esc_url(home_url('/')); ?>" class="fade">TOP</a></li>
				<li> 料理動画</li>
			</ul>
		</div>
	</section>
    <!-- /.sec_movie -->
    <section class="sec_movie section mp-10">
	<?php if(have_posts()): ?>
		<div class="wrap w1080">
			<h3 class="ttl_sec_sub"><span class="line">本校実習教員･講師による<br>調理技術動画</span></h3>
			<ul class="link_list grid2_mtx2 sp_grid1">
		<?php while(have_posts()): the_post(); ?>
				<li>
                	<p class="txt sp-left"><?php echo get_field("title"); ?></p>
                    <div class="img cut_thumb">
						<div class="frame_container">
							<?php if(strlen(get_field("movie")) < 10) : ?>
							<?php else: ?>
								<iframe src="<?php echo get_field("movie"); ?>" width="100%" height="100%" >
								</iframe>
							<?php endif; ?>
						</div>
                    </div>
					<?php
						if(is_mobile()) {
							$num = 33;
						}
						else {
							$num = 35;
						}
						$numc = $num*2;
                        $post_id = get_the_ID();
						$gettit = strip_tags(get_the_title());
						if($numc <= strlen(mb_convert_encoding($gettit, "SJIS", "UTF-8"))) {
							$title = mb_strimwidth($gettit, 0, $numc, '','UTF-8');
							if($numc < strlen(mb_convert_encoding($gettit, "SJIS", "UTF-8"))) $title .= "…";
						}else{
							$title = $gettit;
						}
					?>
					<p class="txt sp-left"><?php echo esc_html($title); ?></p>
				</li>
		<?php endwhile; ?>
			</ul>
		<?php
			if(function_exists("responsive_pagination")) {
				responsive_pagination();
			}
		?>
        <p class="txt sp-left">プロフェッショナルな技術は一日にしてならず！ 日々の繰り返しの練習がプロへの道です。<br/>皆さんも是非、自分の納得のいく技術を身につけてください。</p>
		</div>
	<?php endif; ?>
	</section>
</div>
<?php get_footer(); ?>