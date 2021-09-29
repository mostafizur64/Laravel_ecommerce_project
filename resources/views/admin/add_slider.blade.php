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
		<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Slider</h2>
		<div class="box-icon">
			<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
			<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
			<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
		</div>
	</div>
	<div class="box-content">
	 <form action="/save_slider" method="POST" enctype="multipart/form-data" class="mr-4">
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
                    <div class="form-group mt-4">
                  
                    <label for="exampleInputEmail1" class="form-label">Slider Image</label>
                    <input type="file" name="slider_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                     </div>
          
			

				<div class="control-group hidden-phone">
			  <label class="control-label" for="textarea2">Publication Status</label>
			  <div class="controls">
				<input type="checkbox" name="publication_status" value="1">
			  </div>
			</div>

                  <button type="submit" class="btn btn-primary">Add Slider</button>
                      </fieldset>
               
		</form>   

	</div>
</div><!--/span-->

</div><!--/row-->


</div>


@endsection