<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_clean;
use TCPDF;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function dashboard(){
		if (session()->get('level')>0) {
		$model = new M_clean();
		

        echo view('header');
		echo view('menu');
		echo view('dashboard');
        echo view('footer');

	}else{
		return redirect()->to('home/login');
	}
    }

	// public function tes(){
        
    //     echo view('header');
	// 	echo view('menu');
	// 	echo view('tes');
    //     echo view('footer');
    // }

	public function login()
	{
		echo view ('header');
		echo view('login');
		
		
	}
	
	
    public function aksilogin()
	{
		$a=$this->request->getPost('username');
		$d=$this->request->getPost('password');

		$model = new M_clean();
		$where=array(
			'username'=> $a,
			'password'=> $d
		);

		$cek=$model->getWhere('tb_user',$where);
		if ($cek>0) {
			session()->set('id_user',$cek->id_user);
            session()->set('level',$cek->level);
			session()->set('username',$cek->username);
			
			return redirect()->to('Home/dashboard');
		}else{
			return redirect()->to('Home/login');
		}
	}
	
        public function logout()
	{
		session()->destroy();
		return redirect()->to('Home/login');
	}

	public function signup()
	{
		echo view ('header');
		echo view ('signup');
		
	}

    public function aksi_sign()
	{
		$model = new M_clean();
		
		$b= $this->request->getPost('username');
		$c= $this->request->getPost('password');
		$d= $this->request->getPost('email');
		$e= $this->request->getPost('no_hp');

		// $uploadedFile = $this->request->getFile('foto');
		// $foto = $uploadedFile->getName();

		$isi = array(
			
			'username' => $b,
			'password' => $c,
			'email' => $d,
			'no_hp' => $e,
			'level' => 3
				);

		$model->tambah('tb_user', $isi);
	 	

		return redirect()->to('Home/login');
		
	}

	public function menu_clean(){
		if (session()->get('level')>0) {  

        echo view('header');
		echo view('menu');
		echo view('menu_clean');
        echo view('footer');

	}else{
		return redirect()->to('home/login');
	}
    }

	public function kost(){
		if (session()->get('level')>0) {
			$model = new M_clean();  
			$data['kost']=$model->tampil('tb_kost');
        echo view('header');
		echo view('menu');
		echo view('kost',$data);
        echo view('footer');

	}else{
		return redirect()->to('home/login');
	}
    }

	public function rumah(){
		if (session()->get('level')>0) {
			$model = new M_clean();  
			$data['rumah']=$model->tampil('tb_rumah');
        echo view('header');
		echo view('menu');
		echo view('rumah',$data);
        echo view('footer');

	}else{
		return redirect()->to('home/login');
	}
    }

	public function kantor(){
		if (session()->get('level')>0) {
			$model = new M_clean();  
			$data['kantor']=$model->tampil('tb_kantor');
        echo view('header');
		echo view('menu');
		echo view('kantor',$data);
        echo view('footer');

	}else{
		return redirect()->to('home/login');
	}
    }

	public function data_user(){
		if (session()->get('level')>0) {
			$model = new M_clean();  
			$data['erwin']=$model->tampil('tb_user');
        
        echo view('header');
		echo view('menu');
		echo view('data_user',$data);
        echo view('footer');
	
	}else{
		return redirect()->to('home/login');
	}
    }

	public function t_duser()
	{
		if (session()->get('level')>0) {
		$model = new M_clean();
		echo view ('header');
		echo view('menu');
		echo view('t_duser');
		echo view('footer');
	}else{
		return redirect()->to('home/login');
	}
	}

	public function aksi_t_duser()
	{
		$model = new M_clean();
		$a = $this->request->getPost('username');
		$b = $this->request->getPost('password');
		$c = $this->request->getPost('no_hp');
		$d = $this->request->getPost('level');
		$e = $this->request->getPost('email');
		
		$isi = array(

					'username' => $a,
					'password' => $b,
					'no_hp' => $c,
					'level' => $d,
					'email' => $e
					
		);
		
		$model->tambah('tb_user', $isi);
		return redirect()->to('Home/data_user');

	}

	public function e_duser($id)
	{
		if (session()->get('level')>0) {
		$model = new M_clean();
		$where=array('id_user'=>$id);
		
		$data['satu']=$model->getWhere('tb_user', $where);

		

		echo view ('header');
		echo view ('menu');
		echo view('e_duser', $data);
		echo view('footer');
	
    }else{
		return redirect()->to('home/login');
	}
	}

	public function aksi_e_duser()
	{
		$model = new M_clean();
		$a = $this->request->getPost('username');
		$b = $this->request->getPost('password');
		$c = $this->request->getPost('no_hp');
		$d = $this->request->getPost('level');
		$e = $this->request->getPost('email');
		$id = $this->request->getPost('id');
		
		$where = array('id_user'=>$id);

		$isi = array(

					'username' => $a,
					'password' => $b,
					'no_hp' => $c,
					'level' => $d,
					'email' => $e
		);

		$model->edit('tb_user', $isi, $where);
		//  print_r($isi);
		return redirect()->to('home/data_user');

	}

	public function hapus_duser($id){
		$model = new M_clean();
		$where = array('id_user'=>$id);
		$model->hapus('tb_user',$where);
		
		return redirect()->to('Home/data_user');
	}

	public function data_kost(){
		if (session()->get('level')>0) {
			$model = new M_clean();  
			$data['erwin']=$model->tampil('tb_kost');
        
        echo view('header');
		echo view('menu');
		echo view('data_kost',$data);
        echo view('footer');
	
	}else{
		return redirect()->to('home/login');
	}
    }

	public function t_dkost()
	{
		if (session()->get('level')>0) {
		$model = new M_clean();
		echo view ('header');
		echo view('menu');
		echo view('t_dkost');
		echo view('footer');
	}else{
		return redirect()->to('home/login');
	}
	}

	public function aksi_t_dkost()
	{
		$model = new M_clean();
		$a = $this->request->getPost('durasi');
		$b = $this->request->getPost('harga');
		
		$isi = array(

					'durasi' => $a,
					'harga' => $b
					
		);
		
		$model->tambah('tb_kost', $isi);
		return redirect()->to('Home/data_kost');

	}

	public function hapus_dkost($id){
		$model = new M_clean();
		$where = array('id_kost'=>$id);
		$model->hapus('tb_kost',$where);
		
		return redirect()->to('Home/data_kost');
	}

	public function e_dkost($id)
	{
		if (session()->get('level')>0) {
		$model = new M_clean();
		$where=array('id_kost'=>$id);
		
		$data['satu']=$model->getWhere('tb_kost', $where);

		

		echo view ('header');
		echo view ('menu');
		echo view('e_dkost', $data);
		echo view('footer');
	
    }else{
		return redirect()->to('home/login');
	}
	}

	public function aksi_e_dkost()
	{
		$model = new M_clean();
		$a = $this->request->getPost('durasi');
		$b = $this->request->getPost('harga');
		$id = $this->request->getPost('id');
		
		$where = array('id_kost'=>$id);

		$isi = array(

					'durasi' => $a,
					'harga' => $b
		);

		$model->edit('tb_kost', $isi, $where);
		//  print_r($isi);
		return redirect()->to('home/data_kost');

	}

	public function data_rumah(){
		if (session()->get('level')>0) {
			$model = new M_clean();  
			$data['erwin']=$model->tampil('tb_rumah');
        
        echo view('header');
		echo view('menu');
		echo view('data_rumah',$data);
        echo view('footer');
	
	}else{
		return redirect()->to('home/login');
	}
    }

	public function t_drumah()
	{
		if (session()->get('level')>0) {
		$model = new M_clean();
		echo view ('header');
		echo view('menu');
		echo view('t_drumah');
		echo view('footer');
	}else{
		return redirect()->to('home/login');
	}
	}

	public function aksi_t_drumah()
	{
		$model = new M_clean();
		$a = $this->request->getPost('durasi');
		$b = $this->request->getPost('harga');
		
		$isi = array(

					'durasi' => $a,
					'harga' => $b
					
		);
		
		$model->tambah('tb_rumah', $isi);
		return redirect()->to('Home/data_rumah');

	}

	public function hapus_drumah($id){
		$model = new M_clean();
		$where = array('id_rumah'=>$id);
		$model->hapus('tb_rumah',$where);
		
		return redirect()->to('Home/data_rumah');
	}

	public function e_drumah($id)
	{
		if (session()->get('level')>0) {
		$model = new M_clean();
		$where=array('id_rumah'=>$id);
		
		$data['satu']=$model->getWhere('tb_rumah', $where);

		

		echo view ('header');
		echo view ('menu');
		echo view('e_drumah', $data);
		echo view('footer');
	
    }else{
		return redirect()->to('home/login');
	}
	}

	public function aksi_e_drumah()
	{
		$model = new M_clean();
		$a = $this->request->getPost('durasi');
		$b = $this->request->getPost('harga');
		$id = $this->request->getPost('id');
		
		$where = array('id_rumah'=>$id);

		$isi = array(

					'durasi' => $a,
					'harga' => $b
		);

		$model->edit('tb_rumah', $isi, $where);
		//  print_r($isi);
		return redirect()->to('home/data_rumah');

	}

	public function data_kantor(){
		if (session()->get('level')>0) {
			$model = new M_clean();  
			$data['erwin']=$model->tampil('tb_kantor');
        
        echo view('header');
		echo view('menu');
		echo view('data_kantor',$data);
        echo view('footer');
	
	}else{
		return redirect()->to('home/login');
	}
    }

	public function t_dkantor()
	{
		if (session()->get('level')>0) {
		$model = new M_clean();
		echo view ('header');
		echo view('menu');
		echo view('t_dkantor');
		echo view('footer');
	}else{
		return redirect()->to('home/login');
	}
	}

	public function aksi_t_dkantor()
	{
		$model = new M_clean();
		$a = $this->request->getPost('durasi');
		$b = $this->request->getPost('harga');
		
		$isi = array(

					'durasi' => $a,
					'harga' => $b
					
		);
		
		$model->tambah('tb_kantor', $isi);
		return redirect()->to('Home/data_kantor');

	}

	public function hapus_dkantor($id){
		$model = new M_clean();
		$where = array('id_kantor'=>$id);
		$model->hapus('tb_kantor',$where);
		
		return redirect()->to('Home/data_kantor');
	}

	public function e_dkantor($id)
	{
		if (session()->get('level')>0) {
		$model = new M_clean();
		$where=array('id_kantor'=>$id);
		
		$data['satu']=$model->getWhere('tb_kantor', $where);

		

		echo view ('header');
		echo view ('menu');
		echo view('e_dkantor', $data);
		echo view('footer');
	
    }else{
		return redirect()->to('home/login');
	}
	}

	public function aksi_e_dkantor()
	{
		$model = new M_clean();
		$a = $this->request->getPost('durasi');
		$b = $this->request->getPost('harga');
		$id = $this->request->getPost('id');
		
		$where = array('id_kantor'=>$id);

		$isi = array(

					'durasi' => $a,
					'harga' => $b
		);

		$model->edit('tb_kantor', $isi, $where);
		//  print_r($isi);
		return redirect()->to('home/data_kantor');

	}
	public function pembayaran()
	{
		if (session()->get('level')>0) {
		$model = new M_clean();
		$where=array('id_kost');
		
		$data['satu']=$model->getWhere('tb_kost', $where);

		

		echo view ('header');
		echo view ('menu');
		echo view('pembayaran', $data);
		echo view('footer');
	
    }else{
		return redirect()->to('home/login');
	}
	}

	public function aksi_pembayaran_kost()
	{
		$model = new M_clean();
		$id_user = session()->get('id_user');
		$b= $this->request->getPost('durasi');
		$c= $this->request->getPost('harga');
		$d= $this->request->getPost('tgl');
		$e= $this->request->getPost('kota');
		$f= $this->request->getPost('kecamatan');
		$g= $this->request->getPost('alamat');
		$h= $this->request->getPost('waktu');

		// $uploadedFile = $this->request->getFile('foto');
		// $foto = $uploadedFile->getName();

		$durasi_detik = strtotime($b) - strtotime('00:00:00');

		// Mengonversi waktu mulai menjadi detik
		$start_detik = strtotime($h);
	
		// Menghitung waktu akhir (start + durasi)
		$end_detik = $start_detik + $durasi_detik;
	
		// Mengonversi waktu akhir kembali ke format time
		$end = date('H:i', $end_detik);

		$isi = array(
			
			'id_user' => $id_user,
			'durasi' => $b,
			'total_harga' => $c,
			'tgl' => $d,
			'lokasi' => $e. ", ". $f. ", ". $g ,
			'start' => $h,
			'end' => $end,
			'menu_tempat' => 'Kost',
			'create_at'=> date('y,m,d H:i:s'),
			'waktu' => $d . ' ' . $end,
				);

		$id_order = $model->tambah('tb_order', $isi);

		$id_order = $model->insertID();
    // Memastikan bahwa id_order telah ditambahkan
    if ($id_order) {
        // Redirect dengan menyertakan id_order
        return redirect()->to('home/print/' .$id_order);
    } else {
        // Handle jika gagal menyimpan data
        // Misalnya, tampilkan pesan kesalahan atau redirect ke halaman lain
        return redirect()->to('menu_clean');
    }
		$model->tambah('tb_order', $isi);

		return redirect()->to('Home/menu_clean');

	}
	public function pembayaran_kantor()
	{
		if (session()->get('level')>0) {
		$model = new M_clean();
		$where=array('id_kantor');
		
		$data['satu']=$model->getWhere('tb_kantor', $where);

		

		echo view ('header');
		echo view ('menu');
		echo view('pembayaran_kantor', $data);
		echo view('footer');
	
    }else{
		return redirect()->to('home/login');
	}
	}
	public function aksi_pembayaran_kantor()
	{
		$model = new M_clean();
		$id_user = session()->get('id_user');
		$b= $this->request->getPost('durasi');
		$c= $this->request->getPost('harga');
		$d= $this->request->getPost('tgl');
		$e= $this->request->getPost('kota');
		$f= $this->request->getPost('kecamatan');
		$g= $this->request->getPost('alamat');
		$h= $this->request->getPost('waktu');

		// $uploadedFile = $this->request->getFile('foto');
		// $foto = $uploadedFile->getName();

		$durasi_detik = strtotime($b) - strtotime('00:00:00');

		// Mengonversi waktu mulai menjadi detik
		$start_detik = strtotime($h);
	
		// Menghitung waktu akhir (start + durasi)
		$end_detik = $start_detik + $durasi_detik;
	
		// Mengonversi waktu akhir kembali ke format time
		$end = date('H:i', $end_detik);

		$isi = array(
			
			'id_user' => $id_user,
			'durasi' => $b,
			'total_harga' => $c,
			'tgl' => $d,
			'lokasi' => $e. ", ". $f. ", ". $g ,
			'start' => $h,
			'end' => $end,
			'menu_tempat' => 'Kantor',
			'create_at'=> date('y,m,d H:i:s'),
			'waktu' => $d . ' ' . $end,
		
				);

		$id_order = $model->tambah('tb_order', $isi);

		$id_order = $model->insertID();
		// Memastikan bahwa id_order telah ditambahkan
		if ($id_order) {
			// Redirect dengan menyertakan id_order
			return redirect()->to('home/print/' .$id_order);
		} else {
			// Handle jika gagal menyimpan data
			// Misalnya, tampilkan pesan kesalahan atau redirect ke halaman lain
		}	
			
		$model->tambah('tb_order', $isi);

		return redirect()->to('Home/menu_clean');

	}
	public function pembayaran_rumah()
	{
		if (session()->get('level')>0) {
		$model = new M_clean();
		$where=array('id_rumah');
		
		$data['satu']=$model->getWhere('tb_rumah', $where);

		

		echo view ('header');
		echo view ('menu');
		echo view('pembayaran_rumah', $data);
		echo view('footer');
	
    }else{
		return redirect()->to('home/login');
	}
	}
	public function aksi_pembayaran_rumah()
	{
		$model = new M_clean();
		$id_user = session()->get('id_user');
		$b= $this->request->getPost('durasi');
		$c= $this->request->getPost('harga');
		$d= $this->request->getPost('tgl');
		$e= $this->request->getPost('kota');
		$f= $this->request->getPost('kecamatan');
		$g= $this->request->getPost('alamat');
		$h= $this->request->getPost('waktu');

		// $uploadedFile = $this->request->getFile('foto');
		// $foto = $uploadedFile->getName();

		$durasi_detik = strtotime($b) - strtotime('00:00:00');

		// Mengonversi waktu mulai menjadi detik
		$start_detik = strtotime($h);
	
		// Menghitung waktu akhir (start + durasi)
		$end_detik = $start_detik + $durasi_detik;
	
		// Mengonversi waktu akhir kembali ke format time
		$end = date('H:i', $end_detik);

		$isi = array(
			
			'id_user' => $id_user,
			'durasi' => $b,
			'total_harga' => $c,
			'tgl' => $d,
			'lokasi' => $e. ", ". $f. ", ". $g ,
			'start' => $h,
			'end' => $end,
			'menu_tempat' => 'Rumah',
			'create_at'=> date('y,m,d H:i:s'),
			'waktu' => $d . ' ' . $end,
			
				);

		$id_order = $model->tambah('tb_order', $isi);

		$id_order = $model->insertID();
		// Memastikan bahwa id_order telah ditambahkan
		if ($id_order) {
			// Redirect dengan menyertakan id_order
			return redirect()->to('home/print/' .$id_order);
		} else {
			// Handle jika gagal menyimpan data
			// Misalnya, tampilkan pesan kesalahan atau redirect ke halaman lain
		}	

		$model->tambah('tb_order', $isi);

		return redirect()->to('Home/menu_clean');

	}

	public function profile()
	{
			$model = new M_clean();

            $where = ['id_user' => session()->get('id_user')];
            $data['satu'] = $model->getWhere('tb_user', $where);

            // Tampilkan view dengan data yang telah diperoleh
		echo view('header');
            echo view('profile', $data); 
            echo view('footer');
	}
	public function e_foto()
{
	if(session()->get('level') > 0){
		$model = new M_clean;
		$where = array('id_user' => session()->get('id'));
		$data['user'] = $model->getWhere('tb_user', $where);

		echo view('header');
		echo view('menu',$data);
		echo view('e_foto',$data); 
		echo view('footer');
    } else {
        return redirect()->to('home/login');
    }
	}
	
	public function aksi_e_profile() {
		$model = new M_clean();
		
		$a= $this->request->getPost('username');
		$b= $this->request->getPost('no_hp');
		$c= $this->request->getPost('email');

        $where = ['id_user' => session()->get('id_user')];
       

		$isi = array(
		
			'username' => $a,
			'no_hp' => $b,
			'email' => $c,
		
				);

		$model->edit('tb_user', $isi, $where);

		return redirect()->to('Home/profile');
	}

	public function aksi_ubah_foto()
{
	if ($this->request->getFile('img')) {

		$file = $this->request->getFile('img');
		$newFileName = $file->getRandomName(); 
		$file->move(ROOTPATH . 'public/img', $newFileName);

		$userModel = new M_clean(); 
		$userId = array('id_user' => session()->get('id_user'));
		$userData = ['foto' => $newFileName];
		$userModel->edit('tb_user', $userData,$userId);
		return redirect()->to('home/profile');
	} else {
		return redirect()->to('home/profile');
}
	}
	public function print($id_order)
{
    require_once FCPATH . 'tcpdf/tcpdf.php';
    $model = new M_Clean();
    
    // Mengambil data tb_order berdasarkan id_order
    $data['wkwk'] = $model->getWhere('tb_order', array('id_order' => $id_order));

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    // Set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Your Name');
    $pdf->SetTitle('Your Title');
    $pdf->SetSubject('Your Subject');
    $pdf->SetKeywords('Your Keywords');
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    // Add a page
    $pdf->AddPage();

    // Set some content to print
    $html = view('print', $data); // Ganti 'your_pdf_view' dengan nama view Anda
    $pdf->writeHTML($html, true, false, true, false, '');
    
    // Output PDF ke browser
    $pdf->Output('nota.pdf', 'D'); // 'D' untuk langsung mengunduh
	
    // Hentikan eksekusi lebih lanjut
    exit();

	
}
public function print_do()
{
    require_once FCPATH . 'tcpdf/tcpdf.php';
    $model = new M_Clean();
    
	$a = $this->request->getPost('awal');
	$b = $this->request->getPost('akhir');
    // Mengambil data tb_order berdasarkan id_order
    $data['wkwk'] = $model->join('tb_order', 'tb_user', 'tb_order.id_user = tb_user.id_user');

	$data['wkwk'] = $model->cari2('tb_order','tb_user','tb_order.id_user=tb_user.id_user', $a,$b);

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    // Set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Your Name');
    $pdf->SetTitle('Your Title');
    $pdf->SetSubject('Your Subject');
    $pdf->SetKeywords('Your Keywords');
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    // Add a page
    $pdf->AddPage();

    // Set some content to print
    $html = view('print_do', $data); // Ganti 'your_pdf_view' dengan nama view Anda
    $pdf->writeHTML($html, true, false, true, false, '');
    
    // Output PDF ke browser
    $pdf->Output('Laporan Order.pdf', 'D'); // 'D' untuk langsung mengunduh
	
    // Hentikan eksekusi lebih lanjut
    exit();

	
}
public function data_order(){
	if (session()->get('level')>0) {
		
    
    	$model = new M_clean();

		$data['erwin']=$model->tampil('tb_order');
	
		echo view('header');
		echo view('menu');
		echo view('data_order',$data);
		echo view('footer');

}else{
	return redirect()->to('home/login');
}
}
public function history_order(){
	if (session()->get('level')>0) {
		
    
    	$model = new M_clean();
		$id_user = session()->get('id_user');
		$data['erwin']=$model->tampil_sesuai_join('tb_order', 'tb_user', 'tb_order.id_user=tb_user.id_user', $id_user);
	
		echo view('header');
		echo view('menu');
		echo view('history_order',$data);
		echo view('footer');

}else{
	return redirect()->to('home/login');
}
}

