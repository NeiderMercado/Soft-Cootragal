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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

</head>
<body>
    
<div class="container p-4 mb-2 bg-white text-dark">


         @if ($mensaje = Session::get('exito'))

            <script>
                Swal.fire({
                position: "center",
                icon: "success",
                title: "!Buen trabajo¡",
                text: 'Tu nueva revisión fué almacenada correctamente.',
                showConfirmButton: false,
                timer: 2500
                });
            </script>
         
         @endif

         
         @if ($mensaje = Session::get('actualizado'))

         <script>
                Swal.fire({
                position: "center",
                icon: "success",
                title: "Registro actualizado",
                text: 'Tu registro fué ACTUALIZADO correctamente.',
                showConfirmButton: false,
                timer: 2500
                });
            </script>
         
         @endif

         @if ($mensaje = Session::get('eliminado'))

         <script>
                Swal.fire({
                position: "center",
                icon: "success",
                title: "Registro eliminado",
                text: 'Tu registro fué eliminado correctamente.',
                showConfirmButton: false,
                timer: 2500
                });
            </script>

        @endif

<a href="{{ route('2_crear_novedad.create') }}"  class="btn btn-primary"><i class="bi bi-file-earmark-plus-fill"></i> AGREGAR</a>
<a href="{{ route('CamarasTask.index') }}"  class="btn btn-success"><i class="bi bi-file-earmark-plus-fill"></i> CENTRO DE TAREAS</a>

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
            @foreach ($datos as $consulta1)
                <tr>
                    <td>{{ $consulta1->id }}</td>
                    <td>{{ $consulta1->interno }}</td>
                    <td>{{ $consulta1->conductor }}</td>
                    <td>{{ $consulta1->actividad }}</td>
                    <td>{{ $consulta1->soportes }}</td>
                    <td>{{ $consulta1->responsable_actividad }}</td>
                    <td>{{ $consulta1->created_at }}</td>
                    <td>
                        
                <form action="{{ route('eliminar.delete', $consulta1->id)}}"  method="get" id="{{ $consulta1->id }}">

                        <a href="{{ route('detalle.detalle', $consulta1->id)}}" type="submit" class="btn btn-info"><i class="bi bi-eye-fill"></i></a>

                        <a href="{{ route('editar.edit', $consulta1->id)}}" type="submit" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                
                        @csrf 
                        @method('delete') 


                        <button type="button" class="btn btn-danger deleteButton" data-id="{{ $consulta1->id }}"><i class="bi bi-trash"></i>
                </form>

                
                    <!-- SCRIPT -->
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
                    <script> 
                    document.addEventListener('DOMContentLoaded', function() { 
                        document.querySelectorAll('.deleteButton').forEach(button => { 
                            button.addEventListener('click', function() { 
                                const userId = this.getAttribute('data-id'); 
                                Swal.fire({ title: '¿Estás seguro?', 
                                text: '¿Quieres eliminar este registro?', 
                                icon: 'warning', showCancelButton: true, 
                                confirmButtonText: 'Sí, eliminar', 
                                cancelButtonText: 'Cancelar' 
                                }).then((result) => { 
                                    if (result.isConfirmed) { 
                                        document.getElementById('{{ $consulta1->id }}').submit(); 
                                        } }); 
                                    }); 
                                }); 
                            }); 
                    </script>



                    </td>
 

                </tr>

            @endforeach

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


                   
</html>
</x-app-layout>
