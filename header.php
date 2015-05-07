<?
	ob_start();
	session_start();
	@ini_set('default_charset', 'UTF-8');
	header('Content-Type: text/html; charset=UTF-8');
	require_once('functions.php');
?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Unesp Foundation - Framework responsivo para criação de sistemas da Unesp</title>
		<base href="http://localhost/unesp-foundation/">
		<link rel="stylesheet" href="css/unesp-foundation.css" />
		<link rel="stylesheet" href="css/central.css" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,900' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="bower_components/highlightjs/styles/default.css">
		<script src="bower_components/modernizr/modernizr.js"></script>
	</head>
	<body>

		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">

				<aside class="left-off-canvas-menu">
					<ul class="side-nav">
						<li class="divider"></li>
						<li class="heading">Configuração</li>
						<li class="divider"></li>
						<li class="heading">Estrutura</li>
						<li class="menu-docs-media-queries"><a href="docs/media-queries.html">Media Queries</a></li>
						<li class="menu-docs-visibilidade"><a href="docs/visibilidade.html">Visibilidade</a></li>
						<li class="menu-docs-grade"><a href="docs/grade.html">Grade</a></li>
					</ul>
				</aside>

				<div id="main-wrap">
					<header id="main-header">

						<div id="header-second-row">
							<div class="row almost full">
								<div class="small-2 columns show-for-small">
									<div class="icon-box">
										<span class="left-off-canvas-toggle"><i class="fa fa-bars"></i></span>
									</div>
								</div>
								<div class="small-8 medium-10 columns small-only-text-center">
									<div id="system-name">Unesp Foundation</div>
									<div id="system-description">Framework responsivo para desenvolvimento de sistemas Unesp</div>
								</div>
								<div class="small-2 medium-2 columns text-right">
									<img src="images/unesp.svg" alt="" class="show-for-medium-up right relative top-10" style="max-height: 50px;">
									<img src="images/unesp-glyph-white.svg" class="show-for-small right relative top-12"/>
								</div>
							</div>
						</div>
					
						<div id="header-third-row" class="wrapper-top-bar hide-for-small">
							<div class="row almost full">
								<div class="large-12 columns">
									<nav class="top-bar" data-topbar role="navigation">
										<ul class="title-area">
											<li class="name">
												<h1></h1>
											</li>
											<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
										</ul>
					
										<section class="top-bar-section">
											<ul class="left">
												<li class="menu-home"><a href="">Home</a></li>
												<li class="menu-documentacao"><a href="docs/">Documentação</a></li>
											</ul>
										</section>
									</nav>							
								</div>
							</div>
						</div>
					</header>
