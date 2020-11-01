
<!DOCTYPE html>
<html lang="en">
<head>
	<title>&#127829;Add Iteam </title>
	<link href="../css/style.css" rel="stylesheet">

	<style>

	</style>
</head>
<body>
 <?php
print_r($_POST);
print_r($_FILES);
?>

	<div class="postBoarding"><h1>Add Iteam</h1></div><!-- postBoarding -->
		<div class=main>
			<form action="../controller/foodPostCon.php" method="post" enctype="multipart/form-data"  id="postBoarding">
			

				<!--<label for="">Address  </label><br>-->
				<h3 class="name">Product Name </h3 >
				
				<input class="PName" type="text" name="pName" id="pName" >

				
				
				<h3 class="name">Product Image</h3 >
				<input type="file" name="pimage" id="pimage"><br>


				<h3 class="name">Price</h3 >
				<input type="text" name="price" id="price" >

			
			
				<h3 class="name">Breakfirst</h3 >
				<label class="radio">
					<input type="radio" name="breakfirst" id="breakfirst" value="yes"><span id="breakfirst" >&nbsp; Yes</span>&nbsp;&nbsp;
					<input type="radio" name="breakfirst" id="breakfirst" value="no"><span id="breakfirst" >&nbsp; No</span>&nbsp;&nbsp;<br>
				</label>
				
		
				<h3 class="name">Lunch</h3 >
				<label class="radio">
					<input type="radio" name="lunch" id="lunch" value="yes"><span id="lunch" >&nbsp; Yes</span>&nbsp;&nbsp;
					<input type="radio" name="lunch" id="lunch" value="no"><span id="lunch" >&nbsp; No</span>&nbsp;&nbsp;<br>
				</label>
				
		
				<h3 class="name">Dinner</h3 >
				<label class="radio">
					<input type="radio" name="dinner" id="dinner" value="yes"><span id="dinner" >&nbsp; Yes</span>&nbsp;&nbsp;
					<input type="radio" name="dinner" id="dinner" value="no"><span id="dinner" >&nbsp; No</span>&nbsp;&nbsp;<br>
				</label>
						
				

				<label for="">&nbsp; </label><br>
				<input type="submit" name="submit" id="submit" value="save"  ><br>


				<label for="">&nbsp; </label><br>
				<input type="submit" name="submit" id="submit" value="Add Iteam"  ><br>	<br><br>

			
				
			</form>

		<div><!-- main -->
</body>
</html>