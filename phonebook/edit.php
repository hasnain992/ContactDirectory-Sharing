<?php require 'db.php';
$id=$_GET['id'];
$sql='SELECT * FROM people WHERE id=:id';
$statement=$connection->prepare($sql);
$statement->execute([':id'=> $id]);
$person=$statement->fetch(PDO::FETCH_OBJ);

if(isset($_POST['name'])&& isset ($_POST['number'])){
    $name=$_POST['name'];
    $number=$_POST['number'];
    $sql='UPDATE people SET name=:name, number=:number WHERE id=:id';
    $statement=$connection->prepare($sql);
    if($statement->execute([':name'=>$name,':number'=>$number,':id'=>$id])){
     header("Location:index.php");
    }
}
?>
<?php require 'header.php' ; ?>
   <div class="container">
   <div class ="card mt-5">
   <div class="card-header">
   <h2>Update Contact</h2>
   </div>
   <div class="card-body">
   <?php if(!empty($message)):?>
       <div class="alert alert-success">
       <?php echo $message ;?>
       </div>
<?php endif;?>
   <form method ="post">
   <div class <"form-group">
   <label for="name">Name</label>
   <input value="<?=$person->name;?>" type ="text" name="name" id ="name"class="form-control">
   </div>
   <div class <"form-group">
   <label for="number">Phone Number</label>
   <input type ="number" value="<?=$person->number;?>"name="number" id ="number"class="form-control">
   </div>
   <div class="form-group">
   <button type ="submit" class ="btn btn-info">Update Contact</button>
   </div>
    <?php require 'footer.php'; ?>