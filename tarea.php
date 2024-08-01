
    <title>Tarea PHP</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
            <h3>
  Tarea PHP
  <small class="text-muted">Luis Cañar</small>
<?php

class Variables {
    public $integer;
    public $float;
    public $string;
    public $boolean;
    public $array;

    public function __construct() {
        $this->integer = 10;
        $this->float = 20.5;
        $this->string = "Sebastian";
        $this->boolean = true;
        $this->array = array(
            new Producto("Laptop", "Electrónica", 1500.00, 10, "001"),
            new Producto("Teclado", "Accesorios", 50.00, 100, "002"),
            new Producto("Mouse", "Accesorios", 25.00, 150, "003"),
            new Producto("Monitor", "Electrónica", 300.00, 60, "004"),
            new Producto("Impresora", "Oficina", 200.00, 20, "005")
        );
    }

    public function operaciones() {
        $sum = $this->integer + $this->float;
        return $sum;
    }
    public function concatenar() {
        $string = $this->string . " de sexto semestre";
        return $string;
    }

    public function longitud() {
        $this->concatenar();
        $longitud = strlen($this->string);
        return $longitud;
    
       
    }
}
class Producto {
    public $nombre;
    public $categoria;
    public $precio;
    public $cantidad;
    public $codigo;

    public function __construct($nombre, $categoria, $precio, $cantidad, $codigo) {

        
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->codigo = $codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getCodigo() {
        return $this->codigo;
    }
}



$todo = new Variables();
$operaciones = $todo->operaciones();
$concatenar = $todo->concatenar(); 
$longitud = $todo->longitud();



echo

"</h3>
            </div>
            <div class='card-body'>
                <h5>Declaración de Variables</h5>
                <table class='table table-bordered'>
                <tr><th>Variable</th><th>Valor</th></tr>
                <tr><td>Integer</td><td>{$todo->integer}</td></tr>
                 <tr><td>Float</td><td>{$todo->float}</td></tr>
                 <tr><td>String</td><td>{$todo->string}</td></tr>";
                 echo "<tr><td>Boolean</td><td>" . ($todo->boolean ? 'true' : 'false') . "</td></tr>";
                 echo "</table>";

                echo "<h5>array</h5>";
                echo "<ul>";
                foreach ($todo->array as $producto) {
                    echo "<li>Nombre: {$producto->getNombre()}, Categoría: {$producto->getCategoria()}, Precio: {$producto->getPrecio()}, Cantidad: {$producto->getCantidad()}, Código: {$producto->getCodigo()}</li>";
                }
                echo "</ul>";
                echo "<h5>condicionales</h5>";
            if ($todo->boolean) {
                echo "<p>El valor de la variable es <strong>verdadero</strong>.</p>";
            } else {
                echo "<p>El valor de la variable es <strong>falso</strong>.</p>";
            }

                echo "<h5>operaciones </h5>
                <p>Suma del float y del integer: {$operaciones}</p>

                 <h5>cadenas</h5>
                 <p>concatenación: {$concatenar}</p>
                 <p>longitud: {$longitud}</p>
                 

                 <h5>array segun su indice</h5>
                 <table class='table table-bordered'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Categoría</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Código</th>
                            </tr>
                        </thead>
                        <tbody>";
                        foreach ($todo->array as $index => $producto) {
                            $indiceMasUno = (int)$index + 1;
                            if ($indiceMasUno == 2) {
                                $observacion = "Ninguna";
                                
                        
                                echo "<tr>
                                        <td>{$indiceMasUno}</td>
                                        <td>{$producto->getNombre()}</td>
                                        <td>{$producto->getCategoria()}</td>
                                        <td>{$producto->getPrecio()}</td>
                                        <td>{$producto->getCantidad()}</td>
                                        <td>{$producto->getCodigo()}</td>
                                        
                                      </tr>";
                            }
                        }
                echo "</tbody>
                      </table>";
                ?>
            </div>
        </div>
    </div>

