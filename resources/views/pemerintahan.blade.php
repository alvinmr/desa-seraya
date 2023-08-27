@extends('layouts.head-title')

@section('heading', 'Pemerintahan Desa Seraya')

@section('content')
<section class="vc_row">
    <div class="container">
      <div class="row">
        <div class="lqd-column col-md-12">
          <div id="list-post" class="row">
            <!-- gambar struktur pemerintahan desa dengan mencantumkan nama dan jabatan -->
            <div id="list-post" class="row">
              <div class="col-md-4">
                <div class="post-item">
                  <img src="https://dummyimage.com/3:4x1080/" alt="Kepala Desa" />
                  <h3>Kepala Desa</h3>
                  <p>Nama Kepala Desa</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="post-item">
                  <img
                    src="https://dummyimage.com/3:4x1080/"
                    alt="Sekretaris Desa"
                  />
                  <h3>Sekretaris Desa</h3>
                  <p>Nama Sekretaris Desa</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="post-item">
                  <img
                    src="https://dummyimage.com/3:4x1080/"
                    alt="Bendahara Desa"
                  />
                  <h3>Bendahara Desa</h3>
                  <p>Nama Bendahara Desa</p>
                </div>
              </div>
              <!-- Tambahkan lebih banyak div col-md-4 untuk jabatan lainnya -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
