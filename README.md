# Perhitungan Nilai Tukar Mata Uang USD ke MYR, IDR, USD, SGD
Banyak orang yang membutuhkan informasi perhitungan nilai tukar mata uang dijaman online ini, 
baik penjual online, pekerja TKI,pembisnis,  	pengusaha, mahasiswa/mahasiswi yang sedang 
kuliah di luar negeri, pemain saham dst. 
Terlebih dijaman online ini mereka para pengusaha, pembisnis, penjual/pedagang online dst
membutuhkan sekali informasi perhitungan nilai tukar mata uang asing yang lebih realtime dan 
mudah diakses secara online sehingga dapat membantu mereka dalam perhitungan nilai tukar secara 
lebih cepat dan realtime.
# Keterbatasan nilai tukar
- Nilai tukar ini baru bisa dipakai untuk menghitung nilai tukar USD per USD 1.  
- Perhitungannya hanya bisa realtime saat ini, masih butuh pengembangan agar bisa melihat 
		  nilai tukar berdasarkan waktu/bulan/tahun sebelumnya.
- Perhitungan baru ada USD ke MYR,USD,SGD,IDR.
# Informasi pembuatan perhitungan nilai tukar mata uang asing 
1. Web nilai tukar ini menggunakan API [Currencylayer](https://currencylayer.com "Currencylayer.com")
2. menggunakan framework [Codeigniter Version 3.1.10](http://codeigniter.com "Codeigniter Version 3.1.10")
3. Menggunakan [bootstrap v.4.3](https://getbootstrap.com/ "bootstrap v.4.3")
4. Menggunakan [fontawesome version 5.8.1](https://fontawesome.com/start "fontawesome version 5.8.1")
5. Menggunakan [font googleapis Dancing Script](https://fontawesome.com/start "font googleapis Dancing Script")
5. Menggunakan [Jquery version 3.3.1](https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js "Jquery version 3.3.1")
6. html5
7. PHP
#LISENSI
Free license, bebas digunakan untuk pengembangan selanjutnya maupun kebutuhan yang lainnya. Berbagi itu indah.
kontak saya :
- email : zaenalmuttaqien3@gmail.com
- phone : 085603044452

# Berikut sebagian contoh source
Proses pengolahan data API currencylayer menggunakan jquery js:
><script>
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
]});
}setInterval(getAllCurrency ,3000);});
