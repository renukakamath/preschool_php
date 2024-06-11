<?php include 'parentheader.php';
$pid=$_SESSION['parent_id'];
extract($_GET);
if (isset($_POST['rating'])) {
	extract($_POST);

	$q="insert into rating values(null,'$pid','$rate',curdate())";
	insert($q);

	alert('successfully');
	return redirect('parent_sendrating.php');
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
	<h1 style="color: white">sent rating</h1>
	<form method="post">
		<table class="table" style="width:500px;color: white">
		
			<tr>
				<th>rated</th>
				<td><input type="text" class="form-control" required="" name="rate"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="rating" class="btn btn-success" value="submit"></td>
			</tr>
		</table>
	</form>
</center>
</center></div></div></div></div></div></div></div></div></div>
<?php include 'footer.php' ?>