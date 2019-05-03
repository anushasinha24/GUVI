function insertData() {
	var Name = $("#Name").val();
	var Email = $("#Email").val();
	var Mobile = $("#Mobile").val();
	var Gender = $("#Gender").val();
	var Profession = $("#Profession").val();
	var Language = $("#Language").val();
	var DOB = $("#DOB").val();
	var Password = $("#Password").val();
			 
	// AJAX code to send data to php file.
	$.ajax({
		type: "POST",
		url: "regis.php",
		data: {Name:Name,Email:Email,Mobile:Mobile,Gender:Gender,Profession:Profession,Language:Language,DOB:DOB,Password:Password},
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