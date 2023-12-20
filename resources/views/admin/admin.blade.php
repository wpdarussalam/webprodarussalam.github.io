@extends('layouts.app')
@section('title','Dashboard Aplikasi Peminjaman Lab CBT')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">ADMIN</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ADMIN</li>
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
                <div class="card-body">

                    <a href="{{ route('admin.tambah_admin') }}" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm mb-3">
                        <i class="bi bi-person-add"></i> Tambah Admin</a>
                    <!-- table disini -->
                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>nama</th>
                                <th>username</th>
                                <!-- <th>password</th> -->
                                <th style="width: 40px">Edit/ Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $row)
                            @php
                            $count=1
                            @endphp
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <!-- <td>{{ $row->password }}</td> -->
                                <td><a href="{{ route('admin.tampiladmin', $row->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                                    <a href="{{ route('admin.hapus', $row->id) }}" class="btn btn-danger"><i class="bi bi-trash3-fill"></i>Hapus </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.card -->

                <!-- DIRECT CHAT -->

                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->

            </div>
            <!-- /. tools -->
        </div>
        <!-- /.card-header -->

        <!-- /.card-body -->
        <!-- </div> -->
        <!-- /.card -->
    </section>
    <!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@endsection