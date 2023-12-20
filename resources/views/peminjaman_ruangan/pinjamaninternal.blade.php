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
                    <h1 class="m-0">LIST SESI PEMINJAMAN </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">List Peminjaman</li>
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
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                    </div>
                    <!-- table disini -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SESI</th>
                                <th>LIHAT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sesi as $row)
                            <tr>
                                <td>{{ $row->nama_sesi }}</td>
                                <td><a href="{{ route('peminjaman.tampilpeminjaman', $row->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i>LIHAT</a>
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