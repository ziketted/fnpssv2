<footer class="footer">
    © 2022 <span class="d-none d-md-inline-block"> Blockchains RDC </span>
</footer>

</div>

<script>
    //Fonction permettant à ajouter une ligne de commande.
function addRow() {

var table = document.querySelector("#myTable tbody");
var myHtmlContent = " <tr>"+

"<td> <input type='text' id='four' name='article[]' class='form-control' required></td>"+
"<td class='text-center'> <input type='text' id='four' name='prix[]' class='form-control'></td>"+
"<td class='text-center'> <input type='text' id='four' name='qte[]' class='form-control' value='1'></td>"+
"<td class='text-right'><input type='text' id='four' name='total[]' class='form-control' ></td>"+
"<td class='no-line text-right'> <a class='btn btn-danger waves-light ' onclick='deleteRow(this)'><i class='fa fa-minus'></i></a></td>"+
"</tr>"

table.innerHTML = myHtmlContent + table.innerHTML;

                }
                //for insert row
function insRow()
{
        var x=document.getElementById('myTable').insertRow(document.getElementById('myTable').rows.length);
        var article= x.insertCell(0);
        var prix= x.insertCell(1);
        var qte= x.insertCell(2);
        var total= x.insertCell(3);
        var button= x.insertCell(4);
        article.innerHTML= '<td class="text-center"><select name="article[]" id="" class="form-control">@foreach ($articles as $art)<option value="{{$art->id}}">{{$art->nom}}</option>@endforeach</select></td>';
        prix.innerHTML= '<td class="text-center"> <input type="text" id="four" name="prix[]" class="form-control"></td>';
        qte.innerHTML=  '<td class="text-center"> <input type="text" id="four" name="qte[]" class="form-control" ></td>';
        total.innerHTML=  '<td class="text-right"><input type="text" id="four" name="total[]" class="form-control" ></td>';
        button.innerHTML=  '<td class="no-line text-right"> <a class="btn btn-danger waves-light" onclick="deleteRow(this)"><i class="fa fa-minus"></i></a></td>';

}

function insRow_livraison()
{
        var x=document.getElementById('myTable').insertRow(document.getElementById('myTable').rows.length);
        var article= x.insertCell(0);
        var qte=x.insertCell(1);
        var button= x.insertCell(2);
        article.innerHTML= '<td class="text-center"> <select name="article[]" id="" class="form-control">@foreach ($articles as $art)<option value="{{$art->id}}">{{$art->nom}}</option>@endforeach</select></td>';
        qte.innerHTML=  '<td class="text-center"> <input type="text" id="four" name="qte[]" class="form-control" required></td>';
        button.innerHTML=  '<td class="no-line text-right"> <a class="btn btn-danger waves-light" onclick="deleteRow(this)"><i class="fa fa-minus"></i></a></td>';
}

                //Suppression élément
                function deleteRow(r)
                {
                var i=r.parentNode.parentNode.rowIndex;
                document.getElementById('myTable').deleteRow(i);
                }

</script>
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
<script src="{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>

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

<script src="{{asset('assets/plugins/flot-chart/jquery.flot.min.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.selection.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.stack.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.crosshair.js')}}"></script>

<script src="{{asset('assets/pages/dashboard.js')}}"></script>

<script src="{{asset('assets/js/app.js')}}"></script>

</body>

</html>
