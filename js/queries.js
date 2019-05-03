function insertData() {
	var Name = $("#Name").val();
	var Email = $("#Email").val();
	var Mobile = $("#Mobile").val();
	var Message = $("#Message").val();
			 
	// AJAX code to send data to php file.
	$.ajax({
		type: "POST",
		url: "query.php",
		data: {Name:Name,Email:Email,Mobile:Mobile,Message:Message},
		dataType: "JSON",
		success: function(data) {
			$("#message").html(data);
			$("#message").addClass("alert alert-success");
		},
		error: function(err) {
			alert(err);
		}
	}); 
}