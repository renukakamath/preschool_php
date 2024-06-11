
<?php include 'adminheader.php' ?>

<center>
	<h1>view rating</h1>
<form>
   <div class="container">
      <div class="row">
   <?php 

   $q="select * from rating inner join parent using(parent_id)";
   $res=select($q);
   $sino=1;

   foreach ($res as $row) {
      ?>

  <div class="col-sm-2"style="margin-top: 40px; margin: 20px;margin-left: 20px;margin-right: 10px ;background-color: yellow ;padding: 30px;">
   sino: <?php echo $sino++; ?>
  <div>parent: <?php echo $row['firstname'] ?></div>
  <div>rate: <?php echo $row['rated'] ?></div>
  <div>date :<?php echo $row['date'] ?></div>
 

</div>


   <?php 


}



		 ?>
      </div>
   

</form>
</center>
<?php include 'footer.php' ?>