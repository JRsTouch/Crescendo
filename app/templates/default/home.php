<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
	<header>
		<div class="container">
			<h1></h1>

			<nav>
			
			</nav>
		</div>
	</header><!-- /header -->

	<div id="presentation">
		<div class="container">
			<p><?= substr($data['options'][0]['description'], 0, 200).'...' ?></p>
		</div>
	</div>
	
	<section id="actus">
		<div class="container">
			

		</div>
	</section>

	<div id="video">
		<div class="container">
			<ul>
			<?php foreach ($data['videos'] as $key => $value): ?>
				<li>
					<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="640" height="385" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0">
						<param name="allowFullScreen" value="true" />
						<param name="allowscriptaccess" value="always" />
						<param name="src" value="<?= $value['url'] ?>&amp;hl=fr_FR&amp;fs=1" />
						<param name="allowfullscreen" value="true" />
						<embed type="application/x-shockwave-flash" width="640" height="385" src="<?= preg_replace('/watch\?v=/', 'v/',  $value['url']) ?>&amp;hl=fr_FR&amp;fs=1" allowscriptaccess="always" allowfullscreen="true"></embed>
					</object>
					<p><?= $value['description'] ?></p>
				</li>
			<?php endforeach ?>			
			</ul>

		</div>
	</div>

	<div id="photo">
		<div class="container">
			

		</div>
	</div>

	<div id="contact">
		<div class="container">
			

		</div>
	</div>

	<footer>
		<div class="container">
			

		</div>
	</footer>




<?php $this->stop('main_content') ?>
