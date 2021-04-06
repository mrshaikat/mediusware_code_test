@extends('admin.layouts.app')

@section('main-content')
<div class="wrap-table shadow">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">All Product
                <a href="{{ route('product.index') }}" class="btn btn-primary btn-sm text-right"></i>Product</a>
                <a href="{{ route('variant.index') }}" class="btn btn-primary btn-sm text-left"></i>Variant</a>
                <a href="{{ route('product-variant.index') }}" class="btn btn-primary btn-sm text-left"></i>Product Variant</a>
            </h4>
            
    
        </div>
        <div class="card-body">
           
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Cell</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Asraful Haque</td>
                        <td>haq@gmail.com</td>
                        <td>01717700811</td>
                        <td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
                        <td>
                           
                            <a class="btn btn-sm btn-warning" href="#">Edit</a>
                           
                        </td>
                    </tr>
                  
                    

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection