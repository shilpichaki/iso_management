@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('certificationbody.create ') }}"> Create New</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ISO</th>
            <th>Certification Body</th>
            <th>Accreedetation</th>
            <!-- <th>Details</th> -->
            <th width="280px">Action</th>
        </tr>
        @foreach ($certificationbodys as $certificationbody)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $certificationbody->name }}</td>
            <!-- <td>{{ $product->detail }}</td> -->
            <td>
                <form action="{{ route(certificationbody.destroy',$certificationbody->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('certificationbody.show',$certificationbody->id) }}">Show</a>

 
    
                    <a class="btn btn-primary" href="{{ route('certificationbody.edit',certificationbody->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
      
@endsection