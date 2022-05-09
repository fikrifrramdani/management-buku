<div class="modal fade" id="modalForm" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Insert Data</h4>
			</div>
			<div class="modal-body form">
				<form action="#" id="form" class="form-horizontal">
					<input type="hidden" name="bookId">

					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">Book ISBN</label>
							<div class="col-md-9">
								<input type="text" name="bookIsbn" placeholder="Book ISBN" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">Book Title</label>
							<div class="col-md-9">
								<input type="text" name="bookTitle" placeholder="Book Title" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">Book Author</label>
							<div class="col-md-9">
								<input type="text" name="bookAuthor" placeholder="Book Author" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">Book Category</label>
							<div class="col-md-9">
								<input type="text" name="bookCategory" placeholder="Book Category" class="form-control">
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="save()">Submit</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>

</html>
