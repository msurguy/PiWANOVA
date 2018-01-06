@extends('master')

@section('content')
    <div class="container">

      @isset($dashboard['news'])
      
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-warning">
            News: {{$dashboard['news']}}
          </div>
        </div>
      </div>
      
      @endisset

      <div class="row">

        @isset($dashboard['forecast']['current']['temp'])
        <div class="col-md-3">
          <div class="panel panel-primary">
              <div class="panel-heading">Current weather</div>
              <div class="panel-body">
                 <h1>{{$dashboard['forecast']['current']['temp']}}</h1>
              </div>
          </div>
        </div>
        @endisset

        @isset($dashboard['forecast']['3day'][0])

        <div class="col-md-3">
          <div class="panel panel-primary">
              <div class="panel-heading">Forecast for tomorrow</div>
              <div class="panel-body">
                 <h1>{{$dashboard['forecast']['3day'][0]['temp']}}</h1>
                 <h2>{{$dashboard['forecast']['3day'][0]['conditions']}}</h2>
              </div>
          </div>
        </div>
        @endisset

        @isset($dashboard['forecast']['3day'][1])
        <div class="col-md-3">
          <div class="panel panel-primary">
              <div class="panel-heading">Forecast for Jan 7th</div>
              <div class="panel-body">
                 <h1>{{$dashboard['forecast']['3day'][1]['temp']}}</h1>
                 <h2>{{$dashboard['forecast']['3day'][1]['conditions']}}</h2>
              </div>
          </div>
        </div>
        @endisset

        @isset($dashboard['forecast']['3day'][1])
        <div class="col-md-3">
          <div class="panel panel-primary">
              <div class="panel-heading">Forecast for Jan 8th</div>
              <div class="panel-body">
                 <h1>{{$dashboard['forecast']['3day'][2]['temp']}}</h1>
                 <h2>{{$dashboard['forecast']['3day'][2]['conditions']}}</h2>
              </div>
          </div>
        </div>
        @endisset

      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <signatures></signatures>
            </div>
        </div>
    </div>
@endsection