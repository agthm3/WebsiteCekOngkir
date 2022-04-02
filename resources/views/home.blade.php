@extends('layouts.app')

@section('content')
<div class="container">
    <div class="ongkir-header">
        <h1>CodeOngkir</h1>
        <p class="lead">
            Project Cek Ongkir ke Seluruh Koda dan Kabupaten di Indonesia
        </p>
    </div>

    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Free</h4>
            </div>
            <div class="card-body">
                <i class="fas fa-truck" style="font-size:80px"></i>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Cek Ongkir Lebih Mudah</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
            </div>
        </div>

        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Pro</h4>
            </div>
            <div class="card-body">
                <i class="fas fa-box" style="font-size:80px"></i>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Lacak lokasi paket</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
            </div>
        </div>

        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Enterprise</h4>
            </div>
            <div class="card-body">
                <i class="fas fa-plane-departure" style="font-size:80px"></i>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Cek Ongkir Pengiriman Internasional</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
            </div>
        </div>
    </div>

 
    @endsection