<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<script src="<?= $this->assetUrl('js/jquery-2.1.4.min.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/jquery-ui.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/calendar.js') ?>"></script>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href="<?= $this->assetUrl('css/jquery-ui.css') ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/choristes_home.css') ?>">
</head>
<body>
	<div id="container">
		
		<div id="user">
			<img src="<?= $this->assetUrl($user['avatar']) ?>" alt="avatar" width="100" height="100">
			<p><?= $user['username'] ?></p>
			<a href="#">Modifier le profil</a>
			<a href="<?= $this->url('users_logout') ?>">Deconnexion</a>
			<div id="datepicker"></div>
		</div>

		<nav>
			<ul>
				<li><a href="/choristes/ajout_news">Actus</a></li>

				<li><a href="<?= $this->url('choristes_chansons') ?>">Chansons</a></li>

				<?php if($user['role'] == 'bureau' || $user['role'] == 'chef' || $user['role'] == 'admin'): ?>
					<li><a href="">Documents Bureau</a></li>				

					<li><a href="">Messagerie du site ()</a></li>
				<?php endif ?>
				
				<?php if($user['role'] == 'chef' || $user['role'] == 'admin'): ?>
					<li><a href="">Gestion Chanson</a></li>				

					<li><a href="">Gestion Répetition</a></li>
				<?php endif ?>
				
				<?php if($user['role'] == 'gestion' ||$user['role'] == 'bureau' || $user['role'] == 'chef' || $user['role'] == 'admin'): ?>
					<li><a href="">Gestion Contenu</a></li>
				<?php endif ?>

				<?php if($user['role'] == 'admin'): ?>
					<li><a href="">Gestion Profils</a></li>
				<?php endif ?>
				

			</ul>
		</nav>

	</div>
	
	<?= $this->section('main_content') ?>

		<footer>
			<p>©2016 - CrescendO Joeuf® . Credits : <?php
															echo "<ul>";
																												
															foreach ($layout_data as $value) {
																echo "<li>".$value."</li>";
															}
															
															echo "</ul>";
														?> </p>
				
		</footer>
</body>
</html>