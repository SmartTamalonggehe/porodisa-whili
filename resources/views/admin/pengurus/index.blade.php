@extends('admin.layouts.default')

@section('judul', 'Pengurus')

@section('main')


    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h2 class="page-title">PENGURUS</h2>
                <div class="d-inline-block align-items-center">
                    
                </div>
            </div>

        </div>
    </div>

       
    @if (session('berhasil'))
    <div class="box-body pad res-tb-block">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> {{session('berhasil')}} </div>							
    </div>
    @endif

    <!-- Main content -->
    
    <section class="content">
    <a href="{{route('pengurus.create')}}"><button type="submit" class="waves-effect waves-light btn btn-outline btn-info mb-5 right">Tambah Data</button></a>
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                    <h4 class="box-title">Data Pengurus</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama </th>
                                        <th>Jabatan </th>
                                        <th>Pekerjaan </th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengurus as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->jabatan }}</td>
                                        <td >{{ $item->pekerjaan}}</td>

                                            <td align="center">
                                                <a href="{{ route('pengurus.show', $item->id) }}"><button type="submit"
                                                        class="waves-effect waves-light btn btn-outline btn-success mb-5">Details</button></a>
                                                <a href="{{ route('pengurus.edit', $item->id) }}"><button type="submit"
                                                        class="waves-effect waves-light btn btn-outline btn-primary mb-5">Edit</button></a>
                                                <form action="{{ route('pengurus.destroy', $item->id) }}" method="post" id="formHapus" class="d-inline">
                                                @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                    class="waves-effect waves-light btn btn-outline btn-danger mb-5" onclick="return confirm('Anda Yakin Menghapus Data Ini? ')">Hapus</button>
                                                </form> 
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama </th>
                                        <th>Jabatan </th>
                                        <th>Pekerjaan </th>
                                        <th>Opsi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->


@endsection
