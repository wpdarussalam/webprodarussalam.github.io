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
                    <h1 class="m-0">UPDATE EXTERNAL</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update External</li>
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
                            <form action="{{ route('peminjaman.peminjaman_external', $row->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card shadow mb-4">
                                            <div class="card-body">
                                                <!-- <div class="form-group row mb-3">
                                                    <div class="col-sm-4">
                                                        <img src="{{ asset('gambar/' . $peminjaman->gambar) }}" width="200" height="400" alt="gambar">
                                                    </div>
                                                </div> -->
                                                @error('judul')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">No Peminjaman</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="no_peminjaman" name="no_peminjaman" value="{{ $peminjaman->no_peminjaman}}">
                                                </div>
                                                @error('judul')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">Tanggal Mulai</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{ $peminjaman->tanggal_mulai }}">
                                                </div>
                                                @error('judul')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">tanggal_selesai</label>
                                                </div>
                                                <div class="col-sm-8 mb-3">
                                                    <input type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="{{ $peminjaman->tanggal_selesai }}">
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
                                                    <input type="text" class="form-control" id="keperluan<" name="keperluan<" value="{{ $peminjaman->keperluan }}">
                                                    <!-- <input type="hidden" class="form-control" id="keterangan" name="gambar_lama" value="{{ $peminjaman->gambar }}"> -->

                                                </div>
                                                @error('judul')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">Penggunaan External</label>
                                                </div>
                                                <div class="col-sm-8 mb-3">
                                                    <select class="form-control" name="is_external">
                                                        <option value="0" @if($peminjaman->is_external == 0) selected @endif>Tidak</option>
                                                        <option value="1" @if($peminjaman->is_external == 1) selected @endif>Ya</option>
                                                    </select>
                                                </div>
                                                @error('judul')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-warning">Edit</button>

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