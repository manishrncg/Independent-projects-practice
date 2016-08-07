<html>
<body>
<?php
	$message = "name :" . $_GET["name"] . "<br>" . "last name :" . $_GET["name2"] . "<br>" . "gender :" . $_GET["gender"] . "<br>" . "Qualification :" . $_GET["Qualification"] . "<br>" . "Survey :" . $_GET["survey"] . "<br>" . "Bday :" . $_GET["Bday"] . "<br>" . "email :" . $_GET["email"] . "<br>" . "Mobile no. :" . $_GET["mobile_no"] . "<br>" . "Time :" . $_GET["IntTime"] . "<br>" . "Message :" . $_GET["message"];
	$myfile = fopen ("form data.txt", "w") or die ("Unable to open file!");

	fwrite ($myfile, $message);
	fclose ($myfile);

	echo $message;
?>

</body>
</html>