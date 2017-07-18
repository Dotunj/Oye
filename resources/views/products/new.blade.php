@extends('layouts.index')
@section('title', 'Add Products')


@section('content')
<div class="content-wrapper py-3">
 <div class="container-fluid">
 <div class="card mb-3">
                <!-- START PANEL -->
                    <form action="{{ route('products.store')  }}" method="post"  enctype="multipart/form-data">
                @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                    	@if (session('status'))
                <div class="alert alert-success">
                    {{ session('status')}}
                </div>
                @endif
                   {{csrf_field()}}
                       <fieldset>
                    <legend>Add Product</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Price</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" name="price">
                                                     
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="content" name="description"></textarea>
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Select Cover Image</label>
                       <input type="file" name="fileupload" required>
                        </div>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              
                </fieldset>
                <!-- END PANEL -->

          </div>
        </div>
      </div>
@endsection
