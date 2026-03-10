function SubmitPopupFormData() {
	var pname = $("#pname").val();
	var pphone = $("#pphone").val();
	var pcity = $("#pcity").val();
	var pemail = $("#pemail").val();
		
	$.post("submitpopup.php", { pname: pname, pphone: pphone, pcity: pcity, pemail: pemail },
	   function(data) {
		 $('#results').html(data);
		 $('#popupform')[0].reset();
	   });
}

