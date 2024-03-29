<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Init\Dashboard\Models\Users;
use Phalcon\Init\Dashboard\Models\Mahasiswa;
use Phalcon\Init\Dashboard\Models\Perusahaan;
use Phalcon\Init\Dashboard\Models\Pekerjaan;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;

class DashboardController extends Controller
{

    // public function beforeExecuteRoute(Dispatcher $dis)
    // {
    //     // var_dump();die();
    //     // if(!$this->session->has('auth') && $dis->getactionName()!='index') $this->response->redirect('/');
    // }

    public function indexAction()
    {
        $this->view->pick('dashboard/index');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);
        $pekerjaan = Pekerjaan::find();
        $this->view->pekerjaan = $pekerjaan;
    }

    public function daftarmhsAction()
    {
        $this->view->pick('dashboard/daftarmhs');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);
    }

    public function daftarperAction()
    {
        $this->view->pick('dashboard/daftarper');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);
    }

    public function akunAction()
    {
        $this->view->pick('dashboard/akun');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);
    }

    public function masukmhsAction()
    {
        $this->view->pick('dashboard/masukmhs');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);
    }
    
    public function masukperAction()
    {
        $this->view->pick('dashboard/masukper');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);
    }

    public function userAction()
    {
        
        $this->view->pick('dashboard/user');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);
    }

    public function perusahaanAction()
    {
        
        $this->view->pick('dashboard/perusahaan');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);
    }

    public function profilAction()
    {
        // if ($this->session->has('auth')) {
        //     $session_user = $this->session->get("id");
        //     $akun = Users::findFirstById($session_user);

        //     $this->view->akun = $akun;
        // }
        
        $this->view->pick('dashboard/profil');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);

    }

    public function editakunAction()
    {
        $this->view->pick('dashboard/editakun');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);

    }

    public function editakun1Action()
    {
        $id = $this->request->getPost("id");
        $users = Users::findFirstById($id);
        $users->username = $this->request->getPost("username");
        $users->email = $this->request->getPost("email");
        $users->password = $this->request->getPost("password");
        $users->kota = $this->request->getPost("kota");
        if (!$users->save()) 
        {
            $this->flashSession->error('Data gagal diperbarui. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
            $this->response->redirect('/profil');
        }
        else
        {
            $this->flashSession->success('Data berhasil diperbarui <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
            $this->response->redirect('/profil');
        }
    }

    public function editppdbAction()
    {
        $this->view->pick('dashboard/editppdb');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);

    }

    public function editppdb1Action()
    {
        $id = $this->request->getPost("id");
        $users = Users::findFirstById($id);
        $users->nisn = $this->request->getPost("nisn");
        $users->sekolah = $this->request->getPost("sekolah");
        $users->skhun = $this->request->getPost("skhun");
        $users->nun = $this->request->getPost("nun");
        $users->ipa = $this->request->getPost("ipa");
        $users->ind = $this->request->getPost("ind");
        $users->mtk = $this->request->getPost("mtk");
        $users->eng = $this->request->getPost("eng");
        if (!$users->save()) 
        {
            $this->flashSession->error('Data gagal diperbarui. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
            $this->response->redirect('/ppdb');
        }
        else
        {
            $this->flashSession->success('Data berhasil diperbarui <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
            $this->response->redirect('/ppdb');
        }
    }

    public function kpAction()
    {
        $this->view->pick('dashboard/kp');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);

        $pekerjaan = Pekerjaan::find();
        $this->view->pekerjaan = $pekerjaan;
    }

    public function kpambilAction($id_pek)
    {
        $this->view->pick('dashboard/kpambil');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);

        $pekerjaan = Pekerjaan::find();
        $this->view->pekerjaan = $pekerjaan;
        $mahasiswa = Mahasiswa::find();
        $this->view->mahasiswa = $mahasiswa;

        $pek = Pekerjaan::findFirst($id_pek);
        $this->view->id_pek = $pek->id_pek;
        $this->view->judul = $pek->judul;
        $this->view->posisi = $pek->posisi;
        $this->view->keterangan = $pek->keterangan;
        $this->view->status = $pek->status;
        $this->view->id_per = $pek->id_per;

        $mhs = Mahasiswa::findFirst($id_mhs);
        $this->view->id_mhs = $mhs->id_mhs;
    }

    public function kpambillagiAction()
    {
    //   $pek = Pekerjaan::findFirst($id_pek);
    //   $this->view->id_mhs = $pek->id_mhs;
    //   $mhs = Mahasiswa::findFirst($id_mhs);
    //   $this->view->sudahambil = $mhs->sudahambil;

    //   $users->username = $this->request->getPost("username");
    //   $users->email = $this->request->getPost("email");
    //   $users->password = $this->request->getPost("password");
    //   $users->kota = $this->request->getPost("kota");
      $pek = $this->request->getPost("id_pek");
      $pek = Pekerjaan::findFirst($id_pek);
      $pek->status = $this->request->getPost("status");
      $pek->id_mhs = $this->request->getPost("id_mhs");

      $mhs = $this->request->getPost("id_mhs");
      $mhs = Mahasiswa::findFirst($id_mhs);
      $mhs->sudahambil = $this->request->getPost("sudahambil");


      if (!$pek->save() || !$mhs->save()) 
      {
          $this->flashSession->error('Data gagal diperbarui. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
          $this->response->redirect('/kp');
      }
      else
      {
          $this->flashSession->success('Data berhasil diperbarui <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
          $this->response->redirect('/kp');
      }
    }

    public function kpbatalAction($id_pek)
    {
        $this->view->pick('dashboard/kpbatal');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);

        $pekerjaan = Pekerjaan::find();
        $this->view->pekerjaan = $pekerjaan;
        $mahasiswa = Mahasiswa::find();
        $this->view->mahasiswa = $mahasiswa;

        $pek = Pekerjaan::findFirst($id_pek);
        $this->view->id_pek = $pek->id_pek;
        $this->view->judul = $pek->judul;
        $this->view->posisi = $pek->posisi;
        $this->view->keterangan = $pek->keterangan;
        $this->view->status = $pek->status;
        $this->view->id_per = $pek->id_per;

        $mhs = Mahasiswa::findFirst($id_mhs);
        $this->view->id_mhs = $mhs->id_mhs;
    }

    public function kpbatallagiAction()
    {
    //   $pek = Pekerjaan::findFirst($id_pek);
    //   $this->view->id_mhs = $pek->id_mhs;
    //   $mhs = Mahasiswa::findFirst($id_mhs);
    //   $this->view->sudahambil = $mhs->sudahambil;

    //   $users->username = $this->request->getPost("username");
    //   $users->email = $this->request->getPost("email");
    //   $users->password = $this->request->getPost("password");
    //   $users->kota = $this->request->getPost("kota");
      $pek = $this->request->getPost("id_pek");
      $pek = Pekerjaan::findFirst($id_pek);
      $pek->status = $this->request->getPost("status");
      $pek->id_mhs = $this->request->getPost("id_mhs");

      $mhs = $this->request->getPost("id_mhs");
      $mhs = Mahasiswa::findFirst($id_mhs);
      $mhs->sudahambil = $this->request->getPost("sudahambil");


      if (!$pek->save() || !$mhs->save()) 
      {
          $this->flashSession->error('Data gagal diperbarui. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
          $this->response->redirect('/kp');
      }
      else
      {
          $this->flashSession->success('Data berhasil diperbarui <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
          $this->response->redirect('/kp');
      }
    }

    public function ppdb2019Action()
    {
        $this->view->pick('dashboard/ppdb2019');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);
        
        $users = Users::find();
        $this->view->users = $users;
    }

    public function storeAction()
    {
        $user = new Users();
        $request = new Request();
        $user->nisn = $request->getPost('nisn');
        $user->username = $request->getPost('username');
        $user->email = $request->getPost('email');
        $user->password = $request->getPost('password');
        $user->sekolah = $request->getPost('sekolah');
        $user->kota = $request->getPost('kota');
        $user->hp = $request->getPost('hp');
        $user->skhun = $request->getPost('skhun');
        $user->nun = $request->getPost('nun');
        $user->ipa = $request->getPost('ipa');
        $user->ind = $request->getPost('ind');
        $user->mtk = $request->getPost('mtk');
        $user->eng = $request->getPost('eng');
        $user->nrp = $request->getPost('nrp');
        $user->id_pek = $request->getPost('id_pek');
    	$user->save();
        $this->response->redirect('/akun/masuk/mahasiswa');
        $this->flashSession->success('Berhasil mendaftar. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
    }

    public function registerperusahaanAction()
    {
        $user = new Perusahaan();
        $request = new Request();
        $user->email = $request->getPost('email');
        $user->password = $request->getPost('password');
        $user->nama = $request->getPost('nama');
        $user->alamat = $request->getPost('alamat');
    	$user->save();
        $this->response->redirect('/akun/masuk/perusahaan');
        $this->flashSession->success('Berhasil mendaftar. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
    }

    public function registermahasiswaAction()
    {
        $user = new Mahasiswa();
        $request = new Request();
        $user->email = $request->getPost('email');
        $user->password = $request->getPost('password');
        $user->nama = $request->getPost('nama');
        $user->nrp = $request->getPost('nrp');
        $user->sudahambil = $request->getPost('sudahambil');
        $user->save();
        // var_dump($user->getMessages());die();
        $this->response->redirect('/akun/masuk/mahasiswa');
        $this->flashSession->success('Berhasil mendaftar. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
    }

    public function pekerjaanAction()
    {
        $this->view->pick('dashboard/pekerjaan');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);

        $pekerjaan = Pekerjaan::find();
        $this->view->pekerjaan = $pekerjaan;
    }

    public function pekerjaantambahAction()
    {
        $this->view->pick('dashboard/pekerjaantambah');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);

    }

    public function tambahpekerjaanAction()
    {
        $user = new Pekerjaan();
        $request = new Request();
        $user->judul = $request->getPost('judul');
        $user->posisi = $request->getPost('posisi');
        $user->keterangan = $request->getPost('keterangan');
        $user->status = $request->getPost('status');
        $user->id_per = $request->getPost('id_per');
        $user->id_mhs = $request->getPost('id_mhs');
        $user->save();
        // var_dump($user->getMessages());die();
        $this->response->redirect('/perusahaan/pekerjaan');
        $this->flashSession->success('Berhasil menambahkan pekerjaan. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
    }

    public function loginAction()
    {
        $request = new Request();
        $username = $request->getPost('em');
        $user = Users::findFirst("email='$username'");
        $pass = $request->getPost('pw');
        $users = Users::find();
        // $this->view->users = $users;
        // var_dump($pass);die();
        if($user)
        {
            if($user->password == $pass){
                $this->session->set('auth',[
                    'id' => $user->id,
                    'username' => $user->username,
                    'email' => $user->email,
                    'kota' => $user->kota,
                    'password' => $user->password,
                    'nisn' => $user->nisn,
                    'sekolah' => $user->sekolah,
                    'skhun' => $user->skhun,
                    'nun' => $user->nun,
                    'ipa' => $user->ipa,
                    'ind' => $user->ind,
                    'mtk' => $user->mtk,
                    'eng' => $user->eng
                ]);
                
                $this->response->redirect('/beranda');
                // var_dump("masuk");die();
            }
            else{
                $this->flashSession->error('Password salah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
                $this->response->redirect('/akun/masuk/mahasiswa');
            }
        }
        else{
            $this->flashSession->error('Akun tidak ditemukan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
            $this->response->redirect('/akun/masuk/mahasiswa');
        }
        
    }

    public function loginperusahaanAction()
    {
        $request = new Request();
        $username = $request->getPost('em');
        $user = Perusahaan::findFirst("email='$username'");
        $pass = $request->getPost('pw');
        $users = Perusahaan::find();
        // $this->view->users = $users;
        // var_dump($pass);die();
        if($user)
        {
            if($user->password == $pass){
                $this->session->set('auth',[
                    'id_per' => $user->id_per,
                    'email' => $user->email,
                    'password' => $user->password,
                    'nama' => $user->nama,
                    'alamat' => $user->alamat

                ]);
                
                $this->response->redirect('/perusahaan');
                // var_dump("masuk");die();
            }
            else{
                $this->flashSession->error('Password salah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
                $this->response->redirect('/akun/masuk/perusahaan');
            }
        }
        else{
            $this->flashSession->error('Akun tidak ditemukan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
            $this->response->redirect('/akun/masuk/perusahaan');
        }
        
    }

    public function loginmahasiswaAction()
    {
        $request = new Request();
        $username = $request->getPost('em');
        $user = Mahasiswa::findFirst("email='$username'");
        $pass = $request->getPost('pw');
        $users = Mahasiswa::find();
        // $this->view->users = $users;
        // var_dump($pass);die();
        if($user)
        {
            if($user->password == $pass){
                $this->session->set('auth',[
                    'id_mhs' => $user->id_mhs,
                    'email' => $user->email,
                    'password' => $user->password,
                    'nama' => $user->nama,
                    'nrp' => $user->nrp,
                    'sudahambil' => $user->sudahambil

                ]);
                
                $this->response->redirect('/beranda');
                // var_dump("masuk");die();
            }
            else{
                $this->flashSession->error('Password salah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
                $this->response->redirect('/akun/masuk/mahasiswa');
            }
        }
        else{
            $this->flashSession->error('Akun tidak ditemukan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
            $this->response->redirect('/akun/masuk/mahasiswa');
        }
        
    }

    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect('/');
    }

    public function pekerjaanhapusAction()
    {
        $this->view->pick('dashboard/pekerjaanhapus');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);

    }

    public function hapusdataAction()
    {
        $pekerjaan = Pekerjaan::findFirstByid_pek($id_pek);
  
        if (!$pekerjaan->delete()) 
        {
            $this->flashSession->error('Gagal hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
            $this->response->redirect('/perusahaan/pekerjaan');
        }
        else
        {
            $this->flashSession->success('Berhasil hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
            $this->response->redirect('/perusahaan/pekerjaan');
        }
        // var_dump($user->getMessages());die();
    }

    public function navbarAction()
    {
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);

    }

    public function errorAction()
    {
        $this->view->pick('dashboard/error');
        $this->assets->addCss('//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false);
        $this->assets->addCss('//geniuskaranganyar.com/assets/extra/css/style.css', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/solid.js', false);
        $this->assets->addJs('//use.fontawesome.com/releases/v5.0.13/js/fontawesome.js', false);
        $this->assets->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', false);
        $this->assets->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false);
        $this->assets->addJs('//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false); 
        $this->assets->addJs('//geniuskaranganyar.com/assets/extra/js/style.js', false);
    }

    // PERUSAHAAN CONTROLLER

    // MAHASISWA CONTROLLER

}   