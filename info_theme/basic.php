<?php defined('AUTOMAD') or die('Direct access not permitted!');?>
<@ snippets/header.php @>

<div>
	<section>
		<h2>@{ title }</h2>
		<p>@{ description }</p>
	</section>

	<div class="card">
		<div class="card-header"></div>
		<div class="card-body">
			@{ text }
		</div>
	</div>
</div>

<@ snippets/footer.php @>