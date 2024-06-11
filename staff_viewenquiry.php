<?php include 'staffheader.php' ?>

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
	<h1 style="color: white">view enquiry</h1>
	<form>
		<table class="table" style="width:500px;color: white">
			<tr>
				<th>sino</th>
				<th>student</th>
				<th>staff</th>
				<th>enquiry</th>
				
				<th>date</th>
				<th>reply</th>
			</tr>
			<?php 

           $q="select * from enquiry inner join student using (student_id) inner join staff using(staff_id)";
           $res=select($q);
           $sino=1;

           foreach ($res as $row) {
           	?>
          <tr>
          	<td><?php echo $sino++; ?></td>
          	<td><?php echo $row['firstname'] ?></td>
          	<td><?php echo $row['first_name'] ?></td>
          	<td><?php echo $row['enquiry'] ?></td>
        
          	<td><?php echo $row['date'] ?></td>
          	<?php 
          if ($row['reply']=="pending") {
          	?>
          	<td><a  style="color: white"class="btn btn-success" href="staff_reply.php?rid=<?php echo $row['enquiry_id'] ?>">reply</a></td>
          <?php
      }else{


          	 ?>
          	  	<td><?php echo $row['reply'] ?></td>
          </tr>
           <?php
       }

}

			 ?>

		</table>
	</form>
</center>
</div></div></div></div></div></div></div></div></div>
<?php include 'footer.php' ?>