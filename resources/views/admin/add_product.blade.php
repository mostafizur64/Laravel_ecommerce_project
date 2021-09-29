@extends('admin_layout')
@section('admin_content')
<div>

			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Category</a>
				</li>
			</ul>
			 @if(session('status'))

  <h5 class="alert alert-success">{{session('status')}}</h5>
   @endif

<div class="row-fluid sortable">
<div class="box span12">
	<div class="box-header" data-original-title>
		<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>
		<div class="box-icon">
			<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
			<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
			<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
		</div>
	</div>
	<div class="box-content">
	 <form action="/save_test" method="POST" enctype="multipart/form-data" class="mr-4">
                    @csrf
                    <!--  <div class="form-group mt-4">

                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                   <div class="form-group mt-4">

                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                   </div> -->
                     <fieldset>
        <div class="control-group">
			  <label class="control-label" for="date01">Product Name</label>
			  <div class="controls">
				<input type="text" class="input-xlarge " name="product_name" >
			  </div>
			    </div>

		  	  <div class="control-group">
			<label class="control-label" for="selectError">Product Category</label>
			<div class="controls">
			  <select id="selectError" data-rel="null" name="category_id">
			  	<option>Select Category</option>
			  	 <?php
                               $data=DB::table('Tbcategoris')
                               ->where('publication_status',1)->get();
                               foreach($data as $value){?>




			<option value='{{$value->id}}'>{{$value->category_name}}</option>
				      <?php } ?>
			  </select>
			</div>
		  </div>

<div>

</div>

		  	  <div class="control-group">
			<label class="control-label" for="selectError">Manufacture Name</label>
			<div class="controls">
			  <select id="selectError" data-rel="chosen" name='manufacture_id'>
			  	<option>Select Manufacture</option>
			  	 <?php
                               $data=DB::table('manufacturs')
                               ->where('publication_status',1)->get();
                               foreach($data as $value){?>
				<option value="{{$value->id}}">{{$value->manufacture_name}}</option>
				<?php } ?>
			  </select>
			</div>
		  </div>



			<div class="control-group hidden-phone">
			  <label class="control-label" for="textarea2">Product short Description</label>
			  <div class="controls">
				<textarea class="cleditor" name="product_short_description" rows="3"></textarea>
			  </div>
			</div>
			<div class="control-group hidden-phone">
			  <label class="control-label" for="textarea2">Product long Description</label>
			  <div class="controls">
				<textarea class="cleditor" name="product_long_description" rows="3"></textarea>
			  </div>
			</div>
				<div class="control-group">
			  <label class="control-label" for="date01">Product price</label>
			  <div class="controls">
				<input type="text" class="input-xlarge " name="product_price" >
			  </div>
			    </div>
                 <!--   <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                   </div> -->

          <div class="form-group mt-4">

          <label for="exampleInputEmail1" class="form-label">Picture</label>
            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
          <div class="control-group">
			  <label class="control-label" for="date01">Product size</label>
			  <div class="controls">
				<input type="text" class="input-xlarge " name="product_size" >
			  </div>
			    </div>
			        <div class="control-group">
			  <label class="control-label" for="date01">Product color</label>
			  <div class="controls">
				<input type="text" class="input-xlarge " name="product_color" >
			  </div>
			    </div>


				<div class="control-group hidden-phone">
			  <label class="control-label" for="textarea2">Publication Status</label>
			  <div class="controls">
				<input type="checkbox" name="publication_status" value="1">
			  </div>
			</div>

                  <button type="submit" class="btn btn-primary">Registration</button>
                      </fieldset>

		</form>

	</div>
</div><!--/span-->

</div><!--/row-->


</div>


@endsection
