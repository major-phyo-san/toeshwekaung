@extends('layouts.master')

@section('body-content')
    <div id="app" class="main-container bg-white">
        <div>
            @include('layouts.navbar')
        </div>
        <div>
            @yield('content')
            @include('layouts.footer')
        </div>
    </div>
@endsection

@section("script_index")
   
@endsection
