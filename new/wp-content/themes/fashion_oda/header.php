<?php
	// 詳細画面のない投稿はリダイレクト
	if(is_singular("graduate")) {
		wp_redirect(home_url('/career/graduate/'));
		exit;
	}
	if(is_singular("ofdc")) {
		wp_redirect(home_url('/life/works/ofdc/'));
		exit;
	}
	if(is_singular("competition")) {
		wp_redirect(home_url('/life/works/competition/'));
		exit;
	}
	if(is_singular("voice")) {
		wp_redirect(home_url('/life/voice/'));
		exit;
	}
	if(is_tax("cat_opencampus") || is_singular("opencampus")) {
		wp_redirect(home_url('/oc/'));
		exit;
	}

	// 存在しない固定ページはリダイレクト
	if(is_page("contact")) {
		wp_redirect(home_url('/'));
		exit;
	}
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
	<meta name="format-detection" content="telephone=no">
	<meta property="og:locale" content="ja_JP">
<?php if(is_post_type_archive() || is_tax()): ?>
<?php
	if(is_post_type_archive("news")) {
		$description = "ニュース,新着情報,製菓,製パン,専門学校,織田";
	}
	elseif(is_tax("cat_news")) {
		$description = "ニュース,新着情報,製菓,製パン,専門学校,織田";
	}
	elseif(is_post_type_archive("talk")) {
		$description = "ファッションを学ぶ学生へインタビュー！ファッション学生東京都中野区の織田ファッション専門学校でスタイリスト、デザイナー、パタンナー、アパレル、ファッションビジネスのプロを目指そう！";
	}
	elseif(is_post_type_archive("column")) {
		$description = "本気でパティシエやパン職人を目指すなら、お菓子やパンをじっくり学べる環境に身を置くことが大切です。織田製菓専門学校では、実力派の講師（現役パティシエ）と、最新の設備、環境を整えて皆さんをお待ちしております。";
	}
	elseif(is_post_type_archive("practisediary")) {
		$description = "本気でパティシエやパン職人を目指すなら、お菓子やパンをじっくり学べる環境に身を置くことが大切です。織田製菓専門学校では、実力派の講師（現役パティシエ）と、最新の設備、環境を整えて皆さんをお待ちしております。";
	}
	elseif(is_post_type_archive("campusreport")) {
		$description = "服飾、ファッションについて学べる専門学校。東京都中野区の織田ファッション専門学校でスタイリスト、デザイナー、パタンナー、アパレル、ファッションビジネスのプロを目指そう！なりたい自分になって、夢をかなえよう。";
	}
	elseif(is_post_type_archive("coordinatecontest")) {
		$description = "「高校生コーディネートコンテスト」...高校生なら誰でも応募可。お気に入りのコーデの写メで応募できるコーディネートコンテストです。LINEでの応募も可。応募コーデの中から毎週1点を選出し、講評と共に発表します。また毎月「月間ベスト」を決定し、賞状と副賞を贈呈しています。織田ファッション専門学校が主催しています。";
	}
	elseif(is_tax("contestdate")) {
		$description = "「高校生コーディネートコンテスト」...高校生なら誰でも応募可。お気に入りのコーデの写メで応募できるコーディネートコンテストです。LINEでの応募も可。応募コーデの中から毎週1点を選出し、講評と共に発表します。また毎月「月間ベスト」を決定し、賞状と副賞を贈呈しています。織田ファッション専門学校が主催しています。";
	}
?>
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php echo esc_attr(wp_get_document_title()); ?>" />
	<meta property="og:description" content="<?php echo esc_attr($description); ?>" />
	<meta property="og:url" content="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
	<meta property="og:site_name" content="製菓専門学校でパティシエ、パン職人を目指す｜織田製菓専門学校" />
	<meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/ogimage.jpg" />
	<meta property="og:image:secure_url" content="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/ogimage.jpg" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@odagakuen">
	<meta name="twitter:title" content="<?php echo esc_attr(wp_get_document_title()); ?>" />
	<meta name="twitter:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/ogimage.jpg" />
