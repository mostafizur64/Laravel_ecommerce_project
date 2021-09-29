

 @extends('layout')
@section('content')



 

 <section id="do_action">
		<div class="container" >
		
			<div class="row">
				
				<div class="col-sm-9">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>{{$total}}</span></li>
							<li>Eco Tax <span>$10</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>{{$total+10}}</span></li>
						</ul>
							
							    <?php $customer_id=Session::get('id');?>
                                <?php if($customer_id !=NULL){?>
                                <li><a href="/checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>

                           
                        <?php }else{?>
                                <li><a href="/loginpage"><i class="fa fa-crosshairs"></i> Checkout</a></li>


                            <?php } ?>

                                 
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action 


@endsection                   