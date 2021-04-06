@extends('admin.layouts.app')

@section('main-content')
<div class="row">
    <div class="col-md-10">
        <div class="wrap shadow">
            <div class="card">
                <div class="card-body">
                    <h2>
                        <a href="{{ route('product.index') }}" class="btn btn-primary btn-sm text-right"></i>Back</a>
                        Create new Product</h2>
                   
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input class="form-control" type="text" name="title">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="descrip" id="post_editor" cols="0" rows="0"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Product Image</label>
                            <input type="file" class="form-control" name="product_img">
                        </div>
                      
                        
                        
                        <div class="form-group mt-2">
                            <input class="btn btn-primary" type="submit" value="Add Product">
                        </div>
        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection