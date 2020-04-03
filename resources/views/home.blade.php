@extends('layouts.app')

@section('content')
    <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold leading-tight text-gray-900">
        Dashboard
      </h1>
    </div>
  </header>
  <main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4 py-6 sm:px-0">
        <div class="bg-white shadow overflow-hidden  sm:rounded-lg ">
  <div class="px-4 py-5 border-b border-gray-200 sm:px-6 ">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      Website Completion
    </h3>
    <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
      What we need to setup your site.
    </p>
  </div>
  <div class="px-4 py-5 sm:p-0">
    <dl>
      <a class="sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:py-5" href="#">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          1. Church Information
        </dt>
        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          Name, Address, Giving Links, Etc.
        </dd>
      </a>
      <a class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5" href="#">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          2. Hero
        </dt>
        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          The top section of your site
        </dd>
      </a>
      <a class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5" href="#">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          3. Main Messaging
        </dt>
        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          Differentiate your church
        </dd>
      </a>
      
      <a class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5" href="#">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          4. Pastor Message
        </dt>
        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
         A quick message from the pastor
        </dd>
      </a>
      <a class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5" href="#">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          5. Testimonials
        </dt>
        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          Positive words from people who attend your church
        </dd>
      </a>
      <a class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5" href="#">
        <dt class="text-sm leading-5 font-medium text-gray-500">
          6. Visit Info
        </dt>
        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
          Questions the people who might visit your church are probably asking
        </dd>
      </a>
    </dl>
  </div>
</div>
      </div>
      <!-- /End replace -->
    </div>
  </main>
@endsection
