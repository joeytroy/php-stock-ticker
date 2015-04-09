<html>
<head>
<title>PHP Stock Ticker</title>
<link rel="stylesheet" type="text/css" href="/DataTables-1.10.5/media/css/jquery.dataTables.css">
</head>  
<script type="text/javascript" charset="utf8" src="/DataTables-1.10.5/media/js/jquery.js"></script>
<script type="text/javascript" charset="utf8" src="/DataTables-1.10.5/media/js/jquery.dataTables.js"></script>

<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

<h2>PHP Stock Ticker</h2>

	<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Symbol/5day</th>
			<th>Name</th>
            <th>Last Trade</th>
			<th>Bid</th>
			<th>Ask</th>
			<th>Change</th>
			<th>% Change</th>
			<th>Volume</th>
        </tr>
    </thead>
<tbody>

<?php
include_once('class.yahoostock.php');



$objYahooStock = new YahooStock;

 
/**
	Add format/parameters to be fetched
	
	#0 s = Symbol
	#1 n = name
	#2 l1 = Last Trade (Price Only)
	#3 a = Bid
	#4 b = Ask
	#5 c1 = Change
	#6 p2 = Percentage Change
	#7 v = Volume
	
 */
$objYahooStock->addFormat("snl1abc1p2v"); 
 
/**
	Add company stock code to be fetched
 */


$objYahooStock->addStock("msft");
$objYahooStock->addStock("amzn");
$objYahooStock->addStock("yhoo");
$objYahooStock->addStock("goog"); 
$objYahooStock->addStock("vgz");
$objYahooStock->addStock("wmt");
$objYahooStock->addStock("vz");
$objYahooStock->addStock("t");
$objYahooStock->addStock("tgt");
$objYahooStock->addStock("low");
$objYahooStock->addStock("hd");
$objYahooStock->addStock("fb");
$objYahooStock->addStock("twtr");
$objYahooStock->addStock("aapl");
$objYahooStock->addStock("hpq");
$objYahooStock->addStock("cmcsa");
$objYahooStock->addStock("ctl");
$objYahooStock->addStock("dish");
$objYahooStock->addStock("twx");
$objYahooStock->addStock("cbs");


 
/**
 * Printing out the data
 */
foreach( $objYahooStock->getQuotes() as $code => $stock)



{

	?>
	
	<!--Added echo str_replace remove quotes "" -->

        <tr>
            <td><?php echo str_replace('"', '', "<a href=http://finance.yahoo.com/echarts?s=$stock[0]+Interactive#symbol=$stock[0];range=5d target=\"_blank\">$stock[0]</a>") ?></td>
            <td><?php echo str_replace('"', '', $stock[1]); ?></td>
            <td><?php echo str_replace('"', '', $stock[2]); ?></td>
            <td><?php echo str_replace('"', '', $stock[3]); ?></td>
            <td><?php echo str_replace('"', '', $stock[4]); ?></td>
            <td><?php echo str_replace('"', '', $stock[5]); ?></td>
			<td><?php echo str_replace('"', '', $stock[6]); ?></td>
			<td><?php echo str_replace('"', '', $stock[7]); ?></td>			
        </tr>
		
	<?php
}
?>
    </tbody>
	</table>
	</html>
        


