<section class="section coming-soon video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span>Deskripsi</span>
            <h4>Usaha<em> <?= $detail['alternatif_usaha'] ?></em></h4>
            <p><?= $detail['alternatif_deskripsi'] ?></p>
            <!-- <div class="main-button"><a rel="nofollow" href="https://fb.com/templatemo" target="_parent">External URL</a></div> -->
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <div class="continer mt-3">
            <div class="left-content">
              <span >Info Rata - rata</span>
            </div>
            
            <div class="counter ">
                <div class="days" style="font-size: 13px; word-break: break-word;">
                  <div class="value"><?= $detail['alternatif_modal'] ?></div>
                  <span >Modal</span>
                </div>

                <div class="hours"  style="font-size: 13px; word-break: break-word;">
                  <div class="value"><?= $detail['alternatif_omset'] ?></div>
                  <span>Omset</span>
                </div>

                <div class="minutes" style="font-size: 13px; word-break: break-word;">
                  <div class="value"><?= $detail['alternatif_laba'] ?></div>
                  <span >Laba</span>
                </div>

                <div class="days" style="margin-top: 4%; font-size: 13px; ">
                  <div class="value"><?= $detail['alternatif_pesaing'] ?> umkm</div>
                  <span >Pesaing</span>
                </div>
                <div class="hours" style="margin-top: 4%; font-size: 13px;">
                  <div class="value"><?= $detail['alternatif_pekerja'] ?> orang </div>
                  <span >Pekerja</span>
                </div>
            </div>
          </div>
        </div>

       
        
      </div>
    </div>
  </section>

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Konten</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <center><h4 style="margin-top:0px;">Artikel</h4></center>
                    <p>Beberapa artikel yang dapat anda baca untuk membantu mengembangkan usaha ini :</p>
                    <table class="table table-borderless">
                    <?php $no=0; foreach ($artikel as $k) : $no++;?>
                      <tbody>
                          <tr>
                          <td scope="row" style="color:white"><a href="<?= $k->konten_url ?>"><?= $no; ?>. <?= $k->konten_judul ?></a></td>
                          </tr>
                      </tbody>
                      <?php endforeach; ?>
                    </table>       

                  </div>
                  <div class="col-md-6">
                    <center><h4 style="margin-top:0px;">Video</h4></center>
                    <p>Beberapa video yang dapat anda lihat untuk membantu mengembangkan usaha ini :</p>
                    <?php $no=0; foreach ($video as $k) : $no++;?>
                      <tbody>
                          <tr>
                          <td scope="row" style="color:white"><a href="<?= $k->konten_url ?>"><?= $no; ?>. <?= $k->konten_judul ?></a></td>
                          </tr>
                      </tbody>
                      <?php endforeach; ?>
                    </table>       
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
