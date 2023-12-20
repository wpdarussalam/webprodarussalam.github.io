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
                    <h1 class="m-0">DETIL PEMINJAMAN</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Detil Peminjaman</li>
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
                            <form action="{{ route('peminjaman.simpanDetailPinjaman',$id_peminjaman) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card shadow mb-4">

                                            <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">id_userprodi</label>
                                                </div>
                                                <div class="col-sm-8 mb-3">
                                                    <select class="form-control" name="id_userprodi">
                                                        @foreach($prodi as $p)
                                                        <option value="{{ $p->id }}">{{ $p->nama_prodi }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">nama_penanggung_jawab</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nama_penanggung_jawab" name="nama_penanggung_jawab">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">no_kontak</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="phone" class="form-control" id="no_kontak" name="no_kontak">
                                                    <input type="hidden" class="form-control" id="no_kontak" name="id_peminjaman" value="{{ $id_peminjaman }}">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">Sesi</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="id_sesi">
                                                        @foreach($sesi as $s)
                                                        <option value="{{ $s->id }}">{{ $s->nama_sesi . " (".$s->waktu.")" }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group row mb-3">
                                                <div class="col-sm-4">
                                                    <label class="form-text" style="text-align:left">Id Kepala CBT</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="id_kepala_cbt" name="id_kepala_cb">
                                                </div>
                                            </div> -->

                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-success">Simpan</button>
                        </div>

                        </form>
                        <table class="table table-bordered">

                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Sesi</th>
                                    <th>Jam</th>
                                    <th>Prodi</th>
                                    <th>Nama Penanggung Jawab</th>
                                    <th>Kontak</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($peminjaman as $row)
                                @php
                                $count=1
                                @endphp
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $row->nama_sesi }}</td>
                                    <td>{{ $row->waktu }}</td>
                                    <td>{{ $row->nama_prodi }}</td>
                                    <td>{{ $row->nama_penanggung_jawab }}</td>
                                    <td>{{ $row->no_kontak }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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