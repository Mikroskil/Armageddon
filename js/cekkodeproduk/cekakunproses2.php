<script language="javascript">
$(document).ready(function()
{
	$("#kodeproduk").blur(function()
	{
		//remove all the class add the messagebox classes and start fading
		$("#msgboxusername").removeClass().addClass('messageboxusername').text('Cek...').fadeIn("slow");
		//check the username exists or not from ajax
		$.post("js/cekkodeproduk/cekakunproses1.php",{ kodeproduk:$(this).val() } ,function(data)
        {
		  if(data=='no') //if username not avaiable
		  {
		  	$("#msgboxusername").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('<img src="img/validation/no.png" />').addClass('messageboxerrorusername').fadeTo(900,1);
			});		
          }
		  else
		  {
		  	$("#msgboxusername").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('<img src="img/validation/ok.png" />').addClass('messageboxokusername').fadeTo(900,1);	
			});
		  }
				
        });
 
	});
});
</script>