<?php
require_once "header.php";
?>
<div id="content">
	<form action="upload_file.php" id="addArticleForm" method="POST" enctype="multipart/form-data">
		<div>
			<label>Заглавие на новината:</label> <input name='article_title'/>
		</div>
		<div>
			<label>Текст на новината:</label> <br><textarea name='article_content'></textarea>
		</div>
		
		<div>
			<label for="file">Снимка към новината:</label>
			<input type="file" name="file" id="file">
			<input type="hidden" name="is_avatar" value="0">
			<input type="submit" id="addNewsButton" name="submit" value="Добави новината">
		</div>
		
	</form>
</div>
<?php
require_once "footer.php";
?>

