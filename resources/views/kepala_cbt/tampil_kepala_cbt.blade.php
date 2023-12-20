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
                    <h1 class="m-0">UPDATE KEPALA CBT</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Kepala CBT</li>
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
                            <form action="{{ route('kepala_cbt.kepala_cbt_update', $kepala_cbt->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card shadow mb-4">
                                            <div class="card-body">
                                                <!-- <div class="form-group row mb-3">
                                                    <div class="col-sm-4">
                                                        <img src="{{ asset('gambar/' . $kepala_cbt->gambar) }}" width="200" height="400" alt="gambar">
                                                    </div>
                                                </div> -->
                                                @error('judul')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">NIP</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="nip" name="nip" value="{{ $kepala_cbt->nip}}">
                                                </div>
                                                @error('judul')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">Nama</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $kepala_cbt->nama}}">
                                                </div>
                                                @error('judul')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">User Name</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="user_name" name="user_name" value="{{ $kepala_cbt->user_name}}">
                                                </div>
                                                @error('judul')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">Password</label>
                                                </div>
                                                <div class="col-sm-8 mb-3">
                                                    <input type="password" class="form-control" id="password" name="password" value="{{ $kepala_cbt->password }}">
                                                </div>
                                                @error('judul')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">Email</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="email" name="email" value="{{ $kepala_cbt->email }}">
                                                    <!-- <input type="hidden" class="form-control" id="keterangan" name="gambar_lama" value="{{ $fasilitas->gambar }}"> -->
                                                </div>
                                                @error('judul')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">Kontak</label>
                                                </div>
                                                <div class="col-sm-8 mb-3">
                                                    <input type="number" class="form-control" id="kontak" name="kontak" value="{{ $kepala_cbt->kontak }}">
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