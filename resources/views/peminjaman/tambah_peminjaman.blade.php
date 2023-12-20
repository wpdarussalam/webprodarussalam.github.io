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
                    <h1 class="m-0">TAMBAH PEMINJAMAN</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Peminjaman</li>
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
                    <div class="card mb-4">
                        <div class="card-body">
                            @if($errors->any())
                            {!! implode('', $errors->all('<div style="color:red">:message</div>')) !!}
                            @endif
                            @if(Session::get('error') && Session::get('error') != null)
                            <div style="color:red">{{ Session::get('error') }}</div>
                            @php
                            Session::put('error', null)
                            @endphp
                            @endif
                            @if(Session::get('success') && Session::get('success') != null)
                            <div style="color:green">{{ Session::get('success') }}</div>
                            @php
                            Session::put('success', null)
                            @endphp
                            @endif
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card shadow mb-4">
                                            <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">Tanggal Mulai/ Selesai</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai">
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                    <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai">
                                                </div>
                                                @error('judul')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">Keperluan</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="keperluan" name="keperluan">
                                                </div>
                                                @error('judul')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">Penggunaan Internal</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="is_internal">
                                                        <option value="0">Tidak</option>
                                                        <option value="1">Ya</option>
                                                    </select>
                                                </div>
                                                @error('judul')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <!-- <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">Id Kepala CBT</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="id_kepala_cbt" name="id_kepala_cb">
                                                </div>
                                                @error('judul')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div> -->

                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-success">Simpan</button>
                        </div>

                        </form>
                    </div>
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