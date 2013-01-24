<html> 
	<html> 
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>WELCOME</title> 
	<link rel="stylesheet" href="jquery/jquery.mobile.structure-1.0.1.min.css" />
	<link rel="stylesheet" href="jquery/pinal.min.css" />
	<script src="jquery/jquery-1.6.4.js"></script>
	<script src="jquery/jquery.mobile-1.0.1.min.js"></script>
	<link rel="stylesheet" href="jquery.ui.datepicker.mobile.css" /> 
    <script src="jQuery.ui.datepicker.js"></script>
    <script src="jquery.ui.datepicker.mobile.js"></script>
	<script>
	//reset type=date inputs to text
	$( document ).bind( "mobileinit", function(){
		$.mobile.page.prototype.options.degradeInputs.date = true;
	});	
	</script>	
	</head> 
	<body> 
           <form method="POST" onsubmit="return form();" action="registrasi_pencaker.php">
<!-- /header -->
<div data-role="page" class="type-interior">
		<div data-role="header" data-position="fixed" data-theme="a">
			
			<h1>WikuJobs</h1>
			
		</div> 
 
<!-- /content -->

		<div class="ui-body ui-body-b">
		
		<div style="text-align: center;">
		<h2>WELCOME</h2>
		<img src="images/capture.png" alt="Logo" />
		
		</div>


		
		<center><p>Selamat datang di website kami, website kami meyediakan berbagai macam info lowongan, lamaran pekerjaan .</p></center>
		<center><p>dan dapat di gunakan bagi perusahaan yang sedang mencari tenaga kerja yang bermutu yang sesuai dengan bidangnya</p></center>
		
		<a href="home.php" data-role="button" data-icon="arrow-r" data-theme="b" data-transition="flip" name="daftar">Masuk halaman utama</a>
				
	</div>
	</div>
	
        
                </form>
</body>
</html>
