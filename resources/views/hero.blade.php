@extends('layouts.app')

@section('content')
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold leading-tight text-gray-900">
            2. Hero
        </h1>
    </div>
</header>
<main id="app">
    <hero-step :user="{{ json_encode($user) }}" :></hero-step>
 
</main>
@endsection