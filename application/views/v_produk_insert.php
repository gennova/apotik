<!DOCTYPE html>
<html>
<?php include('basehome/headdata.php'); ?>
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
                <h3 class="card-title">Different Height</h3>
              </div>
              <div class="card-body" style="padding: 0.25rem">                
                NAMA <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                <div class="form-group">
                    TANGGAL
                    <input type="text" class="form-control form-control-sm datepicker" />
                </div>
                PILIH
                        <select class="form-control form-control-sm">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-danger">
              <div class="card-header" style="padding: 0.25rem 0.25rem">
                <h3 class="card-title">Different Width</h3>
              </div>
              <div class="card-body" style="padding: 0.25rem">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control form-control-sm" placeholder=".col-3">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control form-control-sm" placeholder=".col-4">
                  </div>
                  <div class="col-5">
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
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Horizontal Form -->
        </div>
          <div class="col-md-6">
            <!-- general form elements -->

            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header" style="padding: 0.25rem 0.25rem">
                <h3 class="card-title">Different Height</h3>
              </div>
              <div class="card-body" style="padding: 0.25rem">                
                NAMA <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                NAMA <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                NAMA <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-danger">
              <div class="card-header" style="padding: 0.25rem 0.25rem">
                <h3 class="card-title">Different Width</h3>
              </div>
              <div class="card-body" style="padding: 0.25rem">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control form-control-sm" placeholder=".col-3">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control form-control-sm" placeholder=".col-4">
                  </div>
                  <div class="col-5">
                    <input type="text" class="form-control form-control-sm" placeholder=".col-5">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Horizontal Form -->
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
