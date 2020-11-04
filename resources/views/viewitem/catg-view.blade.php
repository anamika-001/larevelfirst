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
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
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
                    <tr>
                        <td>FootWear</td>
                        <td>Shoes</td>
                      
                        <td>
                            
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')


@endsection