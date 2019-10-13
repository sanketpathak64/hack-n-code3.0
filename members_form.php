<html lang="en">
<head>
    <title>SignUp</title>
    <meta charset="utf-8">
    
  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <style>
        
        input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.container{
  margin-left: 300px;
  margin-right: 300px;
}
    </style>
    
</head>
<body>
<h2>Sign Up</h2><br><i></i></i><br><hr><br><br>
        <form action="members_form.php" method="post" enctype="multipart/form-data">
            
            
            <div class="container">
            
            
            <lable align="right">Name:</lable>
            <input type="text" name="name" required placeholder="Name" /><br>

             Mobile No.
            <input name ="contact" type="text" placeholder="10 Digits only" required>
            
             <lable align="right">passsword</lable>
            <input type="password" name="password" required placeholder="Password" /><br>

            <lable align="right">Confirm passsword</lable>
            <input type="password" name="confirmPassword" required placeholder="Re-enter Password" /><br>
            
            
            <lable align="right">City</lable>
            <input type="text" name="city" required placeholder="city" /><br>

            <lable align="right">Locality</lable>
            <input type="text" name="locality" required placeholder="locality" /><br>
                            
            
            <lable align="right">Email:</lable>
            <input type="text" name="email" required/><br>
            
            
             <input type="submit" name="register" value="submit" />
                                     

        </form>
      </div>
    
    <?php
    
    
   // include 'databaseconnect.php';
    
    
//    if (isset($_POST['upload'])) {
//  	// Get image name
//        extract($_FILES);
//  	$image_original = $_FILES['pic']['name'];
//      //$image_compressed = $_FILES['image_compressed']['name'];
//  	// Get text
//  	
//   
////  	image file directory
//  	//$target_original = "./images/members/".basename($image_original);
//    //$target_compressed = "./../images/compressed".basename($image);  
//        
        // $name=$_POST['name'];
        // $contact=$_POST['contact'];
        // $password=$_POST['password'];
        // $confirmPassword=$_POST['confirmPassword'];
        // $email=$_POST['email'];
        // $city=$_POST['city'];
        // $locality=$_POST['locality'];


   
////            $sql = "INSERT INTO members (id,category,name,post,thought,AOI,contact_no,fb,gmail,linked_in,pic) VALUES ('$board','$name','$Post',
////    '$thought','$AOI','$contact','$fb','$email','$linked_in','$pic')";
//        
//        
//        
//        
//        $sql = "INSERT INTO members (id,category,name,post,thought,AOI,contact_no,fb,gmail,linked_in,pic) VALUES ('$name','$AOI','$contact','$fb','$email','$linked_in','$pic')";
//  	// execute query
//  	mysqli_query($db, $sql);
//
////  	if (move_uploaded_file($_FILES['pic']['tmp_name'], $target_original)) {
////  		$msg = "Image uploaded successfully";
////    
////    }
//    }
//    else
//    {
//        echo"<script>alert('Failed to upload data')</script>";   
//    }
    
    
    
    if(isset($_POST['register']))
    {
        $name=$_POST['name'];
        $contact=$_POST['contact'];
        $password=$_POST['password'];
        $confirmPassword=$_POST['confirmPassword'];
        $email=$_POST['email'];
        $city=$_POST['city'];
        $locality=$_POST['locality'];
        $slquery = "SELECT 1 FROM register WHERE email = '$email'";
$rsubject = " Registered Successfully ! ";
$rmessage = "hello ".$name.",
Thankyou for joining Us.";
      
     if($password != $confirmPassword){
           echo "<script>alert('passwords doesn't match');</script>";
      }
      else{
    
        include './logged/databaseconnect.php';
            
        $query = "insert into member_login(name,mobile_no,user_name,password,city,locality)  values ('$name','$contact','$email','$password','$city','$locality')";

        $result = mysqli_query($db,$query) or die(mysqli_error($db));


      }
//        $res = "select";
        //echo "";

        if($result=== TRUE)
        {       

        echo "<script>alert('successfully uploaded');</script>";
        
        }
        else {       

        echo "<script>alert('Upload Failed');</script>";

             }
             mail($to, $subject, $message, $headers);
             mail($rto, $rsubject, $rmessage, $rheaders);
    }
?>    

</body>
</html>