@extends('template.app')

@section('bodyContent')
<div id="page-wrapper">    
    @if(Session::has('success'))
    <br>
    <div class="alert alert-success">
        <a href="#" data-dismiss="alert" area-label="close">&times;</a>&nbsp;&nbsp;
        <strong>{{ Session::get('success') }}</strong>        
    </div>        
    @endif
    <br>
    <div class="row">
        <a href="{{ url('insurance/add/'. $id) }}" class="btn btn-success">New Type</a> &nbsp;&nbsp;
    <!-- <button class="btn btn-danger">Delete</button> -->
    </div>
    <br>    
    <div class="row">        
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>                                    	                    
                    <th>Type</th>
                    <th>Net Rate</th>
                    <th>BIPD</th>
                    <th>Tax</th>
                    <th>Other</th>                                        
                </tr>
            </thead>
            <tbody>
                @if(isset($records))                
                @foreach($records as $key => $record)
                <tr row-id="{{ $record->id }}" style="cursor:pointer;">											
                    <td>{{ strtoupper($record->insurance_type) }}</td>                    
                    <td>{{ $record->net_rate }}</td>
                    <td>{{ $record->bipd }}</td>
                    <td>{{ $record->tax }}</td>
                    <td>{{ $record->other }}</td>
                </tr>
                @endforeach
                @endif	                                    	                                   
            </tbody>
        </table>
    </div>
</div>
<script>
$(document).ready(function(){
    var _base_url = $("base").attr('href');
    var _data = {
        _token: $('input[nam=_token]').val()
    };
    console.log(_base_url);
    
    // Button Compute
    $('#btn-compute').click(function(){
        //$("#form1").submit();
        $.ajax({
            type: 'POST',
            url: _base_url + '/application/compute',
            data: $("#form1 input[type=hidden], #form1 input[type=text]"),
            dataType: 'json',
            beforeSend: function() {
                _inputFields(true);
            },
            success: function(json) {                
                $("#form2").show();
                $("#form2 input[type=text]").each(function(){
                    $(this).val('');
                });

                console.log(json);
            },
            error: function(err) {
                console.log("Error: ");
                console.log(err.responseText);
            }
        });
    });

    // Reset Button
    $("#btn-reset").click(function(){
        _inputFields(false);
    });

    // tr event
    $('tr').click(function(){
        var _id = $(this).attr('row-id');
        location = "{{ url('insurance/type/') .'/' }}" + _id;
    });

    $('#dataTables-example').DataTable();
});
function _inputFields(disabled) {
    $("#form1 input[type=text]").each(function(){
        $(this).prop('disabled', disabled);
    });
}
</script>
@endsection