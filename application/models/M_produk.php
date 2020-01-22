<?php
defined('BASEPATH') or exit ('No direct script allowed');

class M_produk extends CI_Model{

	private $_table = "produk";
	public $produk_id;
	public $barcode;
	public $namaproduk;
	public $tipe_produk;
	public $gol_margin;
	public $gol_produk;
	public $min_stok;
	public $rak;
	public $pemakaian_obat;
	public $stok_awal;
	public $expirate_date;
	public $batch_no;
	public $status_aktif;
	public $keterangan;
	//-------------------
	public $farmakologi;
	public $kategori;
	public $sub_kategori;
	//-------------------
	public $kandungan;
	public $indikasi;
	public $kontra_indikasi;
	public $efek_samping;
	public $dosis;
	public $aturan_pakai;
	public $fda_pregnancy;
	public $fda_latency;
	//--------------------
	public $jenis_harga;
	public $HNA;
	public $margin_resep;
	public $margin_non_resep;
	public $harga_jual;
	public $harga_jual_non_resep;
	//------------------------
	public $kemasan_dasar;
	public $isi_kemasan_dasar;
	public $kemasan2;
	public $isi_kemasan2;
	public $kemasan3;
	public $isi_kemasan3;

	public function rules()
    {
        return [
            ['field' => 'barcode',
            'label' => 'Barcode',
            'rules' => 'required'],
            
            ['field' => 'namaproduk',
            'label' => 'Nama Produk',
            'rules' => 'required']
        ];
    }

    public function save()
    {
        $post = $this->input->post();
        $this->barcode = $post["barcode"];
        $this->namaproduk = $post["namaproduk"];
        $this->tipe_produk = $post["tipeproduk"];  
        $this->gol_margin = $post["golonganmargin"];
        $this->gol_produk = $post["golonganproduk"];
        $this->min_stok = $post["minstok"];
        $this->rak = $post["rak"];
        $this->pemakaian_obat =$post["pemakaianobat"];
        $this->stok_awal =$post["stokawal"];
        $this->expirate_date = $post["expiratedate"];
        $this->batch_no = $post["nobatch"];
        $this->status_aktif = $post["statusobat"];
        $this->keterangan= $post["keterangan"];
        $this->farmakologi = $post["farmakologi"];
        $this->kategori =$post["kategori"];
        $this->sub_kategori = $post["subkategori"];   
        $this->kandungan = $post["kandungannya"];
        $this->indikasi = $post["indikasinya"];
        $this->kontra_indikasi = $post['kontraindikasinya'];
        $this->efek_samping = $post['efeksampingannya'];
        $this->dosis =$post["dosisnya"];
        $this->efek_samping = $post["aturanpakainya"];
        $this->fda_pregnancy = $post["fdapregnancy"];
        $this->fda_latency = $post["fdalatency"];  
        $this->kemasan_dasar = $post['kemasandasar'];
        $this->isi_kemasan_dasar = $post['isi1'];
        $this->kemasan2 = $post['kemasan2'];
        $this->isi_kemasan2 = $post['isi2'];
        $this->kemasan3 = $post['kemasan3'];
        $this->isi_kemasan3 = $post['isi3'];

        $data = array(
    		'barcode' =>$this->barcode,
    		'namaproduk' => $this->namaproduk,
    		'tipeproduk' => $this->tipe_produk,
    		'golonganmargin' => $this->gol_margin,
    		'golonganproduk' => $this->gol_produk,
    		'minstok' => $this->min_stok,
    		'rak' =>$this->rak,
    		'pemakaianobat' => $this->pemakaian_obat,
    		'stokawal' => $this->stok_awal,
    		'expiratedate' => $this->expirate_date,
    		'nobatch' => $this->batch_no,
    		'statusobat' => $this->status_aktif,
    		'keterangan' => $this->keterangan,
    		'farmakologi' => $this->farmakologi,
    		'kategori' => $this->kategori,
    		'subkategori' => $this->sub_kategori,
    		'kandungan' => $this->kandungan,
    		'indikasi' => $this->indikasi,
    		'kontraindikasi' => $this->kontra_indikasi,
    		'efeksamping' => $this->efek_samping,
    		'dosis' => $this->dosis,
    		'aturanpakai' => $this->efek_samping,
    		'fdapregnancy' => $this->fda_pregnancy,
    		'fdalatency' => $this->fda_latency,
    		'kemasandasar' => $this->kemasan_dasar,
    		'isidasar' => $this->isi_kemasan_dasar,
    		'kemasan2' => $this->kemasan2,
    		'isi2' => $this->isi_kemasan2,
    		'kemasan3' => $this->kemasan3,
    		'isi3' => $this->isi_kemasan3
  		);
        $this->db->insert($this->_table, $data);
        //return $this->db->insert($this->_table, $this);
    }

    public function getProduk($id=null) {
            if($id === null) {
                return $this->db->get('produk')->result_array(); 
            } else {
                return $this->db->get_where('produk', ['produk_id' => $id])->result_array();

            }
    }

    public function getAllProduk(){
    	return $this->db->get('produk')->result();
    }

}
