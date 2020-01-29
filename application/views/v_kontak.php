<!DOCTYPE html>
<html>
<?php 
//include('basehome/headdata.php'); 
include ('basehome/homeheadnavaside.php');
?>
<style type="text/css">
  table {
    display: inline-block;
    overflow: scroll;
  }
  th,tr{
    white-space: nowrap;
  }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          DATA KONTAK / PELANGGAN          
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <button type="button" class="btn btn-info btn-sm" onclick="location.href='<?php echo base_url('kontak/insert'); ?>'";>
                  INSERT
                </button>
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-info" data-id="1">
                  Launch Info Modal
                </button>
                <a href="#" class="mayya" id="mayya" data-target="#modal-info" data-toggle="modal" data-id="16">Open Modal</a>
                <!-- hide button worked
               <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-xl">
                  INSERT
                </button>
                <button type="button" class="btn btn-success swalDefaultSuccess btn-sm">
                  Launch Success Toast
                </button>
                <button type="button" class="btn btn-info swalDefaultInfo btn-sm">
                  Launch Info Toast
                </button>
                <button type="button" class="btn btn-danger swalDefaultError btn-sm">
                  Launch Error Toast
                </button>
                <button type="button" class="btn btn-warning swalDefaultWarning btn-sm">
                  Launch Warning Toast
                </button>
              -->
            </div>

            <!-- /.card-header -->
            <div class="card-body" style="padding: 0.5rem">
              <table id="supplierTableID" class="table table-bordered table-striped table-hover" style="line-height: 1px">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Nama Kontak</th>
                  <th>Jenis Kelamin</th>
                  <th>Gol. Darah</th>
                  <th>Tgl. Lahir</th>
                  <th>Tempat Lahir</th>
                  <th>Telpon</th>
                  <th>Hp</th>
                  <th>NPWP</th>
                  <th>Alamat</th>
                  <th>Keterangan</th>
                  <th>Status</th>
                  <th>Kategori</th>
                  <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($kontaks as $key) {
                    echo "<tr><td>".$key->title."</td><td>".$key->nama."</td><td>".$key->jeniskelamin."</td><td>".$key->golongandarah."</td><td>".$key->tgllahir."</td><td>".$key->tempatlahir."</td><td>".$key->telpon."</td><td>".$key->hp."</td><td>".$key->npwp."</td><td>".$key->alamat."</td><td>".$key->keterangan."</td><td>".$key->status."</td><td>".$key->kategorikontak."</td><td><a href='".base_url('kontak/delete/').$key->id."' id='btn_delete' onclick='clicked(event)' ><font color='RED'>DELETE</font></a>  <a href='".base_url('kontak/update/').$key->id."'>UPDATE</a></td></tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.end of col 12 -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <form id="deletekontak" method="post">
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
              <input type="text" name="id" id="id">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>              
              <button type="submit" class="btn btn-outline-light">Close</button>    
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</form>

<?php

?>
      <!-- /.modal -->
  <!-- /.content-wrapper -->
  <style> 
input[type=text] {
  width: 100%;
  padding: 2px 2px;
  margin: 1px 0;
  box-sizing: border-box;
  border: 2px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}
</style>
<?php include('basehome/footerdata.php'); ?>
</body>
</html>

<script type="text/javascript">
var tbl = document.getElementById("example1");
        if (tbl != null) {
            for (var i = 0; i < tbl.rows.length; i++) {
                for (var j = 0; j < tbl.rows[i].cells.length; j++)
                    tbl.rows[i].cells[j].onclick = function () { getval(this); };
            }
        }
        function getval(cel) {            
            console.log(cel.innerHTML)
        }
</script>

<script>
function clicked(e)
{
    if(!confirm('Are you sure?'))e.preventDefault();
}
</script>

<script type="text/javascript">
$(document).ready(function(){
   $(".mayya").click(function(event){
     //alert("Thanks for visiting!");
     $("#id").val($(this).data('id'));
     $("#kirim").val("15");     
   });
 });
</script>
<script>
  // delete emp record
   $('#deletekontak').on('submit',function(){
    var kontakID = $('#id').val();
    console.log("Deleting from modal"+pembID);
    $.ajax({
      type : "POST",
      url  : "http://localhost/apotik/kontak/delete/"+kontakID,
      dataType : "JSON",  
      data : {id:pembID},
      success: function(data){
        $("#"+pembID).remove();
        $('#id').val("");
        $('#modal-info').modal('hide');
        //listEmployee();
        reload_table();
      }
    });
    return false;
  });
</script>
