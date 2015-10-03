@extends('layouts.default')
@section('content')
<div class="container">
	<div class="row">
		<div class="panel panel-primary">
				<div class="panel-heading">
					<h2>Stripe Payment</h2>
				</div>
			<div class="panel-body">
				{!!Form::open(['id'=>'billing-form'])!!}
					<div class="form-group">
						<label>
							<span>Card Number:</span>
							<input type="text" data-stripe="number" class="form-control">
						</label>
					</div>
					<div class="form-group">
						<label>
							<span>CVC:</span>
							<input type="text" data-stripe="cvc" class="form-control">
						</label>
					</div>
					
					
					<div class="form-group">
						<label>
							<span>Expiration Date:</span>
							{!!Form::selectMonth(null,null,["data-stripe"=>"exp-month"])!!}
							{!!Form::selectYear(null,date('Y'),date('Y')+10,null,["data-stripe"=>"exp-year"]) !!}
						</label>
					</div>
					<div class="form-group">
						<label>
							<span>Email Address:</span>
							<input type="email" id="email" name="email" class="form-control">
						</label>
					</div>
					<div class="form-group">
						<label>
							<span>Amount:</span>
							<input type="text"  name="amount" class="form-control">
						</label>
					</div>
					<div class="form-group">
					{!!Form::submit('Buy now',['class'=>'btn btn-success col-md-1.5'])!!}	
					</div>
				{!!Form::close()!!}
				
			</div>
		</div>
	</div>
</div>


		
	

