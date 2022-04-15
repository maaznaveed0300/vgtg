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
                    <h1 class="m-0">Home</h1>
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
                    <div class="col-md-12">
                        <form action="{{ route('admin.dashboard')}}" method="POST" >
                            @csrf
                            <div class="input-group input-group-sm">
                                <input type="hidden">
                                <input type="text" name='expertise' class="form-control">
                                <span class="input-group-append">
                                  <button type="submit" class="btn btn-info btn-flat">Add Expertise</button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12">

                        <table class="table table-responsive-md table-striped" style="margin-top: -400px">
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Expertise
                                    </th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expertises as $e)
                                    <tr>
                                        <td>{{$e->id}}</td>
                                        <td>
                                            {{$e->expertise}}
                                        </td>
                                        <td>

                                            {{-- <a href="" data-id="{{ $e->id }}" class="btn btn-primary">Update</a><br><br>
                                            <a href={{"/admin/deleteexpertise/".$e->id}} data-id="{{ $e->id }}"  class="btn btn-primary">Delete</a> --}}
                                        </td>
                                    </tr><br><br>

                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>

              <!-- ./col -->
            </div>
        </div>
    </section>



@endsection
