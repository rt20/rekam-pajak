@extends ('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Profil</a></li>
              <li class="breadcrumb-item active">Ubah</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
        <form action="{{ route('user.update', $items->id) }}" method="POST">
     @csrf
     {{ method_field("PATCH") }}   
      
     <div class="row">
     <div class="col-md-2">
     <label>Nama *</label>
          </div>
          <div class="col-md-4">
          <input type="text" name="name" class="form-control" value="{{$items->name}}" required>
     </div>
     </div>
     <div class="row">
     <div class="col-md-2">
     <br><label>NIP/NIK *</label></br>
          </div>
          <div class="col-md-4">
          <br><input type="number" name="nip" class="form-control" value="{{$items->nip}}" required></br>
     </div>
     </div>
     <div class="row">
     <div class="col-md-2">
          <label>Jabatan</label>
          </div>
          <div class="col-md-4">
          <input type="text" name="jabatan" class="form-control" value="{{$items->jabatan}}">
     </div>
     </div>
     <div class="row">
     <div class="col-md-2">
     <br> <label>Golongan</label></br>
          </div>
          <div class="col-md-4">
          <br>  <input type="text" name="golongan" class="form-control" value="{{$items->golongan}}"></br>
     </div>
     </div>
     <div class="row">
     <div class="col-md-2">
   <label>NPWP</label>
          </div>
          <div class="col-md-4">
          <input type="text" name="npwp" class="form-control" value="{{$items->npwp}}">
     </div>
     </div>
     <div class="row">
     <div class="col-md-2">
     <br>   <label>Email</label></br>
          </div>
          <div class="col-md-4">
          <br>   <input type="text" name="email" class="form-control" value="{{$items->email}}"></br>
     </div>
     </div>
     <div class="float-left">
     <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
        </div>
       
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  @endsection