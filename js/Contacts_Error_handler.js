function ErrorChecker()
{
	var error=false;
if ($("#name").html().length<2) {
		$("#errorloc").append("Name must be at least 2 symbols!<br/>");
		error=true;
	};

	if ($("#lastName").html().length<2) {
		$("#errorloc").append("Last Name must be at least 2 symbols!<br/>");
		error=true;
	};

	if ($("#text").html().length<20) {
		$("#errorloc").append("Comment must be at least 20 symbols!<br/>");
		error=true;
	};
	if (error) {
		return false;
	}
	else{
		return true;
	};
	
}