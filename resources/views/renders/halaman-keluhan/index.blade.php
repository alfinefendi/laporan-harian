<!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


<section class="py-1 bg-blueGray-50">
<div class="w-full mb-12 xl:mb-0 px-4 mx-auto mt-10">
  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
    <div class="rounded-t mb-0 px-4 py-3 border-0">
      <div class="flex flex-wrap items-center">
        <div class="relative w-full px-2 max-w-full flex-grow flex-1">
          <h3 class="font-semibold text-base text-blueGray-700">Tabel Keluhan</h3>
        </div>
        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
          <a href="/" class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="a">Follow Up</a>
        </div>
      </div>
    </div>

    <div class="block w-full overflow-x-auto">
      <table class="items-center bg-transparent w-full border-collapse ">
        <thead>
          <tr>
            <th class="px-2 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          No.
                        </th>
            <th class="px-2 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Nama Pelanggan
                        </th>
          <th class="px-2 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Nomor Pelanggan
                        </th>
           <th class="px-2 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Keluhan
                        </th>
           <th class="px-2 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Penanganan
                        </th>
          <th class="px-2 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Nomor HP
                        </th>
          <th class="px-2 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Tgl
                        </th>
          <th class="px-2 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Status
                        </th>
          <th class="px-2 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Observasi
                        </th>
          </tr>
        </thead>
        <tbody>
            @if($keluhanPelanggan->isNotEmpty())
            @foreach ($keluhanPelanggan as $index => $keluhan)
          <tr>
            <th class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                {{$index + 1 ?? ''}}
            </th>
            <th class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                {{$keluhan->nama_pelanggan ?? ''}}
            </th>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                {{$keluhan->nomor_pelanggan ?? ''}}
            </td>
            <td class="border-t-0 px-1 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                {{$keluhan->keterangan ?? ''}}
            </td>
            <td class="border-t-0 px-1 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            <a href="/tabel/{{$keluhan->id}}/edit" class="text-red-500 underline">Add</a>
                {{$keluhan->penanganan ?? ''}} 
            </td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              {{$keluhan->nomor_hp ?? ''}}
            </td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              {{$keluhan->created_at ?? ''}}
            </td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              {{$keluhan->status ?? ''}}
            </td>
            <td class="border-t-0 px-1 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              {{$keluhan->observasi ?? ''}}
              <form action="/delete/{{$keluhan->id}}" class="inline" method="post">
                @csrf
                <button class="ml-3 bg-red-400 text-white font-bold rounded p-2 hover:bg-red-200">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
          @endif
        </tbody>

      </table>
    </div>
  </div>
</div>
</section>