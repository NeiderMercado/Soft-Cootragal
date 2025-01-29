<x-app-layout>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- LINK BOSSTSTRAP ICONOS 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    
<div class="container p-4 mb-2 bg-white text-dark">

PRUEBA PARA GIT
         @if ($mensaje = Session::get('exito'))

         <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>¡Bien hecho!</strong>{{ $mensaje}}
        </div>
         
         @endif

         
         @if ($mensaje = Session::get('actualizado'))

         <div class="alert alert-warning alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>¡Bien hecho!</strong>{{ $mensaje}}
        </div>
         
         @endif

         @if ($mensaje = Session::get('eliminado'))

            <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>¡Bien hecho!</strong>{{ $mensaje}}
            </div>

        @endif
    

<a href="{{ route('2_crear_novedad.create') }}"  class="btn btn-primary"><i class="bi bi-file-earmark-plus-fill"></i> AGREGAR</a>
<br></br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar Registros ...">
<br>
         
        <table id="table" class="table table-responsive-lg">
        <thead class="table-dark">
            <tr>
            <th>ID</th>
            <th>INTERNO - PLACA</th>
            <th>CONDUCTOR</th>
            <th>ACTIVIDAD</th>
            <th>SOPORTES</th>
            <th>USUARIO</th>
            <th>FECHA</th>
            <th>OPCIÓN</th>


            </tr>
        </thead>
        <tbody>
   
                <tr>
                        
             


                </tr>



        </tbody>
        </table>

        <br>
        





    </div>

</body>



        <!-- CSS -->
        <style> 
                #table{
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
                alert(interno_placa);
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
