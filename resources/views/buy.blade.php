@extends('layouts.default')
@section('content')
<h1>Buy For $10</h1>

{!!Form::open(['id'=>'billing-form'])!!}
	<div class="form-row">
		<label>
			<span>Card Number:</span>
			<input type="text" data-stripe="number">
		</label>
	</div>
	<div class="form-row">
		<label>
			<span>CVC:</span>
			<input type="text" data-stripe="cvc">
		</label>
	</div>
	
	
	<div class="form-row">
		<label>
			<span>Expiration Date:</span>
			{!!Form::selectMonth(null,null,["data-stripe"=>"exp-month"])!!}
			{!!Form::selectYear(null,date('Y'),date('Y')+10,null,["data-stripe"=>"exp-year"]) !!}
		</label>
	</div>
	<div class="form-row">
		<label>
			<span>Email Address:</span>
			<input type="email" id="email" name="email">
		</label>
	</div>
	<div class="form-row">
		<label>
			<span>Amount:</span>
			<input type="text"  name="amount">
		</label>
	</div>
	<div>
	{!!Form::submit('Buy now')!!}	
	</div>
	{!!Form::close()!!}
	

{{-- <form action="" method="POST" id="payment-form"> --}}
{{-- {!!Form::open(['id'=>'billing-form'])!!}
  <span class="payment-errors"></span>

  <div class="form-row">
    <label>
      <span>Card Number</span>
      <input type="text" size="20" data-stripe="number"/>
    </label>
  </div>

  <div class="form-row">
    <label>
      <span>CVC</span>
      <input type="text" size="4" data-stripe="cvc"/>
    </label>
  </div>

  <div class="form-row">
    <label>
      <span>Expiration (MM/YYYY)</span>
      <input type="text" size="2" data-stripe="exp-month"/>
    </label>
    <span> / </span>
    <input type="text" size="4" data-stripe="exp-year"/>
  </div>

  <button type="submit">Submit Payment</button>
</form> --}}