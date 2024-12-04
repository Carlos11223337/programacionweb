<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
<section class="wrapper">
    <header>
        <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
    </header>
    <section id="contenedor">
        <section class="problema">
            <h2>Problema: Energía cinética de un electrón</h2>
            <p>Descripción:</p>
            <p>
                El electrón-volt mide la energía cinética que adquiere un electrón al desplazarse entre dos puntos de un campo cuya diferencia es 1 voltio. 
                Si aceleras un electrón mediante una diferencia de potencial de 5000V, ¿qué energía adquirirá? ¿Cuál será su velocidad?
            </p>
        </section>
        <section class="esquemaProblema">
            <h2>Esquema</h2>
            <center>
                <img class="imgProblema" src="images/Imagen1.png" alt="Esquema del problema">
            </center>
        </section>
        <section class="formulas">
            <h2>Fórmulas</h2>
            <p>1. \( E_k = q \cdot V \)</p>
            <p>2. \( v = \sqrt{\frac{2E_k}{m}} \)</p>
        </section>
        <section class="datos">
            <h2>Datos:</h2>
            <form action="calcula.php" method="post">
                <label for="voltaje">Diferencia de potencial (\( V \)):</label>
                <input type="number" step="any" id="voltaje" name="voltaje" placeholder="Ej. 5000" required> V<br><br>
                
                <label for="carga">Carga del electrón (\( q \)):</label>
                <input type="number" step="any" id="carga" name="carga" placeholder="Ej. 1.6e-19" required> C<br><br>
                
                <label for="masa">Masa del electrón (\( m \)):</label>
                <input type="number" step="any" id="masa" name="masa" placeholder="Ej. 9.11e-31" required> kg<br><br>
                
                <button type="submit">Calcular</button>
            </form>
        </section>
        <?php if (isset($_GET['energia']) && isset($_GET['velocidad'])): ?>
        <section class="resultado">
            <h2>Resultado:</h2>
            <div>
                <p><strong>Energía adquirida:</strong> <?= htmlspecialchars($_GET['energia']) ?> J</p>
                <p><strong>Velocidad:</strong> <?= htmlspecialchars($_GET['velocidad']) ?> m/s</p>
            </div>
        </section>
        <?php endif; ?>
    </section>
    <footer class="pie">
        Creative Commons versión 3.0 SciSoft 2024
    </footer>
</section>
</body>
</html>
