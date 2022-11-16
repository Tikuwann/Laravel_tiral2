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
                        <div class="w-4/5 my-5 mx-auto flex flex-col items-center md:flex-row ">
                            <div class="border w-[70%] h-full border-4 bg-white text-black p-10 mx-auto"> <span>
                                    <h1 class="text-3xl font-semibold text-center mb-4 text-black">Owner Register</h1>
                                    <p class="text-xs font-normal mt-2 text-center">Fill your Information to Register </p>
                                </span>
                                <div class="mt-6 leading-7 text-center">
                                 <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                    <input type="text" name="name" placeholder="Full Name" id="name" required
                                        class="border-b-2 w-[80%] mb-4 p-1 border-b-gray-400 placeholder:text-gray-500 placeholder:opacity-80 text-sm bg-white focus:outline-none rounded-lg">
                                 </div>

                                 <div class="relative">
                                    <label for="email" class="leading-7 text-sm text-gray-600">E-Mail Address</label>
                                    <input type="email" name="email" placeholder="Email Address" id="email" required
                                        class="border-b-2 w-[80%] mb-4 p-1 border-b-gray-400 placeholder:text-gray-500 placeholder:opacity-80 text-sm bg-white focus:outline-none rounded-lg">
                                 </div>

                                 <div class="relative">
                                    <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
                                    <input type="password" name="password" placeholder="Password" id="password" required
                                        class="border-b-2 w-[80%] mb-4 p-1 border-b-gray-400 placeholder:text-gray-500 placeholder:opacity-80 text-sm bg-white focus:outline-none rounded-lg">
                                 </div>

                                 <div class="relative">
                                    <label for="password_confirmation" class="leading-7 text-sm text-gray-600">Password Confirm</label>
                                    <input type="password" name="password" placeholder="Password Confirmation" id="password_confirmation" required
                                        class="border-b-2 w-[80%] mb-4 p-1 border-b-gray-400 placeholder:text-gray-500 placeholder:opacity-80 text-sm bg-white focus:outline-none rounded-lg">
                                 </div>

                                    {{-- <textarea id="message" name="message" placeholder="Write us a message"
                                        class="w-[80%] bg-white border-2 border-gray-400 h-44 text-sm outline-none placeholder:text-gray-500 placeholder:opacity-80 py-1 px-2 mt-6 resize-none leading-6 duration-200 ease-in-out rounded-lg"></textarea> --}}
                                </div>
                                <div class="flex mx-auto flex-col items-center md:flex-row">

                                    <button onclick="location.href='{{route('admin.owners.index')}}'" class="mx-auto">Back</button>
                                    <button onclick="location.href=''"
                                        class="border-4 border-gray-400 block w-[30%] md:w-[60%] text-center border bg-white rounded-full py-1 mt-6 text-lg font-bold tracking-wide uppercase text-black brightness-105 hover:bg-gray-400 mx-auto">Send</button>
                                </div>
                                </div>
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

{{--



<div class="flex justify-center">
    <div class="flex flex-col justify-center">
        <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center ">
            <div class="overflow-hidden w-full m-4 flex justify-center bg-gray-50 rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row items-center shadow-md h-full  ">
                    <div class="  md:w-1/2 overflow-hidden ">
                        <div class="flex flex-col items-center justify-center text-stone-400">
                            <ion-icon name="logo-amplify" class="text-5xl text-fuchsia-600"></ion-icon>
                            <div class="flex flex-col">
                                <div class="m-2">EMAIL</div>
                                <input class="border-b m-2  bg-gray-50 focus:outline-none" />

                                <div class="m-2">PASSWORD</div>
                                <input class="border-b m-2  bg-gray-50  focus:outline-none" type="password" />
                                <div class="flex m-2">
                                    <input class="border-b  border-stone-400 " type="checkbox" />
                                    <div class="ml-1">Remember Me</div>
                                </div>
                                <div class="flex m-2">
                                    <button
                                        class="bg-gradient-to-l from-fuchsia-600 to-cyan-400 px-6 py-1 rounded-2xl text-white font-medium">LOGIN</button>
                                    <button
                                        class="text-transparent  bg-clip-text bg-gradient-to-l from-fuchsia-600 to-cyan-400 font-bold ml-2 border-2 rounded-2xl px-6 border-cyan-400">CREATE
                                        ACCOUNT</button>
                                </div>
                                <div class="m-2">Forgotten your login details?</div>
                                    <div class="font-medium ml-2">Get Help Signing In</div>


                            </div>

                        </div>
                    </div>
                    <div class=" md:w-1/2 overflow-hidden ">
                        <img src="https://source.unsplash.com/700x600/?computer,login" alt="" class="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> --}}
