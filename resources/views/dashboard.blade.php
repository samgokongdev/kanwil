<x-app-layout>

  <div class="pt-6 pb-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200 font-bold">
          Pengawasan SP2 KPP PMA 3
        </div>
      </div>
    </div>
  </div>

  <div class="max-w-7xl mx-auto grid grid-cols-2 lg:grid-cols-4 gap-4 lg:px-8 sm:px-6">
    <div class="w-full">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="text-xs">
            Jumlah Tunggakan SP2
          </div>
          <div class="font-bold my-2 text-2xl">
            {{ $sp2outstanding }} SP2
          </div>
          <div class="my-3">
            <a href="{{ route('tunggakan') }}"
              class="px-4 py-2 rounded-full text-xs hover:bg-indigo-600 bg-indigo-400 text-white">Lihat
              Detail</a>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="text-xs">
            Jumlah Tunggakan SP2
          </div>
          <div class="font-bold my-2 text-2xl">
            {{ $sp2belumsppl }} SP2
          </div>
          <div class="my-3">
            <a href="{{ route('tunggakan.sp2belumsppl') }}"
              class="px-4 py-2 rounded-full text-xs hover:bg-indigo-600 bg-indigo-400 text-white">Lihat
              Detail</a>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="text-xs">
            NP2 Belum Terbit SP2
          </div>
          <div class="font-bold my-2 text-2xl">
            {{ $np2belumsp2 }} NP2
          </div>
          <div class="my-3">
            <a href="{{ route('tunggakan.np2belumsp2') }}"
              class="px-4 py-2 rounded-full text-xs hover:bg-indigo-600 bg-indigo-400 text-white">Lihat
              Detail</a>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="text-xs">
            SP2 JT Bulan Ini
          </div>
          <div class="font-bold my-2 text-2xl">
            {{ $sp2jtbulanini }} SP2
          </div>
          <div class="my-3">
            <a href="{{ route('tunggakan.sp2jtbulanini') }}"
              class="px-4 py-2 rounded-full text-xs hover:bg-indigo-600 bg-indigo-400 text-white">Lihat Detail</a>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="text-xs">
            Daftar SP2 Selesai Permintaan Dokumen Bulan Ini
          </div>
          <div class="font-bold my-2 text-2xl">
            {{ $sp2permdokbulanini }} SP2
          </div>
          <div class="my-3">
            <a href="{{ route('tunggakan.sp2permdokbulanini') }}"
              class="px-4 py-2 rounded-full text-xs hover:bg-indigo-600 bg-indigo-400 text-white">Lihat Detail</a>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="text-xs">
            Daftar SP2 Target Selesai Pengujian/SPHP Bulan Ini
          </div>
          <div class="font-bold my-2 text-2xl">
            {{ $sp2sphpbulanini }} SP2
          </div>
          <div class="my-3">
            <a href="{{ route('tunggakan.sp2sphpbulanini') }}"
              class="px-4 py-2 rounded-full text-xs hover:bg-indigo-600 bg-indigo-400 text-white">Lihat Detail</a>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="text-xs">
            Daftar SP2 Target Selesai Laporan Hasil Pemeriksaan Bulan Ini
          </div>
          <div class="font-bold my-2 text-2xl">
            {{ $sp2lhpbulanini }} SP2
          </div>
          <div class="my-3">
            <a href="{{ route('tunggakan.sp2lhpbulanini') }}"
              class="px-4 py-2 rounded-full text-xs hover:bg-indigo-600 bg-indigo-400 text-white">Lihat
              Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="pt-6 pb-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="px-6 py-4 bg-white border-b border-gray-200 font-bold">
          Pengawasan SPT KPP PMA 3
        </div>
      </div>
    </div>
  </div>

  <div class="max-w-7xl mx-auto grid grid-cols-2 lg:grid-cols-4 gap-4 lg:px-8 sm:px-6">
    <div class="w-full">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="text-xs">
            Jumlah SPTLB Masuk Setahun Terakhir
          </div>
          <div class="font-bold my-2 text-2xl">
            {{ $spt_lb_res }} SPT
          </div>
          <div class="mt-2">
            Restitusi Badan : {{ $spt_lb_res_badan }} SPT
          </div>
          <div class="mt-1">
            Restitusi PPN : {{ $spt_lb_res_ppn }} SPT
          </div>
          <div class="mt-4 mb-2">
            <a href="{{ route('spt.semuaspt') }}"
              class="px-4 py-2 rounded-full text-xs hover:bg-indigo-600 bg-indigo-400 text-white">Lihat
              Detail</a>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="text-xs">
            Jumlah SPTLB Masuk Setahun Terakhir Belum Diperiksa
          </div>
          <div class="font-bold my-2 text-2xl">
            {{ $spt_belum_pemeriksaan }} SPT
          </div>
          <div class="mt-2">
            Restitusi Badan : {{ $spt_belum_pemeriksaan_badan }} SPT
          </div>
          <div class="mt-1">
            Restitusi PPN : {{ $spt_belum_pemeriksaan_ppn }} SPT
          </div>
          <div class="mt-4 mb-2">
            <a href="{{ route('spt') }}"
              class="px-4 py-2 rounded-full text-xs hover:bg-indigo-600 bg-indigo-400 text-white">Lihat
              Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
