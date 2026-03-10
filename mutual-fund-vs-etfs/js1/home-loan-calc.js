function SubmitFormData() {
	var loan_amount = $("#loan_amount").val();
	var loan_tenure = $("#loan_tenure").val();
	var interest_rate = $("#interest_rate").val();
	
    var text;
  	
  if(loan_amount == ''){
    text = "Please Enter Loan Amount";
    error_message.innerHTML = text;
    return false;
  }
  if(loan_tenure == ''){
    text = "Please Enter Loan Tenure";
    error_message.innerHTML = text;
    return false;
  }
  if(interest_rate == ''){
    text = "Please Enter Expected Interest Rate";
    error_message.innerHTML = text;
    return false;
  }
    error_message.innerHTML = '';
	$.post("homeloan-calc-submit.php", { loan_amount: loan_amount, loan_tenure: loan_tenure, interest_rate: interest_rate },
	   function(data) {
		 $('#results').html(data);
		 $('#myForm')[0].reset();
	   });
}

