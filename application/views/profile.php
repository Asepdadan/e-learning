       <?php
                $npm = $this->session->userdata('npm');

                $query = $this->db->query("select * from tbl_mahasiswa where npm = '$npm'")->result_array();

                foreach ($query as $row) {
                  
                

                ?>

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span6">
                   <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <A href="edit.html" >Edit Profile</A>

        <A href="edit.html" >Logout</A>
       <br>
<p class=" text-info"><span id="clock"></span> </p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $row['nama']; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic"  src="<?php echo base_url()?>assets/img/message_avatar2.png" class="img-circle img-responsive"> </div>
                
         


                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>NPM :</td>
                        <td><?php echo $row['npm']; ?></td>
                      </tr>
                      <tr>
                        <td>Tempat Lahir:</td>
                        <td><?php echo $row['tempat_lahir']; ?></td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td><?php echo $row['tanggal_lahir']; ?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Jenis Kelamin</td>
                        <td><?php echo $row['jenis_kelamin']; ?></td>
                      </tr>
                        <tr>
                        <td>Alamat Rumah</td>
                        <td><?php echo $row['alamat']; ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td><?php echo $row['no_handphone']; ?>                        </td>
                           
                      </tr>
                     <?php
                   }
                   ?>

                    </tbody>
                  </table>
                  
                 
                </div>
              </div>
            </div>
                
            
          </div>
        </div>


          
        
        </div>
        <!-- /span6 -->
        <div class="span6">
          <div class="widget">
          
          </div>
          <!-- /widget -->

         
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
<div class="extra">
  <div class="extra-inner">
    <div class="container">
      <div class="row">
                    <div class="span3">
                        <h4>
                            About Free Admin Template</h4>
                        <ul>
                            <li><a href="javascript:;">EGrappler.com</a></li>
                            <li><a href="javascript:;">Web Development Resources</a></li>
                            <li><a href="javascript:;">Responsive HTML5 Portfolio Templates</a></li>
                            <li><a href="javascript:;">Free Resources and Scripts</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Support</h4>
                        <ul>
                            <li><a href="javascript:;">Frequently Asked Questions</a></li>
                            <li><a href="javascript:;">Ask a Question</a></li>
                            <li><a href="javascript:;">Video Tutorial</a></li>
                            <li><a href="javascript:;">Feedback</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Something Legal</h4>
                        <ul>
                            <li><a href="javascript:;">Read License</a></li>
                            <li><a href="javascript:;">Terms of Use</a></li>
                            <li><a href="javascript:;">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="span3">
                        <h4>
                            Open Source jQuery Plugins</h4>
                        <ul>
                            <li><a href="http://www.egrappler.com">Open Source jQuery Plugins</a></li>
                            <li><a href="http://www.egrappler.com;">HTML5 Responsive Tempaltes</a></li>
                            <li><a href="http://www.egrappler.com;">Free Contact Form Plugin</a></li>
                            <li><a href="http://www.egrappler.com;">Flat UI PSD</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /extra-inner --> 
</div>
<!-- /extra -->
