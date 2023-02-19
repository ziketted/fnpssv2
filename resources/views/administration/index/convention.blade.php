@include('administration.index.header')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="">
            <div class="page-header-title">
                <h4 class="page-title">Convention de partenariat avec le gouvernement.</h4>
            </div>
        </div>

        <div class="page-content-wrapper ">

            <div class="container-fluid">

                <div class="row mt-3">
                    <div class="col-lg-3">
                        <div class="card m-b-30">
                            <h5 class="card-header mt-0">Convention de partenariat</h5>
                            <div class="card-body">

                                <p class="card-text">Total de demande de partenariat.
                                    <span class="badge badge-primary">{{$conventionTotal}}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card m-b-30">
                            <h5 class="card-header mt-0">Convention de partenariat</h5>
                            <div class="card-body">

                                <p class="card-text">Total convention soumise.
                                    <span class="badge badge-warning">{{$conventionSoumis}}</span>
                                </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card m-b-30">
                            <h5 class="card-header mt-0">Attestation d'enrôlement</h5>
                            <div class="card-body">

                                <p class="card-text">Total convention validée.
                                    <span class="badge badge-success">{{$conventionValider}}</span>
                                </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card m-b-30">
                            <h5 class="card-header mt-0">Convention de partenariat</h5>
                            <div class="card-body">

                                <p class="card-text">Total convention annulée.
                                    <span class="badge badge-danger">{{$conventionAnnuler}}</span>
                                </p>
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
                                            <th>Requerant</th>
                                            <th>Date soumission</th>
                                            <th>Etat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($conventions as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td>{{$item->statut}}</td>
                                            <td>
                                                <a href="{{route('administration.valider_convention',$item->id )}}"
                                                    class="btn btn-primary"><i></i> Traiter </a>
                                            </td>

                                        </tr>
                                        @endforeach

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
