<? 

$fname=$_POST['fname']; 
$lname=$_POST['lname']; 
$coname=$_POST['coname']; 
$phonenum=$_POST['phonenum']; 

mysql_connect(
	"localhost", 
	"lynupdma", 
	"i&p3PfaTzrKp") or die(
	mysql_error()
); 

mysql_select_db("dma-landing") or die(
	mysql_error()); 
	mysql_query("INSERT INTO `signups` VALUES ('$fname', '$lname', '$coname', '$phonenum')"); 

	// Print "Your information has been successfully added to the database."; 
	header("Location: thank-you.html");
    exit; // don't forget to exit

?>