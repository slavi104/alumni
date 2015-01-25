<?php

?>	
	
		</div> 
		</div>
	<div class="row-fluid span12 big-container">
		<footer class="span12">
			<nav id="menu">
				<ul>
				</ul>
			</nav>
		</footer>
	
	</div>
	<script type="text/javascript">
	 $( document ).ready(function() {

	 	var open_menu = $('#nav_trigger_input').val();

	 	if (open_menu != undefined && open_menu != '') {
	 		$('#nav_' + open_menu).css('background-color', '#9E2942');
	 	};
	 });
	</script>

</body>
</html>