@extends('layouts.main')

@section('content')
    <div class="container">
      <div class="py-5 text-center">
        <h2 class="orenjudul">Pengajuan SKCK</h2>
        <p class="birusubjudul">Untuk pengajuan SKCK, Harap isikan data dibawah ini sesuai dengan data pribadi anda.</p>
      </div>

    <div class="row">
      @include('layouts.partials.identitas')
      <div class="col-md-7">
        <h4 class="mb-3">Isi Data Lainnya</h4>
        <form action="{{ route('skck.store') }}" method="post" class="needs-validation" novalidate>
           @csrf
            <input type="hidden" name="jenis" value="SKCK">
            <div class="mb-3">
              <label for="klarifikasi">Klarifikasi Yang Bersangkutan :</label>
              <textarea class="form-control shadow" name="klarifikasi" id="klarifikasi" cols="10" rows="3" placeholder="Misal: 1. tidak pernah dipenjara"></textarea>
              @error('klarifikasi') <div class="text-danger mt-1" > <small>{{$message}}</small> </div> @enderror
            </div>
            <div class="mb-3">
              <label for="keterangan">Keperluan :</label>
              <textarea class="form-control shadow" name="keterangan" id="keterangan" cols="10" rows="3" placeholder="isi pesan keterangan sesuai kebutuhan. contoh: SKCK untuk ke Polres Garut, untuk untuk keperluan daftar pekerjaan. tanggal 28 Oktober"></textarea>
              @error('keterangan') <div class="text-danger mt-1" > <small>{{$message}}</small> </div> @enderror
            </div>
          <hr class="mb-4">
          <button class="btn btn-lg btn-block tombol shadow" type="submit" name="translate">Ajukan Permohonan Surat</button>
        </form>
      </div>
    </div>
    </div>
@endsection