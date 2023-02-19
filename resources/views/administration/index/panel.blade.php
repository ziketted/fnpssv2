@include('administration.index.header')
<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div class="">

        </div>

        <div class="page-content-wrapper ">

            <div class="container-fluid mt-4">
                <br>
                <div class="row mt-5">
                    <div class="col-lg-8">
                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <div class="card m-b-30">
                                    <h5 class="card-header mt-0">Service <span
                                            class="badge badge-dark badge-pill">1</span> </h5>
                                    <div class="card-body">
                                        <p class="card-text">Attestation d’enrôlement </p><a
                                            href="{{ route('administration.index_enrolement') }}"
                                            class="btn btn-danger"><i
                                                class="ion ion-md-checkmark-circle-outline"></i>&nbsp; Valider
                                            l'opération
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card m-b-30">
                                    <h5 class="card-header mt-0">Service <span
                                            class="badge badge-dark badge-pill">2</span></h5>
                                    <div class="card-body">
                                        <p class="card-text">Convention de partenariat avec le gouvernement </p>
                                        <a href="{{ route('administration.index_convention') }}"
                                            class="btn btn-danger"><i
                                                class="ion ion-md-checkmark-circle-outline"></i>&nbsp; Valider
                                            l'opération
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card m-b-30">
                                    <h5 class="card-header mt-0">Service <span
                                            class="badge badge-dark badge-pill">3</span> </h5>
                                    <div class="card-body">
                                        <p class="card-text">Attestation des biens à exonérer</p><a
                                            href="{{ route('administration.index_bienexonerer') }}"
                                            class="btn btn-danger"><i
                                                class="ion ion-md-checkmark-circle-outline"></i>&nbsp; Valider
                                            l'opération
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <div class="card m-b-30">
                                    <h5 class="card-header mt-0">Service <span
                                            class="badge badge-dark badge-pill">4</span></h5>
                                    <div class="card-body">
                                        <p class="card-text">Certificat d’Exonérations </p><a
                                            href="{{ route('avisfavorable.create') }}" class="btn btn-danger"><i
                                                class="ion ion-md-checkmark-circle-outline"></i>&nbsp; Valider
                                            l'opération
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card m-b-30">
                                    <h5 class="card-header mt-0">Service <span
                                            class="badge badge-dark badge-pill">5</span></h5>
                                    <div class="card-body">
                                        <p class="card-text">Certificat de philanthropie </p><a
                                            href="{{ route('avisfavorable.create') }}" class="btn btn-danger"><i
                                                class="ion ion-md-checkmark-circle-outline"></i>&nbsp; Valider
                                            l'opération
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card m-b-30">
                                    <h5 class="card-header mt-0">Service <span
                                            class="badge badge-dark badge-pill">6</span></h5>
                                    <div class="card-body">
                                        <p class="card-text">Arrêté ministériel portant avis favorable pour
                                            l’exonération </p><a href="{{ route('avisfavorable.create') }}"
                                            class="btn btn-danger"><i
                                                class="ion ion-md-checkmark-circle-outline"></i>&nbsp; Valider
                                            l'opération
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <div class="card m-b-30">
                                    <h5 class="card-header mt-0">Service <span
                                            class="badge badge-dark badge-pill">7</span></h5>
                                    <div class="card-body">
                                        <p class="card-text">Arrêté ministériel portant avis favorable permanent
                                            pour l’exonération </p><a href="{{ route('avisfavorable.create') }}"
                                            class="btn btn-danger"><i
                                                class="ion ion-md-checkmark-circle-outline"></i>&nbsp; Valider
                                            l'opération
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">

                        <div class="demo-box mt-3">
                            <h3 class="m-t-0 m-b-30"><b>Processus pour valider une opération.</b></h3>
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
                </div>

            </div><!-- container-fluid -->

        </div> <!-- Page content Wrapper -->

    </div>
    <!-- content -->
    <footer class="footer">
        © 2023 <span class="d-none d-md-inline-block">Fnpss </span>
    </footer>

</div>


<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/modernizr.min.js')}}"></script>
<script src="{{asset('assets/js/detect.js')}}"></script>
<script src="{{asset('assets/js/fastclick.js')}}"></script>
<script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('assets/js/waves.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!-- Required DataTables -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>

<script src="{{asset('assets/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.scroller.min.js')}}"></script>

<!-- Responsive examples -->
<script src="{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{asset('assets/pages/datatables.init.js')}}"></script>
<!-- KNOB JS -->
<script src="{{asset('assets/plugins/jquery-knob/excanvas.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-knob/jquery.knob.js')}}"></script>

<script src="{{asset('./assets/plugins/flot-chart/jquery.flot.min.js')}}"></script>
<script src="{{asset('./assets/plugins/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('./assets/plugins/flot-chart/jquery.flot.resize.js')}}"></script>
<script src="{{asset('./assets/plugins/flot-chart/jquery.flot.pie.js')}}"></script>
<script src="{{asset('./assets/plugins/flot-chart/jquery.flot.selection.js')}}"></script>
<script src="{{asset('./assets/plugins/flot-chart/jquery.flot.stack.js')}}"></script>
<script src="{{asset('./assets/plugins/flot-chart/jquery.flot.crosshair.js')}}"></script>

<script src="{{asset('assets/pages/dashboard.js')}}"></script>

<script src="{{asset('assets/js/app.js')}}"></script>

<script type="text/javascript">

</script>




</body>

</html>
