@extends('template.app')

@section('bodyContent')
<div id="page-wrapper">
    @if(Session::has('success'))    
    <div class="alert alert-success" style="margin-top: 10px;">
        <a href="#" data-dismiss="alert" area-label="close">&times;</a>&nbsp;&nbsp;
        <strong>{{ Session::get('success') }}</strong>        
    </div>        
    @endif
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">{{ $name }}</h3>            
        </div>        
    </div>
    <div class="row">     
        <div id="form" class="col-lg-5"><!-- Form -->
            {{ csrf_field() }}
            <input type="hidden" name="insurance_id" value="{{ $id }}"/>
            <div class="form-group">
                <label>Coverage:</label>
                <input type="text" name="coverage" class="form-control" maxlength="12" autofocus>                        
            </div>
            <div class="form-group">
                <label>Type:</label>
                <select name="type" id="inc_type" class="form-control">                    
                    @if(isset($insurance_type))
                        @foreach($insurance_type as $ky => $insurance)
                        <option value="{{ $insurance['id'] }}">{{ $insurance['insurance_type'] }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div id="hid-content" style="display: none;"></div>                      
            <div class="form-group">                
                <button class="btn-compute btn btn-success">Compute</button>                
            </div>
        </div><!-- Form -->
        <div class="result col-lg-7" style=""><!-- Result -->
            <div class="form-group">
                <label class="control-label col-sm-6" for="email">NET PREMIUM:</label>
                <div class="col-sm-10">
                <input type="text" id="net_premium" class="form-control" style="border: 0px;font-size:larger;">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-6" for="email">W/ AOG:</label>
                <div class="col-sm-10">
                <input type="text" id="w_aog" class="form-control" style="border: 0px;font-size:larger;">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-6" for="email">NET WITHOUT AOG:</label>
                <div class="col-sm-10">
                <input type="text" id="net_without_aog" class="form-control" style="border: 0px;font-size:larger;">
                </div>
            </div>                    
            <div class="form-group">
                <label class="control-label col-sm-6" for="email">NET WITH AOG:</label>
                <div class="col-sm-10">
                <input type="text" id="net_with_aog" class="form-control" style="border: 0px;font-size: 28pt;background-color: brown;color: white;">
                </div>
            </div>
        </div><!-- /Result -->
    </div>
</div>
<div style="display: none;">
@if(isset($insurance_type))
    @foreach($insurance_type as $key => $list)
        <div id="type_{{ $list['id'] }}"> 
            <div class="form-group">
                <label>Net Rate:</label>
                <input type="text" name="net_rate" class="form-control" value="{{ $list['net_rate'] }}">                        
            </div>
            <div class="form-group">
                <label>BIPD:</label>
                <input type="text" name="bipd" class="form-control" value="{{ $list['bipd'] }}">                        
            </div>
            <div class="form-group">
                <label>TAX:</label>
                <input type="text" name="tax" class="form-control" value="{{ $list['tax'] }}">                        
            </div>
        </div>
    @endforeach
@endif
</div>
<script>
$(document).ready(function(){    
    $(".btn-compute").click(function(){
        _compute();
    });
    $("#form input[type=text], #form select").each(function(){
        $(this).keyup(function(){            
            //_compute();
            //console.log("val: ", $(this).val() );
        });
    });
    $("#inc_type").change(function(){
        var _id = $(this).val();
        _render( _id );
    });

    _render( $("#inc_type").val() );
    console.log( $("#inc_type").val() );
});
function _compute() {
    var _data = $("#form input[type=text], #form input[type=hidden]");
    $.ajax({
        type: 'POST',
        url: "{{ url('/compute/process') }}",
        data: _data,
        dataType: 'json',
        beforeSend: function() {
            
        },
        success: function(json) {
            if(json.success) {
                var result = json.formula;
                // display
                $("#net_premium").val( result.net_premium );
                $("#net_without_aog").val( result.net_premium );
                $("#w_aog").val( result.w_aog );
                $("#net_with_aog").val( result.net_with_aog );

                //console.log(json);
                //console.log(result);
            }                
        },
        error: function(err) {
            console.log(err.responseText);
            alert('An error was encountered!');
        },
        complete: function() {
            
        }
    });    
}
function _render(id) {
    var _div = $("#type_"+ id).html();
    $("#hid-content").html( _div );
}
</script>
@endsection