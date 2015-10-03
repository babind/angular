<!DOCTYPE html>
<html>
	
    <head>
        <meta charset="utf-8">
       	<meta name="publishable-key" content="{{ Config::get('stripe.stripe.public')}}">
        
        <link rel='stylesheet', href="css/bootstrap.min.css">
            
          </style>
    </head>
    <body>
   
   @if(Session::has('flas_message'))
   	<div class="flash_message">
		
		{!!Session::get('flas_message')!!}
		</div>
	@endif

   	<div class="container">

   	@yield('content')
   	</div>
   	
{{-- 
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
     --}}
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

   	<script src="https://checkout.stripe.com/v2/checkout.js"></script>
   	<script src="https://js.stripe.com/v2/"></script>
   	<script src="js/billing.js"></script>
        	
        
	
	@yield('footer')
    </body>
</html>