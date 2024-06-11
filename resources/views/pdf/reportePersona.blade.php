<style>
    .contenedor {
        font-family: 'Arial', sans-serif;
        background-color: white;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .contenedor-centro {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 2px solid #f97316;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .logo img {
        max-width: 100px;
    }

    .titulo-reporte {
        text-align: right;
    }

    .titulo-reporte h1 {
        color: #f97316;
        margin: 0;
        font-size: 24px;
    }

    .detalles {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .detalles-universidad h2 {
        color: #f97316;
        margin: 0 0 10px 0;
    }

    .detalles-estudiante p {
        margin: 0;
    }

    .contenido-reporte {
        margin-bottom: 20px;
    }

    .contenido-reporte h2 {
        color: #f97316;
        margin-bottom: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table th, table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    table th {
        background-color: #f97316;
        color: white;
    }

  
    table th:nth-child(1),
    table td:nth-child(1) {
        width: 50px; 
    }

    table th:nth-child(2),
    table td:nth-child(2) {
        width: 80px; 
    }
    table th:nth-child(3),
    table td:nth-child(3) {
        width: 80px; 
    }
    table th:nth-child(6),
    table td:nth-child(6) {
        width: 100px; 
    }


    footer {
        text-align: center;
        font-size: 14px;
        margin-top: 20px;
        color: #777;
    }
</style>




<div class="contenedor">
    <div class="contenedor-centro">
        <div class="caja-reporte">
            <header>
                <div class="logo">
                    <img src="https://scontent.flpb3-2.fna.fbcdn.net/v/t39.30808-6/359830903_292716540085967_8746830458050815562_n.jpg?stp=dst-jpg_s960x960&_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=yUOZEUudjcsQ7kNvgG8r0kJ&_nc_ht=scontent.flpb3-2.fna&oh=00_AYBmY27DkaCsGy2uOTUBh-ckMYF4D9LpWzQ0zjlxeZ9JnA&oe=666178CA" alt="Logo de la Universidad">
                </div>
                <div class="titulo-reporte">
                    <h1>Universidad Franz Tamayo</h1>
                    <p>Fecha: 04/06/2024</p>
                   
                </div>
            </header>
           
            <section class="contenido-reporte">
                <h2>Reporte de Personas</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            {{-- <th>Primer nombre</th>
                            <th>Segundo nombre</th> --}}
                            <th>Apellido Materno</th>
                            <th>Apellido Paterno</th>
                            <th>Número</th>
                            <th>Dirección</th>
                            {{-- <th>Correo</th> --}}
                            <th>CI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personas as $persona)
                        <tr>
                            <td>{{ $persona->id }}</td>
                            <td>{{ $persona->first_name }}</td>
                            {{-- <td>{{ $persona->second_name }}</td> --}}
                            {{-- <td>{{ $persona->middle_name }}</td> --}}
                            <td>{{ $persona->last_name }}</td>
                            <td>{{ $persona->number }}</td>
                            <td>{{ $persona->direction }}</td>
                            {{-- <td>{{ $persona->email }}</td> --}}
                            <td>{{ $persona->ci }}</td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                </table>
            </section>
            <footer>
                <p>Universidad Franz Tamayo</p>
            </footer>
        </div>
    </div>
</div>