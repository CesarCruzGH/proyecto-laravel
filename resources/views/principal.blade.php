<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Enlace al CSS personalizado --}}
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <title>PRINCIPAL</title>
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

    <!-- Main content -->
    <main>
        <section class="intro">
            <h1>Bienvenido @auth {{Auth::user()->name}} @endauth a la Dashboard de Ejercicios</h1>
            <p>Esta plataforma ha sido diseñada para realizar una serie de ejercicios en PHP, CSS y JavaScript. Aquí podrás calcular el salario de un trabajador, evaluar las asistencias y calificaciones de un alumno, y acceder a un sistema de login. Cada una de estas funcionalidades ha sido implementada en un entorno web para practicar y mostrar conocimientos en programación web.</p>
        </section>

        <section class="features">
            <h2>Ejercicios disponibles:</h2>
            <ul>
                <li><strong>Calcular Salario:</strong> Ingresa las horas trabajadas y el salario por hora para obtener el salario neto del trabajador.</li>
                <li><strong>Evaluación de Alumnos:</strong> Basado en la calificación y el porcentaje de asistencia, determina si el alumno está aprobado o reprobado.</li>
                <li><strong>Login:</strong> Accede al sistema con el usuario y contraseña especificados.</li>
            </ul>
        </section>
    </main>
    <!-- end main content -->

    <!-- Footer section -->
    <footer>
        <p>© 2023 Dashboard de Ejercicios PHP. Todos los derechos reservados.</p>
    </footer>
    <!-- end footer section -->

</body>
</html>
