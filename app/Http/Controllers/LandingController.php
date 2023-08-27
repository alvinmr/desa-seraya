<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    function index() {
        return view('index');
    }

    function berita() {
        return view('berita.index');
    }

    function visi_misi() {
        $profil = \App\Models\ProfilDesa::firstOrFail();
        return view('visi-misi', compact('profil'));
    }

    function pemerintahan() {
        $struktur = \App\Models\Pemerintahan::all();
        return view('pemerintahan', compact('struktur'));
    }

    function sejarah() {
        $profil = \App\Models\ProfilDesa::firstOrFail();
        return view('sejarah', compact('profil'));
    }

    function wilayah() {
        $profil = \App\Models\ProfilDesa::firstOrFail();
        return view('wilayah', compact('profil'));
    }

    function lembaga() {
        $lembaga = \App\Models\Lembaga::all();
        return view('lembaga', compact('lembaga'));
    }

    function page($slug) {
        $page = \App\Models\Page::where('slug', $slug)->firstOrFail();
        return view('page', compact('page'));
    }
}
