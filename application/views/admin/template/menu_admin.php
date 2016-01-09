



<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="<?php echo base_url().'member/M_dashbord'; ?>">E-learning Admin</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Settings</a></li>
              <li><a href="javascript:;">Help</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> Admin e-learning<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url().'Profile'; ?>">Profile</a></li>
              <li><a href="<?php echo base_url().'Login/logout'; ?>">Logout</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li <?php if($status == "dashbord") echo "class='active'";?>><a href="<?php echo base_url().'Dashbord'; ?>"> <i class="icon-dashboard"></i><span>Halaman Utama</span> </a> </li>
        <li <?php if($status == "soal") echo "class='active'"; ?>><a href="#"><i class="icon-list-alt"></i><span>Menu 1</span> </a> </li>
          <li <?php if($status == "soal") echo "class='active'"; ?>><a href="#"><i class="icon-list-alt"></i><span>Menu 2</span> </a> </li>
        
      
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->

