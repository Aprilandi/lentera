@extends('dashboard.main')
@section('container')
    @include('dashboard.partials.header')
    @include('dashboard.partials.sidebar')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Profil siswa</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html"><i class="la la-home font-20"></i></a>
                </li>
                <li class="breadcrumb-item">{{ $siswa->nama_siswa }}</li>
            </ol>
        </div>
        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="ibox">
                        <div class="ibox-body text-center">
                            <div>
                                <img class="img" src="{{ asset('/foto-siswa/' . $siswa->foto_siswa) }}"
                                    style="width: 100%" />
                            </div>
                            <h5 class="font-strong m-t-10">{{ $siswa->nama_siswa }}</h5>
                            <div class="text-muted">{{ $siswa->golongan_siswa }}</div>
                        </div>
                    </div>
                    <div class="ibox">
                        <div class="ibox-body">
                            <div class="row text-center m-b-20">
                                <div class="col-4">
                                    <div class="font-24 profile-stat-count">140</div>
                                    <div class="text-muted">Followers</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-24 profile-stat-count">$780</div>
                                    <div class="text-muted">Sales</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-24 profile-stat-count">15</div>
                                    <div class="text-muted">Projects</div>
                                </div>
                            </div>
                            <p class="text-center">Lorem Ipsum is simply dummy text of the printing and industry. Lorem
                                Ipsum has been</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="ibox">
                        <div class="ibox-body">
                            <ul class="nav nav-tabs tabs-line">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#tab-2" data-toggle="tab"><i
                                            class="ti-settings"></i>
                                        Settings</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-2">
                                    <form method="POST" action="/siswa/{{ $siswa->id_siswa }}"
                                        enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="form-group">
                                            <label>Nomor Induk Siswa</label>
                                            <input class="form-control" type="text" name="no_induk_siswa"
                                                value="{{ $siswa->no_induk_siswa }}">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label>Nomor Kartu Keluarga</label>
                                                <input class="form-control" type="text" name="no_kk_siswa"
                                                    value="{{ $siswa->no_kk_siswa }}">
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Nomor Kartu Tanda Penduduk</label>
                                                <input class="form-control" type="text" name="no_ktp_siswa"
                                                    value="{{ $siswa->no_ktp_siswa }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label>Nama Lengkap</label>
                                                <input class="form-control" type="text" name="nama_siswa"
                                                    value="{{ $siswa->nama_siswa }}">
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Golongan</label>
                                                <input class="form-control" type="text" name="golongan_siswa"
                                                    value="{{ $siswa->golongan_siswa }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Telepon</label>
                                            <input class="form-control" type="text" name="tlp_siswa"
                                                value="{{ $siswa->tlp_siswa }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Tanggal Lahir</label>
                                            <input class="form-control" type="text" name="ttl_siswa"
                                                value="{{ $siswa->ttl_siswa }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" type="text" name="alamat_siswa">{{ $siswa->alamat_siswa }}</textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label>Nama Ayah</label>
                                                <input class="form-control" type="text" name="nama_ayah_siswa"
                                                    value="{{ $siswa->nama_ayah_siswa }}">
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Pekerjaan</label>
                                                <input class="form-control" type="text" name="pekerjaan_ayah"
                                                    value="{{ $siswa->pekerjaan_ayah }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label>Nama Ibu</label>
                                                <input class="form-control" type="text" name="nama_ibu_siswa"
                                                    value="{{ $siswa->nama_ibu_siswa }}">
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Pekerjaan</label>
                                                <input class="form-control" type="text" name="pekerjaan_ibu"
                                                    value="{{ $siswa->pekerjaan_ibu }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto Siswa</label>
                                            <input class="form-control" type="file" name="foto_siswa">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="fa-solid fa-check"></i>&nbsp;
                                                Ubah
                                                Data
                                                siswa</button>
                                            <a href="/siswa" type="button" class="btn btn-secondary">Kembali</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .profile-social a {
                    font-size: 16px;
                    margin: 0 10px;
                    color: #999;
                }

                .profile-social a:hover {
                    color: #485b6f;
                }

                .profile-stat-count {
                    font-size: 22px
                }

            </style>
        </div>
        <!-- END PAGE CONTENT-->
        @include('dashboard.partials.footer')
    </div>
@endsection
