@extends('layouts.index_layout')

@section('sitetag')
    <iframe src="https://open.spotify.com/embed/album/6uvBKDGlJAYLH5Vy6RQVsc" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
@endsection

@section('masthead-image')
    <header class="masthead" style="background-image:url({{ asset('img/custom/recordplayer-close-arm.jpg') }})">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="brand-heading" style="font-size: calc(1em + 4vw);">het platenhuis</h1><br/>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
