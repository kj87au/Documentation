<?php
include(DOCS_RESOURCES."/brokerages/cli-deployment/deploy-local-algorithms.php");

$brokerageName = "Coinbase Pro";
$dataFeedName = "";
$isBrokerage = true;
$brokerageDetails = "
<li>Enter the environment to use.
<div class='cli section-example-container'>
<pre>$ lean live deploy \"My Project\"
Use sandbox? (live, paper): live</pre>
</div>
</li>

<li>Enter your API key, API secret, and passphrase.
<div class='cli section-example-container'>
<pre>$ lean live deploy \"My Project\"
API key: 6d3ef5ca2d2fa52e4ee55624b0471261
API secret: ****************************************************************************************
Passphrase: ****************</pre>
</div>
To create new API credentials, see the <a href='https://pro.coinbase.com/profile/api' target='_blank' rel='nofollow'>API settings page</a> on the Coinbase Pro website.
</li>
";
$dataFeedDetails = "";
$supportsIQFeed = false;
$requiresSubscription = true;

$getDeployLocalAlgorithmsText($brokerageName, $dataFeedName, $isBrokerage, $brokerageDetails, $dataFeedDetails, $supportsIQFeed, $requiresSubscription);
?>
