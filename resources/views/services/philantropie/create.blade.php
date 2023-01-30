@include('header.header')
<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div class="">
            <div class="page-header-title">
                <h4 class="page-title">Certificat de
                    philanthropie</h4>
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
                                            <form action="{{route('philantropie.store')}}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <p>Lettre adressée au DG, copie le ministre des affaires </p>
                                                    <input type="file" name="lettre" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie de l’attestation d’enrôlement au Fnpss</p>
                                                    <input type="file" name="attestation" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie du certificat d’exonération des biens concernés par la
                                                        vente </p>
                                                    <input type="file" name="certificat" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie du rapport d’activités de l’année écoulée</p>
                                                    <input type="file" name="rapport_activite" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        accept="application/pdf" required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie du projet ou programme social ou humanitaire concerné par
                                                        la vente ou l’achat.</p>
                                                    <input type="file" name="projet" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie de la grille de prix proposé.</p>
                                                    <input type="file" name="grille" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Copie de rapport approuvée par le Fnpss, d’achat ou de vente
                                                        précédant la nouvelle
                                                        demande.</p>
                                                    <input type="file" name="rapport_approuve" class="filestyle"
                                                        data-buttonname="btn-secondary" accept="application/pdf"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Notes (optionnel) : </p>

                                                    <textarea class="form-control" rows="3" name="commentaire"
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
