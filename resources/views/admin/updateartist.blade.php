@extends('layouts.admin')
@section('content')
@section('title','dashboard')
<div class="content-wrapper">

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>General Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Artist</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="/artistupdated" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$artist->id}}">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="inputtitle">Full Name</label>
                        <input type="text" name="name" value="{{ $artist->name }}" class="form-control" id="inputtitle" placeholder="Enter title">
                      </div>
                      <div class="form-group">
                        <label for="inputtitle">Expertise</label>
                        <input type="text" name="name" value="{{ $artist->expertise }}" class="form-control" id="inputtitle" placeholder="Enter title">
                      </div>
                      <div class="form-group">
                        <label for="summernote">Introduction</label>
                        <div class="card-body">
                            {{-- <input type="text" name="description" class="form-control" id="summernote" placeholder="Enter description"> --}}
                            <textarea class="form-control"  id="summernote" name="introduction">
                                {{$artist->introduction}}
                            </textarea>
                        </div>
                      </div>
                      {{-- <div class="form-group">
                        <label for="summernote">Description</label>
                        <textarea class="form-control" value="{{ $aboutus->description }}" id="summernote" name="description">
                        </textarea>
                        <input type="text" name="description" value="{{ $aboutus->description }}" class="form-control" id="inputdescription" placeholder="Enter description">
                      </div> --}}
                      <div class="form-group">
                        <label for="exampleInputFile">Profile Picture</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="image" class="form-control" id="exampleInputFile">
                            <img src="{{ asset('saved_images/'.$artist->profile_picture) }}" width="70px" height="70px" alt="imagenotfound">
                            {{-- <label class="form-control" for="exampleInputFile">Choose file</label> --}}
                          </div>
                          {{-- <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div> --}}
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Promo Video</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="image" class="form-control" id="exampleInputFile">
                            <video width="70px" height="70px" alt="videonotfound"> <source src="{{ asset('saved_videos/'.$artist->promo_video) }}" type='video/mp4'> </video>
                            {{-- <label class="form-control" for="exampleInputFile">Choose file</label> --}}
                          </div>
                          {{-- <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div> --}}
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputstatus">Email</label>
                        <input type="email" name="email" value="{{ $artist->email }}"  class="form-control" id="inputstatus" >
                       </div>
                       <div class="form-group">
                        <label for="inputstatus">Phone</label>
                        <input type="text" name="phone" value="{{ $artist->phone }}"  class="form-control" id="inputstatus" >
                       </div>
                       <div class="form-group">
                        <label for="inputstatus">Status</label>
                        <input type="text" name="status" value="{{ $artist->status }}"  class="form-control" id="inputstatus" >
                       </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
  </section>
</div>
@endsection
