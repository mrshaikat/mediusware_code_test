@extends('admin.layouts.app')

@section('main-content')

    <div class="wrap-table shadow">
            <div class="row">
            <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Product Varient
                    <a class=" btn btn-sm btn-info" href="{{ route('variant.create') }}"></i> Add Variant</a>
                    <a class=" btn btn-sm btn-primary" href="{{ route('admin.dashboard') }}"></i> Dashboard</a>
                   
                </h4>
                
        
            </div>
            <div class="card-body">
               
               <div class=" table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Date</th>
                           
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($all_variant as $variant)
                            <tr>
                                <td>{{ $loop -> index + 1 }}</td>
                                <td>{{ $variant -> title }}</td>
                                <td>{{ $variant -> description }}</td>
                                <td>{{ $variant -> created_at ->  diffForHumans() }}</td>
                            
                                <td>
                                
                                    <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                
                                </td>
                            </tr>
                       @endforeach
                      
                        
    
                    </tbody>
                </table>
               </div>
            </div>
        </div>
    
</div>
    </div>
</div>
@endsection