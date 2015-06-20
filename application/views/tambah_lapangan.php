<div id="primary">
	<content id="site-content">
		<div class="content">
			<div class="page-top">
				<div class="container">
					<div id="breadcrumb">
						<p><a href="<?= base_url('admin');?>">Admin Area</a>
							<i class="fa fa-angle-right"></i>
							<a href="<?= base_url('admin/lapangan');?>">Lapangan</a>
							<i class="fa fa-angle-right"></i>
							<span class="current">Tambah Lapangan</span>
						</p>
					</div>
				</div>
			</div>
			<div class="page-main">
				<div class="container">
					<div class="entry-content">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<div class="well" style="backgroud-color: white;">
									<h3 style="margin-top: 0px;">DATA LAPANGAN</h3>
									<form action="<?= base_url('admin/insert_lap'); ?>" method="POST" enctype="multipart/form-data">
										<p>
											<label>Nama Lapangan<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="nama_lap" placeholder="Nama Lapangan" class="form-control" required>
										</p>
										<p>
											<label>Deskripsi<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="deskripsi" placeholder="Deskripsi" class="form-control" required>
										</p>
										<br>
										<h4><strong>Tarif/Jam</strong></h4>
										<p>
											<label>Pagi<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="pagi" placeholder="Tarif Pagi" class="form-control" required>
										</p>
										<p>
											<label>Siang<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="siang" placeholder="Tarif Siang" class="form-control" required>
										</p>
										<p>
											<label>Malam<span class="text-danger">*</span></label>
											<br>
											<input type="text" name="malam" placeholder="Tarif Malam" class="form-control" required>
										</p>
										<p>
											<label>Gambar Lapangan<span class="text-danger">*</span></label>
											<input type="file" name="userfile">
										</p>
										<p><input type="submit" class="btn btn-lg btn-primary" value="SUBMIT"></p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</content>
</div>