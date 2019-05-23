<?php
//index.php
$minimum_range = 10000;
$maximum_range = 30000;
?>

<html>  
    <head>  
		<title>Auto Car Trade and Used</title> 
		<style>
.footer {
	z-index: 1000;
   position: fixed;
   right: 0;
   bottom: 0;
   height: 30px;
   width: 300px;
   background-color: red;
   color: white;
   text-align: center;
   padding: 5px;
   font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
</style>
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
			
    </head>  
	<body style="background-color:lightgray;"> 
	<div class="footer">Contact Us</div>
	<div id="banner">
         <?php echo '<image src="logo.svg" width="50%"/>'; ?>
     </div>
	
			<?php
$dir          = 'gallery';
$file_display = array(
    'jpg',
    'jpeg',
    'png',
    'gif'
);

if (file_exists($dir) == false) {
    echo 'Directory \''. $dir. '\' not found!';
} else {
    $dir_contents = scandir($dir);

    foreach ($dir_contents as $file) {
		$fileExt = explode(".", $file);
		$file_type = strtolower(end($fileExt));

        if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
			echo '<div class="container"> 
			<div class="w3-content w3-section" style="max-width:100%">
			<img class="mySlides" src="'. $dir. '/'. $file. '" alt="'. $file.  '" alt="'. $file. '" style="width:100%" />
			</div></div>';
        }
    }
}
		?>
			<br />
			<br />
			<h3 align="center">Select a vehicle in your price range:</a></h3>
			<br />
			<br />
			<center><div class="shell" style="width:80%">
			<div class="row">
				<div class="col-md-2">
					<input type="text" name="minimum_range" id="minimum_range" class="form-control" value="<?php echo $minimum_range; ?>" />
				</div>
				<div class="col-md-8" style="padding-top:12px">
					<div id="price_range"></div>
				</div>
				<div class="col-md-2">
					<input type="text" name="maximum_range" id="maximum_range" class="form-control" value="<?php echo $maximum_range; ?>" />
				</div>
			</div>
			<br />
			<div id="load_product"></div>
			<br />
		</div>
</div></center>	
    </body>  
</html>  
<script>  
$(document).ready(function(){

	$('#price_range').slider({
		range:true,
		min:100,
		max:40000,
		values:[<?php echo $minimum_range; ?>, <?php echo $maximum_range; ?>],
		slide:function(event, ui){
			$("#minimum_range").val(ui.values[0]);
			$('#maximum_range').val(ui.values[1]);
			load_product(ui.values[0], ui.values[1]);
		}
	});

	load_product(<?php echo $minimum_range; ?>, <?php echo $maximum_range; ?>)  ;
    
    function load_product(minimum_range, maximum_range)
    {
    	$.ajax({
    		url:"insta/fetch.php",
    		method:"POST",
    		data:{minimum_range:minimum_range, maximum_range:maximum_range},
    		success:function(data)
    		{
    			$('#load_product').html(data);
    		}
    	});
    }
	
	
}); 

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 12000); // Change image every 2 seconds
}
</script>