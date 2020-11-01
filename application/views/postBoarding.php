
<!DOCTYPE html>
<html lang="en">
<head>
	<title>&#127969; Post Boarding</title>
	<link href="../css/style.css" rel="stylesheet">

	<style>

	</style>
</head>
<body>

	<div class="postBoarding"><h1>Post On Your Site</h1></div><!-- postBoarding -->
		<div class=main>
			<form action="../controller/postBoardingCon.php" method="post" enctype="multipart/form-data"  id="postBoarding">
			<div id="name">

				<!--<label for="">Address  </label><br>-->
				<h3 class="name">Address </h3 >
				
				<input class="hnumber" type="text" name="Hnumber" id="Hnumber"  >
				<label class="hLable"> House Number / Name  </label><br>

				
				<input class="lane" type="text" name="lane" id="lane"  >
				<label class="lLable" > Lane </label><br>

				
				<input class="city" type="text" name="city" id="city" >
				<label class="cityLable" > City  </label>

				
				<input class="district" type="text" name="district" id="district"  >
				<label class="lDis" >District  </label><br>

			</div><!-- id name -->	

				<h3 class="name">Location</h3 >
				<!-- <label for="">Location  </label><br> -->
				<input type="text" name="location" id="location" ><br>

				<h3 class="name">Description </h3 >
				<!--<input type="text" name="description" id="description" placeholder="Enter Description" ><br><br>-->
				<textarea name="description" id="description" rows="5" cols="50"></textarea><br>

				
				<h3 class="name">Boarding Cover Image</h3 >
				<input type="file" name="BCimage" id="BCimage"><br>

				<!--<label for="">Boarding Images  </label><br>
				<input type="file" name="Bimage{}" id="Bimage" multiple ><br><br>-->
			
				<h3 class="name">Avertisement Type</h3 >
				<label class="radio">
					<input type="radio" name="individual" id="individual" value="Individual"><span id="individual" >&nbsp; Individual</span>&nbsp;&nbsp;
					<input type="radio" name="individual" id="RoomOrHome" value="RoomOrHome"><span id="RomeOrHome" >&nbsp; Rome Or Home</span>&nbsp;&nbsp;<br>
				</label>
				

				<h3 class="name">Gender</h3 >
				<label class="radio">
					<input type="radio" name="gender" value="Male"> Male
					<input type="radio" name="gender" value="Female"> Female <br>
				</label>
				

				
				<h3 class="name">Person Count</h3 >
				<input type="number" name="Pcount" id="pcount" value="1" min="1" max="30" >

				
				<h3 class="name">Cost Per Person For Month</h3 >
				<input type="text" name="CPperson" id="cpperson"  >

				
				<h3 class="name">KeyMoney</h3 >
				<input type="text" name="Keymoney" id="Keymoney" >

				<div class="group">
				<h3 class="name">Avertisement Lifespan (Month)</h3 >
				
				<input type="number" name="Lifespan" id="lifespan" value="1" min="1" max="" class="control prc" >
				</div>
				
				<div class="group">
				
				<h3 class="name">Avertisement Amount :     Rs  </h3 >
				<!-- <output  name="result" id="result"></output>   -->
				<input type="text"  disabled  name="Aamount" id="Aamount"  ><br><br>
				</div>
					
				<br>
				<label for="">&nbsp; </label><br>
				<input type="submit" name="submit" id="submit" value="Save"  ><br>	<br><br>
					
				
				
			

				<script src="jquery-3.5.1.min.js"></script>
				<script>
					$('.group').on('input','.prc',function(){
						var totalsum =0;
						$('.group .prc').each(function(){
							var inputVal = $(this).val();
							if($.isNumeric(inputVal)){
								totalsum = parseFloat(inputVal)*100;
							}

						});
						$('#Aamount').val(totalsum);
						//$('#result').text(totalsum);
						
						//result=$_SESSION['totalsum']

					});

					$('form').submit(function(e){
						$(':disabled').each(function(e){
							$(this).removeAttr('disabled');
						})

					});
				</script>


			
				
			</form>

		<div><!-- main -->
</body>
</html>