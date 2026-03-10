function SubmitFormData() {
	var investment_amount = $("#investment_amount").val();
	var loan_tenure = $("#loan_tenure").val();
	var interest_rate = $("#interest_rate").val();
	
    var text;
  	
  if(investment_amount == ''){
    text = "Please Enter Investment Amount";
    error_message.innerHTML = text;
    return false;
  }
  if(loan_tenure == ''){
    text = "Please Enter Investment Tenure";
    error_message.innerHTML = text;
    return false;
  }
  if(interest_rate == ''){
    text = "Please Enter Expected Interest Rate";
    error_message.innerHTML = text;
    return false;
  }
    error_message.innerHTML = '';
	$.post("lumpsum-calc-submit.php", { investment_amount: investment_amount, loan_tenure: loan_tenure, interest_rate: interest_rate },
	   function(data) {
		 $('#results').html(data);
		 $('#myForm')[0].reset();
	   });
}

