<p>To add a universe of Index Option contracts, in the <code>Initialize</code> method, call the <code>AddIndexOption</code> method. This method returns an <code>Option</code> object, which contains the canonical <code>Symbol</code>. You can't trade with the canonical Option <code>Symbol</code>, but save a reference to it so you can easily access the Option contracts in the <a href='/docs/v2/writing-algorithms/securities/asset-classes/index-options/handling-data#02-Option-Chains'>OptionChain</a> that LEAN passes to the <code>OnData</code> method. The method to create the universe depends on if the Index Options you want require a target ticker.</p>

<h4>Create Standard Universes</h4>

<p>To create a universe of Index Options based on an index like VIX, SPX, or NDX, pass the index ticker to the <code>AddIndexOption</code> method.</p>

<div class="section-example-container">
    <pre class="csharp">var option = AddIndexOption("VIX");
_symbol = option.Symbol;</pre>
    <pre class="python">option = self.AddIndexOption("VIX")
self.symbol = option.Symbol</pre>
</div>

<p>The following table describes the <code>AddIndexOption</code> method arguments for standard universes:</p>
<table class="qc-table table">
    <thead>
        <tr>
            <th>Argument</th>
            <th>Data Type</th>
            <th>Description</th>
            <th>Default Value</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>ticker</code></td>
	        <td><code class="csharp">string</code><code class="python">str</code></td>
            <td>The underlying Index ticker. To view the supported indices, see <a href='/docs/v2/writing-algorithms/datasets/algoseek/us-index-options#05-Supported-Assets'>Supported Assets</a>.</td>
            <td></td>
        </tr>
        <tr>
            <td><code>resolution</code></td>
	        <td><code class="csharp">Resolution?</code><code class="python">Resolution/NoneType</code></td>
            <td>The resolution of the market data. To view the supported resolutions, see <a href='/docs/v2/writing-algorithms/securities/asset-classes/index-options/requesting-data#03-Resolutions'>Resolutions</a>.</td>
            <td><code class="python">None</code><code class="csharp">null</code></td>
        </tr>
        <tr>
            <td><code>market</code></td>
	        <td><code class="csharp">string</code><code class="python">str</code></td>
            <td>The Index Option market.</td>
            <td><code>Market.USA</code></td>
        </tr>
        <tr>
            <td><code>fillForward</code></td>
	        <td><code>bool</code></td>
            <td>If true, the current slice contains the last available data even if there is no data at the current time.</td>
            <td><code class="python">True</code><code class="csharp">true</code></td>
        </tr>
    </tbody>
</table>
<p>If you add an Option universe for an underlying Index that you don't have a subscription for, LEAN automatically subscribes to the underlying Index.</p>

<h4>Create Non-Standard Universes</h4>

<p>To create a universe of non-standard Index Options like weekly VIX contracts, pass the index Symbol and target Option ticker to the <code>AddIndexOption</code> method.</p>

<div class="section-example-container">
    <pre class="csharp">var indexSymbol = AddIndex("VIX").Symbol;
var option = AddIndexOption(indexSymbol, "VIXW");
_symbol = option.Symbol;</pre>
    <pre class="python">index_symbol = self.AddIndex("VIX").Symbol
option = self.AddIndexOption(index_symbol, "VIXW")
self.symbol = option.Symbol</pre>
</div>

<p>The following table describes the <code>AddIndexOption</code> method arguments for non-standard universes:</p>
<table class="qc-table table">
    <thead>
        <tr>
            <th>Argument</th>
            <th>Data Type</th>
            <th>Description</th>
            <th>Default Value</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>underlying</code></td>
	        <td><code>Symbol</code></td>
            <td>The underlying Index <code>Symbol</code>. To view the supported indices, see <a href='/docs/v2/writing-algorithms/datasets/algoseek/us-index-options#05-Supported-Assets'>Supported Assets</a>.</td>
            <td></td>
        </tr>
        <tr>
            <td><code>targetOption</code></td>
	        <td><code class="csharp">string</code><code class="python">str</code></td>
            <td>The target Option ticker. To view the supported target Options, see <a href='/docs/v2/writing-algorithms/datasets/algoseek/us-index-options#05-Supported-Assets'>Supported Assets</a>.</td>
            <td></td>
        </tr>
        <tr>
            <td><code>resolution</code></td>
	        <td><code class="csharp">Resolution?</code><code class="python">Resolution/NoneType</code></td>
            <td>The resolution of the market data. To view the supported resolutions, see <a href='/docs/v2/writing-algorithms/securities/asset-classes/index-options/requesting-data#03-Resolutions'>Resolutions</a>. The Index resolution must be less than or equal to the Index Option resolution. For example, if you set the Index resolution to minute, then you must set the Index Option resolution to minute, hour, or daily.</td>
            <td><code class="python">None</code><code class="csharp">null</code></td>
        </tr>
        <tr>
            <td><code>market</code></td>
	        <td><code class="csharp">string</code><code class="python">str</code></td>
            <td>The Index Option market.</td>
            <td><code>Market.USA</code></td>
        </tr>
        <tr>
            <td><code>fillForward</code></td>
	        <td><code>bool</code></td>
            <td>If true, the current slice contains the last available data even if there is no data at the current time.</td>
            <td><code class="python">True</code><code class="csharp">true</code></td>
        </tr>
    </tbody>
</table>

<p>If you add an Option universe for an underlying Index that you don't have a subscription for, LEAN automatically subscribes to the underlying Index.</p>

<h4>Configure Reality Models</h4>

<p>To override the default <a href="/docs/v2/writing-algorithms/reality-modeling/options-models/pricing">pricing model</a> of the Option, <a href='https://www.quantconnect.com/docs/v2/writing-algorithms/reality-modeling/options-models/pricing#04-Set-Models'>set a pricing model</a>.</p>

<div class="section-example-container">
    <pre class="csharp">option.PriceModel = OptionPriceModels.CrankNicolsonFD();</pre>
    <pre class="python">option.PriceModel = OptionPriceModels.CrankNicolsonFD()</pre>
</div>

<?php echo file_get_contents(DOCS_RESOURCES."/reality-modeling/volatility-model.html"); ?>
