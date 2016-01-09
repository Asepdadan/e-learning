       <?php
                $npm = $this->session->userdata('npm');

                $query = $this->db->query("select * from tbl_mahasiswa where npm = '$npm'")->result_array();

                foreach ($query as $row) {
                  
                

                ?>

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span4">
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
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo base_url()?>assets/img/message_avatar2.png" class="img-circle img-responsive"> </div>
                

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


        <div class="span8">
          <div class="widget">
        
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="container">
                  

                  
                </div>


              </div>

          </div>

          </div>
          <!-- /widget -->

         
        </div>
        <!-- /span8 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 


<br><br><br><br><br></div>