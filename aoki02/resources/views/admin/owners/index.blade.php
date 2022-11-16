<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            オーナー一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
{{--}}
                エロクアント
                @foreach($e_all as $e_owner)
                {{$e_owner -> name}}
                {{$e_owner -> created_at -> diffForHumans()}}

                @endforeach
                <br>

                Query Builder
                @foreach($q_get as $q_owner)
                {{$q_owner -> name}}
                {{ Carbon\Carbon::parse($q_owner -> created_at) -> diffForHumans()}}

                @endforeach

--}}

        <section class="text-gray-400  body-font">
                  <div class="container px-5 py-4 mx-auto">

                    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                      <table class="table-auto w-full text-left whitespace-no-wrap">
                        <thead>
                          <tr>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-400 rounded-tl rounded-bl">Name</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-400">Mail</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-400">Created at</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-400">Price</th>

                          </tr>
                        </thead>
                        <tbody>

                            @foreach($owners as $owner)






                          <tr>
                            <td class="px-4 py-3">{{$owner -> name}}</td>
                            <td class="px-4 py-3">{{$owner -> email}}</td>
                            <td class="px-4 py-3">{{$owner -> created_at -> diffForHumans()}}</td>
                            <td class="w-10 text-center">
                              <input name="plan" type="radio">
                            </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>

                    <div class=" flex justify-center flex-row items-center">

                        <button onclick="location.href='{{route('admin.owners.index')}}'" class="border-4 border-gray-400 block w-[0%] md:w-[20%] text-center border bg-white rounded-full py-1 mt-6 text-lg font-bold tracking-wide uppercase text-black brightness-105 hover:bg-gray-400 basis-1/4 ">Reload</button>

                        <button onclick="location.href='{{route('admin.owners.create')}}'"
                            class="border-4 border-gray-400 block w-[30%] md:w-[20%] text-center border bg-white rounded-full py-1 mt-6 text-lg font-bold tracking-wide uppercase text-black brightness-105 hover:bg-gray-400 basis-1/4 ">Register</button>
                    </div>



                  </div>
        </section>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>
