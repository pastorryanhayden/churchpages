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
    <hero-step :user="{{ json_encode($user) }}" :dbinfo="{{ json_encode($user->info) }}" :dbhero="{{ json_encode($user->hero) }}"></hero-step>
 
</main>
@endsection
@push('scripts')
<script>
    function resizePreview() {
    var preview = document.querySelector('.preview-section');
    var scale = Math.min(
        (document.querySelector('.preview').offsetWidth - 64) / 1188,
        (document.querySelector('.preview').offsetHeight - 64) / 1200
    );
    preview.style.transform = `scale(${scale})`;
}

window.addEventListener("resize", resizePreview());
resizePreview();
</script>
@endpush