@extends('layouts.index_layout')

@section('masthead-image')
    <header class="masthead" style="background-image:url({{ asset('img/custom/old-cd.jpg') }})">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="brand-heading" style="font-size: calc(1em + 4vw);">artiesten</h2><br/>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
