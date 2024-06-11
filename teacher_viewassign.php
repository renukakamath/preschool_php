<?php include 'teacherheader.php' ?>

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
	<h1 style="color: white">view assigned teacher</h1>
	<form>
		<table class="table" style="width:500px;color: white">
			<tr>
				<th>sino</th>
				<th>teacher</th>
				<th>student</th>
			</tr>
			<?php 
         $q="select * from assign inner join teacher using(teacher_id) inner join student using(student_id)";
         $res=select($q);
         $sino=1;
         foreach ($res as $row) {
         	?>
         <tr>
         	<td><?php echo $sino++; ?></td>
         	<td><?php echo $row['first_name'] ?></td>
         	<td><?php echo $row['firstname'] ?></td>
         	<td><a style="color: white" class="btn btn-success" href="teacher_viewphoto.php?sid=<?php echo $row['student_id'] ?>">view photo</a></td>
         	<td><a   style="color: white"class="btn btn-success" href="teacher_viewparent.php?sid=<?php echo $row['student_id'] ?>">view parent</a></td>
         	<td><a  style="color: white" class="btn btn-success" href="teacher_sentlesson.php?sid=<?php echo $row['student_id'] ?>">sent lesson</a></td>
            <td><a   style="color: white"class="btn btn-success" href="teacher_addwork.php?sid=<?php echo $row['student_id'] ?>">add work</a></td>
         </tr>
         
         <?php
          }


			 ?>
		</table>
	</form>
</center>
</div></div></div></div></div></div></div></div></div>
<?php include 'footer.php' ?>