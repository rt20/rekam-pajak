@extends ('layouts.default')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rekam Pajak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Rekam Pajak</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    @include ('shared.errors')
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
        <form action="{{ asset("/pajak") }}" method="POST">
     @csrf
     <div class="row">
     <div class="col-sm-2"><br>
          Tanggal Perolehan *
          </div>
          <div class="col-sm-3"><br>
          <input type="date" name="tgl_perolehan"  class="form-control" value="{{old('tgl_perolehan')}}">
     </div>
     </div>
     <div class="row">
     <div class="col-sm-2"><br>
          Pemungut Pajak *
          </div>
          <div class="col-sm-4"><br>
          <select name="pemungut" class="form-control form-control-sm" required>
               <option value="">- Pilih Pemungut Pajak</option>
               <option value="Bendahara Pengeluaran Satker Deputi 3">Bendahara Pengeluaran Satker Deputi 3</option>
               <option value="Bendahara Pengeluaran Satker Deputi 2">Bendahara Pengeluaran Satker Deputi 2</option>
               <option value="Bendahara Pengeluaran Satker Deputi 1">Bendahara Pengeluaran Satker Deputi 1</option>
               <option value="Bendahara Pengeluaran Satker Deputi 4">Bendahara Pengeluaran Satker Deputi 4</option>
               <option value="Bendahara Pengeluaran Sekretaris Utama">Bendahara Pengeluaran Sekretaris Utama</option>
               <option value="Bendahara Pengeluaran Inspektorat Utama">Bendahara Pengeluaran Inspektorat Utama</option>
               <option value="Bendahara Pengeluaran K/L Lain">Bendahara Pengeluaran K/L Lain</option>
               <option value="Bendahara Pengeluaran UPT Badan POM">Bendahara Pengeluaran UPT Badan POM</option>
          </select>   
        </div>  
     </div>
     <div class="row">
     <div class="col-sm-2"><br>
          Perolehan Pendapatan *
          </div>
          <div class="col-sm-4"><br>
          <select name="perolehan" class="form-control form-control-sm" required>
               <option value="">- Pilih Perolehan Pendapatan</option>
               <option value="Narasumber">Narasumber</option>
               <option value="Moderator">Moderator</option>
               <option value="RDK">RDK</option>
               <option value="Honor Tim">Honor Tim</option>
               
          </select>  
        </div>   
     </div>
     <div class="row">
     <div class="col-md-2"><br>
          Bruto *
          </div>
          <div class="col-sm-4" required><br>
          <input type="number" name="bruto" class="form-control" value="{{old('bruto')}}">
     </div>
     </div>
     <div class="row">
     <div class="col-md-2"><br>
          Netto *
          </div>
          <div class="col-sm-4" required>
          <br> 
          <input type="number" name="netto" class="form-control" value="{{old('netto')}}">
        </div>
     </div>
     <div class="row">
               <div class="col-md-2"> <br>
               Nilai Pajak *</br>
               </div>
               <div class="col-sm-4">
               <br>
               <input type="checkbox"  name="pajak[]" value="5 %" >
               5 %
               <br>
               <input type="checkbox"  name="pajak[]" value="15 %" >
                15 %
               <br>
               
               <input type="checkbox" id="other"  >
               Lainnya:<input type="text"  id="other" name="pajak[]" value="{{old('other')}}" class="form-control form-control-sm">
               </div>
               </div>

     
     <div class="col-md-6 mt-3">
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
