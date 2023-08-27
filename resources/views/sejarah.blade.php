@extends('layouts.head-title')

@section('heading', 'Sejarah Desa Seraya')

@section('content')
    <section class="vc_row">
        <div class="container">
            <div class="row">
                <div class="lqd-column col-md-12">
                    <div id="list-post" class="row">
                        {!! $profil->sejarah !!}
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
