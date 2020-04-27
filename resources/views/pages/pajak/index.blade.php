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
              <li class="breadcrumb-item active">Data Pajak</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    @include('flash::message')
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
        <a href="{{ route('pajak.create') }}" class="btn btn-primary mb-3">Rekam Pajak</a>
        <a href="{{ route('export') }}" class="btn btn-success mb-3 ml-4">Ekspor</a>
          <table class="table">
            <thead class="thead-light">
          <tr>
               <th scope="col">No</th>
               <th scope="col">Tgl Perolehan</th>
               <th scope="col">Pemungut</th>
               <th scope="col">Perolehan</th>
               <th scope="col">Bruto</th>
               <th scope="col">Netto</th>
               <th scope="col">Pajak</th>
               <th scope="col" colspan="2">Aksi</th>
          </tr>
     </thead>
     <tbody>
      @forelse($items as $item)
        <tr>
          <td>{{ ($items->currentPage()-1) * $items->perPage()+$loop->index+1 }}</td>
          <td>{{ date('d-M-y', strtotime($item->tgl_perolehan))}}</td>
          <td>{{ $item->pemungut }}</td>
          <td>{{ $item->perolehan}}</td>
          <td>{{ number_format($item->bruto)}}</td>
          <td>{{ number_format($item->netto )}}</td>
          <td>
          @foreach ($item->pajak as $m)
          {{ $m }}
          @endforeach
          </td>
          <td>                     
            
              <form action="{{ route('pajak.destroy', $item->id)}}" method="post" class="d-inline">
            @csrf
                @method('delete')
                  <button class="btn btn-danger btn-sm"                  
                  onclick="return confirm('Apakah anda yakin ?')">
                                    <i class="fa fa-trash"></i>
                                    </button>
              </form>
          </td>                               
          </tr>
                            @empty
                               <tr>
                               <td colspan="6" class="text-center" p-5>
                               Data tidak tersedia
                               </td>
                               </tr>
              @endforelse
            </tbody>
     </table>     
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