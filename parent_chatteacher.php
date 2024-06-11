<?php include 'parentheader.php';
$pid=$_SESSION['login_id'];
extract($_GET);
if (isset($_POST['chat'])) {
	extract($_POST);
	$q="insert into chat values(null,'$pid','$lid','$mess',curdate())";
	insert($q);

	alert('successfully');
	return redirect('parent_chatteacher.php');
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
                   <h1 style="color: white">chat with teacher</h1>
                   <form method="post">
                    <table class="table" style="width:500px;color: white">
                     <tr>
                      <th>message</th>
                      <td> <input type="text" class="form-control" required="" name="mess"></td>
                    </tr>
                    <tr>
                      <td align="center" colspan="2"><input type="submit" name="chat" class="btn btn-success" value="submit"></td>
                    </tr>
                  </table>
                </form>
              </center>
            </center></div></div></div></div></div></div></div></div></div>

            <center>
             <form>
              <table class="table" style="width: 400px">
			<!-- <tr>
				<th>sino</th>
				<th>message</th>
				<th>date</th>
			</tr> -->
			<?php 
     $q="SELECT * FROM chat WHERE (`sender_id`='$pid' AND `receiver_id`='$lid') OR (`sender_id`='$lid' AND `receiver_id`='$pid')";
     $res=select($q);

     foreach ($res as $row) {
       ?>

       <tr>
        <?php 
        if($row['sender_id']==$pid)
        {
          ?>      		
          
          <td align="right"><?php echo $row['message'] ?></td>
          <?php 
        }
        else
        {
         ?>

         <td align="left"><?php echo $row['message'] ?></td>

         <?php
       }
       ?>      	</tr>
     <?php }


     ?>
   </table>
 </form>
</center>
<?php include 'footer.php' ?>