<!DOCTYPE HTML>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="UTF-8">
<title><?php echo trim(wp_title('', false)); ?></title>
<meta name="description" content="<?php echo $metaDescription; ?>">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="canonical" href="<?php echo $canonical_url; ?>">
<meta name="description" content="<?php echo $metaDescription; ?>">

<!-- favicon -->
<link rel="shortcut icon" href="/assets/img/favicon.png">
<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/touchicon.png">

<link href="/assets/css/style.css" type="text/css" rel="stylesheet">

<!-- jQuery -->
<script src="/assets/js/jquery.min.js"></script>

<?php wp_head(); ?>
</head>

<body itemschope="itemscope" itemtype="http://schema.org/WebPage">
