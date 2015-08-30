@extends('layout.company.app')
@section('content')
    <?php

      if(!Auth::guest())
      {
        $login = 'true';
        $user = Auth::user()->toArray();
      }
      else
      {
        $login='false';
        $user=null;
      }
    ?>


 <div class="container-fluid" ng-app='SearchEmployee'>

    <div ng-view>

    </div>

  </div>

 <div class="row">
  <div class="col-md-10">
      <div class="panel">
          <div class="panel-heading">
              <h3 class="panel-title text-info">New</h3>
          </div>
          <div class="panel-body">
            <div class="form-group">
                  <div class="col-md-8">
                      {!!Form::open(['route'=>'searches.store'])!!}
                      {!!Form::text('search',null,['class'=>'form-control'])!!}
                  </div>
                  <div class="col-md-4">
                      {!!Form::submit('Search',['class'=>'btn btn-sm btn-info'])!!}
                      {!!Form::close()!!}
                  </div>
              </div>
          </div>
      </div>
    </div>
</div>

 <script type="text/javascript">

      var base_url    =   '<?php echo url(); ?>',
              user    =   <?php echo json_encode($user) ?>,
             login    =   <?php echo $login ?>;

    </script>

      <script src="{{ url('js/angular.min.js') }}"></script>
      <script src="{{ url('js/angular-route.min.js') }}"></script>
      <script src="{{ url('js/ui-bootstrap-tpls-0.13.3.js') }}"></script>
      <script src="{{ url('searchemployee/app.js') }}"></script>


  <?php if(isset($employees)==true){;?>
@foreach($employees as $employee)

<div class="row">
  <div class="col-md-10">
      <div class="panel">
          <div class="panel-heading">
              <h3 class="panel-title text-info"></h3>
          </div>
          <div class="panel-body">

              {{$employee->first_name}}
              {{$employee->country}}
              {{$employee->contact_no}}
              {{$employee->status}}
              {{$employee->profile_pic}}
              {{$employee->hourly_rate}}

          </div>
      </div>
  </div>
</div>
@section('scripts')
  <script src="{{ url('assets/plugins/typeahead/js/typeahead.jquery.min.js')}}"></script>
@stop
@endforeach
<?php } ;?>


  @stop
