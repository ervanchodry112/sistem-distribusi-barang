<?php
echo $this->extend('layout/navbar');
echo $this->section('content');
?>

<div class="p-2">
	<div class="mb-3">
		<button onclick="add_field()" class="btn btn-primary">Tambah</button>
	</div>
	<form id="form" action="/store" method="post">
		<div class="mb-3">
			<label for="produk" class="form-label">Produk</label>
			<input type="text" name="text_field[]" class="form-control">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

	<script>
		function add_field(){
			var x = document.getElementById("form");
			// create an input field to insert
			var new_field = document.createElement("input");
			// set input field data type to text
			new_field.setAttribute("type", "text");
			// set input field name 
			new_field.setAttribute("name", "text_field[]");
			// select last position to insert element before it
			new_field.setAttribute("class", "form-control mb-3");
			var pos = x.childElementCount;

			// insert element
			x.insertBefore(new_field, x.childNodes[pos]);
		}
	</script>
</div>

<?= $this->endSection() ?>