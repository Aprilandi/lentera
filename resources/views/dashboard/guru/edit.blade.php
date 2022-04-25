@extends('dashboard.main')
@section('container')
    @include('dashboard.partials.header')
    @include('dashboard.partials.sidebar')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Profil Guru</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html"><i class="la la-home font-20"></i></a>
                </li>
                <li class="breadcrumb-item">{{ $guru->nama_guru }}</li>
            </ol>
        </div>
        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="ibox">
                        <div class="ibox-body text-center">
                            <div class="m-t-20">
                                <img class="img" src="{{ asset('/foto-guru/' . $guru->foto_guru) }}"
                                    style="width: 100%" />
                            </div>
                            <h5 class="font-strong m-b-10 m-t-10">{{ $guru->nama_guru }}</h5>
                            <div class="m-b-20 text-muted">{{ $guru->jabatan_guru }}</div>
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
                                    <form method="POST" action="/guru/{{ $guru->id_guru }}" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="form-group">
                                            <label>NUTPK</label>
                                            <input class="form-control" type="text" name="nutpk"
                                                value="{{ $guru->nutpk }}">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label>Nomor Kartu Keluarga</label>
                                                <input class="form-control" type="text" name="no_kk_guru"
                                                    value="{{ $guru->no_kk_guru }}">
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Nomor Kartu Tanda Penduduk</label>
                                                <input class="form-control" type="text" name="no_ktp_guru"
                                                    value="{{ $guru->no_ktp_guru }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label>Nama Lengkap</label>
                                                <input class="form-control" type="text" name="nama_guru"
                                                    value="{{ $guru->nama_guru }}">
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Jabatan</label>
                                                <input class="form-control" type="text" name="jabatan_guru"
                                                    value="{{ $guru->jabatan_guru }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Tanggal Lahir</label>
                                            <input class="form-control" type="text" name="ttl_guru"
                                                value="{{ $guru->ttl_guru }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" type="text" name="alamat_guru">{{ $guru->alamat_guru }}</textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="email" name="email_guru"
                                                    value="{{ $guru->email_guru }}">
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Telepon</label>
                                                <input class="form-control" type="text" name="tlp_guru"
                                                    value="{{ $guru->tlp_guru }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label>Nama Ibu Kandung</label>
                                                <input class="form-control" type="text" name="nama_ibu_guru"
                                                    value="{{ $guru->nama_ibu_guru }}">
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Pendidikan Terakhir</label>
                                                <input class="form-control" type="text" name="pen_akhir_guru"
                                                    value="{{ $guru->pen_akhir_guru }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto Profil</label>
                                            <input class="form-control" type="file" name="foto_guru">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="fa-solid fa-check"></i>&nbsp;
                                                Ubah
                                                Data
                                                Guru</button>
                                            <a href="/guru" type="button" class="btn btn-secondary">Kembali</a>
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
