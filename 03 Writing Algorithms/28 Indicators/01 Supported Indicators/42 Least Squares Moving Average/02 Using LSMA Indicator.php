<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$typeName = 'LeastSquaresMovingAverage';
$helperName = 'LSMA';
$helperArguments = '"SPY", 20';
$properties = array("Intercept","Slope");
$updateParameterType = 'time/number pair, or an <code>IndicatorDataPoint</code>';
$constructorArguments = '20';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'least-squares-moving-average';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>