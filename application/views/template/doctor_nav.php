<div class="navbar-fixed ">
     <nav class="teal" role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container" href="#" class="brand-logo  white-text">HRM</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="<?php echo base_url('index.php/Doctor/');?>"  class="waves-effect white-text">Dashboard</a></li>
            <li><a href="<?php echo base_url('index.php/Doctor/Check');?>"  class="waves-effect white-text">Check Patients</a></li>
            <li><a href="<?php echo base_url('index.php/Doctor/Statistics');?>"  class="waves-effect white-text">Statistics</a></li>
            <li><a href="<?php echo base_url('index.php/Doctor/Settings');?>"  class="waves-effect white-text">Settings</a></li>
            <li><a href="<?php echo base_url('index.php/Doctor/Logout');?>"  class="waves-effect white-text">Logout</a></li>
          </ul>

          <ul id="nav-mobile" class="side-nav">
            <div class="container" style="margin:15px auto;width:100%;">
                <img src="<?php echo base_url('/assets/img/defaults/profile.jpg');?>" class="img-fit" style="width:200px;height:200px;border-radius:100px;    margin: 15px 0px 0px 30px;">
            </div>
            <li><a href="<?php echo base_url('index.php/Doctor/');?>"  class="waves-effect waves-teal">Dashboard</a></li>
            <li><a href="<?php echo base_url('index.php/Doctor/Check');?>"  class="waves-effect waves-teal">Check Patients</a></li>
            <li><a href="<?php echo base_url('index.php/Doctor/Statistics');?>"  class="waves-effect waves-teal">Statistics</a></li>
            <li><a href="<?php echo base_url('index.php/Doctor/Settings');?>"  class="waves-effect waves-teal">Settings</a></li>
            <li><a href="<?php echo base_url('index.php/Doctor/Logout');?>"  class="waves-effect waves-teal">Logout</a></li>
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
      </nav>
</div>
