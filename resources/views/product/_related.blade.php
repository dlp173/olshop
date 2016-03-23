<h3>Related Products</h3>
<hr />
<div class="row">
	@foreach ($related as $p)
	<div class="col-md-3">
		@include('product._single')
	</div>
	@endforeach
</div>