<?php endif; ?>
	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P4JPW3F');</script>
	<!-- End Google Tag Manager -->
</head>
<body class="preload">
	<header>
		<div class="wrap">
		<?php if(is_front_page()): ?>
			<h1 class="logo"><a href="<?php echo esc_url(home_url('/')); ?>" class="fade">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/logo_pc.png" alt="織田製菓専門学校" class="pc">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/logo_sp.png" alt="織田製菓専門学校" class="sp">
			</a></h1>
		<?php else: ?>
			<div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>" class="fade">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/logo_pc.png" alt="織田製菓専門学校" class="pc">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/logo_sp.png" alt="織田製菓専門学校" class="sp">
			</a></div>
		<?php endif; ?>
			<nav class="pc960 gnavi">
				<ul class="main">
					<li class="hoverbtn">
						<span class="acdbtn sp_navi"></span>
						<a href="<?php echo esc_url(home_url('/')); ?>about/" class="fade">
							<span class="icon">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon01_pc.png" alt="" class="off">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon01_on_pc.png" alt="" class="on">
							</span>
							<span class="txt">学校紹介</span>
						</a>
						<div class="hovermenu">
							<div class="wrap">
								<ul class="children">
									<li><a href="<?php echo esc_url(home_url('/')); ?>about/guide/" class="fade">odaの強み</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>about/facilities/" class="fade">施設・設備紹介</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>about/access/" class="fade">アクセスマップ</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>about/message/" class="fade">校長メッセージ</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>about/gakuen/" class="fade">織田学園一覧</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="hoverbtn">
						<span class="acdbtn sp_navi"></span>
						<a href="<?php echo esc_url(home_url('/')); ?>academics/" class="fade">
							<span class="icon">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon02_pc.png" alt="" class="off">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon02_on_pc.png" alt="" class="on">
							</span>
							<span class="txt">学科・実習</span>
						</a>
						<div class="hovermenu">
							<div class="wrap">
								<ul class="children">
									<li><a href="<?php echo esc_url(home_url('/')); ?>academics/confection/" class="fade">コンフェクション 2年制コース</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>academics/confection_s/" class="fade">コンフェクション 1年制コース</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>academics/bakery/" class="fade">ベーカリー＆ スイーツコース</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>academics/shop/" class="fade">パティスリー・オダ</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>academics/select/" class="fade">選択科目</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="hoverbtn">
						<span class="acdbtn sp_navi"></span>
						<a href="<?php echo esc_url(home_url('/')); ?>career/" class="fade">
							<span class="icon">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon03_pc.png" alt="" class="off">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon03_on_pc.png" alt="" class="on">
							</span>
							<span class="txt">就職</span>
						</a>
						<div class="hovermenu">
							<div class="wrap">
								<ul class="children">
									<li><a href="<?php echo esc_url(home_url('/')); ?>career/data/" class="fade">就職状況・就職先一覧</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>career/guidance/" class="fade">就職支援</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>career/graduate/" class="fade">卒業生VOICE</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="hoverbtn">
						<span class="acdbtn sp_navi"></span>
						<a href="<?php echo esc_url(home_url('/')); ?>life/" class="fade">
							<span class="icon">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon04_pc.png" alt="" class="off">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon04_on_pc.png" alt="" class="on">
							</span>
							<span class="txt">学生生活</span>
						</a>
						<div class="hovermenu">
							<div class="wrap">
								<ul class="children">
									<li><a href="<?php echo esc_url(get_post_type_archive_link("practisediary")); ?>" class="fade">実習ダイアリー</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>vlog/" class="fade">oda patisserie Vlog</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>life/works/" class="fade">作品紹介</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>life/schedule/" class="fade">年間スケジュール</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="hoverbtn">
						<span class="acdbtn sp_navi"></span>
						<a href="<?php echo esc_url(home_url('/')); ?>enter/" class="fade">
							<span class="icon">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon05_pc.png" alt="" class="off">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon05_on_pc.png" alt="" class="on">
							</span>
							<span class="txt">募集要項・<br>サポート</span>
						</a>
						<div class="hovermenu">
							<div class="wrap">
								<ul class="children">
									<li><a href="<?php echo esc_url(home_url('/')); ?>enter/guideline/" class="fade">募集要項</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>enter/tuition/" class="fade">学費等</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>enter/aoguideline/" class="fade">AO入学</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>enter/foreignstudentguideline/" class="fade">留学生募集要項</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>enter/tuitionsupport/" class="fade">奨学金・教育ローン</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>enter/home/" class="fade">住まいのサポート</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>faq/" class="fade">よくあるご質問</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="pc1260 hoverbtn">
						<span class="acdbtn sp_navi"></span>
						<a tabindex="-1" class="">
							<span class="icon">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon10_pc.png" alt="" class="off">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon10_on_pc.png" alt="" class="on">
							</span>
							<span class="txt">訪問者別</span>
						</a>
						<div class="hovermenu">
							<div class="wrap">
								<ul class="children">
									<li><a href="<?php echo esc_url(home_url('/')); ?>society/" class="fade">高校既卒者の方へ</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>foreignstudentguideline/" class="fade">留学生の方へ</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>parent/" class="fade">保護者の方へ</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>company/" class="fade">企業採用ご担当者の方へ</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>graduate/" class="fade">卒業生の方へ</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="pc1260"><a href="<?php echo esc_url(home_url('/')); ?>about/access/" class="fade">
						<span class="icon">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon06_pc.png" alt="" class="off">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon06_on_pc.png" alt="" class="on">
						</span>
						<span class="txt">アクセス</span>
					</a></li>
					<li class="pc1260"><a href="<?php echo esc_url(home_url('/')); ?>contact/tour_entry/" class="fade">
						<span class="icon">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon07_pc.png" alt="" class="off">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon07_on_pc.png" alt="" class="on">
						</span>
						<span class="txt">お問い合わせ</span>
					</a></li>
				</ul>
			</nav>
			<div class="menu_trigger">
				<div class="line"><span></span><span></span></div>
				<p class="txt">メニュー</p>
			</div>
		</div>
	</header>

	<nav class="hamnavi gnavi sp_navi">
		<ul class="main">
			<li class="sp959">
				<span class="acdbtn sp_navi"></span>
				<a href="<?php echo esc_url(home_url('/')); ?>about/" class="fade">
					<span class="icon">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon01_sp.png" alt="">
					</span>
					<span class="txt">学校紹介</span>
				</a>
				<div class="acdmenu">
					<div class="wrap">
						<ul class="children">
							<li><a href="<?php echo esc_url(home_url('/')); ?>about/guide/" class="fade">odaの強み</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>about/facilities/" class="fade">施設・設備紹介</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>about/access/" class="fade">アクセスマップ</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>about/message/" class="fade">校長メッセージ</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>about/gakuen/" class="fade">織田学園一覧</a></li>
						</ul>
					</div>
				</div>
			</li>
			<li class="sp959">
				<span class="acdbtn sp_navi"></span>
				<a href="<?php echo esc_url(home_url('/')); ?>academics/" class="fade">
					<span class="icon">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon02_sp.png" alt="">
					</span>
					<span class="txt">学科・実習</span>
				</a>
				<div class="acdmenu">
					<div class="wrap">
						<ul class="children">
							<li><a href="<?php echo esc_url(home_url('/')); ?>academics/confection/" class="fade">コンフェクション 2年制コース</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>academics/confection_s/" class="fade">コンフェクション 1年制コース</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>academics/bakery/" class="fade">ベーカリー＆ スイーツコース</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>academics/shop/" class="fade">パティスリー・オダ</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>academics/select/" class="fade">選択科目</a></li>
						</ul>
					</div>
				</div>
			</li>
			<li class="sp959">
				<span class="acdbtn sp_navi"></span>
				<a href="<?php echo esc_url(home_url('/')); ?>career/" class="fade">
					<span class="icon">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon03_sp.png" alt="">
					</span>
					<span class="txt">就職</span>
				</a>
				<div class="acdmenu">
					<div class="wrap">
						<ul class="children">
							<li><a href="<?php echo esc_url(home_url('/')); ?>career/data/" class="fade">就職状況・就職先一覧</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>career/guidance/" class="fade">就職支援</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>career/graduate/" class="fade">卒業生VOICE</a></li>
						</ul>
					</div>
				</div>
			</li>
			<li class="sp959">
				<span class="acdbtn sp_navi"></span>
				<a href="<?php echo esc_url(home_url('/')); ?>life/" class="fade">
					<span class="icon">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon04_sp.png" alt="">
					</span>
					<span class="txt">学生生活</span>
				</a>
				<div class="acdmenu">
					<div class="wrap">
						<ul class="children">
							<li><a href="<?php echo esc_url(get_post_type_archive_link("practisediary")); ?>" class="fade">実習ダイアリー</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>vlog/" class="fade">oda patisserie Vlog</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>life/works/" class="fade">作品紹介</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>life/schedule/" class="fade">年間スケジュール</a></li>
						</ul>
					</div>
				</div>
			</li>
			<li class="sp959">
				<span class="acdbtn sp_navi"></span>
				<a href="<?php echo esc_url(home_url('/')); ?>enter/" class="fade">
					<span class="icon">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon05_sp.png" alt="">
					</span>
					<span class="txt">募集要項・<br class="pc_navi">サポート</span>
				</a>
				<div class="acdmenu">
					<div class="wrap">
						<ul class="children">
							<li><a href="<?php echo esc_url(home_url('/')); ?>enter/guideline/" class="fade">募集要項</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>enter/tuition/" class="fade">学費等</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>enter/aoguideline/" class="fade">AO入学</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>enter/foreignstudentguideline/" class="fade">留学生募集要項</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>enter/tuitionsupport/" class="fade">奨学金・教育ローン</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>enter/home/" class="fade">住まいのサポート</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>faq/" class="fade">よくあるご質問</a></li>
						</ul>
					</div>
				</div>
			</li>
			<li>
				<span class="acdbtn sp_navi"></span>
				<a tabindex="-1" class="">
					<span class="icon">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon10_sp.png" alt="">
					</span>
					<span class="txt">訪問者別</span>
				</a>
				<div class="acdmenu">
					<div class="wrap">
						<ul class="children">
							<li><a href="<?php echo esc_url(home_url('/')); ?>society/" class="fade">高校既卒者の方へ</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>enter/foreignstudentguideline/" class="fade">留学生の方へ</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>parent/" class="fade">保護者の方へ</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>company/" class="fade">企業採用ご担当者の方へ</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>graduate/" class="fade">卒業生の方へ</a></li>
						</ul>
					</div>
				</div>
			</li>
			<li><a href="<?php echo esc_url(home_url('/')); ?>about/access/" class="fade">
				<span class="icon">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon06_sp.png" alt="">
				</span>
				<span class="txt">アクセス</span>
			</a></li>
			<li><a href="<?php echo esc_url(home_url('/')); ?>contact/tour_entry/" class="fade">
				<span class="icon">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon07_sp.png" alt="">
				</span>
				<span class="txt">お問い合わせ</span>
			</a></li>
		</ul>
		<ul class="sub">
			<li class="oc"><a href="<?php echo esc_url(home_url('/')); ?>oc/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon08_sp.png" alt="">オープンキャンパス</a></li>
			<li class="doc"><a href="<?php echo esc_url(home_url('/')); ?>contact/pamphlet/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/navi_icon09_sp.png" alt="">資料請求</a></li>
		</ul>
	</nav>
	<div class="container">
		<main>
