<?php include 'staffheader.php';

if (isset($_POST['fees'])) {
	extract($_POST);

	$q="insert into fees values(null,'$sid','$amo',curdate())";
	insert($q);

	alert('successfully');
	return redirect('staff_addfees.php');
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
	<h1 style="color: white">add fees</h1>
	<form method="post">
		<table class="table" style="width:500px;color: white">
			<tr>
				<th>Student</th>
				<td><select name="sid">
					<option>Select</option>
					<?php 
                  $q="select * from student";
                  $res=select($q);
                  foreach ($res as $row) {
                  	?>
                  <option value="<?php echo $row['student_id'] ?>"><?php echo $row['firstname'] ?></option>
             <?php 
                }



					 ?>
				</select></td>
			</tr>
			<tr>
				<th>amount</th>
				<td><input type="text" class="form-control" required="" name="amo"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="fees" class="btn btn-success" value="submit"></td>
			</tr>
		</table>
	</form>
</center>
</div></div></div></div></div></div></div></div></div>
<?php include 'footer.php' ?>