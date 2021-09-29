
 @extends('layout')
@section('content')

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			
	

			<div class="register-req">
				<p>Please fillup this form</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
				
					<div class="col-md-12 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
						<form>
						<input type="text" name="shiping_email" placeholder="Email*">
						<input type="text" name="shiping_first_name" placeholder="First Name *">
						<input type="text" name="shiping_last_name" placeholder="Last Name *">
						<input type="text" name="shiping_address" placeholder="Address">
						<input type="text" name="shiping_mobile_number" placeholder="Mobile Number">
						<input type="text"name="shiping_city" placeholder="City">
						<input type="submit" class="btn btn-danger" value="Done">


						</form>
							</div>
						
						</div>
					</div>
										
				</div>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			
		</div>
	</section> <!--/#cart_items-->
@endsection