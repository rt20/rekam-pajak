@if ($errors->any())
<div class="alert alert-outline alert-danger" role="alert">
     <h4 class="alert-heading">Whops!</h4>
     <p>Ada kesalahan, tolong cek kembali form input anda.</p>
     <hr>
     @foreach ($errors->all() as $error)
     <p class="mb-0">{{ $error }}</p>
     @endforeach
</div>
@endif
