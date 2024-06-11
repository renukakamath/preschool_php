<?php include 'parentheader.php';
$pid=$_SESSION['parent_id'];
extract($_GET);
if (isset($_POST['complaint'])) {
	extract($_POST);

	echo$q="insert into complaint values(null,'$pid','$comp','pending',curdate())";
	insert($q);

	alert('successfully');
	return redirect('parent_sentcomplaint.php');

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
	<h1 style="color: white"> sent complaint</h1>
	<form method="post">
		<table class="table" style="width:500px;color: white">
			<tr>
				<th>complaint</th>
				<td><input type="text" class="form-control" required="" name="comp"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="complaint" class="btn btn-success" value="submit"></td>
			</tr>
		</table>
	</form>
</center>
</center></div></div></div></div></div></div></div></div></div>
<center>
	<h1>view reply</h1>
	<form>
		<table class="table" style="width:500px">
			<tr>
				<th>sino</th>
				<th>parent</th>
				<th>complaint</th>
				<th>reply</th>
				<th>date</th>
			</tr>
			<?php 

        $q="select * from complaint inner join parent using(parent_id) ";
        $res=select($q);
        $sino=1;

        foreach ($res as $row) {?>
        	<tr>
        		<td><?php echo $sino++; ?></td>
        		<td><?php echo $row['firstname'] ?></td>
        		<td><?php echo $row['complaint'] ?></td>
        		<td><?php echo $row['reply'] ?></td>
        		<td><?php echo $row['date'] ?></td>
        	</tr>
       <?php }


			 ?>
		</table>
	</form>
</center>

<?php include 'footer.php' ?>