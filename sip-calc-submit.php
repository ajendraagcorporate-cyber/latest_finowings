<?php
$p = $_POST['investment_amount'] ;
$t = $_POST['loan_tenure'];
$r = $_POST['interest_rate'];

$total = ($p * 12) * $t;
$i = ($r / 100)/12;
$m = $t * 12; 
$wealthGained = ($p*(pow((1+$i),$m)-1)) * ((1+$i)/$i);
$earnings = $wealthGained - $total;

echo "<div class='container-xxl py-5'>";
echo "<div class='container'>";
echo "<div class='page-content'>";
echo "<div class='form-v4-content'>";
echo "<div class='form-left'>";
echo "<h2 style='color: #FFFFFF;'>ALL INFORMATION</h2>";
echo "<p class='text-1'>Total Deposited Amount : &#8377; ".sprintf('%.2f',$total)."</p>";
echo "<p class='text-1'>Your Corpus Value : &#8377; ".sprintf('%.2f',$wealthGained)."</p>";
echo "<p class='text-1'>Total Earnings : &#8377; ".sprintf('%.2f',$earnings)."</p>";
			
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
  ['Deposited Amount', <?php echo $total; ?>],
  ['Earnings', <?php echo sprintf('%.2f',$earnings); ?>]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'SIP Calculator'};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

