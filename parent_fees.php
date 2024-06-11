<?php include 'parentheader.php'?>
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
	<h1 style="color: white">view fees</h1>
	<form>
		<table class="table" style="width:500px;color: white">
			<tr>
				<th>sino</th>
                <th>Student</th>
				<th>amount</th>
				<th>date</th>
			</tr>
			<?php 
         $q="select * from fees inner join student using(student_id)";
         $res=select($q);
         $sino=1;
         foreach ($res as $row) {
         	?>
         	<tr>
         		<td><?php echo $sino++; ?></td>
                <td><?php echo $row['firstname'] ?></td>
         		<td><?php echo $row['amount'] ?></td>
         		<td><?php echo $row['date'] ?></td>
   
         		<td><a style="color: white" class="btn btn-success" href="parent_payment.php?sid=<?php echo $row['student_id'] ?>&aid=<?php echo $row['amount'] ?>">payment</a></td>
         	</tr>
         <?php
     }

			 ?>
		</table>
	</form>
</center>
<?php include 'footer.php' ?>