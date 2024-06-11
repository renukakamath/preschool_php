<?php include 'parentheader.php';

if (isset($_POST['student'])) {
	extract($_POST);

	
	echo$q1="insert into student values(null,'$fname','$lname','$place','$phone','$email','$age')";
	insert($q1);

	alert('successfully');
	return redirect('parent_managestudent.php');
}
if (isset($_GET['did'])) {
	extract($_GET);

	echo$q="DELETE FROM student WHERE student_id='$did'";
    delete($q);

	alert('successfully');
	return redirect('parent_managestudent.php');
}
if (isset($_GET['uid'])) {
	extract($_GET);

	echo$q="select * from student where student_id='$uid' ";
	$res=select($q);


}
if (isset($_POST['update'])) {
	extract($_POST);

	echo$q="update student set firstname='$fname',lastname='$lname',place='$place',phone='$phone',email='$email',age='$age' where student_id='$uid'";
	update($q);

	alert('successfully');
	return redirect('parent_managestudent.php');
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
	<h1 style="color: white">manage student</h1>
<form method="post">
	<?php if (isset($_GET['uid'])) { ?>
	<table class="table" style="width:500px;color: white">
		<tr>
			<th>first name</th>
			<td><input type="text" name="fname" class="form-control" required="" value="<?php echo $res[0]['firstname'] ?>"></td>
		</tr>
		<tr>
			<th>last name</th>
			<td><input type="text" name="lname" class="form-control" required="" value="<?php echo $res[0]['lastname'] ?>"></td>
		</tr>
		<tr>
			<th>place</th>
			<td><input type="text" name="place" class="form-control" required="" value="<?php echo $res[0]['place'] ?>"></td>
		</tr>
		<tr>
			<th>phone</th>
			<td><input type="text" name="phone" class="form-control" required="" pattern="[0-9]{10}" value="<?php echo $res[0]['phone'] ?>"></td>
		</tr>
		<tr>
			<th>email</th>
			<td><input type="email" name="email" class="form-control" required="" value="<?php echo $res[0]['email'] ?>"></td>
		</tr>
		<tr>
			<th>age</th>
			<td><input type="number" min="0" name="age" class="form-control" required="" value="<?php echo $res[0]['age'] ?>"></td>
		</tr>
		
			<td align="center" colspan="2"><input type="submit" name="update" class="btn btn-success" value="submit"></td>
		</tr>
	</table>
<?php 
}else{
	?>
	<table class="table" style="width:500px">
	<tr>
			<th>first name</th>
			<td><input type="text" class="form-control" required="" name="fname" ></td>
		</tr>
		<tr>
			<th>last name</th>
			<td><input type="text" class="form-control" required="" name="lname" ></td>
		</tr>
		<tr>
			<th>place</th>
			<td><input type="text" class="form-control" required="" name="place" ></td>
		</tr>
		<tr>
			<th>phone</th>
			<td><input type="text" class="form-control" required="" pattern="[0-9]{10}" name="phone" ></td>
		</tr>
		<tr>
			<th>email</th>
			<td><input type="email" class="form-control" required="" name="email" ></td>
		</tr>
		<tr>
			<th>age</th>
			<td><input type="number" class="form-control" min="0" required="" name="age"></td>
		</tr>
		
			<td align="center" colspan="2"><input type="submit" name="student" class="btn btn-success" value="submit"></td>
		</tr>
	</table>
<?php } ?>
</form>
</center>
</center></div></div></div></div></div></div></div></div></div>
	<h1>manage student</h1>
	<form>
		<table class="table" style="width:500px">
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
             <td><?php echo  $row['lastname'] ?></td>
             <td><?php echo $row['place'] ?></td>
             <td><?php echo $row['phone'] ?></td>
             <td><?php echo $row['email'] ?></td>
             <td><?php echo $row['age'] ?></td>
             <td><a class="btn btn-success" href="?uid=<?php echo $row['student_id'] ?>">update</a></td>
             <td><a class="btn btn-success" href="?did=<?php echo $row['student_id'] ?>">delete</a></td>
             <td><a class="btn btn-success" href="parent_fees.php?sid=<?php echo $row['student_id'] ?>">view fees</a></td>
             <td><a class="btn btn-success" href="parent_addphoto.php?sid=<?php echo $row['student_id'] ?>">add photo and video</a></td>
             <td><a class="btn btn-success" href="parent_viewassigned.php?sid=<?php echo $row['student_id'] ?>">view assign teacher</a></td>
             <td><a class="btn btn-success" href="parent_viewlesson.php?sid=<?php echo $row['student_id'] ?>">view lesson</a></td>
             <td><a class="btn btn-success" href="parent_viewwork.php?sid=<?php echo $row['student_id'] ?>">view work</a></td>
          </tr>
          <?php
      }

			 ?>
		</table>
	</form>

<?php include 'footer.php' ?>