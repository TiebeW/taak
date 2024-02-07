<FORM METHOD='post' ACTION=''>
Kies een wijntype <INPUT TYPE='text' NAME='type'><BR>
<INPUT TYPE='submit' NAME='verzenden' VALUE='Toon wijnen'>
</FORM>
<?php
if(isset($_POST['verzenden'])) {
$type=$_POST['type'];
$cn=mysqli_connect('127.0.0.1', 'root', 'usbw') or die('Connectie met server mislukt');
mysqli_select_db($cn, 'csv_db') or die('Selectie databank mislukt');
$query="SELECT wine_name, year FROM wine WHERE type='$type'";
$res=mysqli_query($cn, $query) or die('Uitvoeren query mislukt');
echo "Aantal gevonden wijnen: ".mysqli_num_rows($res)."<BR>";
while($rij=mysqli_fetch_array($res))
	echo $rij['wine_name']." ".$rij['year']."<BR>";
mysqli_close($cn);
}
?>








