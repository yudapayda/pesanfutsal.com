<?php
/**
* 
*/
class Filterfutsal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function cari()
	{
		$keyword = $this->input->post('keyword');

		$this->load->model('futsal_model');
		$futsal = $this->futsal_model->cari_futsal($keyword);	


								$i=0;
								$row='<div class="row">';
								foreach ($futsal as $item) {									

								if($i>=$i+3){echo $row;}else{ }	

						echo		'<div class="gerai col-md-4 gerai-new masonry-brick" style="position: relative;">
										<div class="gerai-inner">
											<div class="gerai-header clearfix">
												<div class="gerai-info">
													<h2><a href="'.base_url('futsal/profile').'?id='.$item['id_futsal'].'">'.$item['nama_futsal'].'</a></h2>
												</div>
											</div>
											<div class="gerai-main">
												<div class="gerai-thumb profile">
													<a href="'.base_url('futsal/profile').'?id='.$item['id_futsal'].'">
														<img src="'.base_url('assets/image/futsal/'.$item['gambar']).'">
													</a>
												</div>
												<div class="gerai-action">
													<a href="'.base_url('futsal/profile').'?id='.$item['id_futsal'].'" class="btn btn-block btn-success">LIHAT JADWAL</a>
												</div>
											</div>
										</div>
									</div>';

								 $i++; 
								} 
	}

	public function filter()
	{
		$id_kota = $this->input->post('id_kota');
		
		$this->load->model('futsal_model');
		$futsal = $this->futsal_model->filter_futsal($id_kota);

		
								$i=0;
								$row='<div class="row">';
								foreach ($futsal as $item) {									

								if($i>=$i+3){echo $row;}else{ }	

						echo		'<div class="gerai col-md-4 gerai-new masonry-brick" style="position: relative;">
										<div class="gerai-inner">
											<div class="gerai-header clearfix">
												<div class="gerai-info">
													<h2><a href="'.base_url('futsal/profile').'?id='.$item['id_futsal'].'">'.$item['nama_futsal'].'</a></h2>
												</div>
											</div>
											<div class="gerai-main">
												<div class="gerai-thumb profile">
													<a href="'.base_url('futsal/profile').'?id='.$item['id_futsal'].'">
														<img src="'.base_url('assets/image/futsal/'.$item['gambar']).'">
													</a>
												</div>
												<div class="gerai-action">
													<a href="'.base_url('futsal/profile').'?id='.$item['id_futsal'].'" class="btn btn-block btn-success">LIHAT JADWAL</a>
												</div>
											</div>
										</div>
									</div>';

								 $i++; 
								} 

	}
}
