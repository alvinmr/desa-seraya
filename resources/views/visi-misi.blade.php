@extends('layouts.head-title')

@section('heading', "Visi & Misi Desa Seraya")

@section('content')
    <section class="vc_row">
        <div class="container">
            <div class="row">
                <div class="lqd-column col-md-12">
                    <div id="list-post" class="row">
                        <h1 class="text-center">Visi</h1>
                        <p class="text-center">{{ $profil->visi }}</p>
                        <h1 class="text-center">Misi</h1>
                        {!! $profil->misi !!}
                    </div>

                    <div id="load-data">
                        <span class="ld-sf-spinner">
                            <span>Mengirim </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
