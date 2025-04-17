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
              <div class="col-sm-6"><h3 class="mb-0">Jenis kendaraan</h3></div>
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


        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h3 class="card-title">Data Keseluruhan Jenis Service</h3>
                      <a href="{{route('jns_service'.create')}}">
                        <input type="button" class="btn btn-success" value="Tambah">
                      </a>  
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <tr>
                                    <td>jns_service</td>
                                    <td>keterangan</td>
                                    
                            </tr>
                            @php $no = 1; @endphp
                            @foreach($data as $row)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$row->id_jns_service}}</td>
                                <td>
                                    <a href="{{route('jns_service.edit',$row->id_jns_service)}}">update</a>  
                                    |  
                                    <a href="{{route('jns_service.delete',$row->id_jns_service)}}">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
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