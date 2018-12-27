@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('certificationbody.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('certificationbody.store') }}" method="POST">
    @csrf
    <div class="row">
       <div class="col-md-6 col-sm-6 col-md-6">
           <select name="name" class="form-control">
                <option>Select ISO</option><!--selected by default-->
    
          </select>
      </div>
    </div>
     <div class="row">
        <div class="col-md-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Certificate Body</strong>
                <input type="text" name="certification_body_name" class="form-control" placeholder="Body">
            </div>
        </div>
     </div>
     <div class="row">
        <div class="col-md-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Accreditation</strong>
                <input type="text" class="form-control" name="accreditation" placeholder="Accreditation">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection