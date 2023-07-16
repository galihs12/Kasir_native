 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12">
						<h3><strong>Pengaturan Toko</strong></h3><hr>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Data berhasil diubah</p>
						</div>
						<?php }?>
						<table class="table table-stripped">
							<thead>
								<tr>
									<th>Nama Toko</th>
									<th>Alamat Toko</th>
									<th>Kontak (Hp)</th>
									<th>Nama Pemilik Toko</th>
									<th>Tindakan</td>
								</tr>
							</thead>
							<tbody>
								<form method="post" action="fungsi/edit/edit.php?pengaturan=ubah">		
								<tr>
									<td><input class="form-control" name="namatoko" value="<?php echo $toko['nama_toko'];?>" placeholder="Nama Toko"></td>
									<td><input class="form-control" name="alamat" value="<?php echo $toko['alamat_toko'];?>" placeholder="Alamat Toko"></td>
									<td><input class="form-control" name="kontak" value="<?php echo $toko['tlp'];?>" placeholder="Kontak (Hp)"></td>
									<td><input class="form-control" name="pemilik" value="<?php echo $toko['nama_pemilik'];?>" placeholder="Nama Pemilik Toko"></td>
									<td><button id="tombol-simpan" class="btn btn-primary" style="border-radius: 0px"> Update Data</button></td>
								</tr>
								</form>
							</tbody>
						</table>
						<div class="clearfix" style="padding-top:41%;"></div>
				  </div>
              </div>
          </section>
      </section>
	
