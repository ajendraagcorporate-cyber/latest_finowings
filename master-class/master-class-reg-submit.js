function SubmitFormData() {
	var name = $("#name").val();
	var email = $("#email").val();
	var city = $("#city").val();
	var phone = $("#phone").val();
	var message = $("#message").val();
	
    var text;
  	
  if(name.length < 5){
    text = "Please Enter valid Name";
    error_message.innerHTML = text;
    return false;
  }
  if(email.length < 10){
    text = "Please Enter valid Email";
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
	$.post("submit.php", { name: name, email: email, city: city, phone: phone, message: message },
	   function(data) {
		 $('#results').html(data);
		 $('#myForm').reset();
	   });
}

