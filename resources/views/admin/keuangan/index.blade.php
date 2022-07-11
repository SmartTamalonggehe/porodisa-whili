@extends('admin.layouts.default')

@section('judul', 'Keuangan')

@section('main')


    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h2 class="page-title">KEUANGAN</h3>
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
                        <h4 class="box-title">Form Tambah Data Keuangan</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        {{-- errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="form" action="{{ route('keuangan.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">Tanggal</label>
                                            <input type="date" class="form-control" id="tgl" name="tgl">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Keterangan </label>
                                            <textarea type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan Keterangan "></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Debet</label>
                                            <input type="text" class="form-control number" id="debet" name="debet"
                                                value="0" placeholder="Masukan Debet ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Kredit </label>
                                            <input type="text" class="form-control number" id="kredit" name="kredit"
                                                value="0" placeholder="Masukan kredit ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Saldo </label>
                                            <input type="text" class="form-control number" id="saldo" name="saldo"
                                                value="0">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="kwitansi">Kwitansi</label>
                                            <input type="file" class="form-control" id="kwitansi" name="kwitansi">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer text-end">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ti-save-alt"></i> Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->




    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Data Keuagan</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th>Debet</th>
                                        <th>Kredit</th>
                                        <th>Saldo</th>
                                        <th>Kwitansi</th>
                                        <th>Opsi</th>
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
                                            <td align="center">
                                                <a href="{{ route('keuangan.edit', $item->id) }}"><button type="submit"
                                                        class="waves-effect waves-light btn btn-outline btn-success mb-5">Edit</button></a>
                                                <form action="{{ route('keuangan.destroy', $item->id) }}" method="post"
                                                    id="formHapus" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="waves-effect waves-light btn btn-outline btn-danger mb-5"
                                                        onclick="return confirm('Anda Yakin Menghapus Data Ini? ')">Hapus</button>
                                                </form>
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
    </section>
    <!-- /.content -->


@endsection

@section('script')
    <script src="{{ mix('js/components.js') }}"></script>
    <script src="{{ mix('js/keuangan.js') }}"></script>
@endsection
