<?php
class RedSocial {
    // VARIABLES
    private array $intereses = [];           // Array indexado
    private array $interesesConID = [];      // Array asociativo con IDs
    private const NOMBRE_RED_SOCIAL = 'Mini Red Social de Intereses';

    // Constructor: Inicializa con algunos intereses por defecto
    public function __construct() {
        $this->intereses = ["cine", "juegos", "manga"];
        $this->generarIDs();
    }

    // Generar IDs únicos para los intereses
    private function generarIDs() {
        foreach ($this->intereses as $interes) {
            $id = $this->generarIDUnico();
            $this->interesesConID[$id] = $interes;
        }
    }

    // Generar un ID aleatorio único
    private function generarIDUnico(): int {
        do {
            $id = rand(1, 1000); // Genera un número aleatorio
        } while (isset($this->interesesConID[$id]));
        return $id;
    }

    // Método para agregar un nuevo interés
    public function agregarInteres(string $nuevoInteres) {
        $nuevoInteres = strtolower(trim($nuevoInteres));
        if (!in_array($nuevoInteres, $this->interesesConID, true)) {
            $id = $this->generarIDUnico();
            $this->interesesConID[$id] = $nuevoInteres;
        }
    }

    // Mostrar intereses como un string
    public function mostrarInteresesComoString(): string {
        return implode(", ", $this->interesesConID);
    }

    // Mostrar intereses como una lista <ul>
    public function mostrarInteresesComoLista() {
        echo "<ul>";
        foreach ($this->interesesConID as $id => $interes) {
            echo "<li>[$id] $interes</li>";
        }
        echo "</ul>";
    }

    // Ordenar alfabéticamente por valor
    public function ordenarAlfabeticamente() {
        asort($this->interesesConID);
    }

    // Mostrar el nombre de la red social
    public static function obtenerNombreRedSocial(): string {
        return self::NOMBRE_RED_SOCIAL;
    }
}

// Instancia de la clase RedSocial
$redSocial = new RedSocial();

// Si se solicita agregar un interés
if (isset($_GET['nuevoInteres'])) {
    $redSocial->agregarInteres($_GET['nuevoInteres']);
    // header("Location: main.php"); // Redirige para evitar recargas repetidas (comentado)
    // exit();
}

// Ordenamos intereses alfabéticamente
$redSocial->ordenarAlfabeticamente();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= RedSocial::obtenerNombreRedSocial(); ?></title>
    <link rel="stylesheet" href="styleMain.css">
</head>
<body>
    <h1>Bienvenido a <?= RedSocial::obtenerNombreRedSocial(); ?></h1>

    <!-- Mostrar intereses actuales -->
    <h2>Intereses actuales:</h2>
    <p><?= $redSocial->mostrarInteresesComoString(); ?></p>

    <!-- Formulario para agregar un nuevo interés -->
    <h2>Agregar un nuevo interés</h2>
    <form method="GET" action="">
        <input type="text" name="nuevoInteres" placeholder="Escribe un interés" required>
        <button type="submit">Agregar Interés</button>
    </form>

    <!-- Mostrar intereses como lista ordenada -->
    <h2>Intereses numerados:</h2>
    <?php $redSocial->mostrarInteresesComoLista(); ?>
</body>
</html>
