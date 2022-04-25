@extends('dashboard.main')
@section('container')
    @include('dashboard.partials.header')
    @include('dashboard.partials.sidebar')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Halaman Guru</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html"><i class="la la-home font-20"></i></a>
                </li>
                <li class="breadcrumb-item">Tambah Data Guru</li>
            </ol>
        </div>
        <div class="page-content fade-in-up">
            <div class="ibox col-8 centered">
                <div class="ibox-head">
                    <div class="ibox-title">Data Guru</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <span class="text-danger"><i>note: lewati untuk data yang kosong</i></span>
                    <form class="mt-3" method="POST" action="/guru" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>NUTPK</label>
                            <input class="form-control" type="text" name="nutpk">
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Nomor Kartu Keluarga</label>
                                <input class="form-control" type="text" name="no_kk_guru">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Nomor Kartu Tanda Penduduk</label>
                                <input class="form-control" type="text" name="no_ktp_guru">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Nama Lengkap</label>
                                <input class="form-control" type="text" name="nama_guru">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Jabatan</label>
                                <input class="form-control" type="text" name="jabatan_guru">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tempat Tanggal Lahir</label>
                            <input class="form-control" type="text" name="ttl_guru">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" type="text" name="alamat_guru"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email_guru">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Telepon</label>
                                <input class="form-control" type="text" name="tlp_guru">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Nama Ibu Kandung</label>
                                <input class="form-control" type="text" name="nama_ibu_guru">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Pendidikan Terakhir</label>
                                <input class="form-control" type="text" name="pen_akhir_guru">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Foto Profil</label>
                            <input class="form-control" type="file" name="foto_guru">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit"><i class="fa-solid fa-check"></i>&nbsp;
                                Tambah
                                Data
                                Guru</button>
                            <a href="/guru" type="button" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT-->
        @include('dashboard.partials.footer')
    </div>
@endsection
