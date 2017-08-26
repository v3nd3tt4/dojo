<script type="text/javascript">
	$(document).ready(function(){

		$(document).on('submit', '#frm_tambah_user', function(e){
			e.preventDefault();
			var data = new FormData(document.getElementById('frm_tambah_user'));
			$('#notifUser').html('Loading...');
	        $.ajax({
	            url : '<?=base_url()?>admin/tambahAdmin',
	            type : 'POST',
	            data : data,
	            processData: false, 
	            contentType: false,
	            dataType: "JSON",
	            success : function(msg){
	                if(msg.status == 'success'){
	                    $('#notifUser').html(msg.text);
	                    location.reload();
	                }else if(msg.status == 'failed'){
	                    $('#notifUser').html(msg.text);
	                }
	                
	            }
	        });
		});

	});
</script>