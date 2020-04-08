@extends('layouts.app')

@section('content')
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold leading-tight text-gray-900">
            3. Message
        </h1>
    </div>
</header>
<main id="app">
    <message-step :user="{{ json_encode($user) }}" :dbinfo="{{ json_encode($user->info) }}" :dbmessage="{{ json_encode($user->mission) }}"></message-step>
 
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