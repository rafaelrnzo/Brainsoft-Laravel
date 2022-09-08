@extends('layouts.master')
@section('component')
    


    <div class=" text-center items-center  ">
     
      <div class="row"> 

        {{-- sidebar --}}
        <div class="col h-screen bg-gray-300 m-3 mt-0 p-4 justify-center lg:block hidden sticky top-0 ">
          <div class="">
            <img src="./images/brainsoft.png" class="w-[10rem]" alt="logo">
          </div>
          <div class="mt-4 text-start ">
            <span class="">
              <p class="text-xl mb-3 bg-blue-600 text-white rounded-lg text-center p-2 m-1 ">category
                </p></span>
            <ul>
              @foreach ($category as $itCategory)
                <li class="hover:bg-white p-2 rounded-md mt-2">{{ $itCategory->name }}</li>
              @endforeach 
            </ul>
          </div>
        </div>

        {{-- content --}}
        <div class="app col col-lg-7 bg-white">
          @yield('content')
        </div>

        <div class="col border-l-4 sticky top-0 hidden lg:block">
          <div class="mt-2 p-4 flex justify-around ">
            <p class="mr-10">profile</p>
            <span class="material-symbols-outlined text-slate-500 ml-10 ">
              logout
            </span>
          </div>
            <label tabindex="0" class=" w-[8rem] h-[8rem] btn-circle avatar ">
              <div class="w-[8rem] rounded-full border-blue-500 border-4">
                <img src="https://placeimg.com/80/80/people" />
              </div>
            </label>
            
            <div class="mt-3">
              <p class="text-xl">{{ Auth::user()->username }}</p>
              <p class="text-gray-700 bg-yellow-500 rounded-lg m-16 my-3">si sahabat</p>
            </div>

            <div class="flex p-2  justify-around">
              <div class="content-center m-2" >
                <img src="./icons/thumb.png" alt="" class="w-7">
                <p class="bg-blue-100 rounded-lg text-sm mt-1">400</p>
              </div>
              <div class="content-center m-2">
                <img src="./icons/user.png" alt="" class="w-7">
                <p class="bg-green-100 rounded-lg text-sm m-1">400</p>
              </div>
              <div class="content-center m-2">
                <img src="./icons/love.png" alt="" class="w-7">
                <p class="bg-red-100 rounded-lg text-sm m-1">400</p>
              </div>
              
            </div>

            <div class="justify-around text-sm">
              <div class="bg-blue-200 m-3 p-2 rounded-xl justify-around flex">
                <p class="">Cloud Computing</p>
                <p class="">500 poin</p>
              </div>
              <div class="bg-blue-200 m-3 p-2 rounded-xl justify-around flex">
                <p class="">User Interface</p>
                <p class="">500 poin</p>
              </div>
              <div class="bg-blue-200 m-3 p-2 rounded-xl justify-around flex">
                <p class="">User Experience</p>
                <p class="">500 poin</p>
              </div>
            </div>

            <div class="bg-blue-600 rounded-3xl m-3 mt-7 p-4  pt-8">
              <h1>400 achivement</h1>
            </div>

            <div class="border-2 border-sky-500 rounded-xl m-2 mt-3 ">
              <div class=" items-center m-2 flex justify-center">
                <div>
                  <img src="./icons/piala.png" class="w-8" alt="">
                </div>
                <div >
                  <h1 class="text-xl m-2">Leaderboard</h1>
                </div>
                
              </div>
              <div class="items-start justify-between flex m-2 p-2 text-start">
                <div>
                  <ul>
                    <li><p>Rafael Lorenzo</p></li>
                    <li><p>Ibrahim Smith</p></li>
                    <li><p>Isan Ardian</p></li>
                  </ul>
                </div>
                <div>
                  <ul>
                    <li><p>10000</p></li>
                    <li><p>87921</p></li>
                    <li><p>23190</p></li>
                  </ul>
                </div>
              </div>
            </div>
        </div>

      </div>
    </div>

  </div>


@endsection