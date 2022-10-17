<x-app-layout>

  <div class="pt-6 pb-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
            <span class="tracking-wide">Detail SPT : </span>
          </div>
          <div class="text-gray-700">
            <div class="text-sm">
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Nomor BPS</div>
                <div class="px-4 py-2">{{ $dataspt->no_bps }}</div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Tanggal Terima</div>
                <div class="px-4 py-2">{{ date('d-m-Y', strtotime($dataspt->tgl_terima)) }}</div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Masa / Tahun</div>
                <div class="px-4 py-2">{{ $dataspt->masa }} / {{ $dataspt->tahun }}</div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Pembetulan Ke </div>
                <div class="px-4 py-2">{{ $dataspt->pembetulan }}</div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Jenis SPT</div>
                <div class="px-4 py-2">{{ $dataspt->kode_alias }}</div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Nilai Restitusi</div>
                <div class="px-4 py-2">{{ number_format($dataspt->nilai) }}</div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Status Pemeriksaan</div>
                <div class="px-4 py-2">{{ $dataspt->status }}</div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">NP2 / Nomor SP2 / Nomor LHP</div>
                <div class="px-4 py-2">
                  @if ($dataspt->status === 'SUDAH LHP')
                    LHP NO : {{ $dataspt->lhp }}
                  @elseif ($dataspt->status === 'SUDAH SP2')
                    SP2 NO : {{ $dataspt->sp2 }}
                  @elseif ($dataspt->status === 'SUDAH NP2')
                    NP2 NO : {{ $dataspt->np2 }}
                  @else
                    NO DATA
                  @endif
                </div>
              </div>
              <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Hasil Validasi</div>
                <div class="px-4 py-2">Belum Ada Validasi</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



</x-app-layout>
