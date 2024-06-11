<?php include 'parentheader.php';
extract($_GET);
if (isset($_POST['enquiry'])) {
	extract($_POST);

	echo$q="insert into enquiry values(null,'$std','$staff','$enq','pending','$date')";
	insert($q);

	alert('successfully');
	return redirect('parent_enquiry.php');

}





 ?>
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
	<h1 style="color: white">send enquiry</h1>
	<form method="post">
		<table class="table" style="width:500px;color: white">
			<tr>
				<th>student</th>
				<td>
					<select class="form-control" required="" name="std">
						<option>select</option>
						<?php 
                         $q="select * from student";
                         $res=select($q);
                         foreach ($res as $row) {
                         	?>
                         	<option value="<?php echo $row['student_id'] ?>"><?php echo $row['firstname'] ?></option>
                         <?php
                     }


						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<th>Staff</th>
				<td>
					<select class="form-control" required="" name="staff">
						<option>select</option>
						<?php 
                      $q="select * from staff";
                      $res=select($q);
                      foreach ($res as $row) {
                      	?>
                      	<option value="<?php echo $row['staff_id'] ?>"><?php echo $row['first_name'] ?></option>
                     <?php
                      }


						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<th>Enquiry</th>
				<td><input type="text" class="form-control" required="" name="enq"></td>
			</tr>
			<tr>
				<th>date</th>
				<td><input type="date" class="form-control" required="" name="date"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="enquiry" class="btn btn-success" value="submit"></td>
			</tr>
		</table>
	</form>
</center>
</center></div></div></div></div></div></div></div></div></div>
<center>
	<h1>view reply</h1>
	<form class="table" style="width:500px">
		<table>
			<tr>
				<th>sino</th>
				<th>student</th>
				<th>staff</th>
				<th>emquiry</th>
				<th>reply</th>
				<th>date</th>
				<?php 

              $q="select *  from enquiry inner join staff using(staff_id) inner join student using(student_id)";
              $res=select($q);
              $sino=1;
              foreach ($res as $row) {
              	?>
              <tr>
              	<td><?php echo $sino++; ?></td>
              	<td><?php echo $row['firstname'] ?></td>
              	<td><?php echo $row['first_name'] ?></td>
              	<td><?php echo $row['enquiry'] ?></td>
              	<td><?php echo $row['reply'] ?></td>
              	<td><?php echo $row['date'] ?></td>
              </tr>
              <?php
          }
              

				 ?>
			</tr>
		</table>
	</form>
</center>
<?php include 'footer.php' ?>