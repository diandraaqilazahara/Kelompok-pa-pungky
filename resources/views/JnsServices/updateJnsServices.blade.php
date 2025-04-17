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
                <div class="col-sm-6"><h3 class="mb-0">Jenis Service</h3></div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
                </div>
            </div>
            <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        @foreach($data as $row)
        <form action="{{route('jns_service.update',$id)}}" method="post" name="update">
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                <div class="card card-primary card-outline mb-4">
                    <!--begin::Header-->
                    <div class="card-header"><div class="card-title">Masukkan Jenis Service!</div></div>
                    <!--end::Header-->
                    <!--begin::Form-->
                    <form action="{{route('jns_service.store')}}" method="post" name="tambah">
                    <!--begin::Body-->
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                        <label class="form-label" for="">Nama Jenis Service</label>
                        <input type="text" class="form-control" name="jns_service" value="{{$row->id_jns_service}}" />
                        </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                    </form>
                    @endforeach
                    <!--end::Form-->
                </div>
            </div>

            </div>
        </div>

        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">

        </div>
</section>
</main>
    <!--end::App Main-->
      <!--begin::Footer-->
      @include('layout.coba')
      
<!-- apa -->
      <!--end::Footer-->
    </div>
    @include('layout.footer')


















@foreach($data as $row)
<form action="{{route('jns_Kendaraan.update',$id)}}" method="post" name="update">
    @csrf
    <label for="">Nama Jenis Kendaraan : </label>
    <input type="text" name="jns_Kendaraans" id="">
    <input type="submit" name="update" value="update">
</form>
@endforeach