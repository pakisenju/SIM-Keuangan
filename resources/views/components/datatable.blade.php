{{-- Datatable Style --}}
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
<style>
    .dataTables_wrapper .dt-buttons {
        text-align: center;
        margin-left: 1em;
    }
</style>

{{-- Datatable Script --}}
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>

{{-- Basic Datatable --}}
<script>
    $('.datatable').DataTable();
</script>

{{-- Datatable with Export --}}
<script>
    $(document).ready(function() {
        $('.datatables').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                extend: 'excelHtml5',
                text: 'Export to Excel',
                filename: 'Rekap Keuangan',
                title: null, // judul
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5] // jumlah kolom
                },
                customize: function(xlsx) {
                    var sheet = xlsx.xl.worksheets['sheet1.xml'];
                    $('row c[r^="A"]', sheet).attr('s', '2');
                },
                init: function(api, node, config) {
                    $(node).removeClass('dt-button');
                    $(node).addClass('btn btn-primary');
                }
            }]
        });
    });
</script>
