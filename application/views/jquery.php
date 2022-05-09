<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="<?= base_url('assets/jquery/jquery.min.js'); ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!-- datatables -->
<script type="text/javascript" src="<?= base_url('assets/datatables/js/jquery.dataTables.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/datatables/js/dataTables.bootstrap.js'); ?>"></script>

<!--JS-->
<script type="text/javascript">
	$(document).ready(function() {
		$('#tableId').DataTable();
	});

	var saveMethod;
	var table;

	function addBook() {
		saveMethod = 'add';
		$('#form')[0].reset();
		$('#modalForm').modal('show');
	}

	function save() {
		var url;

		if (saveMethod == 'add') {
			url = '<?= site_url('index.php/Book/bookAdd'); ?>';
		} else {
			url = '<?= site_url('index.php/Book/bookUpdate'); ?>';
		}

		$.ajax({
			url: url,
			type: "POST",
			data: $('#form').serialize(),
			dataType: "JSON",
			success: function(data) {
				$('#modalForm').modal('hide');
				location.reload();
			},
			error: function(jqXHR, textStatus, errorThrow) {
				alert('Error adding / Update data');
			}
		});
	}

	function editBook(id) {
		saveMethod = 'update';
		$('#form')[0].reset();

		// load data dari ajax
		$.ajax({
			url: "<?= site_url('index.php/Book/ajaxEdit/') ?>/" + id,
			type: "GET",
			dataType: "JSON",
			success: function(data) {
				$('[name = "bookId"]').val(data.book_id);
				$('[name = "bookIsbn"]').val(data.book_isbn);
				$('[name = "bookTitle"]').val(data.book_title);
				$('[name = "bookAuthor"]').val(data.book_author);
				$('[name = "bookCategory"]').val(data.book_category);

				$('#modalForm').modal('show');

				$('.modal-title').text('Edit Book');
			},

			error: function(jqXHR, textStatus, errorThrow) {
				alert('Error get data from ajax');
			}
		});
	}

	function deleteBook(id) {
		if (confirm('Are you sure to delete data?')) {
			// ajax delete data
			$.ajax({
				url: "<?= site_url('index.php/Book/bookDelete') ?>/" + id,
				type: "POST",
				dataType: "JSON",
				success: function(data) {
					location.reload();
				},

				error: function(jqXHR, textStatus, errorThrow) {
					alert('Error deleting data');
				}
			});
		}
	}
</script>
