<div class="row qq_main_box">
	<div class="col-md-3 currency-american">
		<img style="width: 20%;" src="<?php echo base_url(); ?>assets/image/amerika.png">
		<span>Dollar Amerika</span>
		<h4 id="USD"></h4>
	</div>
	<div class="col-md-3 currency-indonesian">
		<img style="width: 20%;" src="<?php echo base_url(); ?>assets/image/indonesia.png">
		<span>Rupiah Indonesia</span>
		<h4 id="IDR"></h4>
	</div>
	<div class="col-md-3 currency-singapore">
		<img style="width: 20%;" src="<?php echo base_url(); ?>assets/image/Singapore.png">
		<span>Dollar Singapore</span>
		<h4 id="SGD"></h4>
	</div>
	<div class="col-md-3 currency-indonesian">
		<img style="width: 20%;" src="<?php echo base_url(); ?>assets/image/malaysia.png">
		<span>Ringgit Malaysia</span>
		<h4 id="MYR"></h4>
	</div>
	<div class="col-md-12">
		<span class="qq_color_title">1 American Dollar Equals</span>
		<h3 id="result-currencies-2"></h3>
		<h3 id="result-name-currencies"></h3>
		<span class="qq_color_content" id="date-currency"></span>
		<div class="row qq_margin_20all">
			<div class="col-md-2">
				<input type="text" class="form-control" name="price" value="1" disabled>
			</div>
			<div class="col-md-3">
				<select class="form-control" disabled>
					<option value="USD">American Dollar</option>
				</select>
			</div>
			<div class="col-md-1">
				<button disabled><i class="fas fa-arrow-right"></i></button>
			</div>
			<div class="col-md-2">
				<input id="result-currencies" type="text" class="form-control" name="price" disabled>
			</div>
			<div class="col-md-3">
				<select class="form-control" id="currency-4country">
					<option value="USD" selected>American Dollar</option>
					<option value="IDR">Indonesian Rupiah</option>
					<option value="SGD">Singapore Dollar</option>
					<option value="MYR">Ringgit Malaysia</option>
				</select>
			</div>
		</div>
	</div>
	
</div>