<!DOCTYPE html>
<html>
<?php 
//include('basehome/headdata.php'); 
include ('basehome/homeheadnavaside.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->

            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header" style="padding: 0.25rem 0.25rem">
                <h3 class="card-title">Data Produk</h3>
              </div>
              <div class="card-body" style="padding: 0.25rem"> 
                 <div class="row">  
                 <div class="col-4">
                  Barcode <input class="form-control form-control-sm" type="text" placeholder=" kode barcode produk">
                </div>
                 <div class="col-8">
                  Nama <input class="form-control form-control-sm" type="text" placeholder="nama produk">
                 </div>
                </div> 
                  <div class="row">
                  <div class="col-4">
                    Tipe Produk <br>
                        <select class="form-control form-control-sm">
                          <option>Obat</option>
                          <option>Jasa</option>
                        </select>   
                  </div>
                  <div class="col-4">
                    Golongan Margin <br>
                        <select class="form-control form-control-sm">
                          <option>Generik</option>
                          <option>HV</option>
                          <option>Paten Keras</option>
                          <option>Psiko & Narkotik</option>
                        </select>   
                  </div>
                  <div class="col-4">
                    Golongan Produk <br>
                        <select class="form-control form-control-sm">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>   
                  </div>
                </div>  <!-- end class row -->      
                  <div class="row">
                  <div class="col-4">
                    Min. Stok <br>
                        <input class="form-control form-control-sm" type="text" placeholder=" kode barcode produk">
                  </div>
                  <div class="col-4">
                    Rak <br>
                        <input class="form-control form-control-sm" type="text" placeholder=" kode barcode produk">
                  </div>
                  <div class="col-4">
                    Pemakaian Obat <br>
                        <select class="form-control form-control-sm">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>   
                  </div>
                </div>  <!-- end class row -->       
          
                <div class="row">
                  <div class="col-4">
                    Stok Awal <br>
                        <input class="form-control form-control-sm" type="text" placeholder=" kode barcode produk">
                  </div>
                  <div class="col-4">
                    Expirate Date <br>
                    <input type="text" class="form-control form-control-sm datepicker" />
                  </div>
                  <div class="col-4">
                    No Batch <br>
                        <input class="form-control form-control-sm" type="text" placeholder=" batch no">

                  </div>
                </div>  <!-- end class row -->
                                 <div class="row">  
                 <div class="col-4">
                  Status <br>
                        <select class="form-control form-control-sm">
                          <option>Aktif</option>
                          <option>Tidak Aktif</option>
                        </select>   
                </div>
                 <div class="col-8">
                  Keterangan <input class="form-control form-control-sm" type="text" placeholder="keterangan">
                 </div>
                </div> 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-info">
              <div class="card-header" style="padding: 0.25rem 0.25rem">
                <h3 class="card-title">Kemasan</h3>
              </div>
              <div class="card-body" style="padding: 0.25rem">
                <div class="row">
                  <div class="col-4">
                    Kemasan Dasar <br>
                        <select class="form-control form-control-sm">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>   
                  </div>
                  <div class="col-4">
                    Kemasan Lain <br>
                        <select class="form-control form-control-sm">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>   
                  </div>
                  <div class="col-4">
                    Kemasan Lain <br>
                        <select class="form-control form-control-sm">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>   
                  </div>
                </div>  <!-- end class row -->    
                <div class="row">  
                 <div class="col-4">
                  <input class="form-control form-control-sm" type="text" placeholder="isi">
                </div>
                 <div class="col-4">
                  <input class="form-control form-control-sm" type="text" placeholder="isi">
                 </div>
                 <div class="col-4">
                  <input class="form-control form-control-sm" type="text" placeholder="isi">
                 </div>
                </div> 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Horizontal Form -->
        </div>
          <div class="col-md-6">
            <!-- general form elements -->

            <!-- Form Element sizes -->
            <div class="card card-warning">
              <div class="card-header" style="padding: 0.25rem 0.25rem">
                <h3 class="card-title">Kategori Obat</h3>
              </div>
              <div class="card-body" style="padding: 0.25rem">       
              <!--         
                NAMA <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                NAMA <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                NAMA <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">    
                -->
                <div class="row">
                  <div class="col-4">
                    Farmakologi <br>
                        <select class="form-control form-control-sm">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>   
                  </div>
                  <div class="col-4">
                    Kategori <br>
                        <select class="form-control form-control-sm">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>   
                  </div>
                  <div class="col-4">
                    Sub Kategori <br>
                        <select class="form-control form-control-sm">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>   
                  </div>
                </div>  <!-- end class row -->               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-danger">
              <div class="card-header" style="padding: 0.25rem 0.25rem">
                <h3 class="card-title">Data Lain</h3>
              </div>
              <div class="card-body" style="padding: 0.25rem">
                <div class="row">
                  <div class="form-group">
                        Kandungan
                        <textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
                  </div>
                  <div class="form-group">
                        Indikasi
                        <textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
                  </div>
                  <div class="form-group">
                        Kontra Indikasi
                        <textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
                  </div>
                  <div class="form-group">
                        Efek Samping
                        <textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
                  </div>
              </div>
               <div class="row">
                  <div class="form-group">
                        Dosis
                        <textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
                  </div>
                  <div class="form-group">
                        Aturan Pakai
                        <textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                     <div class="form-group">
                        FDA Pregnancy<br>
                        <select class="form-control form-control-sm">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>   
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        FDA Latency<br>
                        <select class="form-control form-control-sm">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>   
                     </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- Horizontal Form -->
        </div>

         <div class="col-md-12">
            <!-- general form elements -->

            <!-- Form Element sizes -->
            <div class="card card-primary">
              <div class="card-header" style="padding: 0.25rem 0.25rem">
                <h3 class="card-title">Harga Obat</h3>
              </div>
              <div class="card-body" style="padding: 0.25rem">  
                <div class="row">
                  <div class="col-2">
                    Harga<br>
                        <select class="form-control form-control-sm">
                          <option>Eceran</option>
                          <option>Grosir</option>
                        </select> 
                  </div>
                  <div class="col-2">
                    HNA
                        <input class="form-control form-control-sm" type="text" placeholder="HNA">
                  </div><div class="col-2">
                    Margin resep (%)
                        <input class="form-control form-control-sm" type="text" value="10" placeholder="margin resep (%)">
                  </div>
                  <div class="col-2">
                    Margin non resep (%)
                        <input class="form-control form-control-sm" type="text" value="10" placeholder="margin non resep (%)">
                  </div>
                  <div class="col-2">
                    Harga jual Rp.
                        <input class="form-control form-control-sm" type="text" placeholder="harga jual">
                  </div>
                  <div class="col-2">
                    Harga jual non resep Rp.
                        <input class="form-control form-control-sm" type="text" placeholder="harga jual non resep">
                  </div>

                </div>

              </div>
            </div>
          </div>
          <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php include('basehome/footerdata.php'); ?>
</body>
</html>
<!-- Include library Bootstrap Datepicker -->
    <script src="<?php echo base_url('asetku/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>"></script>

    <!-- Include file custom.js -->
    <script src="<?php echo base_url('asetku/bootstrap-datepicker/js/custom.js'); ?>"></script>

    <script>
    $(document).ready(function(){
        setDatePicker()
        setDateRangePicker(".startdate", ".enddate")
        setMonthPicker()
        setYearPicker()
        setYearRangePicker(".startyear", ".endyear")
    })
  </script>
