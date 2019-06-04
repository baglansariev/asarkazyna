<div class="row wrap img">
	<? foreach($arr as $news): ?>
	<div class="news news-discount">
		<div>
			<img src="<?= $news['IMG_PATH'] ?>" alt="">
		</div>
		<div>
			<p class="news-title">
				<a href="/news/show/<?= $news['ID'] ?>"><?= $news['TITLE'] ?></a>
				<span><?= $news['DATE'] ?></span>
			</p>
			<p class="news-short-text">
				<?= $news['SHORT_TEXT'] ?>
			</p>
		</div>
	</div>
	<? endforeach ?>
</div>