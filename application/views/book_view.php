<div class="container">
	<h1>Codeigniter Crud Ajax</h1>
	<h3>Book Store</h3>

	<button class="btn btn-success" onclick="addBook()"><i class="glyphicon glyphicon-plus"></i>Add Book</button>

	<br>
	<br>

	<table id="tableId" class="table table-stripped table-bordered">
		<thead>
			<tr>
				<th>No.</th>
				<th>ISBN</th>
				<th>Titile</th>
				<th>Author</th>
				<th>Category</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($books as $b) : ?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $b->book_isbn; ?></td>
					<td><?= $b->book_title; ?></td>
					<td><?= $b->book_author; ?></td>
					<td><?= $b->book_category; ?></td>
					<td>
						<button class="btn btn-warning"><i class="glyphicon glyphicon-pencil" onclick="editBook(<?= $b->book_id; ?>)"></i></button>
						<button class="btn btn-danger"><i class="glyphicon glyphicon-remove" onclick="deleteBook(<?= $b->book_id; ?>)"></i></button>
					</td>
				</tr>
				<?php $i++; ?>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
