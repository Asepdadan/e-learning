
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span10">

        <div class="table-responsive">
          <caption><h2>Sistem Penilaian Online</h2></caption>
          <table  class="table table-hover">
            <thead>
              <tr>
                
                <th>Nama Matakuliah</th>
                <th>Nilai</th>
                <th>Index</th>
              </tr>
            </thead>
            <?php
            
            foreach($nilai as $row){
            if($row['nilai'] >= 80){
            $index = 'A';
            }else if($row['nilai']>= 70){
            $index = 'B';
            }else if($row['nilai']>= 60){
            $index = 'C';
            }else if($row['nilai']>= 50){
            $index = 'D';
            }else{
              $index = 'E';
            }


            ?>
            
            <tbody>
              <tr>
                
                <td><?php echo $row['nama_matakuliah']; ?></td>
                <td><?php echo $row['nilai']; ?></td>
                <td><?php echo $index; ?></td>
              </tr>
              <?php
              }
              ?>
            </tbody>
          </table>

         <!-- <button type="button" class="btn btn-info"><i class="icon-print" > Print</i></button>-->
          
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
  <br><br><br><br><br><br><br><br><br><br><br>
</div>
<!-- /main -->

