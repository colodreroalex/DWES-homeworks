<?php
// Incluir la cabecera
include 'header.php';

// Lista de eventos disponibles
$eventos = ['Ceremonia de Apertura', 'Atletismo', 'Natación', 'Ciclismo', 'Ceremonia de Clausura', 'Fútbol', 'Baloncesto', 'Voleibol'];

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST['eventos']) && is_array($_POST['eventos']) && count($_POST['eventos']) >= 2){
        $picks = $_POST['eventos'];
        echo "<h2>Eventos seleccionados</h2>";
        echo "<ul>";
        foreach ($picks as $pick) {
            echo "<li>$pick</li>";
        }
        echo "</ul>";

    }
    else{

        echo "<h2 style='color: red;'>¡Debes seleccionar al menos 2 eventos!</h2>";
        
    }
}


?>

<h1>Selecciona los eventos a los que deseas asistir</h1>

<form action="voluntarios.php" method="POST">
    <p>Selecciona al menos dos eventos donde deseas participar: </p>
    <?php foreach ($eventos as $event): ?>
        <label>
            <input type="checkbox" name="eventos[]" value="  <?= htmlspecialchars($event) ?>  ">
            <?= htmlspecialchars($event) ?>
        </label>
    <?php endforeach; ?>
    <br><br>
    <input type="submit" value="Registrar">
</form>

<?php

include 'footer.php';

?>