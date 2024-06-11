
<?php include 'adminheader.php' ;

if (isset($_POST['teacher'])) {
	extract($_POST);
     $q="select * from login where username='$uname' and password='$pwd'";
     $r=select($q);
     if (sizeof($r)>0) {
     	alert('already exist');
     }else{

	$q="insert into login values(null,'$uname','$pwd','teacher')";
	$id=insert($q);
	$q1="insert into teacher values(null,'$id','$fname','$lname','$place','$phone','$email','$des')";
	insert($q1);
	alert('successfully');
	return redirect('admin_manageteacher.php');

}
}
if (isset($_GET['did'])) {
	extract($_GET);
	$q="delete from teacher where teacher_id='$did'";
	delete($q);
alert('successfully');
	return redirect('admin_manageteacher.php');
}

if (isset($_GET['uid'])) {
	extract($_GET);
	$q="select * from teacher where teacher_id='$uid'";
	$res=select($q);
}
if (isset($_POST['update'])) {
	extract($_POST);
	$q="update teacher set first_name='$fname',last_name='$lname',place='$place',phone='$phone',email='$email',designation='$des' where teacher_id='$uid' ";
	update($q);
	alert('successfully');
	return redirect('admin_manageteacher.php');
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
	<h1 style="color: white">manage teacher</h1>
	
	<form method="post">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width:500px;color:white">
			<tr>
				<th>first name</th>
				<td><input type="text" name="fname" class="form-control" required="" value="<?php echo $res[0]['first_name']?>"></td>
			</tr>
			<tr>
				<th>last name</th>
				<td><input type="text" name="lname" class="form-control" required="" value="<?php echo $res[0]['last_name'] ?>"></td>
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
				<th>designation</th>
				<td><input type="text" name="des" class="form-control" required="" value="<?php echo $res[0]['designation'] ?>"></td>
			</tr>
		
			<tr>
				<td align="center" colspan="2"><input type="submit" name="update" class="btn btn-success" value="submit"></td>
			</tr>
		</table>
	<?php }else{ ?>
		<table class="table" style="width:500px;color:white">
			<tr>
				<th>first name</th>
				<td><input type="text" class="form-control" required="" name="fname"></td>
			</tr>
			<tr>
				<th>last name</th>
				<td><input type="text" class="form-control" required="" name="lname"></td>
			</tr>
			<tr>
				<th>place</th>
				<td><input type="text" class="form-control" required="" name="place"></td>
			</tr>
			<tr>
				<th>phone</th>
				<td><input type="text" class="form-control" required="" pattern="[0-9]{10}" name="phone"></td>
			</tr>
			<tr>
				<th>email</th>
				<td><input type="email" class="form-control" required="" name="email"></td>
			</tr>
			<tr>
				<th>designation</th>
				<td><input type="text" class="form-control" required="" name="des"></td>
			</tr>
			<tr>
				<th>user name</th>
				<td><input type="text" class="form-control" required="" name="uname"></td>
			</tr>
			<tr>
				<th>password</th>
				<td><input type="password" class="form-control"  required="" name="pwd"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="teacher" class="btn btn-success" value="submit"></td>
			</tr>
		</table>
	<?php } ?>
	</form>
</center>
</center></div></div></div></div></div></div></div></div></div>
<center>
	<h1>view manage</h1>
	<form>
		<table class="table" style="width:500px">
			<tr>
				<th>sino</th>
			<th>first name</th>
			<th>last name</th>
			<th>place</th>
			<th>phone</th>
			<th>email</th>
			<th>designation</th>
		</tr>
			<?php 

        $q="select * from teacher";
        $res=select($q);
        $sino=1;

        foreach ($res as $row) {
        	?>
        	<tr>
        		<td><?php echo $sino++; ?></td>
        		<td><?php echo $row['first_name'] ?></td>
        		<td><?php echo $row['last_name'] ?></td>
        		<td><?php echo $row['place'] ?></td>
        		<td><?php echo $row['phone'] ?></td>
        		<td><?php echo $row['email'] ?></td>
        		<td><?php echo $row['designation'] ?></td>
        		<td><a class="btn btn-success" href="?uid=<?php echo $row['teacher_id'] ?>">update</a></td>
        		<td><a class="btn btn-success" href="?did=<?php echo $row['teacher_id'] ?>">delete</a></td>
        	</tr>
        <?php
    }

			 ?>
		</table>
	</form>
</center>
<?php include 'footer.php' ?>