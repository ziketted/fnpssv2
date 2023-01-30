@include('header.header')
<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div class="">
            <div class="page-header-title">
                <h4 class="page-title">Attestation d'enrolement</h4>
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
                                            <form action="{{ route('enrolement.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf


                                                <div class="form-group">
                                                    <p>Lettre adressée au DG, copie le ministre des affaires </p>
                                                    <input type="file" name="lettre" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie des statuts notaries </p>
                                                    <input type="file" name="copie_statut" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p> Copie de l’Arrêté Ministériel des Affaires Sociales</p>
                                                    <input type="file" name="copie_arrete_aff_soc" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie de l’Arrêté du Ministère de la Justice</p>
                                                    <input type="file" name="copie_arrete_justice" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        accept="application/pdf" required>
                                                </div>

                                                <div class="form-group">
                                                    <p>Copie du Plan d’Action pour l’année en cours</p>
                                                    <input type="file" name="copie_plan_action" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie du rapport annuel d’activités </p>
                                                    <input type="file" name="copie_rapport_annuel" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie du numéro d’impôt ;</p>
                                                    <input type="file" name="copie_numero_impot" class="filestyle"
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
<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="assets/pages/sweet-alert.init.js"></script>
<script src="assets/js/app.js"></script>

</body>

</html>
