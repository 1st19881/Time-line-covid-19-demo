<?php 
$menu = "login";
include("head.php"); 
include("sidebar.php");
include("navbar.php"); 
?>



<div class="content">

  
<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-info">
                  <h4 class="card-title">Login Form</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>

                      
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      
                    </div>
                    
                 
                    
                    <button class="btn btn-default btn-block">Login</button>
                    
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="force.png" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">button</h6>
                  <h4 class="card-title">Fordev22.com</h4>
                  <p class="card-description">
                    <button class="btn btn-default btn-round">Default</button>
                    <button class="btn btn-primary btn-round">Primary</button>
                    <button class="btn btn-info btn-round">Info</button>
                    <button class="btn btn-success btn-round">Success</button>
                    <button class="btn btn-warning btn-round">Warning</button>
                    <button class="btn btn-danger btn-round">Danger</button>
                    <button class="btn btn-rose btn-round">Rose</button>
                  </p>
                  <a href="javascript:;" class="btn btn-info btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div>
        
       



       


          
</div>



        




      

</div>

<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/data.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>


  <script>

                  
                  $(function () {
                      
                      $('#container').highcharts({
                          data: {
                              table: 'datatable',

                          },

                          credits: {
                              text: 'fordev22.com',
                              color: '#fff',
                              href: 'http://www.example.com',
                          //enabled: false
                            style: {
                                color: '#fff'
                                
                                  }
                            },

                          chart: {
                              type: 'column', // column, line, pie, areaspline
                              backgroundColor: 'transparent',
                          },
                          title: {
                              text: 'รายงานสถานการณ์ โควิด-19',
                                style: {
                              color: '#fff'
                              
                                }

                          },

                          plotOptions: {

                          series: {
                            //colorByPoint: true, //ทำให้ เป็นสี ตามแท่ง
                              
                              //borderWidth: 2,
                              dataLabels: {
                                  enabled: true,
                                  format: '{point.y: f} คน', //แสดง%

                                  style: {
                                color: '#fff',
                                borderColor: '#fff',
                                //font: '11px Trebuchet MS, Verdana, sans-serif'
                             },


                              }

                          }
                      },
  

                          colors:["#FF5A5E", "#FFC870", "#8085e9", "#5AD3D1", "#616774"],//สำหรับเปลี่ยนสี

                          xAxis: {
                          //gridLineWidth: 1,
                          labels: {
                             style: {
                                color: '#fff',
                                font: '11px Trebuchet MS, Verdana, sans-serif'
                             }
                          },
                          title: {
                            text: 'จำนวน',
                             style: {
                                color: '#fff',
                                fontWeight: 'bold',
                                fontSize: '12px',
                                fontFamily: 'Trebuchet MS, Verdana, sans-serif'

                             }            
                          }
                       },





                          yAxis: {
                            labels: {
                             style: {
                                color: '#fff',
                                font: '11px Trebuchet MS, Verdana, sans-serif'
                             }
                          },
                              allowDecimals: false,
                              title: {
                                  text: 'จำนวน',

                                  style: {
                              color: '#fff'
                              
                                }


                                
                              }
                          },

                          legend: {
                          itemStyle: {

                              color: '#fff',
                              fontWeight: 'bold'
                          }
                      },
                         
                          
                          tooltip: {

                              formatter: function () {
                                  return '<b>' + this.series.name + '</b><br/>' +
                                      this.point.y + ' ' + this.point.name.toLowerCase();
                              }
                          }

                      });
                  });
                  
                  </script>

                   <script>
                  
                  Highcharts.chart('container2', {
                      chart: {
                              type: 'pie',
                              backgroundColor: 'transparent',
               
                             },
                            credits: {
                              text: 'fordev22.com',
                              color: '#fff',
                              href: 'http://www.example.com',
                          //enabled: false
                            style: {
                                color: '#fff'
                                
                                  }
                            },

                      title: {
                          text: 'รายงานสถานการณ์ โควิด-19',
                          style: {
                                  color: '#fff'
                              
                                }
                      },
                      colors:[ "#90ed7d", "#FF5A5E", "#A8B3C5", "#616774"],//สำหรับเปลี่ยนสี
                      tooltip: {
                          pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                      },
                      accessibility: {
                          point: {
                              valueSuffix: '%'
                          }
                      },
                      plotOptions: {
                          pie: {
                              allowPointSelect: true,
                              cursor: 'pointer',
                              dataLabels: {
                                  enabled: true,
                                  format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                              }
                          }
                      },
                      series: [{
                          name: 'จำนวน',
                          colorByPoint: true,
                          data: [ {
                              name: 'รักษาหายแล้ว',
                              y: <?php echo  $Recovered;?>
                      
                      
                          }, {
                              name: 'ติดเชื้อสะสม',
                              y: <?php echo  $Confirmed;?>
                          }]
                      }]
                  });
                                    
                  </script>


<?php 
include("footer_2.php"); 

?>