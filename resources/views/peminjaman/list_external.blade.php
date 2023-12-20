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
                    <h1 class="m-0">LIST EXTERNAL </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">List External</li>
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
                    <a href="{{ route('peminjaman.tambah_eksternal') }}" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm mb-3">
                        <i class="bi bi-person-add"></i> List External</a>
                    <!-- table disini -->
                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>no_peminjaman</th>
                                <th>tanggal_mulai</th>
                                <th>tanggal_selesai</th>
                                <th>keperluan</th>
                                <th>Status</th>
                                <th style="width: 40px">Edit/ Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($peminjaman as $row)
                            @php
                            $count=1
                            @endphp
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $row->no_peminjaman }}</td>
                                <td>{{ $row->tanggal_mulai }}</td>
                                <td>{{ $row->tanggal_selesai }}</td>
                                <td>{{ $row->keperluan }}</td>
                                <td>
                                    @if($row->is_internal==1)
                                    {{ $status1 }}
                                    <a href="{{ route('peminjaman.detailExternal', $row->id) }}" class="btn btn-primary" target="_blank">DETAIL</a>
                                    @else
                                    {{ $status2 }}
                                    <a href="{{ route('peminjaman.detailExternal', $row->id) }}" class="btn btn-primary">DETAIL</a>
                                    @endif
                                </td>
                                <td>

                                </td>
                                <!-- <td><img src="{{ asset('gambar_fasilitas/' . $row->gambar) }}" width="200" height="300" alt="Gambar"></td> -->
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