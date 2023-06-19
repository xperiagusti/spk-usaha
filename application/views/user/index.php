<!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="<?php echo base_url();?>assets/assets_lp/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Sistem Pendukung Keputusan</h6>
              <h2><em>Tentukan</em> Usahamu</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="#section2">Let's Go</a></div>
              </div>
          </div>
      </div>
    </section>

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>TIPS & TRICK ?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>Persiapkan Modal</a></li>
              <li><a href='#tabs-2'>Pelajarilah Pasar</a></li>
              <li><a href='#tabs-3'>Persiapkan Strategi</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="<?php echo base_url();?>assets/assets_lp/images/choose-us-image-01.png" alt="">
                  </div>
                  <div class="col-md-6" style="text-align: justify;">
                    <h4>Persiapkan Modal</h4>
                    <p>Salah satu cara dalam memilih usaha dan mendirikan usaha  yang tepat adalah menyesuaikannya dengan modal yang tersedia. Jangan sampai Anda memaksakan mendirikan usaha yang dinginkan namun modal yang dimiliki tidak cukup. Takutnya Anda akan kehabisan modal pada awal pendirian usaha tersebut. Akibatnya Anda tidak akan bisa memaksimalkan usaha tersebut karena kekurangan modal. 
                    Untuk itulah ketika memilih jenis usaha, hitung lagi apa sudah sesuai dengan modal yang dimiliki. Apabila modal yang ada termasuk kecil, sementara Anda bisa mencari jenis usaha lainnya yang tidak memberatkan keuangan Anda.

                        
                      </p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6" >
                    <img src="<?php echo base_url();?>assets/assets_lp/images/choose-us-image-02.png" alt="">
                  </div>
                  <div class="col-md-6" style="text-align: justify;">
                    <h4>Pelajarilah Pasar</h4>
                    <p>Sebelum memulai usaha, anda harus mempertimbangkan, apakah pasar akan suka atau butuh dengan barang/jasa yang kamu tawarkan nanti?
                      Untuk mengetahuinya, lakukan riset pasar pada industri yang bakal anda geluti. Bicara lah beberapa orang yang berpengalaman dan juga calon pelanggan yang kamu sasar untuk mengetahui potensi usahamu.
                    </p>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="<?php echo base_url();?>assets/assets_lp/images/choose-us-image-03.png" alt="">
                  </div>
                  <div class="col-md-6" style="text-align: justify;">
                    <h4>Persiapkan Strategi</h4>
                    <p>Memulai bisnis dan menjalaninya tidak semudah mengedipkan mata. Ada banyak yang harus kita pertimbangkan, pelajari, dan prediksi untuk ke depannya. Strategi demi strategi harus anda persiapkan sejak awal sebagai landasan utama menjalani usaha. 
                      Persiapan yang matang akan membuahkan hasil yang maksimal. Oleh karena itu, tidak sedikit cerita pebisnis baru memiliki proses yang panjang dalam mempersiapkan usahanya.</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4>Ambil<em> Peluangmu</em> dan Bangun <em>Kesuksesanmu</em></h4>
              <div class="counter">

                <div class="days">
                  <div class="value">1</div>
                  <span>KOTA</span>
                </div>

                <div class="hours">
                  <div class="value"> 19</div>
                  <span style="word-break: break-word;">KECAMATAN</span>
                </div>

                <div class="minutes">
                  <div class="value"><?php echo $alternatif;?></div>
                  <span>Jenis usaha</span>
                </div>

                <div class="seconds">
                  <div class="value">797</div>
                  <span>UMKM</span>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Ranking Jenis Usaha Potensial Di Semarang</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
            <?php $no=0; foreach ($rank as $key => $value) : $no++;?>
            
            <div class="item " style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                <!-- <img src="<?php echo base_url();?>assets/assets_lp/images/courses-01.jpg" alt="Course #1"> -->
                <img src="<?= base_url('uploads/alternatif/' . $value->alternatif_gambar); ?>">
                <div class="down-content">
                <h4><?= $no; ?>. <?= $value->alternatif_usaha ?></h4>
                
                <ul style="list-style-type:disc; margin-left:15px;">
                  <li><p style="margin-bottom:5px;">Modal: <?= $value->alternatif_modal ?></p></li>
                  <li><p style="margin-bottom:5px;">Omset: <?= $value->alternatif_omset ?></p></li>
                  <li><p style="margin-bottom:5px;">Laba : <?= $value->alternatif_laba ?></p></li>
                  <li><p style="margin-bottom:5px;">Pesaing : <?= $value->alternatif_pesaing ?></p></li>
                  <li><p style="margin-bottom:5px;">Pekerja : <?= $value->alternatif_pekerja ?></p></li>
                </ul>
                    
                <!-- <div class="author-image">
                    <img src="<?php echo base_url();?>assets/assets_lp/images/author-01.png" alt="Author 1">
                </div> -->
                <div class="text-button-pay">
                    <a href="<?= base_url(); ?>home/detail/<?= $value->alternatif_kode?>">Details <i class="fa fa-angle-double-right"></i></a>
                 
                </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  

  <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center" >
          <div class="left-content">
            <span>Our conclusion</span>
            
            <h4>TOP THREE :
            <?php $no=0; foreach ($rank_con as $key => $r) : ?>
              <ul style="list-style-type:disc; margin-left:28px;">
              <li><em><?= $r->alternatif_usaha ?></em></li>
              </ul>
              <?php endforeach; ?>
            </h4>
       
            <p style="text-align: justify;">Berdasarkan perankingan usaha menggunakan metode AHP dan TOPSIS maka jenis usaha potensial di Kota Semarang dapat dilihat dari 3 urutan teratas.  Ketiga usaha ini dipilih mengikuti potensi pasar dan data modal rata-rata setiap UMKM di kota ini.
            <br><br>Namun dalam meraih keuntungan yang besar perlu strategi pemasaran, lokasi, dan produk yang baik.</p>
            <div class="main-button"><a href="#">-- GOOD LUCK --</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>PILIH USAHAMU DENGAN BIJAK</h4>
            </div>
            <figure>
              <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="play"><img src="<?php echo base_url();?>assets/assets_lp/images/main-thumb.png"></a>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>
