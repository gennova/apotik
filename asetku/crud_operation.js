$(document).ready(function(){
	listEmployee();		
	var table = $('#employeeListing').dataTable({     
		"bPaginate": true,
		"searching": true,
		"bInfo": false,
		"bFilter": false,
		"bLengthChange": false,
		"pageLength": 5		
	}); 
	// list all employee in datatable
	function listEmployee(){		
		$.ajax({
			type  : 'ajax',
			url   : 'http://localhost/apotik/apoteker/show',
			async : false,
			dataType : 'json',
			success : function(data){
				var html = '';
				var i;
				for(i=0; i<data.length; i++){
					html += '<tr id="'+data[i].id+'">'+
							'<td>'+data[i].nojasa+'</td>'+
							'<td>'+data[i].namajasa+'</td>'+
							'<td>'+data[i].nominal+'</td>'+		                        
							'<td>'+data[i].status+'</td>'+
							'<td>'+data[i].keterangan+'</td>'+
							'<td style="text-align:right;">'+
								'<a href="javascript:void(0);" class="editRecord" data-id="'+data[i].id+'" data-name="'+data[i].name+'" data-age="'+data[i].age+'" data-skills="'+data[i].skills+'" data-designation="'+data[i].designation+'" data-address="'+data[i].address+'">Edit</a>'+' '+
								'<a href="javascript:void(0);" class="deleteRecord" data-id="'+data[i].id+'">Delete</a>'+
							'</td>'+
							'</tr>';
				}
				$('#listRecords').html(html);					
			}

		});		
	}
	// save new employee record
	$('#saveEmpForm').submit('click',function(){
		console.log("Insert method");
		var noJasa = $('#nojasa').val();
		var namaJasa = $('#namajasa').val();
		var nominal = $('#nominal').val();
		var status = $('#status').val();
		var keterangan = $('#keterangan').val();
		$.ajax({
			type : "POST",
			url  : "http://localhost/apotik/apoteker/save",
			dataType : "JSON",
			data : {nojasa:noJasa, namajasa:namaJasa, nominal:nominal, status:status, keterangan:keterangan},
			success: function(data){
				$('#nojasa').val("");
				$('#namajasa').val("");
				$('#nominal').val("");
				$('#status').val("");
				$('#keterangan').val("");
				$('#modal-xl').modal('hide');
				listEmployee();
			}
		});
		return false;
	});
	// show edit modal form with emp data
	$('#listRecords').on('click','.editRecord',function(){
		$('#editEmpModal').modal('show');
		$("#empId").val($(this).data('id'));
		$("#empName").val($(this).data('name'));
		$("#empAge").val($(this).data('age'));
		$("#empDesignation").val($(this).data('designation'));
		$("#empSkills").val($(this).data('skills'));
		$("#empAddress").val($(this).data('address'));
	});
	// save edit record
	 $('#editEmpForm').on('submit',function(){
		var empId = $('#empId').val();
		var empName = $('#empName').val();
		var empAge = $('#empAge').val();
		var empDesignation = $('#empDesignation').val();
		var empSkills = $('#empSkills').val();
		var empAddress = $('#empAddress').val();			
		$.ajax({
			type : "POST",
			url  : "emp/update",
			dataType : "JSON",
			data : {id:empId, name:empName, age:empAge, designation:empDesignation, skills:empSkills, address:empAddress},
			success: function(data){
				$("#empId").val("");
				$("#empName").val("");
				$('#empAge').val("");
				$("#empSkills").val("");
				$('#empDesignation').val("");
				$("#empAddress").val("");
				$('#editEmpModal').modal('hide');
				listEmployee();
			}
		});
		return false;
	});
	// show delete form
	$('#listRecords').on('click','.deleteRecord',function(){
		var empId = $(this).data('id');            
		$('#deleteEmpModal').modal('show');
		$('#deleteEmpId').val(empId);
	});
	// delete emp record
	 $('#deleteEmpForm').on('submit',function(){
		var empId = $('#deleteEmpId').val();
		$.ajax({
			type : "POST",
			url  : "emp/delete",
			dataType : "JSON",  
			data : {id:empId},
			success: function(data){
				$("#"+empId).remove();
				$('#deleteEmpId').val("");
				$('#deleteEmpModal').modal('hide');
				listEmployee();
			}
		});
		return false;
	});
});