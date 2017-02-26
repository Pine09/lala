@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Home</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						{{ trans('adminlte_lang::message.logged') }}. Start creating your amazing application!
						<br>

						<!-- TABLE -->
					<table>

					<tr align="center">
						<td colspan="2"><h2><b>Add Product</b></h2></td>
					</tr>

					<tr>
						<td align="center" ><b>Product Title </b></td>
						<td><input type="text" name="product_title" size="50" required /></td>
					</tr>



					<tr>
						<td align="center">
						<b>Product Category </b></td>
						<td><select name="product_cat">
						<option  >Select a Category</option>


				
						</select>
						</td>
					</tr>

			<tr>
				<td align="center"><b>Product Brand </b></td>
				<td>
				<select name="product_brand">
				<option >Select a Category</option>


	
				</select>
				</td>
			</tr>

			<tr>
				<td align="center" ><b>Product Image </b></td>
				<td><input type="file" name="product_image"  /></td>
			</tr>

			<tr>
				<td align="center"><b>Product Price </b></td>
				<td><input type="text" name="product_price" size="50" required /></td>
			</tr>

			<tr>
				<td align="center"><b>Product Description</b></td>
				<td><input type="text" name="product_desc" size="40" height="20"> </input></td>
			</tr>

			<tr>
				<td align="center"><b>Product Keywords</b></td>
				<td><input type="text" name="product_keywords" size="50" required  /></td>
			</tr>


			<tr>
				<td></td>
				<td><input align="center" type="submit" name="insert_post" value="Add Product" required ></td>
			</tr>

	</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
@endsection
