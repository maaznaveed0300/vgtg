@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                {{-- <div><a href={{"/create"}} class="btn btn-primary">Add Users</a></div> --}}
                <div class="col-sm-6">
                    <h1 class="m-0">Home  </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Artist</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-md-12 bg-white p-2">
                    <table class="table table-responsive-md table-striped" id="userdata">
                        <thead>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Introduction
                                </th>
                                <th>
                                    Expertise
                                </th>
                                <th>
                                    Profile Picture
                                </th>
                                <th>
                                    Promo Video
                                </th>
                                <th>
                                    Phone
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artists as $a)
                            {{-- @if ($ab->image!=null) --}}
                                <tr>
                                    <td>
                                        {{$a->id}}
                                    </td>
                                    <td>
                                        {{$a->name}}
                                    </td>
                                    <td>
                                        {{$a->introduction}}
                                    </td>
                                    <td>
                                        {{$a->expertise}}
                                    </td>
                                    <td>
                                        <img src="{{ asset('saved_images/'.$a->profile_picture) }}" width="120px" height="120px" alt="imagenotfound">
                                    </td>
                                    <td>
                                        {{-- @php
                                        if($a->promo_video!=null) {
                                            $name = $a->promo_video;

                                            $arr = explode(".",$name);
                                            $extention = $arr[1];
                                        }
                                        else {
                                            $extention = "mp4";
                                        }


                                            //
                                            // dd($arr[1]);
                                        @endphp
                                        @if($a->promo_video!=null)
                                        <video width="120" height="120" controls>
                                            <source src="{{ asset('saved_videos/'.$a->promo_video) }}" type="video/{{$extention}}">
                                            Your browser does not support the video tag.
                                        </video>
                                        @else
                                        Video Not Available
                                        @endif --}}
                                        {{-- <video src="{{ asset('saved_videoes/'.$a->promo_video) }}" width="100px" height="100px" type="video/mp4" alt="videonotavailable"></video> --}}
                                    </td>
                                    <td>
                                        {{$a->phone}}
                                    </td>
                                    <td>
                                        {{$a->email}}
                                    </td>
                                    <td>
                                        {{$a->status==1?"Approved":"Rejected"}}
                                    </td>
                                    <td>
                                        {{-- <input type="checkbox" class="custom-control-input"
                                        {{($a->status) ? 'checked' : ''}}
                                    onclick="changeUserStatus(event.target, {{ $a->id }});"> --}}

                                        <a href="{{ url('approve/'.$a->id) }}"><button class="btn btn-primary">{{$a->status==1?"Reject":"Approve"}}</button></a>
                                        {{-- <a href={{"updateartist/".$a->id}} class="btn btn-primary">Approve</a><br><br>
                                        <a href=""{{ route('company.destroy',$element->id) }}" data-id='{{ $a->id }}'  class="btn btn-primary">Reject</a> --}}
                                    </td>
                                </tr><br><br>
                            {{-- @endif --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>

              <!-- ./col -->
            </div>
        </div>
    </section>

    <script>
        function changeUserStatus(_this, id) {
            var status = $(_this).prop('checked') == true ? 1 : 0;
            let _token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: `/change-status`,
                type: 'post',
                data: {
                    _token: _token,
                    id: id,
                    status: status
                },
                success: function (result) {
                }
            });
        }

    </script>

@endsection
