<?php 
$servername = "localhost";
$username = "root";
$password= "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])){
$Name = $_POST['Name'];
$Need = $_POST['Need'];
$Email = $_POST['Email'];


$sql="INSERT INTO `hospital`(`Name`, `Need`, `Email`) VALUES ('$Name',$Need,'$Email')";

//$sql="INSERT INTO requirement VALUES ('ggh','5','a@a.com');";



if ($conn->query($sql) == true){
    echo "Success! Your entry has been submitted successfully"
;
} else {
  echo "ERROR: $sql <br> $conn->error";
}
}



  // $o1="Paramount Surgical";
  // $o2="Himi Surgical";
  // $o3="Trivini Industrial Gases";
  // $to="nikki.shiv@gmail.com";
  // $subject="requirement";
  // $text="there is requirement of 2 oxygen cylinders in one hour";
  // mail($to,$subject,$text);
  
  
  // if($name=="Motilal nehru hospital"){
  //   $to_email = "muskanpatel072002@gmail.com";
  //   $subject = "Simple Email Test via PHP";
  //   $body = "Hi, This is test email send by PHP Script";
  //   $headers = "From: muskanpatel272002@gmail.com";
  // if (mail($to_email, $subject, $body, $headers)) {
  //     echo "Email successfully sent to $to_email...";
  // } else {
  //     echo "Email sending failed...";
  // }
  // }
  //  if($Name=="KAMLA NEHRU MEMORIAL HOSPITAL"){
  //   $to_email = "shahikaju73@gmail.com";
  //   $subject = "Simple Email Test via PHP";
  //   $body = "requirement of ".$Need." oxygen cylinder in ".$Name;
  //   $headers = "From: lifelinewebsite03@gmail.com";
  // if (mail($to_email, $subject, $body, $headers)) {
  //     echo "Email successfully sent to $to_email...";
  // } else {
  //     echo "Email sending failed...";
  // }
  
mysqli_close($conn);
  
  

//   else if($name=="Swaroop rani nehru hospital"){
//     echo "Email has been send to nearest oxygen cylinders dealers...";
//   }
//   else if($name=="Dufferin hospital"){
//     echo "Email has been send to nearest oxygen cylinders dealers...";
//   }
//   else if($name=="Nazreth hospital"){
//     echo "Email has been send to nearest oxygen cylinders dealers...";
//   }
//   else{
//     echo "Email has been sent...";
//   }
// }

?>