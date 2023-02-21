@include('administration.index.header')
<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div class="">
            <div class="page-header-title">
                <h4 class="page-title">Informations sur le requerant
                </h4>
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
                            <h5 class="card-header mt-0">Adresse</h5>
                            <div class="card-body">

                                <p class="card-text">
                                    Mobile : <br>
                                    Email : <br>
                                    Location : <br>
                                    Adresse : <br>
                                    Compte bancaire : 
                                </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card m-b-30">
                            <h5 class="card-header mt-0">Responsable de la structure</h5>
                            <div class="card-body">

                                <p class="card-text">
                                    Nom complet : <br>
                                    Fonction : <br>
                                    Email :<br>
                                    Téléphone :+2437548995
                                </p>
                                
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <h5 class="card-header mt-0">Informations</h5>
                            <div class="card-body">
                                <p class="card-text">
                                    Bénéficiaire :<br>
                                    Projet en cours : <span class="badge-danger">Assainessement</span><br>
                                    Impact :
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <h5 class="card-header mt-0">Informations</h5>
                            <div class="card-body">
                                <p class="card-text">
                                    Domaine : <span class="badge-primary">Développement Communautaire</span><br>
                                    Fournisseur : <b>Assainessement</b><br>
                                    Rayon d'intervention :
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <h5 class="card-header mt-0">Objectifs</h5>
                            <div class="card-body">
                                <p class="card-text">
                                    
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="">
                                    <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                    <b>Statut juridique</b>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="">
                                    <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                    <b>Accord juridique</b>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="">
                                    <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                    <b>Autorisation juridique</b>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="">
                                    <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                    <b>Personnalité juridique</b>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="">
                                    <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                    <b>Convention juridique</b>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="">
                                    <img src="https://img.icons8.com/stickers/50/null/live-folder.png"/>
                                    <b>Convention juridique</b>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="m-b-30 m-t-0">Demandes </h4>

                                <table id="datatable-buttons"
                                    class="table table-striped table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Demande</th>
                                            <th>Date soumission</th>
                                            <th>Type de demande</th>
                                            <th>Etat</th>
                                            
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
