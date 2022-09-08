  @extends('layouts.navbar')

  @section('content')


  {{-- search bar --}}
  <div class="flex justify-between pt-4 ">
    <div class="mb-3 xl:w-[32rem]">
      <div class="input-group relative flex flex-wrap items-stretch w-full mb-4">
        <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
        <button class="btn  px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center" type="button" id="button-addon2">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
          </svg>
        </button>
      </div>
    </div>
    <div>
  <!-- The button to open modal -->
  <label for="my-modal" class="btn modal-button">Add Question</label>

  <!-- Put this part before </body> tag -->
  <input type="checkbox" id="my-modal" class="modal-toggle" />
    <div class="modal">
      <div class="modal-box">
        <h3 class="font-bold text-lg text-gray-200">Congratulations random Internet user!</h3>
        <p class="py-4 text-gray-200">You've been selected for a chance to get one year of subscription to use Wikipedia for free!</p>
        <div class="modal-action">
          <label for="my-modal" class="btn">Yay!</label>
        </div>
      </div>
    </div>  
   </div>
  </div>

  <div class="bg-blue-500 flex justify-around items-center rounded-3xl m-3  ">
    <div class="items-start  text-start ">
      <div>
        <p class="text-white">Welcome back!</p>
        <h1 class="text-2xl text-white">Rafael Lorenzo</h1>
      </div>
      <div class="pt-[5rem]">
        <p class="text-white">ayo kerja lagi!</p>
      </div>
    </div>
    <div>
      <img src="./images/thumbnail.png" class="w-[14rem] blocked" alt="">
    </div>
  </div>

  @foreach ($question as $itQuestion)
  <div>
    <div class="m-10 pb-[2rem] p-6 border-solid border-sky-600 border-2 rounded-2xl " >
      <div class="justify-between flex">
        <div class="flex items-centers">
          <label tabindex="0" class=" w-[3.5rem] h-[3.5rem] btn-circle avatar ">
            <div class="w-[8rem] rounded-full border-blue-500 border-4">
              <img src="https://placeimg.com/80/80/people" />
            </div>
          </label>
            <div class="ml-2 text-start">
              <p>{{$itQuestion->user->name}}</p>
              <p>Si hebat</p>
          </div>
        </div>
        <div class="bg-yellow-300 self-center rounded-lg m-2 p-1">
          <p class="text-sm">{{$itQuestion->point}} Poin</p>
        </div>
      </div>

      <div class="pt-6 text-start items-center ">
        <div class="border-2 border-sky-400 rounded-lg bg-blue-50 w-[8rem] p-1 text-center ">
          <p>{{$itQuestion->category}}</p>
        </div>
          <div class="border-2 mt-2 border-sky-400 rounded-lg bg-blue-50 w-full p-1 h-[8rem]">
            <p>{{ $itQuestion->title}}</p>
          </div>
        
      </div>

      <div class="flex justify-between items-center align-middle mt-7">
        <div class="self-center justify-around">
          <button class="btn btn-outline btn-error">Like</button>
          <button class="btn btn-outline btn-info">Comment</button>
        </div>
        <!-- The button to open modal -->
        <div class="  ">
          <a href="#my-modal-5" class="btn">jawab</a>
          <!-- Put this part before </body> tag -->
          <div class="modal text-white bg-gray-100 bg-opacity-70 " id="my-modal-5">
            <div class="rounded-lg p-8 m-4  ">
              <div class="flex justify-between">
                <div class="bg-white rounded-l-xl">
                  <h1 class="text-2xl text-black text-start m-2">Pertanyaan:</h1>
                  <label for="message" class="block mb-2 text-2xl m-4 p-4 pt-0 font-medium text-gray-900 dark:text-gray-800">{{$itQuestion->title}}</label>
                </div>
                <div class="bg-blue-400 rounded-r-xl">
                  <h1 class="text-2xl text-start m-2">Jawab:</h1>
                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jawabanmu....."></textarea>
                  <div class="modal-action">
                    <a href="#" class="btn">Yay!</a>
                  </div>
                </div> 
                
              </div>
             
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach


  <div class="h-[400vh]"></div>

  @endsection