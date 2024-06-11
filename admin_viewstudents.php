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
	<h1 style="color: white">view student</h1>
	<form>
		<table class="table" style="width:500px;color:white">
			<tr>
				<th>sino</th>
				<th>first name</th>
				<th>last name</th>
				<th>place</th>
				<th>phone</th>
				<th>email</th>
				<th>age</th>
			</tr>
			<?php 
        $q="select * from student";
        $res=select($q);
        $sino=1;

        foreach ($res as $row) {
        	?>
        	<tr>
        		<td><?php echo $sino++; ?></td>
        		<td><?php echo $row['firstname'] ?></td>
        		<td><?php echo $row['lastname'] ?></td>
        		<td><?php echo $row['place'] ?></td>
        		<td><?php echo $row['phone'] ?></td>
        		<td><?php echo $row['email'] ?></td>
        		<td><?php echo $row['age'] ?></td>
        		<td><a style="color: white" class="btn btn-success" href="admin_sentassign.php?sid=<?php echo $row['student_id'] ?>">sent assign</a></td>
        	</tr>
       <?php 
   }



			 ?>
		</table>	
	</form>
</center>
</center></div></div></div></div></div></div></div></div></div>
<?php include 'footer.php' ?>