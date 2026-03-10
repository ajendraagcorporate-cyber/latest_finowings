function SubmitFormData() {
	var enquiry_type = $("#enquiry_type").val();
	var name = $("#name").val();
	var city = $("#city").val();
	var phone = $("#phone").val();
	var message = $("#message").val();
	
    var text;
  	
  if(enquiry_type == 0){
    text = "Please Choose Query Type";
    error_message.innerHTML = text;
    return false;
  }
  if(name.length < 5){
    text = "Please Enter valid Name";
    error_message.innerHTML = text;
    return false;
  }
  if(city.length < 2){
    text = "Please Enter Correct City";
    error_message.innerHTML = text;
    return false;
  }
  if(isNaN(phone) || phone.length != 10){
    text = "Please Enter valid Phone Number";
    error_message.innerHTML = text;
    return false;
  }
    error_message.innerHTML = '';
	$.post("submit.php", { enquiry_type: enquiry_type, name: name, city: city, phone: phone, message: message },
	   function(data) {
		 $('#results').html(data);
		 $('#myForm')[0].reset();
	   });
}

