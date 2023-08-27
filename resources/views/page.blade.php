@extends('layouts.head-title')

@section('heading', $page->judul)

@section('content')
    <section class="vc_row">
        <div class="container">
            <div class="row">
                {!! $page->isi !!}
            </div>
        </div>
    </section>
@endsection
