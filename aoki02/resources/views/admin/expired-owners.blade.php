<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            期限切れオーナー一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

        <section class="text-gray-400  body-font">
                  <div class="container px-5 py-4 mx-auto">

                    <x-flash-message status="session('status')" />


                    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                      <table class="table-auto w-full text-left whitespace-no-wrap">
                        <thead>
                          <tr>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-lg text-white bg-gray-400 rounded-tl rounded-bl">Name</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-lg bg-gray-400">Mail</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-lg bg-gray-400">Expired date</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-lg bg-gray-400">  delete  </th>




                          </tr>
                        </thead>
                        <tbody>

                            @foreach($expiredOwners as $owner)






                          <tr>
                            <td class="px-4 py-3">{{$owner -> name}}</td>
                            <td class="px-4 py-3">{{$owner -> email}}</td>
                            <td class="px-4 py-3">{{$owner -> deleted_at -> diffForHumans()}}</td>
                            {{-- <td class="w-10 text-center">
                                <button type="button" onclick="location.href='{{route('admin.owners.edit',['owner' => $owner->id])}}'"
                                    class="ont-bold tracking-wide uppercase text-black text-sm brightness-105 hover:bg-blue-300 mx-auto">UPdate</button>

                            </td> --}}

                            <form id="delete_{{$owner->id}}" method="post" action="{{route('admin.expired-owners.destroy',['owner' => $owner->id])}}">
                            @csrf
                            <td class="w-10 text-center">
                                <a href="#" data-id="{{$owner->id}}" onclick="deletePost(this)"
                                    class="ont-bold tracking-wide uppercase text-red text-sm brightness-105 hover:bg-black-300 mx-auto">Terminate Delete</a>

                                </td>
                            </form>

                        </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>

                    <div class=" flex justify-center flex-row items-center">

                        <button onclick="location.href='{{route('admin.expired-owners.index')}}'" class="border-4 border-gray-400 block w-[0%] md:w-[20%] text-center border bg-white rounded-full py-1 mt-6 text-lg font-bold tracking-wide uppercase text-black brightness-105 hover:bg-gray-400 basis-1/4 ">Reload</button>





                    </div>



                  </div>
        </section>




                </div>
            </div>
        </div>
    </div>


<script>
    function deletePost(e) {'use strict';
if(confirm('This action will eliminate the information from database parmanently. Sure to delete?'))
{document.getElementById('delete_' + e.dataset.id).submit();
}}
</script>




</x-app-layout>
