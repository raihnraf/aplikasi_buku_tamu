<?php
namespace App\Controllers;
use App\Models\TransaksiModel;

class Transaksi extends BaseController
{
    public function index(){
        $transaksi_model = new TransaksiModel();
        $all_data_transaksi = $transaksi_model->findAll();
        return view('transaksi', ['all_data_transaksi' => $all_data_transaksi]);
    }

    public function add_data_transaksi(){
        return view('add_data_transaksi');
    }

    public function proses_add_transaksi(){
        $transaksi_model = new TransaksiModel();
        $transaksi_model->insert($this->request->getpost());
        return redirect()->to(base_url('transaksi'));
    }

    public function edit_data_transaksi($id = false){
        $transaksi_model = new TransaksiModel();
        $data_transaksi = $transaksi_model->find($id);
        return view('edit_data_transaksi' , ['data_transaksi' => $data_transaksi]);
    }

    public function proses_edit_transaksi(){
        $transaksi_model = new TransaksiModel();
        $transaksi_model->update($this->request->getPost('id_transaksi') , $this->request->getPost());
        return redirect()->to(base_url('transaksi'));
    }

    public function delete_data_transaksi($id = false){
        $transaksi_model = new TransaksiModel();
        $transaksi_model->delete($id);
        return redirect()->to(base_url('transaksi'));
    }
}
