@include('header.header')
<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div class="">
            <div class="page-header-title">
                <h4 class="page-title">Certificat
                    d’Exonérations
                </h4>
            </div>
        </div>

        <div class="page-content-wrapper ">

            <div class="container-fluid">

                <!-- end row -->


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0 m-b-30"><b>Formulaire à soumettre</b></h4>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="m-r-15">
                                            <form action="{{route('exoneration.store')}}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-group">
                                                    <p>Lettre adressée au DG, copie le ministre des affaires </p>
                                                    <input type="file" name="lettre" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie de l’accord de siège
                                                    </p>
                                                    <input type="file" name="accord" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie de l’attestation des biens à exonérer
                                                    </p>
                                                    <input type="file" name="attestation" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie de l’avis favorable pour l’exonération du Min. sectoriel
                                                    </p>
                                                    <input type="file" name="copie_avis" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Projet d’utilisation du don ou des biens acquis
                                                    </p>
                                                    <input type="file" name="projet" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        accept="application/pdf" required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Liste de colisage</p>
                                                    <input type="file" name="liste_colisage" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie de la lettre de transport maritime ( BL ) ou Aérien (LTA)
                                                        ou terrestre</p>
                                                    <input type="file" name="transport" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie de l’attestation des dons ou la facture d’achat</p>
                                                    <input type="file" name="facture" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie du rapport d’affectation des biens exonérés précedant la
                                                        nouvelle demande et
                                                        approuvée par le Fnpss</p>
                                                    <input type="file" name="affectation" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>

                                                <div class="form-group">
                                                    <p>Notes (optionnel) : </p>

                                                    <textarea class="form-control" rows="3" name="commentaire"
                                                        id="example-textarea-input"></textarea>

                                                </div>

                                                <button type="submit"
                                                    class="btn btn-block btn-large btn-primary ">Envoyer <i
                                                        class="ion ion-md-paper-plane"></i></button>

                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="demo-box">
                                            <h4 class="m-t-0 m-b-30"><b>Processus à suivre.</b></h4>
                                            <hr>
                                            <p><b>Certificat d’exonération</b></p>
                                            <p>Le Certificat d’exonération est délivré au requérant ayant déjà bénéficié 
                                                d’un Arrêté interministériel d’exonération Finances-Plan pour les biens disponibles à l’importation</p>
                                            
                                            <b>L’Attestation des biens à exonérer , Les documents exigés :</b>
                                            <ul>
                                                <li>Requête adressée au Directeur Général du Fonds National<br>
                                                    de Promotion et de Service Social avec copie au Ministre des Affaires Sociales,<br> 
                                                    Action Humanitaire et Solidarité Nationale</li>
                                                <li>Copie de l’attestation des biens à exonérer délivré par le FNPSS</li>
                                                <li>Copie de l’avis favorable pour exonération du Ministère sectoriel</li>
                                                <li>Copie du Projet d’utilisation du don ou des biens acquis</li>
                                                <li>Liste de colisage</li>
                                                <li>Copie de la lettre de transport maritime (BL) ou aérien (L.T.A) ou terrestre</li>
                                                <li>Copie de l’attestation de don ou la facture d’achat</li>
                                                <li>Copie du rapport d’affectation des biens exonérés précédant la nouvelle demande et approuvé par le FNPSS</li>
                                            </ul>

                                            <p><b>Frais à payer et délai de traitement:</b></p>
                                            <ul>
                                                <li><b>L’équivalent en franc congolais de 55 $ USD</b></li>
                                                <li><b>L’équivalent en Franc congolais de 20 $ USD comme frais de dépôt du dossier</b></li>
                                                <li><b>Le délai de traitement par le FNPSS est de 8 jours ouvrable à dater du paiement des frais</b></li>
                                            </ul>
                                           
                                        </div>
                                    </div>

                                </div> <!-- end row -->
                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0 m-b-30"><b>Formulaire à soumettre (O.N.G internationale)</b></h4>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="m-r-15">
                                            <form action="{{route('exoneration.store')}}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-group">
                                                    <p>Lettre adressée au DG, copie le ministre des affaires </p>
                                                    <input type="file" name="lettre" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie de l’accord de siège
                                                    </p>
                                                    <input type="file" name="accord" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie de l’avis favorable pour l’exonération du Min. sectoriel
                                                    </p>
                                                    <input type="file" name="copie_avis" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Projet d’utilisation du don ou des biens acquis
                                                    </p>
                                                    <input type="file" name="projet" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        accept="application/pdf" required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Liste de colisage</p>
                                                    <input type="file" name="liste_colisage" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie de la lettre de transport maritime ( BL ) ou Aérien (LTA)
                                                        ou terrestre</p>
                                                    <input type="file" name="transport" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie de l’attestation des dons ou la facture d’achat</p>
                                                    <input type="file" name="facture" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>


                                                <div class="form-group">
                                                    <p>Notes (optionnel) : </p>

                                                    <textarea class="form-control" rows="3" name="commentaire"
                                                        id="example-textarea-input"></textarea>

                                                </div>

                                                <button type="submit"
                                                    class="btn btn-block btn-large btn-primary ">Envoyer <i
                                                        class="ion ion-md-paper-plane"></i></button>

                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="demo-box">
                                            <h4 class="m-t-0 m-b-30"><b>Processus à suivre.</b></h4>
                                            <hr>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, modi
                                                iusto, exercitationem
                                                Maiores nisi quas nesciunt odit deleniti. Repellendus beatae dicta nisi
                                                minus sit? Pariatur hic mollitia quidem rem dolore, deleniti ipsum magni
                                                cumque vel numquam amet non sequi enim, eveniet iure.
                                                Voluptate quo doloremque eum? Nemo quae reiciendis saepe molestiae atque
                                                natus quaerat ipsam fugiat ex sit reprehenderit consequuntur deleniti
                                                similique tempore iusto, accusantium, neque, facere repellendus
                                                recusandae obcaecati! Corporis, debitis.</p>
                                        </div>
                                    </div>

                                </div> <!-- end row -->
                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div><!-- container -->

        </div> <!-- Page content Wrapper -->

    </div> <!-- content -->

    <footer class="footer">
        © 2023 <span class="d-none d-md-inline-block">Fnpss</span>
    </footer>

</div>
<!-- End Right content here -->

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<!-- Dropzone js -->
<script src="assets/plugins/dropzone/dist/dropzone.js"></script>

<!-- Bootstrap File Style -->
<script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>
