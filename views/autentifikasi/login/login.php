            <div class="txt-left-side editContent">
                <h2 class="editContent" style="outline: none; cursor: inherit;"> Masuk </h2>
                <form action="<?php echo base_url('Autentifikasi/cekLogin'); ?>" method="post">
                <?php $this->session->set_flashdata('message');?>
                    <div class="form-left-to-w3l editContent">
                        <span class="fa fa-user-o" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
                        <input type="text" name="username" placeholder="Username" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l editContent" style="outline: none; cursor: inherit;">

                        <span class="fa fa-lock" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
                        <input type="password" name="password" placeholder="Password" required="">
                        <div class="clear"></div>
                    </div>
                    <div class="main-two-w3ls">
                        <div class="left-side-forget">
                            <input type="checkbox" class="checked">
                            <span class="remenber-me editContent" style="outline: none; cursor: inherit;">Remember me </span>
                        </div>
                    </div>
                    <div class="btnn">
                        <button type="submit" class=" btn" style="outline: none; cursor: inherit;">Masuk </button>
                    </div>
                </form>
                <div class="w3layouts_more-buttn">
                    <h3 class=" editContent" style="outline: none; cursor: inherit;">Belum punya akun?
                        <a href="<?php echo base_url('index.php/Autentifikasi/registrasi'); ?>" class=" editContent" style="outline: none; cursor: inherit;">Daftar
                        </a>
                    </h3>
                </div>
                <div class="clear"></div>
                <br>
                <br>
                
                <div class="clear"></div>
            </div>
        </div>
    </div>