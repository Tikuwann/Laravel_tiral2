<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <div class="flex justify-center ">
                        <div class="w-4/5 my-5 mx-auto flex-col items-center md:flex-row ">
                            <div class="border w-[70%] h-full border-4 bg-white text-black p-10 mx-auto"> <span>
                                    <h1 class="text-3xl font-semibold text-center mb-4 text-black">Owner Data Edit</h1>
                                    <p class="text-xs font-normal mt-2 text-center">Edit Information of Owner  </p>
                                </span>
                                <div class="mt-6 leading-7 text-center">
                                    <form method="POST" action="{{ route('admin.owners.update',['owner' => $owner->id])}}">

                                        @method('PUT')
                                        @csrf

                                 <div class="relative flex ">
                                    <label for="name" class="leading-7 text-sm text-gray-600 basis-1/4">Name</label>
                                    <input type="text" name="name" placeholder="Full Name" id="name" value="{{$owner->name}}" required
                                        class="border-b-2 w-[80%] mb-4 p-3 border-b-gray-400 placeholder:text-gray-500 placeholder:opacity-80 text-sm bg-white focus:outline-none rounded-lg basis-6/8">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                 </div>

                                 <div class="relative flex flex-row ">
                                    <label for="shopname" class="leading-7 text-sm text-gray-600 basis-1/4">Shop Name</label>
                                    <input type="text" name="shopname" placeholder="Shop Name" id="shopname" value="{{ $owner->shop->name }}" disabled
                                        class="border-b-2 w-[80%] mb-4 p-3 border-b-gray-400 placeholder:text-gray-500 placeholder:opacity-80 text-sm bg-white focus:outline-none rounded-lg basis-6/8">

                                 </div>



                                 {{-- <div class="relative place-items-center">
                                    <label for="shopname" class="leading-7 text-sm text-gray-600 ">Shop Name</label>
                                    <div class="border-b-2 w-[100%] mb-4 p-3 border-b-gray-400 placeholder:text-gray-500 placeholder:opacity-80 text-sm bg-white focus:outline-none rounded-lg basis-6/8 ">{{ $owner->shop->name }}

                                 </div> --}}

                                 <div class="relative flex flex-row">
                                    <label for="email" class="leading-7 text-sm text-gray-600 basis-1/4">E-Mail Address</label>
                                    <input type="email" name="email" placeholder="Email Address" id="email" value="{{ $owner->email }}" required
                                        class="border-b-2 w-[80%] mb-4 p-3 border-b-gray-400 placeholder:text-gray-500 placeholder:opacity-80 text-sm bg-white focus:outline-none rounded-lg basis-6/8">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                 </div>



                                 <div class="relative flex">
                                    <label for="password" class="leading-7 text-sm text-gray-600 basis-1/4">Password</label>
                                    <input type="password" name="password" placeholder="Password" id="password" required
                                        class="border-b-2 w-[80%] mb-4 p-3 border-b-gray-400 placeholder:text-gray-500 placeholder:opacity-80 text-sm bg-white focus:outline-none rounded-lg basis-6/8">

                                 </div>
                                 <x-input-error :messages="$errors->get('password')" class="mt-2" />



                                 <div class="relative flex">
                                    <label for="password_confirmation" class="leading-7 text-sm text-gray-600 basis-1/4">Password Confirm</label>
                                    <input type="password" name="password_confirmation" placeholder="Password Confirmation" id="password_confirmation" required
                                        class="border-b-2 w-[80%] mb-4 p-3 border-b-gray-400 placeholder:text-gray-500 placeholder:opacity-80 text-sm bg-white focus:outline-none rounded-lg basis-6/8">
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                 </div>

                                    {{-- <textarea id="message" name="message" placeholder="Write us a message"
                                        class="w-[80%] bg-white border-2 border-gray-400 h-44 text-sm outline-none placeholder:text-gray-500 placeholder:opacity-80 py-1 px-2 mt-6 resize-none leading-6 duration-200 ease-in-out rounded-lg"></textarea> --}}



                                </div>
                                <div class="flex mx-auto flex-col items-center md:flex-row">

                                    <button type="button" onclick="location.href='{{route('admin.owners.index')}}'" class="mx-auto">Back</button>

                                    <button type="submit"
                                        class="border-4 border-gray-400 block w-[30%] md:w-[60%] text-center border bg-white rounded-full py-1 mt-6 text-lg font-bold tracking-wide uppercase text-black brightness-105 hover:bg-gray-400 mx-auto">UPdate</button>
                                </div>
                                </div>
                            </form>
                            </div>
                            {{-- <div
                                class="border w-[70%] md:w-[40%] bg-gray-100 items-center flex flex-col justify-center leading-7 space-y-8 p-8 h-full">
                                <img src="https://dummyimage.com/200x100/d4d4d4/000000" alt="" class="">
                                <p class="text-black">Tailblocks is a Next js app to provide best web design components for free. It uses
                                    React, NextJs, Tailwind CSS and deployed on Digital Ocean.</p>
                            </div> --}}
                        </div>
                        </div>
                        <script src="https://cdn.tailwindcss.com"></script>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>



