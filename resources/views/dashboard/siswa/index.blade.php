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
                <li class="breadcrumb-item">Data Siswa Lentera Fajar Indonesia</li>
            </ol>
        </div>
        <div class="page-content fade-in-up">
            <div class="ibox invoice">
                <div class="mb-3">
                    <div class="text-left">
                        <a href="/siswa/create" class="btn btn-info" type="button"><i class="fa fa-users"></i> Tambah
                            Data
                            Siswa</a>
                    </div>
                </div>
                <table class="table table-bordered no-margin">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Nomor Induk</th>
                            <th class="text-center">Golongan</th>
                            <th class="text-center">Telepon</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($siswa as $s)
                            <tr>
                                <td class="text-center">{{ $no++ }}.</td>
                                <td class="text-center">{{ $s->nama_siswa }}</td>
                                <td class="text-center">{{ $s->no_induk_siswa }}</td>
                                <td class="text-center">{{ $s->golongan_siswa }}</td>
                                <td class="text-center">{{ $s->tlp_siswa }}</td>
                                <?php if($s->status_aktif_siswa == 1) { ?>
                                <td class="text-center"><a href="" type="button" class="btn btn-success">Aktif</a></td>
                                <?php } ?>
                                <td class="text-center">
                                    <a href="/siswa/{{ $s->nama_siswa }}" type="button" class="btn btn-primary">Detail</a>
                                    <a href="/siswa/{{ $s->nama_siswa }}/edit" type="button"
                                        class="btn btn-warning">Edit</a>
                                    <form action="/siswa/{{ $s->id_siswa }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"
                                            onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <style>
                .invoice {
                    padding: 20px
                }

                .invoice-header {
                    margin-bottom: 50px
                }

                .invoice-logo {
                    margin-bottom: 50px;
                }

                .table-invoice tr td:last-child {
                    text-align: right;
                }

            </style>
        </div>
        @include('dashboard.partials.footer')
    </div>
@endsection
