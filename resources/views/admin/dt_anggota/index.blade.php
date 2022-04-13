
@extends('admin.layouts.default')

@section('judul','Anggota')

@section('main')

<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h3 class="page-title">Anggota</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                   
                </nav>
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
            <h3 class="box-title">Data Anggota</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Penduduk</th>
                        <th>Nama </th>
                        <th>Pendidikan </th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anggota as $item )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->no_penduduk}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->pendidikan}}</td>
                            <td align="center">
                                <a href="{{ route('anggotaAdmin.show', $item->id) }}"><button type="submit" class="waves-effect waves-light btn btn-outline btn-success mb-5">Detail</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>No. Penduduk</th>
                        <th>Nama </th>
                        <th>Pendidikan </th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>
                </table>
            </div>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->
</section>
<!-- /.content -->

@endsection

</body>
</html>

