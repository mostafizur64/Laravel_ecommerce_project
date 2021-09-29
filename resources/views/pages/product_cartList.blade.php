@extends('layout')
@section('content')
			<div class="table-responsive cart_info">

	
<table class="table table-condensed">
	  <thead style="background-color: #a3ef4f33;height: 50px ">
		  <tr style="height: 40px;margin-bottom: 0px ;align-items: center" >
			  <th>Item</th>
			  <th>product_name</th>
			  
			<!--   <th>Product_short_description</th>
			  <th>Product_long_description</th> -->
			  <th>product_price</th>
	
			  <th>Action</th>
			 <!--  <th>product_size</th> -->
			<!-- //  <th>product_color</th> -->
			

			  



		  </tr>
	  </thead> 
	    	@foreach($cattlist as $item)
	  <tbody>
	  
		<tr><td> <img class="details-img" src="{{asset('upload/StudentPic/'.$item->product_image)}}" style="height: 80px ; width: 80px;"></td>
		 
			<td>{{$item->product_name}}</td>
			
		<!-- 	<td>{{$item->product_short_description}}</td>
			<td>{{$item->product_long_description}}</td> -->
			<td>{{$item->product_price}} TK</td>
			
		=
			   	
			 <!--   	<td>

                           <?php
                               $cartList=DB::table('carts')
                               ->select('carts.*','quantity')
                               ->first();
                               foreach($cartList as $value){?>


			   
			   		<?php } ?>
			   	</td> -->
		
			  
			   

			<!-- <td>{{$item->product_size}}</td> -->
		<!-- 	<td>{{$item->product_color}}</td> -->
		<td>
			<a href="removeToCart/{{$item->cart_id}}" class="btn btn-warning">Remove To Cart</a>
		</td>
	
	  			

    
  		
				
		</tr>

	
	  </tbody>
	  @endforeach
  </table>   
<td>
			<a href="/Productorder" class="btn btn-success">Order Now</a>
		</td>

 

</div>
	<!-- <section id="do_action">
		<div class="container" >
		
			<div class="row">
				
				<div class="col-sm-9">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$59</span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action--> 



@endsection                   