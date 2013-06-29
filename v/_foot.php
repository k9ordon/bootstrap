<? if(!$isAjax) : ?>

</div>

<script>
	<? foreach(array("a/j/app.js") as $s) : ?>
		<?= file_get_contents($s) . "\n"; ?>
	<? endforeach; ?>
</script>

</body>
</html>

<? endif; ?>