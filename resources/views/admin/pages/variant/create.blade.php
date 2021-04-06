@extends('admin.layouts.app')

@section('main-content')
<div class="row">
    <div class="col-md-10">
        <div class="wrap shadow">
            <div class="card">
                <div class="card-body">
                    <h2>Create new Variant</h2>
                    <form action="{{ route('variant.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input class="form-control" type="text" name="title">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="descrip" id="post_editor" cols="40" rows="10"></textarea>
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