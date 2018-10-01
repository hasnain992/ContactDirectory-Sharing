<!Doctype html>
<html>
    <head> 
        <title>User Register </title>
        
        <style type="text/css">
        *{
    margin:0px;
    padding:0px;
}
body{
    font-size: 120%;
    background:#F8F8FF;
    background-image: url("mob2.jpg");
    background-size: 100% 150%;
}
.header{
    margin:50px auto 0px;
    color: white;
    text-align: center;
    border-bottom:none;
    border-radius:10px 10px 0px 0px;
    border: 1px solid #80C4DE;
    background-color: #5F9EA0;
    text-align:center;
    top: 0px;
    width: 30%;
    padding: 20px;
}
form{
        width:30%;
        margin:0px auto;
        padding: 20px;
        border:1px solid #B0C4DE;
        background:white;
        border-radius:0px 0px 10px 10px;

    }
    .input-group{
        margin:10px 0px 10px 0px;
    }
    .input-group label{
        display:block;
        text-align:left;
        margin:3px;
    }
    .input-group input{
        height:30px;
        width:93%;
        padding:5px 10px;
        font-size:16px;
        border-radius:5px;
        border:1px solid gray;
    }
    .btn{
        padding:10px;
        font-size:15px;
        color:white;
        background:#5F9EA0;
        border:none;
        border-radius:5px;
    }
        </style>
        
        
</head>
<body>

<?php if(isset($_GET['register'])){ ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <div class="alert alert-success" role="alert">
        Successfully registered
      </div>
<?php } ?>
  <div class ="header">
      <h2>Login</h2>
  </div>
      <form method ="post" action ="loginchk.php" >  
        <div class="input-group">
            <label>username</label>
            <input type="text" name="username" >
        </div>      
         
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1" >
        </div> 
       
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login </button>
        </div>
        <p>
            Not yet account? <a href="mycontact.php">Sign up</a>  
     </form>
     
</div>

</body>
</html>