<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('default', 'contents');
?>
<main class="landing">
	<section class="landing-card" aria-label="Welcome">
		<div class="landing-copy">
			<p class="eyebrow">Let's get started</p>
			<h1><?= lang('home.title') ?></h1>
			<p class="lead"><?= lang('home.description') ?></p>

			<ul class="quick-links">
				<li><a href="https://webisters.com" target="_blank" rel="noopener noreferrer">Read the documentation</a>
				</li>
				<li><a href="https://github.com/webisters" target="_blank" rel="noopener noreferrer">Explore packages on
						GitHub</a></li>
			</ul>

			<a href="https://webisters.com" target="_blank" rel="noopener noreferrer" class="cta">Deploy now</a>
		</div>

		<div class="landing-visual" aria-hidden="true">
			<div class="visual-grid"></div>
			<img src="<?= asset('webisters-light.png') ?>" alt="" class="brand-logo">
		</div>
	</section>
</main>