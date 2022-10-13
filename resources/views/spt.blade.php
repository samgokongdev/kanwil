<x-app-layout>

  <div class="pt-6 pb-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="py-2">
            <div class="font-bold">{{ $title }}</div>
            <p class="text-xs py-2">
              {{ $desc }}
            </p>
          </div>
          <table id="myTable" class="table table-stripped hover cell-border display nowrap">
            <thead>
              <tr class="bg-gray-200 text-[11px]">
                <th>NPWP</th>
                <th>NO. BPS</th>
                <th>MASA/TAHUN</th>
                <th>PEMBETULAN</th>
                <th>TANGGAL TERIMA</th>
                <th>NILAI</th>
                <th>JENIS SPT</th>
                <th>JATUH TEMPO</th>
                <th>KETERANGAN</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($spt as $t)
                <tr class="text-[11px]">
                  <td>
                    {{ $t->npwp }}
                  </td>
                  <td>
                    {{ $t->no_bps }}
                  </td>
                  <td>
                    {{ $t->masa }} / {{ $t->tahun }}
                  </td>
                  <td>
                    {{ $t->pembetulan }}
                  </td>
                  <td>
                    {{ date('d-m-Y', strtotime($t->tgl_terima)) }}
                  </td>
                  <td class="text-right">
                    {{ number_format($t->nilai) }}
                  </td>
                  <td>
                    {{ $t->kode_alias }}
                  </td>
                  <td>
                    {{ date('d-m-Y', strtotime($t->tgl_jt_rik)) }}
                  </td>
                  <td>
                    {{ $t->status }}
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $('#myTable').DataTable({
        scrollX: true,
        "ordering": false,
        dom: 'Bfrtip',
        buttons: [
          'copyHtml5',
          'excelHtml5',
          'csvHtml5',
          'pdfHtml5'
        ]
      });
    });
  </script>

</x-app-layout>
