<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X__</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href=basicoPhp7.php>Básico Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema: Calcular la longitud de onda de de Broglie de una partícula puntual</h2>
    <p>Descripción:</p>
    <p>Calcular la longitud de onda de de Broglie de una partıcula ́
        puntual que se mueve con velocidad c/100. Considerar los siguientes casos: a) un electrón; b) un protón; c) una pelotita
        de masa m = 0,10 kg; d) la Tierra (MT = 6 × 1024 kg). Comparar sus resultados con la longitud de onda de la luz visible y
        con los radios atómicos tomando como valores
        representativos respectivamente λv = 6000 Å y a0 = 0,529 Å</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
    <p>λ=h/mv, donde:</p>
        <p>h es la constante de Planck</p>
        <p>m es la masa de la partícula</p>
        <p>V es la velocidad (c/100)</p>
</section>
<section class="datos">
<h2>Datos:</h2>
    <p>Constante de Planck (h): 6.626 × 10^−34 J.s</p>
    <p>Velocidad de la luz (c): 3 × 10^8 m/s</p>
    <p>Masa de las partículas:</p>
    <p>Electrón:9.11×10^−31kg</p>
    <p>Protón:1.67×10^−27kg</p>
</section>
    <section class="calculos">
        <h2>Solución</h2>
        <p>a) La longitud de onda de de Broglie de un electrón es:<br>
            λ = 6.626E-34 J·s / (9.11E-31 kg × 3E6 m/s)</p>
        <p>b) La longitud de onda de de Broglie de un protón es:<br>
            λ = 6.626E-34 J·s / (1.67E-27 kg × 3E6 m/s)</p>
        <p>c) La longitud de onda de de Broglie de una pelotita de masa 0.10 kg es:<br>
            λ = 6.626E-34 J·s / (0.10 kg × 3E6 m/s)</p>
        <p>d) La longitud de onda de de Broglie de la Tierra es:<br>
            λ = 6.626E-34 J·s / (6E24 kg × 3E6 m/s)</p>
    </section>
    <?php
    function calcula_longitud_onda($masa, $velocidad) {
        $h = 6.626E-34; // Constante de Planck en J·s
        $longitud_onda = $h / ($masa * $velocidad);
        return $longitud_onda;
    }
    ?>
    <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"></div>
        <?php
        // Velocidad constante para todos los casos
        $velocidad = 3E8 / 100; // c/100

        // Calcular para cada caso
        $longitud_electron = calcula_longitud_onda(9.11E-31, $velocidad);
        $longitud_proton = calcula_longitud_onda(1.67E-27, $velocidad);
        $longitud_pelotita = calcula_longitud_onda(0.10, $velocidad);
        $longitud_tierra = calcula_longitud_onda(6E24, $velocidad);

        // Mostrar resultados
        print "<h1>Resultados:</h1>";
        print "<p>a) Electrón: λ = " . $longitud_electron . " m</p>";
        print "<p>b) Protón: λ = " . $longitud_proton . " m</p>";
        print "<p>c) Pelotita de 0.10 kg: λ = " . $longitud_pelotita . " m</p>";
        print "<p>d) Tierra: λ = " . $longitud_tierra . " m</p>";
        ?>
    </section>
    </section>
    <footer class="pie">
        Creative Commons versión 3.0 SciSoft 2033
    </footer>
    </section>
</body>
</html>
