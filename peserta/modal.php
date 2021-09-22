<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Peserta</h5> 
            </div>
            <div class="modal-body">
            <div class="modal-body">
              <div class="form-group">
                <?php
                include '../koneksi.php';
                // session_start();
                $bp_peserta = $_SESSION['id'];
                $query = mysqli_query($koneksi, "SELECT * FROM peserta WHERE bp_peserta = $bp_peserta")or die(mysqli_error());
                while ($data = mysqli_fetch_assoc($query)) {
                ?>
                <form method="POST" action="profile.php">
                  <label>ID Peserta</label>
                  <input name="bp_peserta" class="form-control" value="<?php echo $data['bp_peserta'];?>" readonly>
                  <label>Nama Peserta</label>
                  <input type="nama_peserta" name="nama_peserta" class="form-control" value="<?php echo $data['nama_peserta'];?>">
                  <label>Nomor Telepon</label>
                  <input name="asal_kampus" class="form-control" value="<?php echo $data['asal_kampus'];?>">
                  <label>E-Mail</label>
                  <input name="email" class="form-control" value="<?php echo $data['email'];?>">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" value="<?php echo $data['password'];?>" id="password"><br>
                  
                  <input type="submit" name="submit" class="btn btn-primary" style="float: right;">
                </form>
                <button class="btn btn-primary" onclick="show()"><i class="fa fa-eye" id="gambar"></i></button>
                <?php } ?>
              </div>
            </div>
            </div>
        </div>
    </div>
</div>
<script>
    function show() {
        var gambar = document.getElementById('gambar');
        var password = document.getElementById('password');

        if (password.type === 'password') {
            password.type = 'text';
            gambar.className = 'fa fa-eye-slash';
        }
        else{
            password.type = 'password';
            gambar.className = 'fa fa fa-eye';
        }
    }
</script>