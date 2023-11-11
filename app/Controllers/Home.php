<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function list(): string
  {
    $mahasiswa = $this->MahasiswaModel->getAllMahasiswa();
    $data = [
      "title" => "Home",
      "mahasiswa" => $mahasiswa
    ];
    return view('list', $data);
  }

  public function insert(): string
  {

    return view('daftar');
  }

  public function index(): string
  {

    return view('index');
  }

  public function save()
  {

    $nama = $this->request->getVar('nama');
    $npm = $this->request->getVar('npm');
    $prodi = $this->request->getVar('prodi');
    $this->MahasiswaModel->save([
      'nama' => $nama,
      'npm' => $npm,
      'prodi' => $prodi
    ]);
    session()->setFlashdata('success', true);
    return redirect()->to('/list');
  }
}