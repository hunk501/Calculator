@extends('template.app')

@section('bodyContent')
<div id="page-wrapper">
    <br>
    <div class="row">
        @if(isset($records))
            @foreach($records as $key => $record) 
                <div class="col-lg-3 col-md-9">
                    <div class="panel {{ $record['panel_heading'] }}">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-lg-12 text-right">                                    
                                    <div>{{ $record['name'] }}</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('insurance') .'/edit/'. $record['id'] }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        @endif    
    </div>
</div>
<script>
</script>
@endsection