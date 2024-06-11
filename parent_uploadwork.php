<?php include 'parentheader.php';
extract($_GET);
if (isset($_POST['work'])) {
	extract($_POST);

	$dir = "image/";
	$file = basename($_FILES['img']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("image_").".".$file_type;
	if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
	{
		$q="insert into uploadworks values(null,'$wid','$target')";
		insert($q);

		alert('successfully');
		return redirect('parent_uploadwork.php');
	}
	else{
		echo "file uploading error occured";
	}



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
											<h1 style="color: white">work</h1>
											<form method="post" enctype="multipart/form-data">
												<table class="table" style="width:500px;color: white">
													<tr>
														<th>teacher</th>
														<td>
															<select class="form-control" required="" name="tec">
																<option>select</option>
																<?php 
																$q="select * from teacher";
																$res=select($q);
																
																foreach ($res as  $row) {?>
																	<option value="<?php echo $row['teacher_id'] ?>"><?php echo $row['first_name'] ?></option>
																<?php }


																?>
															</select>
														</td>
													</tr>
													<tr>
														<th>work</th>
														<td><input type="file" class="form-control" required="" name="img"></td>
													</tr>
													<tr>
														<td align="center" colspan="2"><input type="submit" name="work" class="btn btn-success" value="submit"></td>
													</tr>
												</table>
											</form>
										</center>
									</center></div></div></div></div></div></div></div></div></div>
									<?php include 'footer.php' ?>