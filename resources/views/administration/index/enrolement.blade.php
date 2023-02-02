@include('header.header')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="">
            <div class="page-header-title">
                <h4 class="page-title">Attestation
                    d’enrôlement</h4>
            </div>
        </div>

        <div class="page-content-wrapper ">

            <div class="container-fluid">

                <div class="row mt-3">
                    <div class="col-lg-4">
                        <div class="card m-b-30">
                            <h5 class="card-header mt-0">Attestation d'enrôlement</h5>
                            <div class="card-body">

                                <p class="card-text">Total de demande d'attestation.
                                    <span class="badge badge-primary">15</span>
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
                                <a href="{{route('enrolement.create')}}" class="btn btn-danger">Nouvelle attestation +
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @if (session('saved'))
                <div class="alert alert-info alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <h3>Demande d'attestation d'enrôlement.</h3>
                    <p class="text-secondary">
                        Votre demande été envoyée avec succès.
                    </p>
                </div>
                @endif
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
                                            <th>Validité</th>
                                            <th>Etat</th>
                                            <th>Start date</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($enrolements as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td>{{$item->validite}}</td>
                                            <td><span class="badge border-orange-300">{{$item->statut}}</span></td>
                                            <td>
                                                <a href="{{route('enrolement.show',$item->id )}}"
                                                    class="btn btn-warning">Voir </a>
                                                <a href="{{route('enrolement.edit',$item->id )}}"
                                                    class="btn btn-primary">Modifier </a>
                                                <form action="{{route('enrolement.destroy',$item->id )  }}"
                                                    method="POST" style="display:inline;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger"
                                                        onclick="if (!confirm('Voulez-vous vraiment supprimer cet élément ?')) { return false }">Supprimer
                                                    </button>
                                                </form>
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
