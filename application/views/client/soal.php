<div class="jumbotron mdb-color rgba-red-strong">

          <div class="btn btn-teal btn-primary ">

                <p class="text-center">Mata Pelajaran</p>
                <p class="text-center">Matematika</p>

          </div>
          <div class="btn btn-red btn-outline-white accent-1">

                <p class="text-center">Timer</p>
                <p class="text-center">00:00</p>

          </div>
          <div class="btn btn-outline-secondary-modal btn-info">

                <p class="text-center">Tanggal</p>
                <p class="text-center">5 Juli 2017</p>

          </div>

          <a href="#" class="btn btn-lg btn-amber btn-outline-pink text-shadow">Selesaikan</a>


</div>

<div class="row container-fluid">


  <!-- <div class="col-lg-4" id="loginform" >

          <div class="card">



                        <h4  class="card-header card-title">INPUTOR</h4>




                  <div class="card-body  ">
                        <form class="form-group" action="<?= site_url("auth/postnilai");?>" method="post">
                                  <input type="text" class="form-control" name="npmpost" value="" placeholder="NPM">

                                  <input type="text" class="form-control" name="namapost" value="" placeholder="NAMA">

                                  <label for=""> Pilih Matakuliah</label>
                                  <select class="form-control" name="matkulpost">
                                          <?php foreach ($matkuls as $keymatkul ): ?>

                                              <option value="<?= $keymatkul->id_matkul ;?>"><?= $keymatkul->matkul ;?></option>

                                          <?php endforeach; ?>

                                  </select>

                                  <label for=""> Status Active/Non</label>
                                  <select class="form-control" name="statuspost">
                                              <option value="Aktif">Aktif</option>
                                              <option value="Postponed">Postponed</option>
                                  </select>

                                  <input type="number" class="form-control" name="nilaipost" value="" placeholder="NILAI">
                                  <input type="submit" class=" btn btn-lg btn-teal"   value="MASUKKAN">


                  </div>





                          <div class="card-footer">


                            </div>

                  </form>
          </div>

    </div> -->


    <div class="col-lg-12"  >

          <div class="card"  >



                    <div class="card-header card-title">

                          <p class="card-text">Pilihlah Jawaban Yang Tepat @!</p>

                    </div>




                  <div class="card-body">

                           <table class="table  table-striped">
                             <thead>
                               <tr>
                                 <th style="width:10%">Nomor</th>
                                 <th style="width:50%">Soal</th>
                                 <th style="width:20%">Media</th>
                                 <th style="width:20%">Jawaban</th>

                               </tr>
                             </thead>
                             <tbody>

                                  </tr>
                                    <td>sdf</td>
                                    <td>sdf</td>
                                    <td>sdf</td>
                                    <td>sdf</td>
                                  </tr>




                             </tbody>
                           </table>



                  </div>



          </div>

    </div>
    <!-- <div class="col-lg-4" id="loginform">

          <div class="card modal-dialog" style="height:300px;width:300px;">



                        <h4  class="card-title">Login</h4>




                  <div class="card-body">

                        <img src="img-thumbnail" alt="" src="<?php echo base_url();?>prefabs/img/preloader.gif" width="300px" height="300px">


                  </div>

                  <div class="card-footer">



                  </div>


          </div>

    </div> -->

</div>
