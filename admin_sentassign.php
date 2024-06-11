<?php include 'adminheader.php';

if (isset($_POST['assign'])) {
	extract($_POST);

	$q="insert into assign values(null,'$tec','$stu')";
	insert($q);
	alert('successfully');
	return redirect('admin_sentassign.php');
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
	<h1 style="color: white">sent assign</h1>
	<form method="post">
		<table class="table" style="width:500px;color:white">
			<tr>
				<th>teacher</th>
				<td>
					<select class="form-control" required="" name="tec">
						<option>select</option>
						<?php 
                     $q="select * from teacher";
                     $res=select($q);
                     foreach ($res as $row) {
                     	?>
                     	<option value="<?php echo $row['teacher_id'] ?>"><?php echo $row['first_name'] ?></option>
                     <?php
                 }


						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<th>student</th>
				<td>
					<select class="form-control" required="" name="stu">
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
				<td align="center" colspan="2"><input type="submit" name="assign" class="btn btn-success" value="submit"></td>
			</tr>
		</table>
	</form>
</center>
</center></div></div></div></div></div></div></div></div></div>
<?php include 'footer.php' ?>