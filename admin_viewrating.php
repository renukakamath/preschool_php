<?php include 'adminheader.php' ?>

 <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
    <!-- Indicators -->
    
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div id="home" class="first-section" style="background-image:url('images/slider-02.jpg');">
          <div class="dtab">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 text-right">
                  <div class="big-tagline">
 <center>
<center>
	<h1 style="color: white">view rating</h1>
<form>
	<table class="table" style="width:500px;color: white">

		<tr>
			<th>sino</th>
			<th>parent</th>
			<th>rate</th>
			<th>date</th>
		</tr>
		<?php 

   $q="select * from rating inner join parent using(parent_id)";
   $res=select($q);
   $sino=1;

   foreach ($res as $row) {?>
   	
   	<tr>
         <td><?php echo $sino++; ?></td>
         <td><?php echo $row['firstname'] ?></td>
         <td><?php echo $row['rated'] ?></td>
         <td><?php echo $row['date'] ?></td>
   	</tr>

   <?php }





		 ?>
	</table>
</form>
</center>
</center></div></div></div></div></div></div></div></div></div>
<?php include 'footer.php' ?>