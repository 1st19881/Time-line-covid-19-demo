<?php 
$menu = "covid_all";
include("head.php"); 
include("sidebar.php");
include("navbar.php"); 
?>

<?php 
@$get_data=file_get_contents('https://api.covid19api.com/summary');
       
      $covid19_c=json_decode($get_data);
      $covid19_c_c=$covid19_c->Countries;//สำหรับทำ foreach

      

      $total_TotalConfirmed=0;
                                      $total_TotalRecovered=0;
                                      $total_TotalNewConfirmed=0;
                                      $total_TotalDeaths=0;

                                      $tr=0;
                                      $td=0;

foreach ($covid19_c_c as $covid19_c_c) {

                                      $total_TotalConfirmed += $covid19_c_c->TotalConfirmed; 
                                      $total_TotalRecovered += $covid19_c_c->TotalRecovered; 
                                       $total_TotalNewConfirmed += $covid19_c_c->NewConfirmed; 
                                       $total_TotalDeaths += $covid19_c_c->TotalDeaths; 
                                       $tr += $covid19_c_c->TotalRecovered;
                                       $td += $covid19_c_c->TotalDeaths;

                                    }

?>

<div class="content">
        

        <div class="row">
          <div class="col-md-12">
            <div class="card card-stats">
                <div class="card-header card-header-rose">
                  <center style="font-size: 22px;">สถานาการโควิด 19 ทั่วโลก</center>
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
                  <h3 class="card-title"><?php echo number_format($total_TotalNewConfirmed); ?>
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
                  <h3 class="card-title"><?php echo number_format($total_TotalConfirmed); ?>
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
                  <h3 class="card-title"><?php echo number_format($total_TotalRecovered); ?>
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
                <div class="card-header card-header-dark card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-book-dead text-white"></i>
                  </div>
                  <p class="card-category">เสียชีวิตรวม</p>
                  <h3 class="card-title"><?php echo  number_format($total_TotalDeaths);?>
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