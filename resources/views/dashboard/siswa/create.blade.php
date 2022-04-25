@extends('dashboard.main')
@section('container')
    @include('dashboard.partials.header')
    @include('dashboard.partials.sidebar')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Halaman Siswa</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html"><i class="la la-home font-20"></i></a>
                </li>
                <li class="breadcrumb-item">Tambah Data Siswa</li>
            </ol>
        </div>
        <div class="page-content fade-in-up">
            <div class="ibox col-8 centered">
                <div class="ibox-head">
                    <div class="ibox-title">Data Siswa</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <span class="text-danger"><i>note: lewati untuk data yang kosong</i></span>
                    <form class="mt-3" method="POST" action="/siswa" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nomor Induk Siswa</label>
                            <input class="form-control" type="text" name="no_induk_siswa">
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Nomor Kartu Keluarga</label>
                                <input class="form-control" type="text" name="no_kk_siswa">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Nomor Kartu Tanda Penduduk</label>
                                <input class="form-control" type="text" name="no_ktp_siswa">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Nama Lengkap</label>
                                <input class="form-control" type="text" name="nama_siswa">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Golongan</label>
                                <input class="form-control" type="text" name="golongan_siswa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Telepon</label>
                            <input class="form-control" type="text" name="tlp_siswa">
                        </div>
                        <div class="form-group">
                            <label>Tempat Tanggal Lahir</label>
                            <input class="form-control" type="text" name="ttl_siswa">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" type="text" name="alamat_siswa"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Nama Ayah</label>
                                <input class="form-control" type="text" name="nama_ayah_siswa">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Pekerjaan</label>
                                <input class="form-control" type="text" name="pekerjaan_ayah">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Nama Ibu</label>
                                <input class="form-control" type="text" name="nama_ibu_siswa">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Pekerjaan</label>
                                <input class="form-control" type="text" name="pekerjaan_ibu">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Foto Siswa</label>
                            <input class="form-control" type="file" name="foto_siswa">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit"><i class="fa-solid fa-check"></i>&nbsp;
                                Tambah
                                Data
                                Siswa</button>
                            <a href="/siswa" type="button" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT-->
        @include('dashboard.partials.footer')
    </div>
@endsection
