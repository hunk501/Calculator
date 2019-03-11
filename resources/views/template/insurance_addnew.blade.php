@extends('template.app')

@section('bodyContent')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Insurance</h3>            
        </div>        
    </div>
    <div class="row">     
        <form method="POST" action="{{ url('insurance/new') }}">   
            {{ csrf_field() }}

            <div id="form1" class="col-lg-5 col-md-6">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" required autofocus>                        
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control">   
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif                     
                </div>
                <div class="form-group">
                    <label>Type:</label>
                    <input type="text" name="type" value="{{ old('type') }}" class="form-control">   
                    @if ($errors->has('type'))
                        <span class="help-block">
                            <strong>{{ $errors->first('type') }}</strong>
                        </span>
                    @endif                     
                </div>
                <div class="form-group">
                    <label>Net Rate:</label>
                    <input type="text" name="net_rate" value="{{ old('net_rate') }}" class="form-control">                        
                    @if ($errors->has('net_rate'))
                        <span class="help-block">
                            <strong>{{ $errors->first('net_rate') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>BIPD:</label>
                    <input type="text" name="bipd" value="{{ old('bipd') }}" class="form-control">                        
                    @if ($errors->has('bipd'))
                        <span class="help-block">
                            <strong>{{ $errors->first('bipd') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>TAX:</label>
                    <input type="text" name="tax" value="{{ old('tax') }}" class="form-control">                        
                    @if ($errors->has('tax'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tax') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Others:</label>
                    <input type="text" name="other" value="{{ old('other') }}" class="form-control">    
                    @if ($errors->has('other'))
                        <span class="help-block">
                            <strong>{{ $errors->first('other') }}</strong>
                        </span>
                    @endif                    
                </div>                            
                <div class="form-group">
                    <button id="btn-reset" class="btn">Reset</button> &nbsp;&nbsp;
                    <button id="btn-compute" class="btn btn-success">Submit Form</button>
                </div>                                
            </div>            
        </form>
    </div>
    <!-- <div class="row">
        <div class="col-lg-5 col-md-6">
        <table>
            <tbody>
                <tr>
                    <td>Type:</td>
                    <td><input type="text" name="other" value="{{ old('other') }}"></td>
                    <td>Net Rate:</td>
                    <td><input type="text" name="other" value="{{ old('other') }}"></td>
                    <td>BIPD:</td>
                    <td><input type="text" name="other" value="{{ old('other') }}"></td>
                    <td>Tax:</td>
                    <td><input type="text" name="other" value="{{ old('other') }}"></td>
                    <td>Others:</td>
                    <td><input type="text" name="other" value="{{ old('other') }}"></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div> -->
</div>
<br><br>
<script>
</script>
@endsection