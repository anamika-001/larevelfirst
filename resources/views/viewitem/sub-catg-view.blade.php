@extends('layouts.admin')

@section('title')
  
Admin panel
 
@endsection

@section('content')
<div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h3>Subcategory Product Details</h3></div>
                    <div class="col-sm-4">
                        <a href="{{url('sub-categories')}}" type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                </div>
            </div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                       <th><b>category Id</b></th>
                        <th><b>Subcategories</b></th>
                        <th><b>Name</b></th>
                        <th><b>Actions</b></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($subcategories as $subcateg)
                    <tr>
                    
                    <td>{{ $subcateg->catg_id}}</td>
                    <td>{{ $subcateg->subcateg }}</td> 
                    <td>{{ $subcateg->name }}</td> 
                    <td>
                    <a href = 'editsubcatgory/{{ $subcateg->id }}' class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                    <a href = 'deletesubcat/{{ $subcateg->id }}' class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                    </td>
                     
                       
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('scripts')


@endsection