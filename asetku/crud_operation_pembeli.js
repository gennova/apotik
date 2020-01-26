$(document).ready(function(){
	listEmployee();		
	var table = $('#kategoriListing').dataTable({     
		"bPaginate": true,
		"searching": false,
		"bInfo": false,
		"bFilter": false,
		"bLengthChange": false,
		"pageLength": 5		
	}); 
	// list all employee in datatable
	function reload_table(){
		//location.reload(false);		
		//table.ajax.reload(null,false); //reload datatable ajax 
		oTable.api().ajax.reload();
	}
	function listEmployee(){		
		$.ajax({
			type  : 'ajax',
			url   : 'http://localhost/apotik/katseller/show',
			async : false,
			dataType : 'json',
			success : function(data){
				var html = '';
				var i;
				for(i=0; i<data.length; i++){
					html += '<tr id="'+data[i].id+'">'+
							'<td>'+data[i].namakategori+'</td>'+
							'<td>'+data[i].infokategori+'</td>'+
							'<td>'+data[i].marginresep+'</td>'+		                        
							'<td>'+data[i].marginnonresep+'</td>'+
							'<td style="text-align:center;">'+
								'<a href="javascript:void(0);" class="editRecord" data-id="'+data[i].id+'" data-nmkategori="'+data[i].namakategori+'" data-infokategori="'+data[i].infokategori+'" data-marginresep="'+data[i].marginresep+'" data-marginnonresep="'+data[i].marginnonresep+'"><font color="BLUE">Edit</font></a>'+' '+
								'<a href="javascript:void(0);" class="deleteRecord" data-id="'+data[i].id+'"><font color="RED">Delete</font></a>'+
							'</td>'+
							'</tr>';
				}
				$('#listPembeli').html(html);					
			}
		});		
	}
	// save new employee record
	$('#saveKategoriPembeliForm').submit('click',function(){
		console.log("Insert method");
		var NAMAKATEGORI = $('#namakategori').val();
		var INFOKATEGORI = $('#infokategori').val();
		var MARGINRESEP = $('#marginresep').val();
		var MARGINNONRESEP = $('#marginnonresep').val();
		$.ajax({
			type : "POST",
			url  : "http://localhost/apotik/katseller/save",
			dataType : "JSON",
			data : {namakategori:NAMAKATEGORI, infokategori:INFOKATEGORI, marginresep:MARGINNONRESEP, marginnonresep:MARGINNONRESEP},
			success: function(data){
				$('#namakategori').val("");
				$('#infokategori').val("");
				$('#marginresep').val("");
				$('#marginnonresep').val("");
				$('#modal-xl').modal('hide');
				listEmployee();
				reload_table();
			}
		});
		return false;
	});
	// show edit modal form with emp data
	$('#listPembeli').on('click','.editRecord',function(){
		$('#modal-update').modal('show');
		$("#pembIDInput").val($(this).data('id'));
		$("#nmkat").val($(this).data('nmkategori'));
		$("#infokat").val($(this).data('infokategori'));
		$("#mresep").val($(this).data('marginresep'));
		$("#mnresep").val($(this).data('marginnonresep'));
	});
	// save edit record
	 $('#editKategoriPembeliForm').on('submit',function(){
	 	console.log("Update "+$('#pembIDInput').val())
	 	var pembID = $('#pembIDInput').val();
		var NAMAKATEGORI = $('#nmkat').val();
		var INFOKATEGORI = $('#infokat').val();
		var MARGINRESEP = $('#mresep').val();
		var MARGINNONRESEP = $('#mnresep').val();	
		$.ajax({
			type : "POST",
			url  : "http://localhost/apotik/katseller/update",
			dataType : "JSON",
			data : {id:pembID,namakategori:NAMAKATEGORI, infokategori:INFOKATEGORI, marginresep:MARGINRESEP, marginnonresep:MARGINNONRESEP},
			success: function(data){
				$('#nmkat').val("");
				$('#infokat').val("");
				$('#nominal').val("");
				$('#mresep').val("");
				$('#mnresep').val("");
				$('#modal-update').modal('hide');
				listEmployee();
				reload_table();
			}
		});
		return false;
	});
	// show delete form
	$('#listPembeli').on('click','.deleteRecord',function(){
		var pembID = $(this).data('id');          
		console.log("Kategori Pembeli ID "+pembID);  
		$('#modal-default').modal('show');
		$('#kategoriPembeliID').val(pembID);
	});
	// delete emp record
	 $('#deleteKategoriPembeliForm').on('submit',function(){
		var pembID = $('#kategoriPembeliID').val();
		console.log("Deleted "+pembID);
		$.ajax({
			type : "POST",
			url  : "http://localhost/apotik/katseller/delete",
			dataType : "JSON",  
			data : {id:pembID},
			success: function(data){
				$("#"+pembID).remove();
				$('#kategoriPembeliID').val("");
				$('#modal-default').modal('hide');
				listEmployee();
				reload_table();
			}
		});
		return false;
	});
});