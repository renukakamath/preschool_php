<?php include 'staffheader.php';
extract($_GET);
if (isset($_POST['reply'])) {
	extract($_POST);

	echo$q="update enquiry set reply='$rep' where staff_id='$rid'";
	update($q);
	alert('successfully');
	return redirect('staff_viewenquiry.php');
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
	<h1 style="color: white">send reply</h1>
	<form method="post">
		<table class="table" style="width:500px;color: white">
			<tr>
				<th>reply</th>
				<td><input type="text" class="form-control"  required="" name="rep"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="reply" class="btn btn-success" value="submit"></td>
			</tr>
		</table>
	</form>
</center>
</div></div></div></div></div></div></div></div></div>
<?php include 'footer.php' ?>