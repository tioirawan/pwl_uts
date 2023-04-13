
@extends('layouts.template')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mata Kuliah Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mata Kuliah Page</li>
            </ol> 
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                   <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Mata Kuliah</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>nama</th>
                      <th>dosen pengampu</th>
                      <th>jumlah sks</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ( $matkul as $b )
                      <tr>
                        <td>{{$b->id}}</td>
                        <td>{{$b->nama}}</td>
                        <td>{{$b->dosenpengampu}}</td>
                        <td>{{$b->jumlahsks}}</td>
                      </tr>

                  @endforeach
                  
    


    </section>
    <!-- /.content -->
  </div>
  @endsection