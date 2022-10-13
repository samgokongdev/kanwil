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
                <th>NAMA WP</th>
                <th>KODE PEMERIKSAAN</th>
                <th>PERIODE PEMERIKSAAN</th>
                <th>SP2</th>
                <th>TANGGAL SP2</th>
                <th>TANGGAL SPPL</th>
                <th>JT</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tunggakan as $t)
                <tr class="text-[11px]">
                  <td>
                    {{ $t->npwp }}
                  </td>
                  <td>
                    {{ $t->nama_wp }}
                  </td>
                  <td>
                    {{ $t->kode_rik }}
                  </td>
                  <td>
                    {{ $t->periode_1 }} s.d. {{ $t->periode_2 }}
                  </td>
                  <td>
                    {{ $t->sp2 }}
                  </td>
                  <td>
                    {{ $t->tgl_sp2 === '0000-00-00' || $t->tgl_sp2 === null ? 'SP2 Belum Diinput' : date('d-m-Y', strtotime($t->tgl_sp2)) }}
                  </td>
                  <td>
                    {{ $t->tgl_sppl === '0000-00-00' ? 'SPPL BELUM INPUT' : date('d-m-Y', strtotime($t->tgl_sppl)) }}
                  </td>
                  <td>
                    {{ $t->jt_daluarsa === '0000-00-00' || $t->jt_daluarsa === null ? 'SP2 Belum Diinput' : date('d-m-Y', strtotime($t->jt_daluarsa)) }}
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
