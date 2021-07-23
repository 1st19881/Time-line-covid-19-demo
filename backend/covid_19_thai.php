<?php 
$menu = "covid_thai";
include("head.php"); 
include("sidebar.php");
include("navbar.php"); 
?>


<?php
    
      @$get_data=file_get_contents('http://covid19.th-stat.com/json/covid19v2/getTodayCases.json');
      $covid19_th=json_decode($get_data);

      
      $Confirmed=$covid19_th->Confirmed;
      $Recovered=$covid19_th->Recovered;
      $Hospitalized=$covid19_th->Hospitalized;
      $NewConfirmed=$covid19_th->NewConfirmed;
      $NewRecovered =$covid19_th->NewRecovered;
      $NewHospitalized =$covid19_th->NewHospitalized;
      $NewDeaths =$covid19_th->NewDeaths;
      $UpdateDate=$covid19_th->UpdateDate;
      $Deaths=$covid19_th->Deaths; 
    
    
    ?>

<div class="content">

  <div class="row">
          <div class="col-md-12">
            <div class="card card-stats">
                <div class="card-header card-header-rose">
                  <center style="font-size: 22px;">สถานาการโควิด 19 ในประเทศไทย อัพเดทข้อมูลล่าสุด : <?php echo  $UpdateDate;?></center>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <i class="material-icons text-danger">warning</i>
                    <a href="javascript:;">Get More Space...</a> -->
                  </div>
                </div>
              </div>
          
          </div>
        </div>

        <div class="row">

        	<div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-plus-square text-white"></i>
                  </div>
                  <p class="card-category">ติดเชื้อรายใหม่</p>
                  <h3 class="card-title"><?php echo  number_format($NewConfirmed);?>
                    <small>คน</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <i class="material-icons text-danger">warning</i>
                    <a href="javascript:;">Get More Space...</a> -->
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-address-book text-white"></i>
                  </div>
                  <p class="card-category">ติดเชื้อสะสม</p>
                  <h3 class="card-title"><?php echo  number_format($Confirmed);?>
                    <small>คน</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <i class="material-icons text-danger">warning</i>
                    <a href="javascript:;">Get More Space...</a> -->
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-user-shield text-white"></i>
                  </div>
                  <p class="card-category">รักษาหายรายใหม่เพิ่ม</p>
                  <h3 class="card-title"><?php echo number_format($NewRecovered);?>
                    <small>คน</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <i class="material-icons text-danger">warning</i>
                    <a href="javascript:;">Get More Space...</a> -->
                  </div>
                </div>
              </div>
            </div>


            

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-address-card text-white"></i>
                  </div>
                  <p class="card-category">รักษาหายแล้วรวม</p>
                  <h3 class="card-title"><?php echo  number_format($Recovered);?>
                    <small>คน</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <i class="material-icons text-danger">warning</i>
                    <a href="javascript:;">Get More Space...</a> -->
                  </div>
                </div>
              </div>
            </div>



            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-rose card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-procedures text-white"></i>
                  </div>
                  <p class="card-category">รักษาใน ร.พ. เพิ่ม</p>
                  <h3 class="card-title"><?php echo  number_format($NewHospitalized);?>
                    <small>คน</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <i class="material-icons text-danger">warning</i>
                    <a href="javascript:;">Get More Space...</a> -->
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-hospital"></i>
                  </div>
                  <p class="card-category">รักษาใน ร.พ. รวม</p>
                  <h3 class="card-title"><?php echo  number_format($Hospitalized);?>
                    <small>คน</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <i class="material-icons text-danger">warning</i>
                    <a href="javascript:;">Get More Space...</a> -->
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-default card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-skull-crossbones text-white"></i>
                  </div>
                  <p class="card-category">เสียชีวิตรายใหม่</p>
                  <h3 class="card-title"><?php echo  number_format($NewDeaths);?>
                    <small>คน</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <i class="material-icons text-danger">warning</i>
                    <a href="javascript:;">Get More Space...</a> -->
                  </div>
                </div>
              </div>
            </div>


            

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats" style="background-color: #222;">
                <div  class="card-header card-header-icon" >
                  <div class="card-icon">
                    <i class="fas fa-book-dead"></i>
                  </div>
                  <p class="card-category text-white">เสียชีวิตรวม</p>
                  <h3 class="card-title text-white"><?php echo number_format($Deaths);?>
                    <small>คน</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!-- <i class="material-icons text-danger">warning</i>
                    <a href="javascript:;">Get More Space...</a> -->
                  </div>
                </div>
              </div>
            </div>


        </div>



      


        




      

</div>




<?php 
include("footer.php"); 

?>