public function laporan()
	{
		if (session()->get('level')>0) {
			$model = new M_clean();
		
		echo view ('header');
		echo view ('menu');
		echo view('laporan');
		echo view('footer');
	}else{
		return redirect()->to('home/login');
	}
	}

	public function aksi_printb_laporan() {
		$model = new M_clean();

		$a = $this->request->getPost('awal');
		$b = $this->request->getPost('akhir');
		
		$data['wkwk'] = $model->cari2('tb_order','tb_user','tb_order.id_user=tb_user.id_user', $a,$b);
		
		echo view('printb_laporan', $data);
	}

	public function PrintToExcel()
    {
		$model = new M_clean();
        // Menerima input tanggal dari form
        $awal = $this->request->getPost('awal');
        $akhir = $this->request->getPost('akhir');

        // Mengambil data dari model
        $data = $model->cari2('tb_order', 'tb_user', 'tb_order.id_user = tb_user.id_user', $awal, $akhir);

        // Memanggil method generateExcel untuk membuat file Excel
        $this->generateExcel($data);
    }

    public function generateExcel($data)
{
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Set header untuk kolom
    $sheet->setCellValue('A1', 'Nama Pemesan');
    $sheet->setCellValue('B1', 'Lokasi');
    $sheet->setCellValue('C1', 'Menu Tempat');
    $sheet->setCellValue('D1', 'Tanggal');
    $sheet->setCellValue('E1', 'Durasi');
    $sheet->setCellValue('F1', 'Pengerjaan');
    $sheet->setCellValue('G1', 'Harga');

    // Mengisi data ke dalam sheet
    $rowIndex = 2; // Mulai dari baris 2
    foreach ($data as $row) {
        $sheet->setCellValue('A' . $rowIndex, $row->username);
        $sheet->setCellValue('B' . $rowIndex, $row->lokasi);
        $sheet->setCellValue('C' . $rowIndex, $row->menu_tempat);
        $sheet->setCellValue('D' . $rowIndex, $row->tgl);
        $sheet->setCellValue('E' . $rowIndex, $row->durasi);
        $sheet->setCellValue('F' . $rowIndex, $row->waktu);
        $sheet->setCellValue('G' . $rowIndex, $row->total_harga);

        $rowIndex++;
    }

    // Hitung total harga
    $total = "=SUM(G2:G" . ($rowIndex - 1) . ")";

    // Tulis label "Total Harga" di bawah kolom data A-F
    $sheet->setCellValue('F' . $rowIndex, 'Total Harga');

    // Tulis rumus total harga di bawah data G
    $sheet->setCellValue('G' . $rowIndex, $total);

    // Mengatur lebar kolom
    $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(20);
    $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(35);
    $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(15);
    $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(15);
    $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(15);
    $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(20);
    $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(15);

    // Menambahkan border
    $lastColumn = $sheet->getHighestColumn();
    $lastRow = $sheet->getHighestRow();
    $styleArray = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            ],
        ],
    ];
    $sheet->getStyle('A1:' . $lastColumn . $lastRow)->applyFromArray($styleArray);

    // Setelah mengisi data, simpan spreadsheet ke dalam file atau kirim ke browser
    $writer = new Xlsx($spreadsheet);
    $filename = 'Laporan_Order.xlsx';
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');
    $writer->save('php://output');
}



}







