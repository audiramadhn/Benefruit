    <ul class="sidebar navbar-nav">
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-user"></i>
          <span> Petani</span>
        </a>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(2) == 'produk' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo base_url('index.php/Produk')?>">
          <i class="fas fa-fw fa-list"></i>
          <span>Produk</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/Produk/pesanan')?>">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Pesanan</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/Produk/riwayat_pesanan')?>">
          <i class="fas fa-fw fa-history"></i>
          <span>Riwayat Pesanan</span></a>
      </li>

    </ul>