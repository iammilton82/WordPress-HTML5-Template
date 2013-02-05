
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<? wp_head() ?>
    <link rel="stylesheet" type="text/css" media="all" href="<? bloginfo('template_url') ?>/assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<? bloginfo('template_url') ?>/assets/css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<? bloginfo('template_url') ?>/assets/css/style.css" />
    <script type="text/javascript" src="<? bloginfo('template_url') ?>/assets/js/modernizr.js" /></script>
	
	<!-- IOS Icons -->
	<link rel="apple-touch-icon-precomposed" href="assets/img/icons/36x36.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/icons/72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/icons/114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/icons/144x144.png">
	<!-- end Icons -->
	
	<title><? if (function_exists('is_tag') && is_tag()) { echo 'Tag Archive for &quot;'.$tag.'&quot; - '; } elseif (is_archive()) { wp_title(''); echo ' Archive - '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo 'Not Found - '; } if (is_home()) { bloginfo('name'); echo ' - '; bloginfo('description'); } else { bloginfo('name'); } ?></title>
</head>

<body <? body_class() ?>>
	
	<!-- start header -->
	<header id="header">
		<div class="container">
		
		</div>
	</header>
	<!-- end header -->
