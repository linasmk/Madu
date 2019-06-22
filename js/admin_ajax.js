$ = jQuery.noConflict();

$(document).ready(function() {

	$('.remove_reservation').on('click', function(e) {
		e.preventDefault();
		const id = $(this).attr('data-reservation');

		Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
		}) // End of Swal.fire(
		.then((result) => {
			if (result.value) {
				$.ajax({
						type: 'post',
						data: {
							  'action': 'madu_delete_rezervation',
							  'id': id,
							  'type': 'delete'
							},
						url: admin_ajax.ajaxurl,
						success: function(data) {
							const result = JSON.parse(data);

							if(result.response == 'success') {
								jQuery("[data-reservation='"+ result.id +"']").parent().parent().remove();
									
									 Swal.fire(
									     'Deleted!',
									     'Your file has been deleted.',
									     'success'
									     )
				  			}
						}
				})
			} // End of if (result.value) 
		}); // End of then((result) =>
	}); // End of $('.remove_reservation').on('click'
}); // End of $(document).ready