@extends('layouts.skeleton')

@section('layout')
<!--Header-->

<header>
  @include('partials.nav')
</header>

<!--Main-->
<main class="min-h-screen">
 @yield('content')
</main>

<!--Footer-->
<footer>
  @include('partials.footer')
</footer>

@endsection





