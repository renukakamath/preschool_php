<?php include 'publicheader.php' ;

if (isset($_POST['registration'])) {
	extract($_POST);
	$q="select * from login where username='$uname' and password='$uname'";
	$r=select($q);
	if (sizeof($r)>0) {
		alert('alredy exist');
	}

	echo$q="insert into login values(null,'$uname','$pwd','pending')";
	$id=insert($q);
	echo$q1="insert into parent values(null,'$id','$fname','$lname','$pla','$pho','$email')";
	insert($q1);
	alert('successfully');
	return redirect('preschool_registration.php');
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
											<h1 style="color: white">parent registration</h1>
											<form method="post">
												<table class="table" style="width:500px ">
													<tr>
														
														<td><input type="text" class="form-control" required="" placeholder="first name" name="fname"></td>
													</tr>
													<tr>
														
														<td><input type="text" class="form-control" required="" placeholder="last name"   name="lname"></td>
													</tr>
													<tr>
														
														<td><input type="text" class="form-control" required="" placeholder="place"  name="pla"></td>
													</tr>
													<tr>
														
														<td><input type="text" class="form-control"required="" pattern="[0-9]{10}" placeholder="phone"name="pho"></td>
													</tr>
													<tr>
														
														<td><input type="email" class="form-control"required="" required="" placeholder="email" name="email"></td>
													</tr>
													<tr>
														
														<td><input type="text" class="form-control" required="" placeholder="user name" name="uname"></td>
													</tr>
													<tr>
														
														<td><input type="password" class="form-control" required="" placeholder="password" name="pwd"></td>
													</tr>
													
													<tr>
														<td align="center" colspan="2"><input type="submit" name="registration" class="btn btn-success" value="submit"></td>
													</tr>
												</table>
											</form>
										</center>
									</center>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php' ?>