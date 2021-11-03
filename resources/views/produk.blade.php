@extends('adminapp.master')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
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
         <div class="col-md-12">
            <table class="table table-hover text-nowrap table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($getproduk as $item)  
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $item -> produk}}</td>
                    <td>{{ $item -> harga}}</td>
                    <td>{{ $item -> jumlah}}</td>
                    <td><a href="{{route('produkDelete', $item->id)}}" class="btn btn-flat btn-danger" onclick="return confirm('hapus data?')">Hapus</a></td>
                  </tr>  
                @endforeach
                </tbody>
              </table>
         </div>
     </div>
      <!-- /.row -->
      <!-- Main row -->
      
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection