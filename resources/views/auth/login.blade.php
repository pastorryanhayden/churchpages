@extends('layouts.login')

@section('content')
<div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
      Sign In To Your Account
    </h2>
  </div>

  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
      <form method="POST" action="{{ route('login') }}">
      @csrf
        <div>
          <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
            Email address
          </label>
          <div class="mt-1 rounded-md shadow-sm">
            <input id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-500 @enderror" />
          </div>
           @error('email')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="mt-6">
          <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
            Password
          </label>
          <div class="mt-1 rounded-md shadow-sm">
            <input id="password" type="password" name="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-500 @enderror" />
          </div>
            @error('password')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
        </div>

        <div class="mt-6 flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember_me" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
            <label for="remember_me" name="remember" {{ old('remember') ? 'checked' : '' }} class="ml-2 block text-sm leading-5 text-gray-900">
              Remember me
            </label>
          </div>

          <div class="text-sm leading-5">
            <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
              Forgot your password?
            </a>
          </div>
        </div>

        <div class="mt-6">
          <span class="block w-full rounded-md shadow-sm">
            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
              Sign in
            </button>
          </span>
        </div>
      </form>

     
    </div>
  </div>
</div>
@endsection
