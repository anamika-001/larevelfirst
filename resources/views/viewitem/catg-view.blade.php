@extends('layouts.admin')

@section('title')
  
Admin panel
 
@endsection

@section('content')

<div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h3>Category Product Details</h3></div>
                    <div class="col-sm-4">
                     <a href="{{url('categories')}}" type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th><b>Product category</b></th>
                        <th><b>Product Name</b></th>
                       
                        <th><b>Actions</b></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->product }}</td>
                      
                        <td>
                        
                            <a href = 'editcat/{{ $category->id }}' type="submit" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href = 'deletecat/{{ $category->id }}' class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                     
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