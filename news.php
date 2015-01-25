<?php
require_once "header.php";
?>
<div id="content" class="span12 row-fluid" ><input type="hidden" id="nav_trigger_input" value="news"/>
	<?php

	$articles = fRecordSet::buildFromSQL('Article', 'SELECT articles.* FROM articles');
	$lastPage = ceil((count($articles)-1)/10);

	?>

	<?php
		echo '<span class="hidden">'.$lastPage.'</span>';
	?>

	<script type="text/javascript">
	$(document).ready(function () {
		makePaging("getArticles.php", 10, '#content');
	});
	</script>
	<div id="pages"></div>
</div>	

<?php
	require_once 'footer.php';
?>