 <?php include 'teacherheader.php';


 $tid=$_SESSION['teacher_id'];
      
extract($_GET);

if (isset($_POST['work'])) {
	extract($_POST);

	echo$q="insert into works values(null,'$tid','$sid','$wor',curdate())";
	insert($q);
    
    alert('successfully');
    return redirect('teacher_addwork.php');
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
	<h1 style="color: white">add work</h1>
	<form method="post">
   <table class="table" style="width:500px;color: white">
		<tr>
			<th>work</th>
			<td><input type="text" class="form-control"  required="" name="wor"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="work" class="btn btn-success" value="submit"></td>
		</tr>
	</table>
	</form>
</center>
</div></div></div></div></div></div></div></div></div>
<center>
	<h1>view upload work</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
				
				<th>work</th>
				<th>file</th>
			</tr>
			<?php 
     $q="select * from uploadworks inner join works using (work_id)";
         $res=select($q);
         $sino=1;
         foreach ($res as $row) {
         	?>
         	<tr>
         		<td><?php echo $sino++; ?></td>
         		
         		<td><?php echo $row['work'] ?></td>
         		<td><img src="<?php echo $row['file'] ?>" width="100" height="100"></td>
         	</tr>
         <?php
     }


			 ?>
		</table>
	</form>
</center>
<?php include 'footer.php' ?>