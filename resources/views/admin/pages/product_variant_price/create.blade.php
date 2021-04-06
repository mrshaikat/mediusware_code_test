@extends('admin.layouts.app')

@section('main-content')
<div class="row">
    <div class="col-md-10">
        <div class="wrap shadow">
            <div class="card">
                <div class="card-body">
                    <h2>
                    <a href="{{ route('product-variant-price.index') }}" class="btn btn-primary btn-sm text-right mr-3"></i>Back</a>Create new Variant Price</h2>
                    <form action="{{ route('product-variant-price.create') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Product Variant</label>
                            
                            
                        </div>

                        <div class="form-group">
                            <label for="">Product</label>
                            @foreach ( $all_product as $product )

                            <div class="checkbox ml-5">
                                <label>
                                    <input type="checkbox" name="product_id[]" value="{{ $product -> id }}"> {{ $product -> title }}
                                </label>
                            </div>
                            @endforeach
                            
                        </div>

                        <div class="form-group">
                            <label for="">Varient</label>
                            @foreach ( $all_product as $product )
                            
                            <div class="checkbox ml-5">
                                <label>
                                    <input type="checkbox" name="product_id[]" value="{{ $product -> id }}"> {{ $product -> title }}
                                </label>
                            </div>
                            @endforeach
                            
                        </div>


                        <div class="form-group">
                            <label for="">Stock</label>
                           <input type="text" class=" form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Price</label>
                           <input type="number" class=" form-control">
                        </div>
                      
                        
                        
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Add Variant">
                        </div>
        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection