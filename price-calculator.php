<?php
require 'cyclrConnectorStore.php';
$store = new cyclrConnectorStore();

// Template Name: Price Calculator
get_header(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.0.1/react.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.0.1/react-dom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>

<div id="content" <?php Avada()->layout->add_class( 'content_class' ); ?> style="width: 100%;" >

<div class="price-calculator-box">
    <?php the_content(); ?>
     
    <div id="calculator"> 
    </div>

    <p style="text-align: center;"><span class="fa fa-heart" style="color: #F44336;"></span> Easy and predictable pricing, no long contracts, unlimited data (<a href="#billing">learn more</a>)</p>


<style type="text/css" scoped="scoped">.fusion-button.button-1 .fusion-button-text, .fusion-button.button-1 i {color:#fff;}.fusion-button.button-1 {border-width:0px;border-color:#fff;}.fusion-button.button-1 .fusion-button-icon-divider{border-color:#fff;}.fusion-button.button-1:hover .fusion-button-text, .fusion-button.button-1:hover i,.fusion-button.button-1:focus .fusion-button-text, .fusion-button.button-1:focus i,.fusion-button.button-1:active .fusion-button-text, .fusion-button.button-1:active{color:#fff;}.fusion-button.button-1:hover, .fusion-button.button-1:focus, .fusion-button.button-1:active{border-width:0px;border-color:#fff;}.fusion-button.button-1:hover .fusion-button-icon-divider, .fusion-button.button-1:hover .fusion-button-icon-divider, .fusion-button.button-1:active .fusion-button-icon-divider{border-color:#fff;}.fusion-button.button-1{background: #FF80AB;}.fusion-button.button-1:hover,.button-1:focus,.fusion-button.button-1:active{background: #FF4081;}.fusion-button.button-1{width:auto; margin: 15px 0;}</style>
    <p style="text-align: center;"><a class="fusion-button button-flat button-pill button-xlarge button-custom button-1" target="_self" title="Integrate Chargify" href="https://my.cyclr.com/account/beta"><i class="fa fa-check button-icon-left"></i><span class="fusion-button-text">Get Started For Free</span></a>
</p>

<style type="text/css" scoped="scoped">.fusion-button.button-5 .fusion-button-text, .fusion-button.button-5 i {color:#FF80AB;}.fusion-button.button-5 {border-width:1px;border-color:#FF80AB;margin-top: 30px;}.fusion-button.button-5 .fusion-button-icon-divider{border-color:#FF80AB;}.fusion-button.button-5:hover .fusion-button-text, .fusion-button.button-5:hover i,.fusion-button.button-5:focus .fusion-button-text, .fusion-button.button-5:focus i,.fusion-button.button-5:active .fusion-button-text, .fusion-button.button-5:active{color:#fff;}.fusion-button.button-5:hover, .fusion-button.button-5:focus, .fusion-button.button-5:active{border-width:1px;border-color:#fff;}.fusion-button.button-5:hover .fusion-button-icon-divider, .fusion-button.button-5:hover .fusion-button-icon-divider, .fusion-button.button-5:active .fusion-button-icon-divider{border-color:#fff;}.fusion-button.button-5{background: #fff;}.fusion-button.button-5:hover,.button-5:focus,.fusion-button.button-5:active{background: #FF80AB;}.fusion-button.button-5{width:auto; margin-top: 15px;}</style>
    <table id='calculator-connector-list' class="table-2 connector-price-table">
    </table>

<a name="billing"></a>
<div class="fusion-row billing-faq">
    <h1 class="page-title" data-fontsize="52" data-lineheight="69">Billing FAQ</h1>
    <div class="fusion-one-half fusion-layout-column fusion-spacing-yes" style="margin-top:0px;margin-bottom:20px;">
        <div class="fusion-column-wrapper">
            <ul class="fusion-checklist fusion-checklist-2" style="font-size:13px;line-height:22.1px;">
                <li class="fusion-li-item"><span style="height:22.1px;width:22.1px;margin-right:9.1px;" class="icon-wrapper circle-no"><i class="fusion-li-icon fa fa-star" style="color:#ff80ab;"></i></span><div class="fusion-li-item-content" style="margin-left:31.2px;">Free account to build and test your workflows</div></li>
                <li class="fusion-li-item"><span style="height:22.1px;width:22.1px;margin-right:9.1px;" class="icon-wrapper circle-no"><i class="fusion-li-icon fa fa-star" style="color:#ff80ab;"></i></span><div class="fusion-li-item-content" style="margin-left:31.2px;">Pay only when you put a workflow live</div></li>
                <li class="fusion-li-item"><span style="height:22.1px;width:22.1px;margin-right:9.1px;" class="icon-wrapper circle-no"><i class="fusion-li-icon fa fa-star" style="color:#ff80ab;"></i></span><div class="fusion-li-item-content" style="margin-left:31.2px;">Your monthly charge is easy: $10 per running workflow + your connectors</div></li>
                <li class="fusion-li-item"><span style="height:22.1px;width:22.1px;margin-right:9.1px;" class="icon-wrapper circle-no"><i class="fusion-li-icon fa fa-star" style="color:#ff80ab;"></i></span><div class="fusion-li-item-content" style="margin-left:31.2px;">You can use your connectors in unlimited workflows, no extra charge</div></li>
            </ul>
            <div class="fusion-clearfix"></div>
        </div>
    </div>
    <div class="fusion-one-half fusion-layout-column fusion-column-last fusion-spacing-yes" style="margin-top:0px;margin-bottom:20px;">
        <div class="fusion-column-wrapper">
            <ul class="fusion-checklist fusion-checklist-2" style="font-size:13px;line-height:22.1px;">
                <li class="fusion-li-item"><span style="height:22.1px;width:22.1px;margin-right:9.1px;" class="icon-wrapper circle-no"><i class="fusion-li-icon fa fa-star" style="color:#ff80ab;"></i></span><div class="fusion-li-item-content" style="margin-left:31.2px;">Unlimited data, no need to worry about "tasks", "API calls", etc</div></li>
                <li class="fusion-li-item"><span style="height:22.1px;width:22.1px;margin-right:9.1px;" class="icon-wrapper circle-no"><i class="fusion-li-icon fa fa-star" style="color:#ff80ab;"></i></span><div class="fusion-li-item-content" style="margin-left:31.2px;">If you're regularly moving 1M+ records you need our <a href="/prices/enterprise">enterprise service</a></div></li>
                <li class="fusion-li-item"><span style="height:22.1px;width:22.1px;margin-right:9.1px;" class="icon-wrapper circle-no"><i class="fusion-li-icon fa fa-star" style="color:#ff80ab;"></i></span><div class="fusion-li-item-content" style="margin-left:31.2px;">We prorata connectors and workflows added mid billing period</div></li>
                <li class="fusion-li-item"><span style="height:22.1px;width:22.1px;margin-right:9.1px;" class="icon-wrapper circle-no"><i class="fusion-li-icon fa fa-star" style="color:#ff80ab;"></i></span><div class="fusion-li-item-content" style="margin-left:31.2px;">Money back guarantee, if you're not happy neither are we</div></li>
            </ul>
            <div class="fusion-clearfix"></div>
        </div>
    </div>
    <div class="fusion-clearfix"></div>
</div>
        </div>
</div>

<script type='text/babel'>
	var allConnectors = [
		<?php
			function getPrice($c){
				foreach ($c->Prices as  $key => $price)
			 	if($key == 'USD')
				 	return floatval($price);
				return 0;
			}
			foreach($store->getConnectors(100) as $connector){
				echo '{icon:"'.$connector->Icon.'", name: "'.$connector->Name.'", price:'.getPrice($connector).', status: "'.$connector->Status.'"},';
			}
		?>
	];
  
  var cycleCount = 1;
  var selectedConnectors = [];

  var calculator = React.createClass(
  {
    displayName: 'calculator',
	handleChange: function(event) {
		cycleCount = event.target.value;
    	renderCalc();
  	},
  	render: function() {
      if(this.props.connectors.length == 0)
        return (<div>
          <div className="fusion-alert alert success alert-dismissable alert-success alert-shadow">
            <span className="alert-icon"><i className="fa fa-lg fa-info-circle"></i></span>
              Click below to add connectors
          </div>
        </div>);
      var connectorNodes = this.props.connectors.map(function(connector) {
        return (<div key={connector.name} className="box-connector-price">
            <img src={connector.icon} />
            <p className="connector-name">{connector.name}</p>
            <p className="connector-price">${connector.price}/month</p>
        </div>);
      });

      return (<div className="monthly-price">
      			<div className="box-connector-price">
      				<input id="numworkflows" type="number" min="1" value={cycleCount} onChange={this.handleChange}/>
      				<p className="connector-name">Workflows</p>
      				<p className="connector-price">${this.props.cyclePrice}/month</p>
      			</div>
          {connectorNodes}
          <div className="box-connector-price monthly-total">
              <p className="total">= ${this.props.totalPrice}</p>
              <p className="period">monthly</p>
          </div>
        </div>);
    }
  });

	var priceList = React.createClass(
  {
			displayName: 'priceList',
			handleAdd: function(key, event){
				if(selectedConnectors.filter(function(c){ if(c.name == key) return c;}).length == 0)
				{
					var connector = this.props.connectors.filter(function(c){ if(c.name == key) return c;})[0];
					selectedConnectors.push(connector);
					renderCalc();
				}
			},
			handleRemove: function(key, event){
				selectedConnectors = selectedConnectors.filter(function(c){ if(c.name != key) return c;});
				renderCalc();
			},
			render: function() {
				var originalThis = this;
				var connectorRows = this.props.connectors.map(function(connector, i) {
					var disabledStyle = {
						cursor: 'not-allowed',
    					opacity: '.65'
					};
					if (connector.status == 'ComingSoon')
						var btn = (<a className="fusion-button button-flat button-pill button-small button-custom button-5" style={disabledStyle} href="javascript:void(0);">
								<i className="fa fa-clock-o button-icon-left"></i> <span className="fusion-button-text">Coming Soon</span>
							</a>);
					else
						var btn = originalThis.props.selectedConnectors.filter(function(c){ if(c.name == connector.name) return c;}).length == 0 ?
							(<a onClick={originalThis.handleAdd.bind(originalThis, connector.name)} className="fusion-button button-flat button-pill button-small button-custom button-5" href="javascript:void(0);">
									<i className="fa fa-plus button-icon-left"></i> <span className="fusion-button-text">Add</span>
							</a>)
							:
							(<a onClick={originalThis.handleRemove.bind(originalThis, connector.name)} className="fusion-button button-flat button-pill button-small button-custom button-5" href="javascript:void(0);">
								<i className="fa fa-minus button-icon-left"></i> <span className="fusion-button-text">Remove</span>
							</a>);
	        return (<tr key={connector.name}>
							<td>
									<img src={connector.icon} /> {connector.name}
							</td>
							<td>${connector.price}/month</td>
							<td>
									{btn}
							</td>
					</tr>);
	      });

				return (<tbody>{connectorRows}</tbody>);
			}
	});
	renderCalc();

	function renderCalc(){
	  var cyclePrice = cycleCount * 10;
	  ReactDOM.render(
	    React.createElement(calculator, {
	      connectors: selectedConnectors,
	      cyclePrice: cyclePrice,
	      totalPrice: cyclePrice + selectedConnectors.reduce((v,i) => {return v + i.price; }, 0)
	    }),
	    document.getElementById('calculator')
	  );
		ReactDOM.render(
			React.createElement(priceList, {
				connectors : allConnectors,
				selectedConnectors: selectedConnectors
			}),
	    document.getElementById('calculator-connector-list')
		);
	}
</script>

<?php do_action( 'avada_after_content' ); ?>
<?php get_footer();

// Omit closing PHP tag to avoid "Headers already sent" issues.
