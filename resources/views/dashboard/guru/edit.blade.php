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
                                <img class="img-circle" src="{{ asset('/foto-guru/' . $guru->foto_guru) }}" />
                            </div>
                            <h5 class="font-strong m-b-10 m-t-10">{{ $guru->nama_guru }}</h5>
                            <div class="m-b-20 text-muted">{{ $guru->jabatan_guru }}</div>
                            <div>
                                <button class="btn btn-info btn-rounded m-b-5"><i class="fa fa-plus"></i>
                                    Follow</button>
                                <button class="btn btn-default btn-rounded m-b-5">Message</button>
                            </div>
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
                                    <a class="nav-link" href="#tab-1" data-toggle="tab"><i class="ti-bar-chart"></i>
                                        Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#tab-2" data-toggle="tab"><i
                                            class="ti-settings"></i>
                                        Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tab-3" data-toggle="tab"><i
                                            class="ti-announcement"></i> Feeds</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show" id="tab-1">
                                    <div class="row">
                                        <div class="col-md-6" style="border-right: 1px solid #eee;">
                                            <h5 class="text-info m-b-20 m-t-10"><i class="fa fa-bar-chart"></i> Month
                                                Statistics</h5>
                                            <div class="h2 m-0">$12,400<sup>.60</sup></div>
                                            <div><small>Month income</small></div>
                                            <div class="m-t-20 m-b-20">
                                                <div class="h4 m-0">120</div>
                                                <div class="d-flex justify-content-between"><small>Month income</small>
                                                    <span class="text-success font-12"><i class="fa fa-level-up"></i>
                                                        +24%</span>
                                                </div>
                                                <div class="progress m-t-5">
                                                    <div class="progress-bar progress-bar-success" role="progressbar"
                                                        style="width:50%; height:5px;" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="m-b-20">
                                                <div class="h4 m-0">86</div>
                                                <div class="d-flex justify-content-between"><small>Month income</small>
                                                    <span class="text-warning font-12"><i class="fa fa-level-down"></i>
                                                        -12%</span>
                                                </div>
                                                <div class="progress m-t-5">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                                        style="width:50%; height:5px;" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <ul class="list-group list-group-full list-group-divider">
                                                <li class="list-group-item">Projects
                                                    <span class="pull-right color-orange">15</span>
                                                </li>
                                                <li class="list-group-item">Tasks
                                                    <span class="pull-right color-orange">148</span>
                                                </li>
                                                <li class="list-group-item">Articles
                                                    <span class="pull-right color-orange">72</span>
                                                </li>
                                                <li class="list-group-item">Friends
                                                    <span class="pull-right color-orange">44</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class="text-info m-b-20 m-t-10"><i class="fa fa-user-plus"></i> Latest
                                                Followers</h5>
                                            <ul class="media-list media-list-divider m-0">
                                                <li class="media">
                                                    <a class="media-img" href="javascript:;">
                                                        <img class="img-circle" src="/admin/img/users/u1.jpg"
                                                            width="40" />
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-heading">Jeanne Gonzalez <small
                                                                class="float-right text-muted">12:05</small></div>
                                                        <div class="font-13">Lorem Ipsum is simply dummy text of the
                                                            printing and typesetting.</div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-img" href="javascript:;">
                                                        <img class="img-circle" src="/admin/img/users/u2.jpg"
                                                            width="40" />
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-heading">Becky Brooks <small
                                                                class="float-right text-muted">1 hrs ago</small></div>
                                                        <div class="font-13">Lorem Ipsum is simply dummy text of the
                                                            printing and typesetting.</div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-img" href="javascript:;">
                                                        <img class="img-circle" src="/admin/img/users/u3.jpg"
                                                            width="40" />
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-heading">Frank Cruz <small
                                                                class="float-right text-muted">3 hrs ago</small></div>
                                                        <div class="font-13">Lorem Ipsum is simply dummy.</div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-img" href="javascript:;">
                                                        <img class="img-circle" src="/admin/img/users/u6.jpg"
                                                            width="40" />
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-heading">Connor Perez <small
                                                                class="float-right text-muted">Today</small></div>
                                                        <div class="font-13">Lorem Ipsum is simply dummy text of the
                                                            printing and typesetting.</div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-img" href="javascript:;">
                                                        <img class="img-circle" src="/admin/img/users/u5.jpg"
                                                            width="40" />
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="media-heading">Bob Gonzalez <small
                                                                class="float-right text-muted">Today</small></div>
                                                        <div class="font-13">Lorem Ipsum is simply dummy.</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4 class="text-info m-b-20 m-t-20"><i class="fa fa-shopping-basket"></i> Latest
                                        Orders</h4>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Customer</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th width="91px">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>11</td>
                                                <td>@Jack</td>
                                                <td>$564.00</td>
                                                <td>
                                                    <span class="badge badge-success">Shipped</span>
                                                </td>
                                                <td>10/07/2017</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>@Amalia</td>
                                                <td>$220.60</td>
                                                <td>
                                                    <span class="badge badge-success">Shipped</span>
                                                </td>
                                                <td>10/07/2017</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>@Emma</td>
                                                <td>$760.00</td>
                                                <td>
                                                    <span class="badge badge-default">Pending</span>
                                                </td>
                                                <td>10/07/2017</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>@James</td>
                                                <td>$87.60</td>
                                                <td>
                                                    <span class="badge badge-warning">Expired</span>
                                                </td>
                                                <td>10/07/2017</td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>@Ava</td>
                                                <td>$430.50</td>
                                                <td>
                                                    <span class="badge badge-default">Pending</span>
                                                </td>
                                                <td>10/07/2017</td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>@Noah</td>
                                                <td>$64.00</td>
                                                <td>
                                                    <span class="badge badge-success">Shipped</span>
                                                </td>
                                                <td>10/07/2017</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab-3">
                                    <h5 class="text-info m-b-20 m-t-20"><i class="fa fa-bullhorn"></i> Latest Feeds</h5>
                                    <ul class="media-list media-list-divider m-0">
                                        <li class="media">
                                            <div class="media-img"><i class="ti-user font-18 text-muted"></i></div>
                                            <div class="media-body">
                                                <div class="media-heading">New customer <small
                                                        class="float-right text-muted">12:05</small></div>
                                                <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-img"><i class="ti-info-alt font-18 text-muted"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="media-heading text-warning">Server Warning <small
                                                        class="float-right text-muted">12:05</small></div>
                                                <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-img"><i class="ti-announcement font-18 text-muted"></i>
                                            </div>
                                            <div class="media-body">
                                                <div class="media-heading">7 new feedback <small
                                                        class="float-right text-muted">Today</small></div>
                                                <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-img"><i class="ti-check font-18 text-muted"></i></div>
                                            <div class="media-body">
                                                <div class="media-heading text-success">Issue fixed <small
                                                        class="float-right text-muted">12:05</small></div>
                                                <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-img"><i
                                                    class="ti-shopping-cart font-18 text-muted"></i></div>
                                            <div class="media-body">
                                                <div class="media-heading">7 New orders <small
                                                        class="float-right text-muted">12:05</small></div>
                                                <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-img"><i class="ti-reload font-18 text-muted"></i></div>
                                            <div class="media-body">
                                                <div class="media-heading text-danger">Server warning <small
                                                        class="float-right text-muted">12:05</small></div>
                                                <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                            </div>
                                        </li>
                                    </ul>
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
