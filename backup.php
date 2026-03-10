<script>
function submitFormData(){
  var enquiry_type = document.getElementById("enquiry_type").value;
  var name = document.getElementById("name").value;
  var city = document.getElementById("city").value;
  var phone = document.getElementById("phone").value;
  var message = document.getElementById("message").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  
  if(enquiry_type == 0){
    text = "Please Select Query Type";
    error_message.innerHTML = text;
    return false;
  }
  if(name.length < 5){
    text = "Please Enter valid Name";
    error_message.innerHTML = text;
    return false;
  }
  if(city.length < 3){
    text = "Please Enter Correct City";
    error_message.innerHTML = text;
    return false;
  }
  if(isNaN(phone) || phone.length != 10){
    text = "Please Enter valid Phone Number";
    error_message.innerHTML = text;
    return false;
  }
  $.post("submit.php", { enquiry_type: enquiry_type, name: name, city: city, phone: phone, message: message },
	   function(data) {
		 $('#results').html(data);
		 $('#myForm')[0].reset();
	   });
}

  
</script>
