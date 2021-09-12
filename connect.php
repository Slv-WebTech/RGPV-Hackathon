<?php
//  $recent_photo = uniqid().$_FILES['recentphoto']['name'];
//  $location = "photo/".$recent_photo;
//  move_uploaded_file($_FILES['recentphoto']['tmp_name'],$location);


// $servername="localhost:3307";
// // $servername="localhost";
// $username="root";
// $password="";
// $database="donorform";
// $conn=mysqli_connect($servername,$username,$password,$database);

include 'db.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $Age=$_POST['Age'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $bloodgroup=$_POST['bloodgroup'];
    $Email=$_POST['Email'];
    $Mobile=$_POST['Mobile'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $blooddate=$_POST['blooddate'];
    $vaccinedate=$_POST['vaccinedate'];
    $donateblood=$_POST['donateblood'];
    $covidnegative=$_POST['covidnegative'];
    if($password==$cpassword)
    {
        $sql="INSERT INTO `user` (`firstname`, `lastname`, `Age`, `dob`, `gender`,
        `bloodgroup`, `Email`, `Mobile`, `password`, `city`, `state`,
         `zip`, `blooddate`, `vaccinedate`, `donateblood`, `covidnegative`) 
       VALUES (' $firstname', '$lastname', '$Age', '$dob', '$gender', 
       '$bloodgroup', '$Email', '$Mobile', ' $password', '$city',
        '$state', '$zip', '$blooddate', '$vaccinedate', '$donateblood', 
        ' $covidnegative')";
       $result=mysqli_query($conn,$sql);
       if($result){
        echo"<br>record was inserted successfully";
         }
      else{
        echo"<br>Record was not inserted successfully because of this error--->".mysqli_error($conn);
       }
    }       
}

?>