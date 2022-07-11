@extends('pimpinan.layouts.default')

@section('judul', 'Laporan Anggota')

@section('main')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">LAPORAN KEUANGAN</h3>
                        <div class="d-inline-block align-items-center">

                        </div>
                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Data Keuangan</h3>
                                <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="tabeldata"
                                        class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggaln</th>
                                                <th>Keterangan</th>
                                                <th>Debet</th>
                                                <th>Kredit</th>
                                                <th>Saldo</th>
                                                <th>Kwitansi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($keuangan as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->tgl }}</td>
                                                    <td>{{ $item->keterangan }}</td>
                                                    <td>{{ $item->debet }}</td>
                                                    <td>{{ $item->kredit }}</td>
                                                    <td>{{ $item->saldo }}</td>
                                                    <td>
                                                        <img class="img-thumbnail"
                                                            src="{{ asset('storage/kwitansi/' . $item->kwitansi) }}"
                                                            alt="" srcset="">
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('script')
    <script>
        $(function() {
            $('#tabeldata').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel',
                    {
                        extend: 'pdfHtml5',
                        orientation: 'portrait',
                        pageSize: 'A4',
                        exportOptions: {
                            stripHtml: true
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            stripHtml: false
                        },
                    }
                ]
            });
        })
    </script>

@endsection
