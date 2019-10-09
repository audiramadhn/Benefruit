    <ul class="sidebar navbar-nav">
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-user"></i>
          <span> Mitra</span>
        </a>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(2) == 'produk' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo base_url('index.php/mitra')?>">
          <i class="fas fa-fw fa-list"></i>
          <span>Produk Olahan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('mitra/investor_masuk')?>">
          <i class="fas fa-fw fa-user-plus"></i>
          <span>Investor Masuk</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('mitra/riwayat_pesanan')?>">
          <i class="fas fa-fw fa-history"></i>
          <span>Riwayat Pesanan</span></a>
      </li>
    </ul>