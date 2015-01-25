function checkFormInputs(title, questionsCount)
{
	$( "#name" ).change(function() {
  		var name = $( "#name" ).val();
  		var thisEl = $(this);
  		 $.ajax({
            type: 'post',
            url: "checkExists.php",
            data: {
                name: name
            },
            dataType: 'html'
            }).done(function(data){
                    if(data == '0')
                    {
                    	
                        thisEl.next().empty();
            			thisEl.next().append("Name already exists");
                    }
                    else
                    {
                    	thisEl.next().empty();
            			thisEl.next().append("Name is ok");
                    }
            });
	});	

	$( "#email" ).change(function() {
  		var email = $( "#email" ).val();
  		var thisEl = $(this);
  		 $.ajax({
            type: 'post',
            url: "checkExists.php",
            data: {
                email: email
            },
            dataType: 'html'
            }).done(function(data){
                    if(data == '0')
                    {
                    	
                        thisEl.next().empty();
            			thisEl.next().append("Email already exists");
                    }
                    else
                    {
                    	thisEl.next().empty();
            			thisEl.next().append("Email is ok");
                    }
            }); 
	});




}