@include('header.header')
<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div class="">
            <div class="page-header-title">
                <h4 class="page-title">Convention de
                    partenariat avec le
                    gouvernement</h4>
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
                                            <form action="{{route('convention.store')}}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <p>Lettre au Ministre des Affaires Sociales, Action Humanitaire et
                                                        Solidarité Nationale avec copie au Directeur/ </p>
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
                                                    <p>Copie du Plan d’Action pour l’année en cours</p>
                                                    <input type="file" name="copie_plan" class="filestyle"
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
                                                        le partenariat sollicité :</p>
                                                    <input type="file" name="copie_projet" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
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
                                            <p><b>Les documents exigés :</b></p>
                                            <ul>
                                                <li>Requête adressée au Ministre des Affaires Sociales, Action Humanitaire<br> 
                                                    et Solidarité Nationale avec copie <br> 
                                                    au Directeur Général du Fonds National de Promotion et de Service Social (FNPSS)</li>
                                                <li>Copie de l’attestation d’enrôlement au FNPSS</li>
                                                <li>Copie du Plan d’Action pour l’année en cours</li>
                                                <li>Copie du rapport annuel d’activités de l’année écoulée</li>
                                                <li>Copie du projet ou programme social ou humanitaire concerné par le partenariat sollicité</li>
                                            </ul>

                                            <p>Frais à payer et délai de traitement:</p>
                                            <ul>
                                                <li><b>Frais dépôt du dossier : l’équivalent en Franc Congolais de 20 $ US</b></li>
                                                <li><b>Frais d’enquête : l’équivalent en Franc Congolais de 300 $ US</b></li>
                                                <li><b>Le délai de traitement par le FNPSS est de 10 jours ouvrables à dater du paiement des frais.</b></li>
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
<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="assets/pages/sweet-alert.init.js"></script>
<script src="assets/js/app.js"></script>

</body>

</html>
