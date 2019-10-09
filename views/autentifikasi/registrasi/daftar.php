            <div class="txt-left-side editContent">
                <h2 class="editContent" style="outline: none; cursor: inherit;"> Daftar Sekarang </h2>
                <form action="<?php echo base_url('Autentifikasi/daftar'); ?>" method="post">
                    <div class="form-left-to-w3l editContent">
                        <span class="fa fa-user-o" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
                        <input type="text" name="nama" placeholder="Nama" required="">

                        <div class="clear"></div>
                    </div>
                    
                    <div class="form-left-to-w3l editContent">
                        <span class="fa fa-id-card-o" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
                        <input type="text" name="ktp" placeholder="No. KTP" required="">
                        <div class="clear"></div>
					</div>

                    <div class="form-left-to-w3l editContent">
                        <span class="fa fa-venus-mars" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
                        <input type="radio" name="gender" value="Laki-Laki" required="" checked="checked">Laki-Laki
                        <input type="radio" name="gender" value="Perempuan" required="">Perempuan
                        
                        <div class="clear"></div>
					</div>

                    <div class="form-left-to-w3l editContent">
                        <span class="fa fa-home" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
                        <input type="text" name="alamat" placeholder="Alamat" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l editContent">
                        <span class="fa fa-phone" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
                        <input type="text" name="telepon" placeholder="No Telepon" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l editContent">
                        <span class="fa fa-user-o" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
                        <input type="text" name="username" placeholder="Username" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l editContent" style="outline: none; cursor: inherit;">
                        <span class="fa fa-lock" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
                        <input type="password" name="password1" placeholder="Password" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l editContent" style="outline: none; cursor: inherit;">
                        <span class="fa fa-lock" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
                        <input type="password" name="password2" placeholder="Konfirmasi Password" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l editContent">
                        <span class="fa fa-user-o" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
                            <select class="fa fa-user-o" name="level">
							<option> - User Level - </option>
							<option value="petani">Petani</option>
							<option value="mitra">Mitra</option>
							<option value="investor">Investor</option>
						    </select>
                    
						<div class="clear"></div>
					</div>

                    <div class="form-left-to-w3l editContent">
                        <span class="fa fa-credit-card" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
                        <input type="text" name="norek" placeholder="No. Rekening" required="">
                        <div class="clear"></div>
					</div>

                    <div class="btnn">
                        <button type="submit" class=" btn" style="outline: none; cursor: inherit;">Daftar </button>
                    </div>
                </form>
                <div class="w3layouts_more-buttn">
                    <h3 class=" editContent" style="outline: none; cursor: inherit;">Sudah punya akun?
                        <a href="<?php echo base_url('index.php/Autentifikasi/login'); ?>" class=" editContent" style="outline: none; cursor: inherit;">Masuk
                        </a>
                    </h3>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>