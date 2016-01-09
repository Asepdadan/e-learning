
<?php
date_default_timezone_set('Asia/Bangkok');

if(!$this->session->userdata('ujian')){
redirect('member/M_dashbord');
}

?>
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="widget widget-nopad">
             <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Waktu Ujian E-learning</h3>
             </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                  <h3 class="bigstats"></h3>
                  <div id="big_stats" class="cf">
                    <div class="stat"> waktu sekarang<i class="icon-time"></i> <span class="value"><span id="clock"></span></span> </div>
                    <!-- .stat -->
                    
                    <div class="stat"> sisa waktu<i class="icon-time"></i> <span class="value"><div id="waktu"></div></span></div>
                    <!-- .stat -->
                   
                  </div>



                </div>
                <!-- /widget-content --> 
                
              </div>
            </div>

          </div>
           <!-- /widget- --> 


        </div>
        <!-- /span6 -->
        <div class="span8">
         
          <div class="widget ">
              
              <div class="widget-header">
                <i class="icon-user"></i>
                <h3>Silahkan pilih sesuai dengan kemampuan anda !!</h3>
              </div> <!-- /widget-header -->
          
              <div class="widget-content">
                
                <div class="pane" id="formcontrols">

              <?php echo $this->session->flashdata('info'); ?>
         
                      

                       <form action="<?php echo base_url().'member/M_soal/aksi'; ?>" method="post">
                       <!-- Table -->
                       <table class="table">
                         <thead>
                           <tr>
                             <th><h2>Selamat Mengerjakan Good Luck !!!</h2></th>
                           </tr>
                          
                         </thead>
                         <tbody>
                          <?php
                          $kode_matakuliah = $this->session->userdata('kode_matakuliah');

                          $soal= $this->Model_soal->getSoal($kode_matakuliah);

                           $no= 1; 
                          foreach ($soal as $row) {
                          
                          
                          ?>

                           <tr>
                             <td><h3> <?php echo $no; ?>. <?php echo $row['soal']; ?> </h3><br>
                             </td>
                           </tr>
                           <tr>
                             <td class="alert alert-success" >A. <input type="radio"  value="A" name="<?php echo $row['id']; ?>" ><strong> <?php echo $row['jawaban_a']; ?></strong><br>
                             B. <input type="radio" value="B" name="<?php echo $row['id']; ?>"><strong> <?php echo $row['jawaban_b']; ?></strong><br>
                             C. <input type="radio" value="C" name="<?php echo $row['id']; ?>"> <strong> <?php echo $row['jawaban_c']; ?></strong><br>
                             D. <input type="radio" value="D" name="<?php echo $row['id']; ?>"> <strong> <?php echo $row['jawaban_d']; ?></strong></td>
                           </tr>
                           <input type="hidden" value="<?php echo $row['kode_matakuliah']; ?>" name="kodematakuliah">
                              <?php
                              $no++;
                              }
                            
                            
                              
                              ?>

                             
                           <tr>
                           <td><center><button class="btn btn-success" >selesai</button></center></td>
                           </tr>
                        
                          
                         </tbody>
                       </table>
                      </form>

                


                </div>
                <!-- /pane -->
              </div> <!-- /widget-content -->
            
          </div> <!-- /widget -->
  
                





         <br><br><br>
         <br><br><br>
         <br><br><br>
        </div>
        <!-- /span6 --> 
        <div class="span12">
             
        </div>
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
