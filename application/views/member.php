<!DOCTYPE html>
<html lang="en">
<?php
include ('basehome/homeheadnavasideform.php');
?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Bootstrap core JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Page level plugin JavaScript--><script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<STYLE TYPE="text/css">

<!--
TD{font-family: Arial; font-size: 11pt;}
TH{font-family: Arial; font-size: 10pt;}
--->
</STYLE>

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
                  Insert
                </button>

    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section id="demo" style="display:block"  class="content">
      <div class="container-fluid">
        <!-- Info boxes -->

        <div class="row">
          <div class="col-md-12">

        <table id="example2" class="table table-striped table-sm" >
               <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody id="show_data">
                 
            </tbody>
                <!--
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
            -->
              </table>

      </div>
  </div>
</div>
</section>
</div>
<script>    
$(function () {
      "pageLength": 3,
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
  });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        tampil_data_barang();   //pemanggilan fungsi tampil barang.
         
        $('#example2').dataTable();
          
        //fungsi tampil barang
        function tampil_data_barang(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/barang/data_barang',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td height=2>'+data[i].barang_kode+'</td>'+
                                '<td>'+data[i].barang_nama+'</td>'+
                                '<td>'+data[i].barang_harga+'</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
 
    });
 
</script>
<?php
include ('basehome/homefootermin.php');
?>

<!-- /.modal -->

      <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Extra Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine bodyyyyyyyyyyyyyyyyyyyyyyyyrrrrrrrrrrrrrrrrrrrr rrrrrrrrrrrrrrrrrrrrrrrrrr wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww  rrrrrrrrrrrrrrrrrryyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <div class="modal fade" id="modal-info">
        <div class="modal-dialog">
          <div class="modal-content bg-info">
            <div class="modal-header">
              <h4 class="modal-title">Info Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-outline-light">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


</body>
</html>
