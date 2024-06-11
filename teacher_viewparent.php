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
	<h1 style="color: white">view parent</h1>
<form>
	<table class="table" style="width:500px;color: white">
		<tr>
			<th>first name</th>
			<th>last name</th>
			<th>place</th>
			<th>phone no</th>
			<th>email</th>
		</tr>
			<?php 
        $q="select * from parent inner join login using(login_id)";
        $res=select($q);
         
foreach ($res as $row) {?>
	<tr>
		<td><?php echo $row['firstname'] ?></td>
		<td><?php echo $row['lastname'] ?></td>
		<td><?php echo $row['place'] ?></td>
		<td><?php echo $row['phone'] ?></td>
		<td><?php echo $row['email'] ?></td>
		
	<td><a style="color: white"class="btn btn-success" href="teacher_chatparent.php?lid=<?php echo $row['login_id'] ?>">chat with parent</a></td>
	
	</tr>
<?php }


			 ?>
	
	</table>
</form>
</center>
</div></div></div></div></div></div></div></div></div>
<?php include 'footer.php' ?>