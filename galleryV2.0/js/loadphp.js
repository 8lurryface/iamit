$("#button").click(function(event) {
  	event.preventDefault();
	$.ajax({
	  type: "POST",
	  url: "php/script.php",
	  data: {}
	}).done(function( msg ) {
  		$(".btncontainer").after(msg);
	});
	$("#button").addClass('hide');
	}
);
