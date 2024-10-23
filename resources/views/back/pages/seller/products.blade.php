@extends('back.layout.pages-layout')
@section('BoardingHouse',isset($BoardingHouse) ? $BoardingHouse : 'BoardingHouse')
@section('content')
<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>List of Item</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="{{ route('seller.home') }}">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Views Available
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
                            <a href="{{ route('seller.product.add-product') }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-plus-circle"></i> Add new Item</a>
							</div>
						</div>
					</div>

     @livewire('seller.products')
@endsection
