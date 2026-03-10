<?php
$p = $_POST['loan_amount'] ;
$t = $_POST['loan_tenure'];
$r = $_POST['interest_rate'];

// one month interest 
    $r = $r / (12 * 100); 
      
    // one month period 
    $t = $t * 12;  
      
    $emi = ($p * $r * pow(1 + $r, $t)) /  
                  (pow(1 + $r, $t) - 1);   

    $total_payble = $emi * $t;
	$interest_accured = $total_payble - $p;
	

echo "<div class='container-xxl py-5'>";
echo "<div class='container'>";
echo "<div class='page-content'>";
echo "<div class='form-v4-content'>";
echo "<div class='form-left'>";
echo "<h2 style='color: #FFFFFF;'>ALL INFORMATION</h2>";
echo "<p class='text-1'>Monthy EMI : &#8377; ".sprintf('%.2f',$emi)."</p>";
echo "<p class='text-1'>Total Loan Amount : &#8377; ".$p."</p>";
echo "<p class='text-1'>Total Payble Amount : &#8377; ".sprintf('%.2f',$total_payble)."</p>";
echo "<p class='text-1'>Interest Accured : &#8377; ".sprintf('%.2f',$interest_accured)."</p>";
			
echo "<form class='form-detail' method='post' id='myform'>";
echo "<div id='piechart' class='chart'></div>";				
echo "</form>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";		
			
?>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Loan Amount', <?php echo $p; ?>],
  ['Interest Amount', <?php echo sprintf('%.2f',$interest_accured); ?>]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Loan EMI Calculator'};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

