@extends('layouts.index')
@section('title', 'Edit Product')

@section('content')
 <div class="content-wrapper py-3">
 <div class="container-fluid">
 	<form class="form-horizontal" action="/products/{{$product->id}}" method="post">
                {{csrf_field()}}
                {{method_field('PUT')}}

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

               

                <fieldset>
                    <legend>Edit Product</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" name="title" value="{!! $product->title !!}">
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Price</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" name="price" value="{!! $product->price !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="content" name="description">{!! $product->description !!}</textarea>
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Cover Image</label>
                       <textarea class="form-control" rows="3" id="content" name="path">{!! $product->path !!}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
              
                </fieldset>
            </form>
        </div>
    </div>
@endsection