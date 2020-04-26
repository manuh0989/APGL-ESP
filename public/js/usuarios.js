$( document ).ready(function() {
	$('#lnkLogout').click(function(event) {
		$('#frmLogout').submit();
	});
	/*$('#tblUsuarios').DataTable({
		info:false
			,"stateSave": true
			,"paging":false
			,"language": {
				"url": "../js/dataTable/len-es.json",
			}
	});*/

	$('.btnRestore').click(function(event){
		

	});
});

function papelera(obj){
	var idUsuario          = $(obj).attr('idUsuario');
	var mensaje            = $(obj).attr('mensaje');
	var frmPapeleraUsuario = $('#frmPapeleraUsuario');

	var url                = frmPapeleraUsuario.attr('action');
		url=url.replace(':usuario',idUsuario);

	$.ajax({
		url: url,
		type: 'POST',
		dataType: 'JSON',
		async:false,
		data: frmPapeleraUsuario.serialize(),
		beforeSend:function(){
			$('#trash'+idUsuario).remove();
			$(obj).html(spinner());
		}
		,success:function(data){
			$('#editIcon'+idUsuario).remove();
			$('#badage-success'+idUsuario).removeClass('badge-success');
			$('#badage-success'+idUsuario).html(mensaje);
			$('#badage-success'+idUsuario).addClass('badge-warning');
			$(obj).remove();
			
		}
		,error:function(){
			$('#badage-success'+idUsuario).addClass('badge-success');
		}
	});
}

function restore(obj){
	var idUsuario          = $(obj).attr('idUsuario');
	var frmRestoreUsuario = $('#frmRestoreUsuario');

	var url                = frmRestoreUsuario.attr('action');
		url=url.replace(':usuario',idUsuario);
	frmRestoreUsuario.attr('action',url);
	frmRestoreUsuario.submit();

}