@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.listproduct') }}<small>{{ trans('backpack::base.list_prod_page') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.listproduct') }}</li>
      </ol>
    </section>
@endsection
@section('after_styles')

 <style type="text/css">
   .thead {
      background-color: #DD4B39;
      color: white;
      border-bottom: 3px solid gold;
   }
   .table {
      padding: auto 20px !important;
   }
   .table .btn {
      padding: 2px 10px !important;
   }
   .listproduct td {
      padding-top: 10px !important;
      font-size: 12.4pt;
   }
   .box {
      overflow-x: auto;
   }
   .fa-plus {
      font-size: 10pt;
   }
 </style>

@endsection

@section('content')
   <div class="listproduct row col-md-12">
      <div class="box">
         <div class="box-header with-border">
            <h3 class="box-title">List Product</h3>
            <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i>
               </button>
            </div>
         </div>
         <div class="box-body">
            <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/add') }}" class="btn btn-success"><i class="fa fa-plus"></i>  New Product</a>
         </div>
      	<div class="box-body">{{-- ini div untuk main table --}}
      		<table class="table table-striped table-hover">
               <thead class="thead">
                  <tr>
                     <th>#</th>
            			<th>Product Name</th>
            			<th>Category</th>
            			<th>QTY</th>
            			<th>Price</th>
                     <th>Image</th>
            			<th>Description</th>
            			<th>Action</th>
                  </tr>
               </thead>

               <tbody>
                  <!-Example when/if data showing up-->
                  <!--<tr>
                     <td>asdasd</td>
                     <td>asdasd</td>
                     <td>asdasd</td>
                     <td>asdasd</td>
                     <td>asdasd</td>
                     <td>asdasd</td>
                     <td>asdasd</td>
                     <td>
                        <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/edit') }}" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                     </td>
                  </tr>-->
                  <!-End of example-->
               @foreach($produk as $prod)
               <tr>
               		<td>{!! $prod->id !!}</td>
               		<td>{!! $prod->product_name !!}</td>
               		<td>{!! $prod->category !!}</td>
               		<td>{!! $prod->qty !!}</td>
               		<td>{!! $prod->price !!}</td>
                     <td>{!! $prod->image !!}</td>
               		<td>{!! $prod->description !!}</td>
                     <td>
                        <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/edit/') }}" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                     </td>
               </tr>
               @endforeach
               </tbody>
      		</table>
      	</div>
      </div>
   </div>
@endsection
