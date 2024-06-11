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
                   <h1 style="color: white">view photo</h1>
                   <form>
                    <table class="table" style="width:500px;color: white">
                     <tr>
                      <th>sino</th>
                      <th>student</th>
                      <th>file</th>
                      <th>date</th>
                    </tr>
                    <?php 

                    $q="select * from files inner join student using (student_id)";
                    $res=select($q);
                    $sino=1;

                    foreach ($res as $row) {
                      ?>
                      <tr>
                       <td><?php echo $sino++; ?></td>
                       <td><?php echo $row['firstname'] ?></td>
                       <td><img src="<?php echo $row['file'] ?>" width="100" heigth="100"></td>
                       <td><?php echo $row['date'] ?></td>
                     </tr>
                     <?php
                   }


                   ?>
                 </table>
               </form>
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