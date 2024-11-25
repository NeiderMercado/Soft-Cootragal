<x-app-layout>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- LINK BOSSTSTRAP ICONOS 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


<!-- Scripts -->
@vite(['resources/css/app.css'])

</head>
<body>
    
<div class="container p-4 mb-2 bg-white text-dark">
<h2 id="titulos">AGREGAR NUEVA REVISIÓN/NOVEDAD</h2>
<br>
                <form method="POST" id="app" action="{{ route('prueba.store')}}" enctype="multipart/form">
                    @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1" require>Fecha: </label>
                            <input type="datetime-local" class="form-control" id="form-date" name="date_activi" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" require>Interno-Placa</label>
                            <select class="form-control" id="form-int-placa" name="int-placa" placeholder="Seleccionar" required>
                            <option value=""></option>
                            <option>1 - WEO675</option>
                            <option>2 - SMG895</option>
                            <option>3 - STS</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1" require>Conductor:</label>
                            <select class="form-control" name="conductor" id="conductor" placeholder="Seleccionar" required>
                            <option value=""></option>
                            <option>NE</option>
                            <option>IDER</option>
                            <option>MERC</option>
                            <option>DO</option>
                            <option>GONZALEZ</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlSelect2" require>Descripción de actividad</label>
                            <textarea class="form-control" name="actividad" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        </div>

                        <label for="exampleFormControlSelect2" require>Recursos utilizados:</label><br>

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
                                    <td> <input type="text" class="form-control" id="txt-element" name="circuito" value="0" placeholder="0"></td>
                                </tr>
                                <tr>
                                    <td>2. Memoria MicroSD</td>
                                    <td> <input type="text" class="form-control" id="txt-element" name="memoria" value="0" placeholder="0"></td>

                                </tr>
                                <tr>
                                    <td>3. Cámara Nueva</td>
                                    <td> <input type="text" class="form-control" id="txt-element" name="camara" value="0" placeholder="0"></td>

                                </tr>
                                <tr>
                                    <td>4. Cable duplex</td>
                                    <td> <input type="text" class="form-control" id="txt-element" name="cable" value="0" placeholder="0"></td>

                                </tr>
                            </tbody>

                        </table>

                        <div class="form-group">
                            <br>
                            <label for="">Soportes</label>
                            <br>
                            <input type="file" id="soporte" name="soporte">
                        </div>

                        <div class="form-group">
                             <input type="hidden" name="user_responsable" value="<?php $usuario = Auth::user()->name; echo($usuario); ?>">
                        </div>
                    
                            <br>
                        <div class="" id="div_botones">

                            <a href="{{ route('1_camaras.index')}}" class="btn btn-danger"><i class="bi bi-x-circle"></i> CANCELAR</a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-floppy">
                                <a id="btn-save-modal"></i> GUARDAR</a>
                            </button>
                            
                       
                        </div>
                    </div> 

            </form>

     

    </div>

</body>



        <!-- CSS -->
        <style> 
                #table-element{

                    width: 400px;
                    

                }

                #txt-element{
                    width: 50px;
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

        
</html>
</x-app-layout>
