@include('administration.index.header')
<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div class="">
            <div class="page-header-title">
                <h4 class="page-title">Administration requerant.</h4>
            </div>
        </div>

        <div class="page-content-wrapper ">

            <div class="container-fluid">

                <div class="row mt-3">
                    <div class="col-lg-4">
                        <div class="card m-b-30">
                            <h5 class="card-header mt-0">Requerants</h5>
                            <div class="card-body">

                                <p class="card-text">Total:
                                    <span class="badge badge-primary">{{$userTotal}}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card m-b-30">
                            <h5 class="card-header mt-0">Attestation d'enrôlement</h5>
                            <div class="card-body">

                                <p class="card-text">Total attestation validée.
                                    <span class="badge badge-success">15</span>
                                </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card m-b-30">

                            <div class="card-body">
                                <a href="{{route('avisfavorable.create')}}" class="btn btn-danger">Nouvelle attestation
                                    +
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="m-b-30 m-t-0">Mes demandes </h4>

                                <table id="datatable-buttons"
                                    class="table table-striped table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Date soumission</th>
                                            <th>Expéditeur</th>
                                            <th>Inscrit depuis</th>
                                            <th>_</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        {{-- @foreach ($requrants as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->email}}</td>
                                            <td><small>{{$item->created_at->diffForHumans()}}</small></td>
                                            <td>
                                                <a href="{{route('administration.detail',$item->id )}}"
                                                    class="btn btn-secondary text-black"> <i
                                                        class="ion ion-md-information-circle"></i> Détail </a>

                                            </td>

                                        </tr>
                                        @endforeach --}}

                                    </tbody>



                                </table>

                            </div>
                        </div>
                    </div>

                </div> <!-- End Row -->



            </div><!-- container-fluid -->

        </div> <!-- Page content Wrapper -->

    </div> <!-- content -->


</div>
<!-- End Right content here -->

</div>
@include('header.footer')
