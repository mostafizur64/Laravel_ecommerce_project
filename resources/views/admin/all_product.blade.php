@extends('admin_layout')
@section('admin_content')



<div style="height: 540px;"> 
	<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Tables</a></li>
</ul>
@if(session('status'))
<h5 class="alert alert-success">{{session('status')}}</h5>
@endif

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
	<table class="table table-striped table-bordered bootstrap-datatable datatable">
	  <thead>
		  <tr>
			  <th>id</th>
			  <th>product_name</th>
			  <th>category_id</th>
			  <th>manufacture_Id</th>
			<!--   <th>Product_short_description</th>
			  <th>Product_long_description</th> -->
			  <th>product_price</th>
			  <th>product_image</th>
			 <!--  <th>product_size</th> -->
			<!-- //  <th>product_color</th> -->
			  <th>status</th>
			  <th>Action</th>

			  



		  </tr>
	  </thead> 
	    	@foreach($data as $item)
	  <tbody>
	  
		<tr class="">
		    <td>{{$item->id}}</td>
			<td>{{$item->product_name}}</td>
			<td>{{$item->category_name}}</td>
			<td>{{$item->manufacture_name}}</td>
		<!-- 	<td>{{$item->product_short_description}}</td>
			<td>{{$item->product_long_description}}</td> -->
			<td>{{$item->product_price}} TK</td>
			<td> <img class="details-img" src="{{asset('upload/StudentPic/'.$item->product_image)}}" style="height: 80px ; width: 80px;"></td>
			<!-- <td>{{$item->product_size}}</td> -->
		<!-- 	<td>{{$item->product_color}}</td> -->
			<td class="center">
				@if($item->publication_status==1)
				<span class="label label-success">Active</span>
				@else
				<span class="label label-danger">UnActive</span>
				@endif

			</td>
			<td class="center">
				@if($item->publication_status==1)
				<a class="btn btn-danger" href="{{'/Unactive_product/'.$item->id}}">
					<i class="halflings-icon white thumbs-down"></i>  
				</a>
				@else
					<a class="btn btn-success" href="{{'/Active_product/'.$item->id}}">
					<i class="halflings-icon white thumbs-up"></i>  
				</a>
				@endif

				<a class="btn btn-info" href="{{'/edit_product/'.$item->id}}">
					<i class="halflings-icon white edit"></i>  
				</a>
				<a class="btn btn-danger" href="{{'/Delete-product/'.$item->id}}">
					<i class="halflings-icon white trash"></i> 
				</a>
			</td>
				
		</tr>
	
	  </tbody>
	  @endforeach
  </table>            
		</div>
	</div><!--/span-->






@endsection


</div>
