@extends('layouts.index')
@section('title', 'Add Admin')


@section('content')
<div class="content-wrapper py-3">
 <div class="container-fluid">
 <div class="card mb-3">
                <!-- START PANEL -->
                   <form action="{{ url('/add/user')  }}" method="post"  enctype="multipart/form-data">
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
                    <legend>Add New Admin</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Username</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" name="username">
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" name="email">
                                                     
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" id="title" name="password">
                        </div>
                    </div>
                  
                    <div class="form-group">
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
              
                </fieldset>
                <!-- END PANEL -->

          </div>
        </div>
      </div>
@endsection
