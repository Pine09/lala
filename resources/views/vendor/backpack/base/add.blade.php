@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.addproduct') }}<small>{{ trans('backpack::base.add_prod_page') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.addproduct') }}</li>
      </ol>
    </section>
@endsection


@section('content')
<div class="spark-screen">
   <div class="row">
      <div class="col-md-8">

         <!-- Default box -->
         <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Add Product</h3>

               <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                     <i class="fa fa-minus"></i></button>
                  <!--<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                     <i class="fa fa-times"></i></button>-->
               </div>
            </div>
            <div class="box-body">


               <!-- FORM ADD PRODUCT -->
               <form class="form-group" action="" method="post">
                  <div class="col-md-12">

                  <div class="form-group row">
                     <label>Product Name </label>
                     <input type="text" name="product_title" class="form-control" size="50" required />
                  </div>

                  <div class="form-group row">
                     <label>Product Category </label>
                  <select name="product_cat" class="form-control">
                     <option  >Select a Category</option>



                     </select>
                  </div>

                  <div class="form-group row">
                     <label>Product Brand </label>
                     <select name="product_brand" class="form-control">
                        <option >Select a Brand</option>



                     </select>
                  </div>

                  <div class="form-group row">
                     <label>Product Image </label>
                     <input type="file" name="product_image"  class="form-control"/>
                  </div>

                  <div class="form-group row">
                     <label>Product Price </label>
                     <div class="input-group">
                       <span class="input-group-addon">Rp</span>
                       <input type="NUMBER" name="product_price" class="form-control" size="50" required />
                     </div>
                  </div>

                  <div class="form-group row">
                     <label>Product Description </label>
                     <textarea name="prod_desc" class="form-control" rows="15" cols="80" style="resize:vertical;"></textarea>
                  </div>

                  <div class="form-group row">
                        <input type="submit" class="btn btn-success btn-lg" name="insert_post" value="+ Add Product">
                  </div>

               </div>
               </form>
            </div>
            <!-- /.box-body -->
         </div>
         <!-- /.box -->

      </div>
   </div>
</div>
@endsection
