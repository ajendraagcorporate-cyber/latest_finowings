function SubmitFormData() {
	var enquiry_type = $("#enquiry_type").val();
	var name = $("#name").val();
	var email = $("#email").val();
	var city = $("#city").val();
	var phone = $("#phone").val();
	var message = $("#message").val();
	
    var text;
    var error_message = document.getElementById('error_message');
  	
  if(enquiry_type == 0 || enquiry_type == '' || enquiry_type == null){
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
	$.post("submit.php", { enquiry_type: enquiry_type, name: name, email: email, city: city, phone: phone, message: message },
	   function(data) {
		 $('#results').html(data);
		 $('#myform')[0].reset();
	   })
	   .fail(function(xhr, status, error) {
		 $('#results').html('Error: Could not submit form. Please try again.');
		 console.error('Error:', error);
	   });
}

