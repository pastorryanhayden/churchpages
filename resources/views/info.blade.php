@extends('layouts.app')

@section('content')
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold leading-tight text-gray-900">
            1. Church Information
        </h1>
    </div>
</header>
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- Replace with your content -->
        <div class="px-4 py-6 sm:px-0">
            <div>
                <div class="mt-10 sm:mt-0">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Essential Info
                                </h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500">
                                    Every church website must have this info.
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="/info" method="POST">
                            @csrf 
                            @method('Put')
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="church_name"
                                                    class="block text-sm font-medium leading-5 text-gray-700">Church
                                                    name</label>
                                                <input id="church_name" name="church_name"
                                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" required value="{{$user->info->church_name}}" />
                                                    @error('church_name')
                                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                    @enderror
                                            </div>
                                             <div class="col-span-6 sm:col-span-4">
                                                <label for="phone"
                                                    class="block text-sm font-medium leading-5 text-gray-700">Church Phone Number</label>
                                                <input id="phone" name="phone" value="{{$user->info->phone}}"
                                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" required />
                                                    @error('phone')
                                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                    @enderror
                                            </div> 
                                             <div class="col-span-6 sm:col-span-4">
                                                <label for="email"
                                                    class="block text-sm font-medium leading-5 text-gray-700">Church Email</label>
                                                <input id="email" name="contact_email" value="{{$user->info->contact_email}}" type="email"
                                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" required />
                                                    @error('contact_email')
                                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                    @enderror
                                            </div> 

                                            <div class="col-span-6">
                                                <label for="street_address"
                                                    class="block text-sm font-medium leading-5 text-gray-700">Street
                                                    address</label>
                                                <input id="street_address"
                                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="address1" value="{{$user->info->address1}}" required/>
                                                    @error('address1')
                                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                    @enderror
                                                     <input id="street_address"
                                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="address2"value="{{$user->info->address2}}"/>
                                                    @error('address2')
                                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                    @enderror
                                            </div>

                                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                <label for="city"
                                                    class="block text-sm font-medium leading-5 text-gray-700">City</label>
                                                <input id="city"
                                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="city" value="{{$user->info->city}}" required/>
                                                    @error('city')
                                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                    @enderror
                                            </div>

                                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                <label for="state"
                                                    class="block text-sm font-medium leading-5 text-gray-700">State
                                                    / Province</label>
                                                <input id="state"
                                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="state" value="{{$user->info->state}}" required />
                                                    @error('state')
                                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                    @enderror
                                            </div>

                                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                <label for="postal_code"
                                                    class="block text-sm font-medium leading-5 text-gray-700">ZIP
                                                    / Postal</label>
                                                <input id="postal_code"
                                                    class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="zip" value="{{$user->info->zip}}" required />
                                                    @error('zip')
                                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                    @enderror
                                            </div>
                                          <div class="col-span-6 py-6">
                                            <hr> 
                                           </div>
                                            <div class="col-span-6 sm:col-span-4">
                                                    <div class="flex items-start">
                                                        <div class="absolute flex items-center h-5">
                                                            <input id="have_url" type="checkbox" name="have_url" value="1"
                                                                class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" {{ $user->info->have_url ? 'checked' : '' }} />
                                                        </div>
                                                        <div class="pl-7 text-sm leading-5">
                                                            <label for="have_url"
                                                                class="font-medium text-gray-700">Have a URL already?</label>
                                                            <p class="text-gray-500">Click here if you don't need a new URL.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                      
                                            <div class="col-span-6 sm:col-span-4">
                                                <label for="{{$user->info->have_url ? 'church_url' : 'desired_url'}}"
                                                    class="block text-sm font-medium leading-5 text-gray-700">{{$user->info->have_url ? 'Church URL' : 'Desired URL'}}</label>
                                                <input id="{{$user->info->have_url ? 'church_url' : 'desired_url'}}" name="{{$user->info->have_url ? 'church_url' : 'desired_url'}}" value="{{$user->info->have_url ? $user->info->church_url : $user->info->desired_url }}" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" required/>
                                                @error('church_url')
                                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                @enderror
                                                @error('desired_url')
                                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                    @enderror
                                            </div>
                                            <div class="col-span-6 py-6">
                                            <hr> 
                                           </div>
                                           <div class="col-span-6">
                                                <label for="service_times"
                                                    class="block text-sm font-medium leading-5 text-gray-700">Service Times
                                                    </label>
                                                <div class="mt-1 rounded-md shadow-sm">
                                                <textarea id="service_times" rows="5" class="form-textarea block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="service_times" required>{{$user->info->service_times}}</textarea>
                                                @error('service_times')
                                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                  @enderror
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button
                                            class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-indigo-600 transition duration-150 ease-in-out">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- /End replace -->
    </div>
</main>
@endsection
