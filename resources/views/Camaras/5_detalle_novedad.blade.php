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
    
<div class="container p-4 mb-2 bg-white text-dark">
<h2 id="titulos">DETALLE DE REVISIÓN/NOVEDAD</h2>

                <form id="app" method="POST"  action="{{ route('editar.edit', $novedad_camaras->id)}}">

                @csrf
                @method("PUT")

                        <div class="form-group">
                            <label for="exampleFormControlInput1" require>Fecha: </label>
                            <input type="datetime-local" class="form-control" id="form-date" name="date_activi" value="{{ $novedad_camaras->created_at}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" require>Interno-Placa</label>
                            <select class="form-control" id="form-int-placa" placeholder="" name="int-placa" value="{{ $novedad_camaras->interno}}" disabled >
                            <option>{{ $novedad_camaras->interno}}</option>
                            <option>1 - WEO675</option>
                            <option>2 - SMG895</option>
                            <option>3 - STS</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1" require>Conductor:</label>
                            <select class="form-control" id="conductor" placeholder="Seleccionar" name="conductor" value="{{ $novedad_camaras->conductor}}" disabled>
                            <option>{{ $novedad_camaras->conductor}}</option>
                            <option>NE</option>
                            <option>IDER</option>
                            <option>MERC</option>
                            <option>DO</option>
                            <option>GONZALEZ</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect2" require>Descripción de actividad</label>
                            <textarea class="form-control" name="actividad" id="exampleFormControlTextarea1" disabled value="{{ $novedad_camaras->detalle_actividad}}" rows="3" required>{{ $novedad_camaras->actividad}}</textarea>
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
                                    <td> <input type="text" class="form-control" id="txt-element" name="circuito" value="{{ $novedad_camaras->circuito}}" disabled placeholder="0"></td>
                                </tr>
                                <tr>
                                    <td>2. Memoria MicroSD</td>
                                    <td> <input type="text" class="form-control" id="txt-element" name="memoria" value="{{ $novedad_camaras->memoria}}" disabled placeholder="0"></td>

                                </tr>
                                <tr>
                                    <td>3. Cámara Nueva</td>
                                    <td> <input type="text" class="form-control" id="txt-element" name="camara" value="{{ $novedad_camaras->camara}}" disabled placeholder="0"></td>

                                </tr>
                                <tr>
                                    <td>4. Cable duplex</td>
                                    <td> <input type="text" class="form-control" id="txt-element" name="cable" value="{{ $novedad_camaras->cable}}" disabled placeholder="0"></td>

                                </tr>
                            </tbody>

                        </table>

                        <br>

                        <div class="form-group">
                            <label for="">Soportes</label>
                            <br>
                            <img src="{{ $novedad_camaras->soporte}}" alt="{{ $novedad_camaras->soporte}}">
                            <img src="C:\xampp\htdocs\SOFT-COOTRAGAL\public\img\logo-coogal-2.0.png" alt="">
                        </div>

                        <div class="form-group">
                            <span value="usuario_creador_novedad"></span>
                        </div>

                        <div class="form-group">
                             <input type="hidden" name="user_responsable" value="<?php $usuario = Auth::user()->name; echo($usuario); ?>">
                        </div>
                    
                    <br>
                    <div class="" id="div_botones">

                        <a href="{{ route('1_camaras.index')}}" class="btn btn-danger"><i class="bi bi-x-circle"></i> CANCELAR</a>
                        <a href="{{ route('editar.edit', $novedad_camaras->id)}}" type="submit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> EDITAR</a>

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
