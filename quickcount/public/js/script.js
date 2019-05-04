$(function() {
	$('.tampilModalUbah').on('click', function() {
		$('#formModalLabel').html('Ubah Data quickcount');
		$('.modal-footer button[type=submit]').html('Update');
		$('.modal-body form').attr('action','http://localhost/quickcount/public/caleg/ubah');

		const id = $(this).data('id');
		$.ajax({
			url: 'http://localhost/quickcount/public/caleg/getubah',
			data:{id : id},
			method : 'post',
			dataType: 'json',
			success: function (data) {
				$('#earned_vote').val(data.earned_vote);
				$('#id').val(data.id);
			}
		});
	});
});