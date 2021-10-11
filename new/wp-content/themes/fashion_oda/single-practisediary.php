<?php get_header(); ?>
<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>
<div class="box_white_under">
	<section class="page-kv">
		<div class="overlay"></div>
		<div class="bg" style="background-image: url(<?php the_post_thumbnail_url("full"); ?>)"></div>
		<div class="wrap w960">
			<?php the_post_thumbnail("full", array("class" => "cut_img cover img")); ?>
			<p class="caption">実習ダイアリー</p>
			<h1 class="ttl"><?php the_title(); ?></h1>
		</div>
	</section>
	<!-- /.page-kv -->
	<section class="sec_breadcrumb">
		<ul class="list">
			<li><a href="<?php echo esc_url(home_url('/')); ?>" class="fade">TOP</a></li>
			<li><a href="<?php echo esc_url(get_post_type_archive_link("practisediary")); ?>" class="fade">実習ダイアリー</a></li>
			<li><?php the_title(); ?></li>
		</ul>
</section>
	<!-- /.breadcrumb -->
	<section class="sec_contents post-practicediary">
			<div class="post-practicediary-contents post-contents">
				<?php the_content(); ?>
			</div>
		<div class="column-1 mt80 sp-mt8">
			<ul class="pagination-single">
				<li>
				<?php $prev_post = get_previous_post(); ?>
				<?php if(!empty($prev_post)): ?>
					<a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev off fade"><span>prev</span></a><span class="txt">prev</span>
				<?php endif; ?>
				</li>
				<li>
				<?php $next_post = get_next_post(); ?>
				<?php if(!empty($next_post)): ?>
					<span class="txt">next</span><a href="<?php echo get_permalink($next_post->ID); ?>" class="next on fade"><span>next</span></a>
				<?php endif; ?>
				</li>
			</ul>
			<div class="btn-white mt80 sp-mt8"><a href="<?php echo esc_url(get_post_type_archive_link("practisediary")); ?>" class="btn_type2 fade">実習ダイアリー一覧</a></div>
	</section>
	<!-- /.sec_detail -->
</div>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
