<?php include 'publicheader.php' ;

if (isset($_POST['login'])) {
	extract($_POST);

	$q="select * from login where username='$uname' and password='$pwd'";
	$res=select($q);

	if (sizeof($res>0)) {
		$_SESSION['login_id']=$res[0]['login_id'];
		$lid=$_SESSION['login_id'];
		if ($res[0]['usertype']=="admin") {
			return redirect('admin_home.php');
		}elseif ($res[0]['usertype']=="parent") {
			
			$q="select * from parent where login_id='$lid'";
			$r=select($q);
			if (sizeof($r>0)) {
				$_SESSION['parent_id']=$r[0]['parent_id'];
				$pid=$_SESSION['parent_id'];
			}
			return redirect('parent_home.php');
		}elseif($res[0]['usertype']=="teacher"){
			echo$q="select * from teacher where login_id='$lid'";
			$r=select($q);
			if (sizeof($r>0)) 
			{
				$_SESSION['teacher_id']=$r[0]['teacher_id'];
				echo$tid=$_SESSION['teacher_id'];
				
			}

			return redirect('teacher_home.php');
		}elseif ($res[0]['usertype']=="staff") {
			return redirect('staff_home.php');
		}
	}else{
		alert('invalid username and password');
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
										<h1 style="color: white" >login</h1>
										<form method="post">
											<table class="table" style="width:500px">
												<tr>
													
													<td><input type="text" class="form-control" required="" placeholder="user name" name="uname"></td>
												</tr>
												<tr>
													
													<td><input type="password" class="form-control" required="" placeholder="password" name="pwd"></td>
												</tr>
												<tr>
													<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="login" value="submit" ></td>
												</tr>
											</table>
										</form>
									</center>
								</div>
							</div>
						</div><!-- end row -->            
					</div><!-- end container -->
				</div>
			</div><!-- end section -->
		</div>

		<?php include 'footer.php' ?>