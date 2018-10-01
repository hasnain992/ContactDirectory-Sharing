<?php
$username="";
$email="";
$errors=array();

          //connect to database
$db=mysqli_connect('localhost','root','','registration');
        //when register buton is clicked
if(isset($_POST['register'])){
    /*
      if(empty($name))
            {
                $name_error="<br> *name field is empty";
                $chk=1;
            }
            else if(!preg_match("/^[A-Za-z\s]{3,25}$/",$name))
            {
                $name_error="<br> *invalid name";
                $chk=1;
            }
            
            if(empty($email))
            {
                $email_error="<br> *email field is empty";
                $chk=1;
            }
            else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
            {
                $email_error="<br> *invalid email";
                $chk=1;
            }

            if(!preg_match("/^[0-9]{3,14}$/",$contact) && !empty($contact))
            {
                $contact_error="<br> *inavalid contact number";
                $chk=1;
            }
    */
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password_1=$_POST['password_1'];
    $password_2=$_POST['password_2'];
    if(empty($username)){
        array_push($errors,"Username is required");
    }
    if(empty($email)){
        array_push($errors,"Email is required");
    }
    if(empty($password_1)){
        array_push($errors,"Password is required");
    }
    if($password_1!=$password_2){
        array_push($errors,"The two password doesnot match");
    }
    
             //if there is no error, save data to database 
    if(count($errors)==0){
        $password=md5($password_1);//for encyption
        $sql="INSERT INTO users (username,email,password) VALUES ('$username', '$email','$password')";
        mysqli_query($db,$sql);
        header('location:login.php?register=1');
        
    }
}
?>