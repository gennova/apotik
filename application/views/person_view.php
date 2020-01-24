<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APOTIK PENJUALAN ECERAN</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    <style type="text/css">
        .dataTables_filter {
        display: none;
    }
    .dataTables_length {
        display: none;
    }
    </style>
    </head> 
<body>
    <div class="container">
        <h3>Penjualan Eceran</h3>
        <!-- <input type="text" name="no_invoice" value="<?php echo $invoice;?>">-->      
        <?php echo validation_errors(); ?> 
        <?php echo form_open('transaksi/save'); ?>
        <div class="col-sm-6" style="padding: 1px">
                <div class="col-sm-3">
             <label class="control-label col-md-2" style="padding-top: 8px; padding-left: 1px; width: 100%">KODE TRX</label> </div>
        <div class="form-group">                            
              <div class="col-sm-9" style="padding: 1px">
                <input name="kodetransaksinya" placeholder="Pelanggan" class="form-control" type="text"  value="<?php echo $invoice;?>" readonly>
            </div>
        </div> 
        <div class="col-sm-12" style="padding-top: 10px"></div>
        <div class="col-sm-3">
             <label class="control-label col-md-2" style="padding-top: 8px; padding-left: 1px">Pelanggan</label> </div>
        <div class="form-group">                            
              <div class="col-sm-9" style="padding: 1px">
                <input name="namapelanggan" placeholder="Pelanggan" class="form-control" type="text">
            </div>
        </div> 
        <div class="col-sm-3">
            <label class="control-label col-md-2" style="padding-top: 8px; padding-left: 1px;width: 100%">Tipe DO</label> </div>
        <div class="form-group">                            
              <div class="col-sm-9" style="padding: 1px">
                <input name="tipedo" placeholder="Tipe DO" class="form-control" type="text">
            </div>
        </div> 
        <div class="col-sm-3"><label class="control-label col-md-2" style="padding-top: 8px; padding-left: 1px;width: 100%">Cara Bayar</label> </div>
        <div class="form-group">                            
              <div class="col-sm-9" style="padding: 1px">
                <input name="carabayar" placeholder="Cara bayar" class="form-control" type="text">
            </div>
        </div> 
        <div class="col-sm-3"><label class="control-label col-md-2" style="padding-top: 8px; padding-left: 1px">Keterangan</label> </div>
        <div class="form-group">                            
              <div class="col-sm-9" style="padding: 1px">
                <input name="keterangan" placeholder="Keterangan" class="form-control" type="text">
            </div>
        </div> 
        <div class="col-md-3" style="padding: 0px;padding-left: 20px">
            <button type="submit" id="btnSave" class="btn btn-success">&nbsp &nbsp &nbsp &nbsp Save&nbsp &nbsp &nbsp &nbsp</button>            
        </div>
        </div>  
        
        <div class="col-sm-6">
        TOTAL <h1><input type="text" name="totalbayar" id="totalbayar">Rp.<h1>
        </div>   
        <input type="hidden" name="totalbayarnonformat" id="totalbayarnonformat">   
        <?php         
         echo form_close();
         ?>
        <form action="#" id="form">
            <div class="col-sm-12">
                <div class="form-body">
                        <div class="form-group">                            
                            <div class="col-md-3" style="padding: 1px">
                                <input name="firstName" placeholder="Barang" class="form-control" type="text">      

                            </div>
                        </div>

                        <div class="form-group">                            
                            <div class="col-md-1" style="padding: 1px">
                                <input name="middleName" placeholder="Stok" class="form-control" type="text">
                                
                            </div>
                        </div>
                        <div class="form-group">                           
                            <div class="col-md-2" style="padding: 1px">
                                <input name="lastName" placeholder="Harga Jual" class="form-control" type="text">
                                
                            </div>
                        </div>
                        <div class="form-group">                            
                            <div class="col-md-1" style="padding: 1px">
                                <input name="gender" id="jumlah" value="1" placeholder="Jumlah" class="form-control" type="text">                               
                            </div>                            
                        </div>
                        <div class="col-md-1" style="padding: 1px">
                               <button type="button" id="btnSave" onclick="minus()" class="btn btn-primary">-</button> <button type="button" id="btnSave" onclick="added()" class="btn btn-primary">+</button>
                            </div>
                        <div class="form-group">                            
                            <div class="col-md-2" style="padding: 1px">
                                <input name="address" placeholder="Diskon" class="form-control" type="text">                               
                            </div>
                        </div>
                        <div class="form-group">                            
                            <div class="col-md-1" style="padding: 1px">
                                <input name="dob" id="dob" class="form-control"  placeholder="Total" type="text">
                            </div>
                        </div>

                            <div class="col-md-1" style="padding: 1px">
                               <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">ADD</button>
                            </div>
                        
                    </div>                   
                </div>

                    <!-- <input type="hidden" value="" name="id"/> -->
                    

                </form>
         <div class="col-sm-12">

        <br />
         
        <table id="table" class="table table-condensed"  cellspacing="0" width="100%">
            <thead>
                <tr style="height: 10px;">
                    <th >Barang</th>
                    <th>Stok</th>
                    <th>Harga Jual</th>
                    <th>Qty</th>
                    <th>Diskon</th>
                    <th>Total</th>
                    <th style="width:50px;">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table></div>

    </div>
<script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>


<script type="text/javascript">

var save_method; //for save method string
var table;

$(document).ready(function() {
    //console.log('DOING THIS FIRST');
    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('person/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

    //datepicker
    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,  
    });

    //set input/textarea/select event when change value, remove class error and remove text help block 
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });

});



function add_person()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
}

function edit_person(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('person/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.id);
            $('[name="firstName"]').val(data.firstName);
            $('[name="middleName"]').val(data.middleName);
            $('[name="lastName"]').val(data.lastName);
            $('[name="gender"]').val(data.gender);
            $('[name="address"]').val(data.address);
            $('[name="dob"]').datepicker('update',data.dob);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}
var totalbayar=0;
function save()
{
    console.log('save');   
    var x = parseInt(document.getElementById("dob").value);
    totalbayar = totalbayar + x;
    console.log(totalbayar);
    document.getElementById('totalbayarnonformat').value=totalbayar;
    document.getElementById('totalbayar').value=new Intl.NumberFormat('ja-JP', { style: 'currency', currency: 'IDR' }).format(totalbayar);
    save_method = 'add'; 
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('person/ajax_add')?>";
    } else {
        url = "<?php echo site_url('person/ajax_update')?>";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string   
}

function delete_person(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('person/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}
var i = document.getElementById("jumlah").value;

function minus(){ 
    if (i > 1) {
            --i;
        }else {
            document.getElementById("jumlah").value = 1;
        }
    document.getElementById("jumlah").value = i;
    console.log(i);
}

function added(){ 
    if (i >= -100) {
            ++i;
        }
    document.getElementById("jumlah").value = i;
    console.log(i);
}

</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Person Form</h3>
            </div>
            <div class="modal-body form">
               
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
</body>
</html>