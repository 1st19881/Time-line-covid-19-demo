<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    fordev22.com Material Dashboard -> Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  <link rel="stylesheet" href="assets/js/datatable_bts4/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- <link rel="stylesheet" href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"> -->
  <style>
    body {
      font-family: 'Kanit', sans-serif;
      
      /*font-size: 14px;*/
    }
  </style>
</head>
<body class="">

<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row" class="info">
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ลำดับ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ชื่อข่าวสาร</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">หัวเรื่อง</th>

                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รูป</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">จัดการ</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                                <td>
                                                Test
                                                </td>

                                                <td>
                                                   Test1
                                                </td>

                                                <td>
                                                  Test
                                                </td>

                                                <td>
                                                   <img src="f.png" width="50" class="img-circle elevation-2" alt="User Image">
                                                </td>

                                                <td>
                                                  <a class="btn btn-primary btn-sm" href="#">
                                                  <i class="fas fa-folder">
                                                  </i>
                                                  View
                                              </a>
                                              <a class="btn btn-info btn-sm" href="#">
                                                  <i class="fas fa-pencil-alt">
                                                  </i>
                                                  Edit
                                              </a>
                                              <a class="btn btn-danger btn-sm" href="#">
                                                  <i class="fas fa-trash">
                                                  </i>
                                                  Delete
                                              </a>
                                                </td>

                                               
                                               
                                            </tr>


                                            <tr>
                                                <td>
                                                Test
                                                </td>

                                                <td>
                                                   Test
                                                </td>

                                                <td>
                                                  Test
                                                </td>

                                                <td>
                                                   <img src="f.png" class="img-circle elevation-2" width="50" alt="User Image">
                                                </td>

                                                <td>
                                                  <a class="btn btn-primary btn-sm" href="#">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    View
                                                </a>
                                                <a class="btn btn-info btn-sm" href="#">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm" href="#">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Delete
                                                </a>
                                                </td>

                                                
                                               
                                            </tr>




                                           
                                        </tbody>
                  </table>






<!--   Core JS Files   -->
  
  <!-- datatables -->
  <script src="assets/js/plugins/datatables.min.js" type="text/javascript"></script>
  

  <script src="assets/js/plugins/jquery.dataTables.js"></script>
  <script src="assets/js/datatable_bts4/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  
  <!-- <script>
    $(document).ready(function () {
      $('#dtBasicExample').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
  </script> -->

  <!-- DataTables -->
<!-- <script src="http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> -->

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
  </body>
</html>