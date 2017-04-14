<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
	<meta name="description" content="<?= $site->description()->html() ?>">

	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
	<?= css('assets/css/style.css') ?>
	
	<link rel="icon" href="<?php echo url('assets/images/favicon.ico?v=3') ?>" />
	
</head>
<body>