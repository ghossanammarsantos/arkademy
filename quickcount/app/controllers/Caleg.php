<?php 

class Caleg extends Controller {
	public function index()
	{
		$data['judul'] = 'Daftar Caleg';
		$data['mhs'] = $this->model('Caleg_model')->getAllCaleg();
		$this->view('templetes/header',$data);
		$this->view('caleg/index',$data);
		$this->view('templetes/footer');
	}
	

	public function getUbah()
	{
		echo json_encode($this->model('Caleg_model')->getCalegById($_POST['id']));
	}

	public function ubah()
	{
		if( $this->model('Caleg_model')->ubahDataCaleg($_POST) > 0 ) {
			Flasher::setFlash('berhasil','diubah','success');
			header('Location:' . BASEURL . '/caleg');
			exit;
		}else{
			Flasher::setFlash('gagal','diubah','danger');
			header('Location:' . BASEURL . '/caleg');
			exit;
		}
	}

	

}