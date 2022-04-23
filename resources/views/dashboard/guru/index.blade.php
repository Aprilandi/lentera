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
                <li class="breadcrumb-item">Data Guru Lentera Fajar Indonesia</li>
            </ol>
        </div>
        <div class="page-content fade-in-up">
            <div class="ibox invoice">
                <div class="mb-3">
                    <div class="text-left">
                        <a href="/guru/create" class="btn btn-info" type="button"><i class="fa fa-user-graduate"></i>
                            Tambah Data
                            Guru</a>
                    </div>
                </div>
                <table class="table table-bordered no-margin table-invoice">
                    <thead>
                        <tr>
                            <th>Item Description</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th class="text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div><strong>Flat Design</strong></div><small>Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry.</small>
                            </td>
                            <td>2</td>
                            <td>$220.00</td>
                            <td>$440.00</td>
                        </tr>
                        <tr>
                            <td>
                                <div><strong>Bootstrap theme</strong></div><small>Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry.</small>
                            </td>
                            <td>1</td>
                            <td>$500.00</td>
                            <td>$500.00</td>
                        </tr>
                        <tr>
                            <td>
                                <div><strong>Invoice Design</strong></div><small>Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry.</small>
                            </td>
                            <td>3</td>
                            <td>$300.00</td>
                            <td>$900.00</td>
                        </tr>
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
