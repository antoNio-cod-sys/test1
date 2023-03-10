<?php

namespace App\Controllers;

use App\Models\PembeliModel;

class PembeliController extends BaseController{
        public function index(){
            $PembeliModelKontrol = new PembeliModel();
            $SemuaDataPembeli= $PembeliModelKontrol->findAll();
            return view('PembeliView',['SeluruhDataPembeli'=> $SemuaDataPembeli]);
        }

        public function TambahDataPembeli(){
            return view('TambahDataPembeliView');
        }

        public function ProseTambahPembeli(){
            $AmbilModel = new PembeliModel();
            $AmbilModel->insert($this->request->getPost());
            return redirect()->to(base_url('pembeli'));
        }

        public function EditDataPembeliController($id=false){
            $AmbilModel = new PembeliModel();
            $DataPembeli= $AmbilModel->find($id);
            return view('EditDataPembeliView',['DataSekarang'=>$DataPembeli]);
        }

        public function ProsesEditPembeli(){
            $AmbilModel = new PembeliModel();
            $AmbilModel->update($this->request->getPost('idEdit'),$this->request->getPost());
            return redirect()->to(base_url('pembeli'));
        }

        public function HapusDataPembeli($id=false){
            $AmbilModel = new PembeliModel();
            $AmbilModel->delete($id);
            return redirect()->to(base_url('pembeli'));
        }

        public function LihatDataPembeli($id=false){
            $AmbilModel = new PembeliModel();
            $DataDitampilkan = $AmbilModel->find($id);
            return view('DetailView',['DataDetail'=>$DataDitampilkan]); 
        }
}
?>