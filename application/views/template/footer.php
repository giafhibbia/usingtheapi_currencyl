<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script>

$(document).ready(function(){
	getAllCurrency();
	// set endpoint and your access key
	var endpoint = 'live';
	var access_key = 'b8f26fe7d0c35cdb30264c1a26d993cf';
	
	$(function () {
	    getOneCurrency(); //this calls it on load
	    $("#currency-4country").change(getOneCurrency);
	});

	function getOneCurrency() {
	    var currencies = $( "#currency-4country option:selected" ).val();
	  	$.ajax({
		    url: 'http://apilayer.net/api/' + endpoint + '?access_key=' + access_key + '&currencies=' + currencies,   
		    dataType: 'json',
		    success: function(json) {
		    	var d = new Date();
		        // access the conversion result in json.result
		        if (json.quotes.USDUSD) {
		        	$( "#result-currencies" ).val( json.quotes.USDUSD );
		        	$( "#result-name-currencies" ).html( "American Dollar" );
		        	$( "#result-currencies-2" ).html( json.quotes.USDUSD );
					document.getElementById("date-currency").innerHTML = d;
		        }
		        if (json.quotes.USDMYR) {
		        	$( "#result-currencies" ).val( json.quotes.USDMYR );
		        	$( "#result-name-currencies" ).html( "Ringgit Malaysia" );
		        	$( "#result-currencies-2" ).html( json.quotes.USDMYR );
					document.getElementById("date-currency").innerHTML = d;
		        }
		        if (json.quotes.USDSGD) {
		        	$( "#result-currencies" ).val( json.quotes.USDSGD );
		        	$( "#result-name-currencies" ).html( "Singapore Dollar" );
		        	$( "#result-currencies-2" ).html( json.quotes.USDSGD );
					document.getElementById("date-currency").innerHTML = d;
		        }
		        if (json.quotes.USDIDR) {
		        	$( "#result-currencies" ).val( json.quotes.USDIDR );
		        	$( "#result-name-currencies" ).html( "Indonesian Rupiah" );
		        	$( "#result-currencies-2" ).html( json.quotes.USDIDR );
					document.getElementById("date-currency").innerHTML = d;
		        }
		                
		    }
		});
	}

	setInterval(getAllCurrency ,3000); 
	function getAllCurrency(){
		var endpoint = 'live';
		var access_key = 'b8f26fe7d0c35cdb30264c1a26d993cf';
		var currencies = "USD,IDR,MYR,SGD";
	// execute the conversion using the "convert" endpoint:
		$.ajax({
		    url: 'http://apilayer.net/api/' + endpoint + '?access_key=' + access_key+'&currencies=' + currencies,   
		    dataType: 'json',
		    success: function(json) {
		    	var usd = json.quotes.USDUSD;
		    	var idr = json.quotes.USDIDR;
		    	var sgd = json.quotes.USDSGD;
		    	var myr = json.quotes.USDMYR;
		    	$( "#USD" ).html( "USD "+usd );
		    	$( "#IDR" ).html( "IDR "+idr );
		    	$( "#SGD" ).html( "SGD "+sgd );
		    	$( "#MYR" ).html( "MYR "+myr );
		        // access the conversion result in json.result
		        //alert(json.result);
		                
		    }
		});
		
	}
	                                                                                    
});

</script>