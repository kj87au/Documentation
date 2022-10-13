<p>The brokerage model of your algorithm automatically sets the fill model for each security, but you can override it. To manually set the fill model of a security, call the <code>SetFillModel</code> method on the Security object.</p>
<div class="section-example-container">
    <pre class="csharp">// In Initialize
var security = AddEquity("SPY");
security.SetFillModel(new ImmediateFillModel());</pre>
    <pre class="python"># In Initialize
security = self.AddEquity("SPY")
security.SetFillModel(ImmediateFillModel())</pre>
</div>

<p>You can also set the fill model in a security initializer. If your algorithm has a dynamic universe, use the security initializer technique. In order to initialize single security subscriptions with the security initializer, call <code>SetSecurityInitializer</code> before you create the subscriptions.</p><p>

</p><div class="section-example-container">
<pre class="csharp">// In Initialize
SetSecurityInitializer(CustomSecurityInitializer);
AddEquity("SPY");

private void CustomSecurityInitializer(Security security)
{
    security.SetFillModel(new ImmediateFillModel());
}
</pre>
<pre class="python"># In Initialize
self.SetSecurityInitializer(self.CustomSecurityInitializer)
self.AddEquity("SPY")

def CustomSecurityInitializer(self, security: Security) -&gt; None:
    security.SetFillModel(ImmediateFillModel())
</pre>
</div>

<?php echo file_get_contents(DOCS_RESOURCES."/reality-modeling/security-initializers.html");?>

<p>To extend upon the default security initializer instead of overwriting it, create a custom <code>BrokerageModelSecurityInitializer</code>.</p>

<?php
include(DOCS_RESOURCES."/reality-modeling/brokerage-mondel-security-init.php");
$overwriteCodePy = "security.SetFillModel(ImmediateFillModel())";
$overwriteCodeC = "security.SetFillModel(new ImmediateFillModel());";
$getBrokerageModelInitCodeBlock($overwriteCodePy, $overwriteCodeC);
?>

<p>To view all the pre-built fill models, see <a href='/docs/v2/writing-algorithms/reality-modeling/trade-fills/supported-models'>Supported Models</a>.</p>
