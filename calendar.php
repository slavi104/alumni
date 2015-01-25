<?php
	require_once 'header.php';
?>
<input type="hidden" id="nav_trigger_input" value="calendar"/>
<?php 
//echo "В процес на разработка!!!";
require_once '/libs/php-calendar-2.0.8/index.php';
//die();
?>
<script type="text/javascript">
$(document).ready(function() {

	$('.ui-button-icon-only').on('click', function(event){
		event.preventDefault();

		console.log($(this).attr('href'));
		/*$.ajax({
		    type: 'POST',
		    url: "/alumni/libs/php-calendar-2.0.8/index.php",
		    data: $('#addEventForm').serialize(),
		    dataType: 'html'
		  }).done(function(data){
		  	console.log(data);
		  });*/

	});
});

  

</script>
<?php
	require_once 'footer.php';
?>