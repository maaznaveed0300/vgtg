@extends('layouts.admin')
@section('content')
@section('title','dashboard')
<div class="content-wrapper">

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12 bg-white p-2">
                <table class="table table-responsive-md table-striped">
                    <tbody>
                        <tr>
                            <td>
                                <h4>Introduction</h4>
                            </td>
                            <td>
                                VgTg.online website has been created to hold virtual entertainment events watched by anyone globally; if you are an artists, poets, musicians, performers VgTg allows you to meet with your fans; wherever you live you can hold your own virtual entertainment event for your fans; load your profile on www.vgtg.online today to provide a chance to your fans to meet with you
                            </td>
                        </tr>
                        <tr id="pvid">
                            <td style="width: 20%">
                                <h4>Promo Video</h4>
                            </td>
                            <td style="width: 80%">
                                <video id="singer-video" width="350" height="300" controls>
                                    <source src="{{ asset('vgtgvid/WhatsApp_Video_2020-04-16_at_3.41_.27_PM_.mp4') }}">
                                </video>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%">
                                <h4>Audio Introduction</h4>
                            </td>
                            <td id="singer-intro" style="width: 80%">
                                <audio controls>
                                    <source src="{{ asset('vgtgvid/PTT-20200417-WA0004.mp3') }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                  </audio>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- /.container-fluid -->
  </section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Artist Profile - Tell Us More About You</h1>
            </div>
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">About Us</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{ url('artistupdated') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $artist->id }}" name="id">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="inputtitle">Full Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $artist->name }}" id="inputtitle" placeholder="Enter Full Name">
                      </div>
                      <div class="form-group">
                        <label for="inputstatus">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $artist->email }}" id="inputemail" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="inputstatus">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ $artist->phone }}" id="inputstatus" placeholder="Enter phone">
                      </div>
                      <div class="form-group">
                        <label for="summernote">Introduction</label>
                        <div class="card-body">
                            {{-- <input type="text" name="description" class="form-control" id="summernote" placeholder="Enter description"> --}}
                            <textarea class="form-control" id="summernote" name="introduction">
                            </textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputtitle">Expertise</label>
                        <select name="expertise[]" id="expertise" class="form-control" multiple>

                          @foreach ($expertises as $item)

                        <option value="{{ $item->id }}">{{ $item->expertise }}</option>
                        @endforeach

                      </select>
                      </div>
                      <div class="form-group">
                        <label for="inputtitle">You Were Introduced To VGTG by (Name)</label>
                        <input type="text" name="refferedby" class="form-control" id="inputtitle" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="inputtitle">Gender</label>
                        <select name="gender" id="" class="form-control">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Proile Picture</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="image" class="form-control" id="exampleInputFile">
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
                            <input type="file" name="video" class="form-control" id="exampleInputFile">
                            {{-- <label class="form-control" for="exampleInputFile">Choose file</label> --}}
                          </div>
                          {{-- <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div> --}}
                        </div>
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
            <div class="col-md-12">
                <table class="table table-responsive-md table-striped"  id="userdata">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Expertise
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $c = 0;
                        @endphp
                        @foreach($experties_list as $expertise)
                        @php
                            $c++;
                        @endphp
                        <tr>
                            <td>{{ $c }}</td>
                          <td>{{$expertise->expertise}}</td>
                          <td><a class="btn btn-danger" href="{{ url('/delete/expertise/'. $expertise->id) }}">Delete</a></td>
                        </tr>
                         @endforeach
                       {{-- @foreach ($expertise as $a)
                       <tr>

                        <td>{{ $artist->expertise_id }}</td>
                        <td> {{ $a->expertise }}</td>
                        <td></td>

                       </tr>
                       @endforeach --}}
                    </tbody>
                </table>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">

            </div>

          <!-- ./col -->
        </div>
    </div><!-- /.container-fluid -->
  </section>

</div>
@endsection
