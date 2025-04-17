@include('layout.header')
<!--begin::App Wrapper-->
<div class="app-wrapper">
    <!--begin::Header-->
    @include('layout.navbar')
    <!--end::Header-->
    <!--begin::Sidebar-->
    @include('layout.sidebar')
    <!--end::Sidebar-->
    <!--begin::App Main-->
    <main class="app-main">
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6"><h3 class="mb-0">Service</h3></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Service</li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline mb-4">
                            <!--begin::Header-->
                            <div class="card-header">
                                <div class="card-title">Edit Data Service</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Form-->
                            @foreach($data as $row)
                                <form class="needs-validation" action="{{ route('Service.update' }}" method="post" novalidate>
                                    <!--begin::Body-->
                                    @csrf
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Nama Kendaraan</label>
                                                <input type="text" class="form-control" name="id_kendaraan"
                                                    value="{{ $row->nm_kendaraan}}" required
                                                />
                                                <div class="invalid-feedback">Nama Kendaraan</div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Keluhan</label>
                                                <input type="text" class="form-control" name="keluhan"
                                                    value="{{ $row->keluhan}}" required
                                                />
                                                <div class="invalid-feedback">Keluhan</div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Mekanik</label>
                                                <input type="text" class="form-control" name="mekanik"
                                                    value="{{ $row->mekanik}}" required
                                                />
                                                <div class="invalid-feedback">Mekanik</div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Masuk</label>
                                                <input type="text" class="form-control" name="tgl_masuk"
                                                    value="{{ $row->tgl_masuk}}" required
                                                />
                                                <div class="invalid-feedback">Isi Tanggal Masuk</div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Keluar </label>
                                                <input type="text" class="form-control" name="tgl_keluar"
                                                    value="{{ $row->tgl_keluar}}" required
                                                />
                                                <div class="invalid-feedback">Isi Tanggal Keluar </div>
                                            </div>
                                            <label class="form-label">Jenis Service </label>
                                                <input type="text" class="form-control" name="id_jns_service"
                                                    value="{{ $row->jns_service}}" required
                                                />
                                                <div class="invalid-feedback">Isi Jenis Service</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Footer-->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                    <!--end::Footer-->
                                    <!--start::Script Validation-->
                                    <script>
                                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                                        (() => {
                                            'use strict';

                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            const forms = document.querySelectorAll('.needs-validation');

                                            // Loop over them and prevent submission
                                            Array.from(forms).forEach((form) => {
                                                form.addEventListener(
                                                    'submit',
                                                    (event) => {
                                                        if (!form.checkValidity()) {
                                                            event.preventDefault();
                                                            event.stopPropagation();
                                                        }

                                                        form.classList.add('was-validated');
                                                    },
                                                    false,
                                                );
                                            });
                                        })();
                                    </script>
                                    <!--end::Script Validation-->
                                </form>
                                <!--end::Form-->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    @include('layout.coba')
    <!--end::Footer-->
</div>
@include('layout.footer')