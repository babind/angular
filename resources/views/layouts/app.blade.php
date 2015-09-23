<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Page with Mega Menu</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body>
    <div class="main-container">
	<div class="container-fixed">
                        <div class="header">
                                @include('layouts.partial.header')
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                @include('layouts.partial.sidebar')
                            </div>

                            <div class="col-md-9">
                                    <div class="container-fixed"> 
                                        <div class="ng-app">

                                                <div class="ng-view">
                                                    @yield('content')                        

                                                </div>
                                        </div>
                                    </div>
                              </div>  
                        </div>
                    <div class="footer">
                        Powered by Ideasoffshore

                    </div>
            </div>
        </div>
            <script src="/js/jquery.js"></script>
            <script src="/js/bootstrap.min.js"></script>

        <script src="/js/angular.min.js"></script> 
        <script src="/js/angular-route.min.js"></script>	       
        <script src="/app/src/app.js"></script>

           
</body>


</html>

