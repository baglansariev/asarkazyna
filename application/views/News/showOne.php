<div class="row column img">
	<div class="one-news">
		<p class="heading">
			<?= $TITLE ?>
		</p>
		<? if($VIDEO_URL): ?>
		<iframe src="<?= $VIDEO_URL ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<? else: ?>
		<img src="<?= $IMG_PATH ?>" alt="">
		<? endif ?>
		<p class="news-full-text">
			<?= $FULL_TEXT ?>
		</p>
	</div>
</div>