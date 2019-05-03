function insertData() {
	var UserName = $("#UserName").val();
	var Password = $("#Password").val();
			 
	// AJAX code to send data to php file.
	$.ajax({
		type: "POST",
		url: "logo.php",
		data: {UserName:UserName,Password:Password},
		dataType: "JSON",
		/*success: function(data) {
			$("#message").html(data);
			$("#message").addClass("alert alert-success");
		},*/
		error: function(err) {
			alert(err);
			}
	}); 
}