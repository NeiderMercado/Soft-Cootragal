<x-app-layout>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- LINK BOSSTSTRAP ICONOS 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>

<!--<h2>Su ID de consulta es: {{ $novedad_camaras }}</h2>-->
<div class="container p-4 mb-2 bg-white text-dark">
<h2 id="titulos">EDITAR O ACTUALIZA REVISIÓN/NOVEDAD</h2>

                <form id="app" method="post" action="{{ route('prueba.update', $novedad_camaras->id)}}">

                @csrf
                @method("PUT")

                       <div class="form-group">
                            <label for="exampleFormControlInput1" require>Fecha: </label>
                            <input type="datetime-local" autocomplete="off" class="form-control" id="form-date" name="date_activi" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1" require>Interno-Placa</label>
                            <input type="text" class="form-control" placeholder="{{$novedad_camaras->interno}}" id="int-placa" name="int-placa" value="{{$novedad_camaras->interno}}" required>

                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlSelect1" require>Conductor: </label>
                            <input type="text" class="form-control" placeholder="{{$novedad_camaras->condcutor}}" name="conductor" id="conductor" value="{{$novedad_camaras->conductor}}" required>

                        </div>
                        

                        <div class="form-group">
                            <label for="exampleFormControlSelect2" require>Descripción de actividad</label>
                            <textarea class="form-control" name="detalle_actividad" id="exampleFormControlTextarea1" value="{{ $novedad_camaras->detalle_actividad}}" rows="3" required>{{ $novedad_camaras->detalle_actividad}}</textarea>
                        </div>

                        <table class="table table-bordered border-primary" id="table-element">
                            <thead class="table-dark">
                                <tr>
                                    <th>Recurso utilizado</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1. Circuito PROTECTOR 24 V</td>
                                    <td> <input type="text" class="form-control" id="txt-element" name="circuito" value="{{ $novedad_camaras->circuito}}" placeholder="0"></td>
                                </tr>
                                <tr>
                                    <td>2. Memoria MicroSD</td>
                                    <td> <input type="text" class="form-control" id="txt-element" name="memoria" value="{{ $novedad_camaras->memoria}}" placeholder="0"></td>

                                </tr>
                                <tr>
                                    <td>3. Cámara Nueva</td>
                                    <td> <input type="text" class="form-control" id="txt-element" name="camara" value="{{ $novedad_camaras->camara}}" placeholder="0"></td>

                                </tr>
                                <tr>
                                    <td>4. Cable duplex</td>
                                    <td> <input type="text" class="form-control" id="txt-element" name="cable" value="{{ $novedad_camaras->cable}}" placeholder="0"></td>

                                </tr>
                            </tbody>

                        </table>

                        <br>

                        <div class="form-group">
                            <label for="">Soportes</label>
                            <br> 
                            <input type="file" id="form-soporte" name="soporte" value="{{ $novedad_camaras->cable}}" required>
                        </div>

                        <div class="form-group">
                            <span value="usuario_creador_novedad"></span>
                        </div>

                        <div class="form-group">
                             <input type="hidden" name="user_responsable" value="<?php $usuario = Auth::user()->name; echo($usuario); ?>">
                             <input type="hidden" name="tipo" value="M">
                             <input type="hidden" name="estado" value="Realizado">
                        </div>
                    
                    <br>
                    <div class="" id="div_botones">

                        <a href="{{ route('1_camaras.index')}}" class="btn btn-danger"><i class="bi bi-x-circle"></i> CANCELAR</a>
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-floppy">
                            <a id="btn-save-modal"></i> GUARDAR</a>
                        </button>

                    </div>


        </form>
 </div>
    




    </div>

</body>



        <!-- CSS -->
        <style> 
                 #table-element{

                width: 400px;
                }

                #div_botones{
                    text-align: center;
                }

                #titulos{
                    text-align: center;
                }
    
                #myInput {
                background-image: url('/css/searchicon.png'); /* Add a search icon to input */
                background-position: 10px 12px; /* Position the search icon */
                background-repeat: no-repeat; /* Do not repeat the icon image */
                width: 100%; /* Full-width */
                font-size: 16px; /* Increase font-size */
                padding: 12px 20px 12px 40px; /* Add some padding */
                border: 1px solid #ddd; /* Add a grey border */
                margin-bottom: 12px; /* Add some space below the input */
                }

                #myTable {
                border-collapse: collapse; /* Collapse borders */
                width: 100%; /* Full-width */
                border: 1px solid #ddd; /* Add a grey border */
                font-size: 18px; /* Increase font-size */
                }

                #myTable th, #myTable td {
                text-align: left; /* Left-align text */
                padding: 12px; /* Add padding */
                }

                #myTable tr {
                /* Add a bottom border to all table rows */
                border-bottom: 1px solid #ddd;
                }

                #myTable tr.header, #myTable tr:hover {
                /* Add a grey background color to the table header and on hover */
                background-color: #f1f1f1;
                }
                    
        </style>

        <!-- SCRIPT -->

        <Script>
               
            function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }
            }
            }



        </Script>

            
    <script>
            $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal('show');
            });
            $("#btn-save-modal").click(function(){
                var fecha_form = $("#form-date").val();
                var interno_placa = $("#form-int-placa").val();
                var conductor = $("#form-conductor").val();    
                var descripcion = $("#form-conductor").val();    
                var soporte = $("#form-soporte").val();

            });
    


            // add event for 'Edit' button
            $(document).on('click', '.btn-warning', function(){
                var tr = $(this).closest('tr');
                var internal = tr.find('td:nth-child(1)').text();
                var license_plate = tr.find('td:nth-child(2)').text();
                var driver = tr.find('td:nth-child(3)').text();
                var observations = tr.find('td:nth-child(4)').text();

                $("#internal").val(internal);
                $("#license_plate").val(license_plate);
                $("#driver").val(driver);
                $("#observations").val(observations);

                $("#myModal").modal('show');
            });
            });
        </script>
         

</html>
</x-app-layout>
