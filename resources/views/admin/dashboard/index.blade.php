@extends('admin.layouts.default')

@section('judul', 'Dashboard')

@section('main')


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xl-12 col-12">
                <div class="box bg-primary">
                    <div class="box-body d-flex px-0">
                        <div class="flex-grow-1 p-30 flex-grow-1 bg-img dask-bg bg-none-md"
                            style="background-position: right bottom; background-size: auto 100%;  "> <img
                                src="{{ asset('assets_admin/images/svg-icon/color-svg/custom-1.svg') }}" alt="" srcset="">
                            <div class="row">
                                <div class="col-12 col-xl-7">
                                    <h2>Selamat Datang Kembali, <strong>Admin!</strong></h2>

                                </div>
                                <div class="col-12 col-xl-5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->



@endsection


</body>

</html>
