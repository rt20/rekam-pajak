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
              <li class="breadcrumb-item active">Profil</li>
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
        
      
     <div class="row">
     <div class="col-md-2">
     <label>Nama</label>
          </div>
          <div class="col-md-4">
          <input type="text" name="name" class="form-control" value="{{$items->name}}" disabled>
     </div>
     </div>
     <div class="row">
     <div class="col-md-2">
     <br><label>NIP/NIK</label></br>
          </div>
          <div class="col-md-4">
          <br><input type="number" name="nip" class="form-control" value="{{$items->nip}}"disabled></br>
     </div>
     </div>
     <div class="row">
     <div class="col-md-2">
          <label>Jabatan</label>
          </div>
          <div class="col-md-4">
          <input type="text" name="jabatan" class="form-control" value="{{$items->jabatan}}" disabled>
     </div>
     </div>
     <div class="row">
     <div class="col-md-2">
     <br> <label>Golongan</label></br>
          </div>
          <div class="col-md-4">
          <br>  <input type="text" name="golongan" class="form-control" value="{{$items->golongan}}" disabled></br>
     </div>
     </div>
     <div class="row">
     <div class="col-md-2">
   <label>NPWP</label>
          </div>
          <div class="col-md-4">
          <input type="text" name="npwp" class="form-control" value="{{$items->npwp}}" disabled>
     </div>
     </div>
     <div class="row">
     <div class="col-md-2">
     <br>   <label>Email</label></br>
          </div>
          <div class="col-md-4">
          <br>   <input type="text" name="email" class="form-control" value="{{$items->email}}" disabled></br>
     </div>
     </div>
     <div class="float-left">
        <a href="{{ route('user.edit', $items->id) }}" class="btn btn-success mb-3">Ubah</a>
        </div>
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