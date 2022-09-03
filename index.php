<?php

       
	include("includes/pageload.php");

?>
<?php
       
	include("includes/header.php");

?>

  <header>
  
		<section>
				<div>
					<img id="user_photo"  src="images/9.png">
				</div>
				 
 		<span style="text-align:center; color:transparent; font-size: 24px; font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', 'serif'; font-style: italic; transition:all 1.5s ease-in-out; " id="massage" >hello</span>
				<form >
					<input type="text" class="form-control" placeholder="Username" name="username" id="username" autocomplete="off" autofocus>
					<br>
					<input type="password" class="form-control" placeholder="Password" name="password" id="password" autocomplete="off"><br>
					
					<span id="Remember"><label style="margin-right: 10px;">Remember me</label><input class="" type="checkbox" name="rememberMe"></span>

						<input type="button" style="margin-left: 5px;background-color:rgba(40,96,144,0.35);"  class="btn btn-primary" placeholder="" name="" value="submit" id="submit">
				</form>
		</section>
	</header>
		
<?php
       
	include("includes/footer.php");

?>
		
		
		
		
		<script>
	 $("#submit").click(function (){


			 var username =  $("#username").val();
			 var password =  $("#password").val();

		  if(username == ''&&password=='')
			  {
				   
				  $("#massage").html("username and password are empty");
				  $("#massage").css("color","orange");	
				  
				   
			  }
		 else{
		  if(username == ''||password==''){
				  
			  
			  if(username == '')
			  		{
						 
				  $("#massage").html("username is empty");
				  $("#massage").css("color","orange");	
				  

			  		}
		 
		 
				  if(password=='')
				  {
					   
				  $("#massage").html("password is empty");
				  $("#massage").css("color","orange");	
				  
				  }
					 
				  return false;
			  }
		 		else
				{
				  
			  
			  //proprty:value

					  $.ajax({

					  url:'connect.php' ,
					  type:'GET',
					  data:'username='+ username+'&password=' + password  ,

					  success:function (data){

						  if(data==1)
							  {
								  function Go()
								  {
									  window.location = "https://www.facebook.com/abo.reda.0";
								  }
								  $("#massage").html("You Successfully Login (: ");
								  $("#massage").css("color","green");
								  setTimeout(Go,2500);
								  
							  }
							  else if(data==2)
							  {
								   
								  $("#massage").html("Sorry Your Username OR Password Wrong ): ");
								  $("#massage").css("color","red");
								   
									  
							  }
						  	  else
							  {
								   
								  $("#massage").html("error");
								  $("#massage").css("color","blue");
								   
								  
							  }
						  	
					  }



						});
				   }
		 }


		  });



	</script>
		
