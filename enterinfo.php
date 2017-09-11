<!DOCTYPE html>

<body>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "cft108", "project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    echo ":("
    
}
else{
    echo "It works!"
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);

// attempt insert query execution
//$sql = "INSERT INTO policies (Gender, Title, GivenName, MiddleInitial, Surname, Age, AgeGroup, Zodiac, BloodType, Pounds, FeetInches, StreetAddress, City, State, StateFull, ZipCode, TelephoneNumber, MothersMaiden, CCType, CCNumber, CVV2, CCExpires, NationalID, FavoriteColor, Occupation, Company, Vehicle, Username, Password) 
  //      VALUES ('$Gender', '$Title', '$GivenName', '$MiddleInitial', '$Surname', '$Age', '$AgeGroup', '$Zodiac', '$BloodType', '$Pounds', '$FeetInches', '$StreetAddress', '$City', '$State', '$StateFull', '$ZipCode', '$TelephoneNumber', '$MothersMaiden', '$CCType', '$CCNumber', '$CVV2', '$CCExpires', '$NationalID', '$FavoriteColor', '$Occupation', '$Company', '$Vehicle', '$Username', '$Password')";
//if(mysqli_query($link, $sql)){
  //  echo "Records added successfully.";
//} else{
  //  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
//}
 
// close connection
// mysqli_close($link);
?>

</body>
</html>