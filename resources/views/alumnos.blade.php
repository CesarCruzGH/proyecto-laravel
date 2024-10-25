<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Enlace al CSS personalizado --}}
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
	<link rel="stylesheet" href="{{ asset('css/alumnos.css') }}">
    <title>Document</title>
</head>
<body>
    <!-- Header section -->
    <header>
        <nav class="navbar">
            <ul class="nav-list">
                <li><a href="{{route('principal')}}">PRINCIPAL</a></li>
                <li><a href="{{route('salario')}}">Calcular Salario</a></li>
                <li><a href="{{route('alumnos')}}">Evaluación de Alumnos</a></li>
                <li><a href="{{route('logout')}}">LOGOUT</a></li>
            </ul>
        </nav>
    </header>
    <!-- end header section -->
<div class="container">
        <h1>Evaluación de Alumno</h1>
        <form id="evaluation-form">
            <label for="grade">Calificación (0 - 100):</label>
            <input type="number" id="grade" min="0" max="100" placeholder="Ingrese la calificación" required>

            <label for="attendance">Porcentaje de Asistencias (0 - 100):</label>
            <input type="number" id="attendance" min="0" max="100" placeholder="Ingrese el porcentaje de asistencias" required>

            <button type="submit">Evaluar</button>
        </form>
        
        <div class="result" id="result"></div>
    </div>

    <script>
        // Capturar el formulario y agregar un evento para el cálculo
        document.getElementById('evaluation-form').addEventListener('submit', function(e) {
            e.preventDefault(); // Evitar que el formulario se envíe

            // Obtener los valores ingresados
            const grade = document.getElementById('grade').value;
            const attendance = document.getElementById('attendance').value;

            // Verificar que los valores estén dentro del rango correcto
            if (grade >= 0 && grade <= 100 && attendance >= 0 && attendance <= 100) {
                let message = '';

                // Condiciones para aprobación
                if (grade >= 60 && attendance >= 80) {
                    message = 'El alumno está Aprobado';
                } else if (grade >= 60 && attendance < 80) {
                    message = 'El alumno está Reprobado por falta de asistencias';
                } else {
                    message = 'El alumno está Reprobado por calificación insuficiente';
                }

                // Mostrar el resultado
                document.getElementById('result').innerHTML = message;
            } else {
                // Mensaje de error si los valores están fuera del rango
                document.getElementById('result').innerHTML = 'Por favor ingrese valores válidos entre 0 y 100.';
            }
        });
    </script>
</body>
</html>