<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class=" navigation-header">
        <span>Menu</span>
      </li>

      <li class="nav-item <?php if($title=='Dashboard'){echo "active";}?>">
        <a href="<?= base_url('main');?>"><i class="ft-home"></i>
          <span class="menu-title" data-i18n="">Dashboard</span>
        </a>
      </li>
      <?php if($_SESSION['user_role'] == 'admin') :?>

        <li class="nav-item <?php if($title=='Konten'){echo "active";}?>">
          <a href="<?= base_url('konten')?>"><i class="ft-image"></i>
            <span class="menu-title" data-i18n="">Konten</span>
          </a>
        </li>

        <li class="nav-item  <?php if($title=='User'){echo "active";}?>">
          <a href="<?= base_url()?>user"><i class="ft-user"></i>
            <span class="menu-title" data-i18n="">User</span>
          </a>
        </li>

        

        <!-- <li class="nav-item <?php if($title=='Alternatif'){echo "active";}?>">
          <a href="<?= base_url('alternatif')?>"><i class="ft-command"></i>
            <span class="menu-title" data-i18n="">Alternatif</span>
          </a>
        </li> -->

      <li class=" navigation-header">
        <span>Ahp Topsis</span>
      </li>

      <li class="nav-item <?php if($title=='Alternatif2'){echo "active";}?>">
          <a href="<?= base_url('alternatif2')?>"><i class="ft-feather"></i>
            <span class="menu-title" data-i18n="">Alternatif</span>
          </a>
      </li>
      
        <li class="nav-item <?php if($title=='Kriteria'){echo "active";}?>">
          <a href="<?= base_url('kriteria');?>"><i class="ft-command"></i>
            <span class="menu-title" data-i18n="">Kriteria</span>
          </a>
        </li>

        <li class="nav-item <?php if($title=='Parameter'){echo "active";}?>">
          <a href="<?= base_url('parameter');?>"><i class="ft-sliders"></i>
            <span class="menu-title" data-i18n="">Parameter</span>
          </a>
        </li>

        <li class="nav-item <?php if($title=='Nilai2'){echo "active";}?>">
          <a href="<?= base_url('nilai_2');?>"><i class="ft-credit-card"></i>
            <span class="menu-title" data-i18n="">Nilai</span>
          </a>
        </li>

        <!-- <li class=" nav-item   <?php if($title=='Parameter' || $title=='Nilai2' ){echo "active";}?>"><a href="#"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Penilaian</span></a>
          <ul class="menu-content">
            <li class=" <?php if($title=='Parameter'){echo "active";}?>"><a class="menu-item" href="<?= base_url('parameter');?>">Parameter</a></li>
            <li class=" <?php if($title=='Nilai'){echo "active";}?>"><a class="menu-item" href="<?= base_url('nilai');?>">Nilai</a></li>
            <li class=" <?php if($title=='Nilai2'){echo "active";}?>"><a class="menu-item" href="<?= base_url('nilai_2');?>">Nilai</a></li>
          </ul>
        </li> -->

        <li class="nav-item <?php if($title=='Ranking'){echo "active";}?>">
          <a href="<?= base_url('backendc');?>"><i class="ft-bar-chart-2"></i>
            <span class="menu-title" data-i18n="">Ranking</span>
          </a>
        </li>

       
      <?php endif; ?>
    </ul>
  </div>
</div>

