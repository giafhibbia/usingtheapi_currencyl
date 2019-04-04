<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script>

$(document).ready(function(){
	getDataAccurancy();
	// set endpoint and your access key
	endpoint = 'live';
	access_key = 'b8f26fe7d0c35cdb30264c1a26d993cf';

	$('select').on('change', function() {
	  	var currencies = ( this.value );
	  	$.ajax({
		    url: 'http://apilayer.net/api/' + endpoint + '?access_key=' + access_key + '&currencies=' + currencies,   
		    dataType: 'json',
		    success: function(json) {

		        // access the conversion result in json.result
		        //alert(json.result);
		                
		    }
		});
	  	http://apilayer.net/api/live?access_key=b8f26fe7d0c35cdb30264c1a26d993cf&currencies=SGD
	});
	function getDataAccurancy(){

	// execute the conversion using the "convert" endpoint:
		$.ajax({
		    url: 'http://apilayer.net/api/' + endpoint + '?access_key=' + access_key,   
		    dataType: 'json',
		    success: function(json) {

		        // access the conversion result in json.result
		        //alert(json.result);
		                
		    }
		});
		
	}
	setInterval(getDataAccurancy ,3000);                                                                                     
});

</script>