@include('header.header')
<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div class="">
            <div class="page-header-title">
                <h4 class="page-title">Attestation des biens à
                    exonérer
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
                                            <form action="{{route('bienexonerer.store')}}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-group">
                                                    <p>Lettre au Ministre des Affaires Sociales, Action Humanitaire et
                                                        Solidarité Nationale avec copie au Directeur </p>
                                                    <input type="file" name="lettre" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie de l’attestation d’enrôlement au FNPSS </p>
                                                    <input type="file" name="copie_attest_enrolement" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie de la convention de partenariat avec le gouvernement de la
                                                        RDC.</p>
                                                    <input type="file" name="copie_convention" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie du rapport annuel d’activités de l’année écoulée </p>
                                                    <input type="file" name="copie_rapport" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        accept="application/pdf" required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie du projet ou programme social ou humanitaire concerné par
                                                        exonération :</p>
                                                    <input type="file" name="copie_projet" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie du rapport d’affectation des biens exonérés précédant la
                                                        nouvelle demande et
                                                        approuvée par le Fnpss</p>
                                                    <input type="file" name="copie_rapport_affectation"
                                                        class="filestyle" data-buttonname="btn-secondary"
                                                        accept="application/pdf" required>
                                                </div>


                                                <div class="form-group">
                                                    <p>Notes (optionnel) : </p>

                                                    <textarea class="form-control" rows="3" name="commentaires"
                                                        id="example-textarea-input"></textarea>

                                                </div>

                                                <button type="submit" id="sa-position"
                                                    class="btn btn-block btn-large btn-primary ">Envoyer <i
                                                        class="ion ion-md-paper-plane"></i></button>

                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="demo-box">
                                            <h4 class="m-t-0 m-b-30"><b>Processus à suivre.</b></h4>
                                            <hr>
                                            <p><b>L’Attestation des biens à exonérer , Les documents exigés :</b></p>
                                            <ul>
                                                <li>Requête adressée au Directeur Général du Fonds National de 
                                                    Promotion<br> et de Service Social avec copie au Ministre des Affaires Sociales,<br> 
                                                    Action Humanitaire et Solidarité Nationale</li>
                                                <li>Copie de l’attestation d’enrôlement au FNPSS</li>
                                                <li>Copie de la convention de partenariat avec le Gouvernement de la République Démocratique du Congo<br> 
                                                    représenté par le Ministre des Affaires Sociales,<br> 
                                                    Action Humanitaire et Solidarité Nationale ou toute autre convention<br> 
                                                    signée entre l’Organisme philanthropique requérant<br> 
                                                    et le Gouvernement dans le cadre de la mise en oeuvre des projets sociaux<br> 
                                                    et d’assistance humanitaire ou toute autre Convention<br> 
                                                    ou Protocole signé avec l’État congolais pour la mise en oeuvre des projets sociaux et humanitaires</li>
                                                <li>Copie du rapport d’activités de l’année écoulée</li>
                                                <li>Copie du projet ou programme social ou humanitaire concerné par l’exonération</li>
                                                <li>Copie du rapport d’affectation des biens exonérés précédant la nouvelle demande et approuvé par le FNPSS</li>
                                            </ul>
                                            <p><b>Frais à payer et délai de traitement:</b></p>
                                            <ul>
                                                <li><b>L’équivalent en franc congolais de 55 $ USD</b></li>
                                                <li><b>L’équivalent en Franc congolais de 20 $ USD comme frais de dépôt du dossier</b></li>
                                                <li><b>Le délai de traitement par le FNPSS est de 10 jours ouvrables à dater du paiement des frais</b></li>
                                            </ul>
                                            
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
<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="assets/pages/sweet-alert.init.js"></script>
<script src="assets/js/app.js"></script>

</body>

</html>
