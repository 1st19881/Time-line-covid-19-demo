<body class="">
  <div class="wrapper ">
  <div class="sidebar" data-color="rose" data-background-color="black" data-image="">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
      	<a href="" class="simple-text logo-normal"><img class="rounded-circle" src="https://hirefortalent.ca/images/core/covid-19_tool/icon-tool-112x.png" width="50px">
          Covid-19 TH
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php if($menu=="covid_all"){echo "active";} ?> ">
            <a class="nav-link" href="index.php">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>Covid-19 World</p>
            </a>
          </li>

          <li class="nav-item <?php if($menu=="covid_thai"){echo "active";} ?> ">
            <a class="nav-link" href="covid_19_thai.php">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>Covid-19 Thai Report</p>
            </a>
          </li>

          <li class="nav-item <?php if($menu=="member"){echo "active";} ?> ">
            <a class="nav-link" href="member.php">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>จัดการสมาชิก</p>
            </a>
          </li>


          <li class="nav-item <?php if($menu=="from"){echo "active";} ?> ">
            <a class="nav-link" href="from.php">
              <i class="nav-icon fab fa-wpforms"></i>
              <p>ไทม์ไลน์</p>
            </a>
          </li>

          <li class="nav-item <?php if($menu=="login"){echo "active";} ?> ">
            <a class="nav-link" href="login.php">
               <i class="nav-icon fas fa-user-lock"></i>
              <p>page 2 (login)</p>
            </a>
          </li>


          <li class="nav-item ">
            <a class="nav-link" href="logout.php">
               <i class="nav-icon fas fa-power-off text-danger"></i>
              <p>ออกจากระบบ</p>
            </a>
          </li>



         






          

          
          
          
          
          
          
        </ul>
      </div>
    </div>