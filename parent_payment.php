<?php include 'parentheader.php';
extract($_GET);
if (isset($_POST['payment'])) {
	extract($_POST);
	echo$q="insert into payment values(null,'$sid','$aid','$mon',curdate())";
	insert($q);
	alert('successfully');
	return redirect('parent_fees.php');
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
	<h1 style="color: white">payment</h1>
	<form method="post">
		<table class="table" style="width:500px;color: white">
		<tr>
			<th>amount</th>
			<td><input type="text" class="form-control" required="" value="<?php echo $aid ?>" name="amo"></td>
		</tr>
		<tr>
			<th>month</th>
			<td><input type="month" class="form-control" required="" name="mon"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="payment" class="btn btn-success" value="submit"></td>
		</tr>
	</table>
	</form>
</center>
</center></div></div></div></div></div></div></div></div></div>
<?php include 'footer.php' ?>