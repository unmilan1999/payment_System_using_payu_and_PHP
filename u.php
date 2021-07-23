<html>
<form method="post">
<div>
<select name="lang">
 <option value ="1"><a href = "tack.html">Assamese</a></option>
 <option value ="2">English</option>
</select><br>
<input type= "submit" name="langbtn" value="button" />
</div>
</form>
</html> 
<?php
 if(isset($_POST['langbtn']))
 {
 	if($_POST['lang'] == 1)
 	{
 		header("Location: https://drive.google.com/drive/folders/1_4ImMuEvnFp8VrET1AMw9Tjvk2oLY1eh");
 	}
 	else
 	{
 		echo "english";
 	}	
 }
 ?>