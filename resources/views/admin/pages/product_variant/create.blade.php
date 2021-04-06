@extends('admin.layouts.app')

@section('main-content')
<div class="row">
    <div class="col-md-10">
        <div class="wrap shadow">
            <div class="card">
                <div class="card-body">
                    <h2>
                    <a href="{{ route('product-variant.index') }}" class="btn btn-primary btn-sm text-right mr-3"></i>Back</a>Create new Variant</h2>
                    <form action="{{ route('product-variant.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Variant</label>
                           

                            <div class="checkbox ml-5">
                                <label>
                                    <input type="checkbox" name="p_variant[]" value="red"> red
                                </label><br>

                                <label>
                                    <input type="checkbox" name="p_variant[]" value="blue"> blue
                                </label><br>

                                <label>
                                    <input type="checkbox" name="p_variant[]" value="green"> green
                                </label><br>

                                <label>
                                    <input type="checkbox" name="p_variant[]" value="sm"> green
                                </label><br>

                                <label>
                                    <input type="checkbox" name="p_variant[]" value="xl"> xl
                                </label><br>
                                <label>
                                    <input type="checkbox" name="p_variant[]" value="xxl"> xxl
                                </label><br>
                            </div>
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
                            <label for="">Variant</label>
                            @foreach ( $all_variant as $variant )
                            <div class="checkbox ml-5">
                                <label>
                                    <input type="checkbox" name="variant_id[]" value="{{ $variant -> id }}"> {{ $variant -> title }}
                                </label>
                            </div>
                            @endforeach
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