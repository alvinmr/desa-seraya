@extends('layouts.head-title')

@section('heading', 'Lembaga Desa Seraya')

@section('content')
<section class="vc_row">
  <div class="container">
      <div class="row">
          <div class="lqd-column col-md-12">
              <div id="list-post" class="row">
                  <!-- gambar struktur pemerintahan desa dengan mencantumkan nama dan jabatan -->
                  <div id="list-post" class="row">
                      @foreach ($lembaga as $item)
                          <div class="col-md-4">
                              <div class="post-item">
                                  <img src="{{ $item->foto ?? 'https://dummyimage.com/3:4x1080/' }}" alt="Kepala Desa" />
                                  <h3>{{ $item->nama }}</h3>
                                  <p>{{ $item->deskripsi ?? '-' }}</p>
                              </div>
                          </div>
                      @endforeach
                      <!-- Tambahkan lebih banyak div col-md-4 untuk jabatan lainnya -->
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
