@extends('MasterLayout.layout') @section('content')

<x-nav />

<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			{{-- <h1 class="display-one m-5">You can post everything you went to sell</h1> --}}
			
            {{-- {{ route('products.create') }} --}}

			<table class="table mt-3  text-left">
				<thead>
					<tr>
						<th scope="col">Product Title</th>
						<th scope="col" class="pr-5">Price (USD)</th>
						<th scope="col">Short Notes</th>
						<th scope="col">Action</th>
						<th scope="col">Time</th>
					</tr>
				</thead>
				<tbody>
					@forelse($products as $product)
					<tr>
						<td>{!! $product->title !!}</td>
						<td class="pr-5 text-right">{!! $product->price !!}</td>
						<td>{!! $product->short_notes !!}</td>
						<td style="display: flex">
							<a href="{{ route('products.edit',$product->id) }}"class="btn btn-outline-primary" >Edit</a>
                            
							<form action="{{ route('products.delete',$product->id) }}" method="POST">
								@method('DELETE')
								@csrf
								<button type="submit" class="btn btn-outline-danger ml-1">Delete</button>
							</form>
						</td>
						<td>{{ $product->created_at->diffForhumans() }}</td>
					</tr>
					@empty
					<tr>
						<td colspan="3">No products found</td>
					</tr>
					@endforelse
					<div class="text-left"><a href="{{ route('products.create') }}" class="position-absolute bottom-0 end-0" style="font-size: 50px"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
				</tbody>
			</table>
			<div class="container">
				
			</div>
			
		</div>
	</div>
</div>
@endsection