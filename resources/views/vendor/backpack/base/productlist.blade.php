@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.ProductList') }}<small>{{ trans('backpack::base.add_prod_page') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.addproduct') }}</li>
      </ol>
    </section>
@endsection
@section('after_styles')

 <style type="text/css">
      table{border: solid 1px;border-collapse: collapse;}
  		th,td{padding: 2px;border: solid 1px}
    </style>

@endsection

@section('content')
	
	<div>{{-- ini div untuk main table --}}
		<table>
			<th>No</th>
			<th>Nama</th>
			<th>QTY</th>
			<th>Harga</th>
			<th>Description</th>
			<th>Image</th>
			<th>&nbsp</th>
@foreach($produk as $prod)
	
	<Tr>
		<td>{!! $prod->id !!}</td>
		<td>{!! $prod->nama !!}</td>
		<td>{!! $prod->qty !!}</td>
		<td>{!! $prod->harga !!}</td>
		<td>{!! $prod->description !!}</td>
		<td>{!! $prod->image !!}</td>
		<td><a href='tes/{!! $prod->ID_product !!}'>Edit</a></td>
	</Tr>
@endforeach

		</table>
	</div>

@endsection