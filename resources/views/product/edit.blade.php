@extends('MasterLayout.layout') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one mt-5">Edit your items detail</h1>
			<div class="text-left"><a href="{{ route('dashboard') }}" class="btn btn-outline-primary">Product List</a></div>

			<form id="edit-frm" method="POST" action="{{ route('products.update',$product->id) }}" class="border p-3 mt-2">
				@csrf 
				@method('PUT')
				<div class="control-group col-6 text-left">
					<label for="title">Title</label>
					<div>
						<input type="text" id="title" class="form-control mb-4" name="title"
							placeholder="Enter Title" value="{!! $product->title !!}"
							required>
					</div>
				</div>
				<div class="control-group col-6 mt-2 text-left">
					<label for="body">Short Notes</label>
					<div>
						<textarea id="short_notes" class="form-control mb-4" name="short_notes"
							placeholder="Enter Short Notes" rows="" required>{!! $product->short_notes !!}</textarea>
					</div>
				</div>

				<div class="control-group col-6 mt-2 text-left">
					<label for="body">Price</label>
					<div>
						<input type="text" id="price" class="form-control mb-4" name="price"
							placeholder="Enter Price" value="{!! $product->price !!}"
							required>
					</div>
				</div>

				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Save Update</button></div>
			</form>
		</div>
	</div>
</div>
@endsection
