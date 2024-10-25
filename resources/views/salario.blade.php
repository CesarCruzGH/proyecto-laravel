<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Enlace al CSS personalizado --}}
	<link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/salario.css') }}">

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
        <h1>Calcular Salario Neto</h1>
        <form id="salary-form">
            <label for="hours">Horas trabajadas:</label>
            <input type="number" id="hours" placeholder="Ingrese el número de horas" required>
            
            <label for="wage">Salario por hora:</label>
            <input type="number" id="wage" placeholder="Ingrese el salario por hora" required>
            
            <button type="submit">Calcular</button>
        </form>
        
        <div class="result" id="result"></div>
    </div>

    <script>
        // Capturar el formulario y agregar un evento para el cálculo
        document.getElementById('salary-form').addEventListener('submit', function(e) {
            e.preventDefault(); // Evitar que el formulario se envíe

            // Obtener los valores ingresados
            const hours = document.getElementById('hours').value;
            const wage = document.getElementById('wage').value;

            // Verificar que ambos campos tengan valores válidos
            if (hours > 0 && wage > 0) {
                // Calcular el salario neto
                const netSalary = hours * wage;

                // Mostrar el resultado
                document.getElementById('result').innerHTML = `El salario neto es: $${netSalary.toFixed(2)}`;
            } else {
                // Mensaje de error si los campos están vacíos o incorrectos
                document.getElementById('result').innerHTML = 'Por favor ingrese valores válidos.';
            }
        });
    </script>

</body>
</html>