@include('administration.index.header')
<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div class="">
            <div class="page-header-title">
                <h4 class="page-title"></h4>
            </div>
        </div>

        <div class="page-content-wrapper ">


            <div class="container-fluid mt-5">

                @foreach ($enrolements as $item)

                <div class="row mt-5">
                    <br>
                    <div class="col-lg-6 mt-5">
                        <div class="m-r-15 mt-4">
                            <form action="{{ route('administration.validationEnrolement') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="relative mt-1" style="display: none;">
                                    <input type="text" id="id_enrolement" name="id_enrolement" value="{{$item->id}}" />
                                </div>

                                <div class="form-group">
                                    <p>Attestation d'enrôlement
                                        <code> Soumettre l'attestation au requérant.</code>
                                    </p>
                                    <input type="file" name="attestation_enrolement" accept="application/pdf">
                                </div>
                                <div class="form-group">


                                    <textarea class="form-control" rows="3" name="notification"
                                        id="example-textarea-input" placeholder="Notifiez le requérant"></textarea>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" name="action" class="btn btn-danger" value="annuler"
                                        data-dismiss="modal">Annuler
                                    </button>
                                    <button type="submit" value="valider" name="action" class="btn btn-primary">Valider
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5>Simple List Group</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center active">
                                <h3>Fnpss <small class="text-black">&nbsp; demande numéro
                                        /0{{$item->id}}/2023</small> :</h3>

                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Lettre adressée au DG, copie le ministre des
                                affaires.
                                <span class="badge "><a href="{{Storage::url($item->lettre)}}"
                                        class="btn btn-outline-danger"><i class="ion ion-md-cloud-download"></i>
                                        Télécharger
                                    </a></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Copie des statuts notaries
                                <span class="badge "><a href="{{Storage::url($item->copie_statut)}}"
                                        class="btn btn-outline-danger"><i class="ion ion-md-cloud-download"></i>
                                        Télécharger
                                    </a></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Copie de l’Arrêté Ministériel des Affaires
                                Sociales
                                <span class="badge "><a href="{{Storage::url($item->copie_arrete_aff_soc)}}"
                                        class="btn btn-outline-danger"><i class="ion ion-md-cloud-download"></i>
                                        Télécharger
                                    </a></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Copie de l’Arrêté du Ministère de la Justice
                                <span class="badge "><a href="{{Storage::url($item->copie_arrete_justice)}}"
                                        class="btn btn-outline-danger"><i class="ion ion-md-cloud-download"></i>
                                        Télécharger
                                    </a></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Copie du Plan d’Action pour l’année en cours
                                <a href="{{Storage::url($item->copie_plan_action)}}" class="btn btn-outline-danger"><i
                                        class="ion ion-md-cloud-download"></i>
                                    Télécharger
                                </a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Copie du rapport annuel d’activités
                                <a href="{{Storage::url($item->copie_rapport_annuel)}}"
                                    class="btn btn-outline-danger"><i class="ion ion-md-cloud-download"></i>
                                    Télécharger
                                </a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Copie du numéro d’impôt
                                <a href="{{Storage::url($item->copie_numero_impot)}}" class="btn btn-outline-danger"><i
                                        class="ion ion-md-cloud-download"></i>
                                    Télécharger
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



            @endforeach
        </div><!-- container-fluid -->
    </div> <!-- Page content Wrapper -->
</div>
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
