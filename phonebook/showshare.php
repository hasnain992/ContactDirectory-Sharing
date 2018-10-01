
<?php require 'header.php' ; 

require 'db.php';
$sql="SELECT * FROM shared WHERE rec_user=:username";
$statement=$connection->prepare($sql);
$statement->execute([':username'=>$_SESSION['username']]);
$shared=$statement->fetchAll(PDO::FETCH_OBJ);


?>

<div class="container">
<div class "card mt-5">
<div class="card-header">
<h2>Shared contacts</h2>
</div>
<div class="card_body">
<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Send By</th>
<th>Name</Noth>
<th>Phone </th>
</tr>
<?php foreach($shared as $person):

$sql="SELECT * FROM people WHERE id=:id";
$statement=$connection->prepare($sql);
$statement->execute([':id'=>$person->id]);
$sharedcontact=$statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($sharedcontact);
?>

<tr>
   <td><?=$person->s_id;?></td>
   <td><?=$person->sen_user;?></td>
   <td><?php echo $sharedcontact[0]['name'];?></td>
   <td><?php echo $sharedcontact[0]['number'];?>
</tr>
<?php endforeach;?>
</table>
</div>
<?php require 'footer.php' ; ?>