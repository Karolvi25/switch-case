<?php 

class Nodo{
    public $dato;
    public $siguiente;
     public function __construct($dato) {
        $this->dato = $dato;
        $this->siguiente = null;
     }
}

class listaenlazada{
   public $inicio;
   public function __construct(){
       $this->inicio = null;
   }

   public function insertar($dato){
       $nuevoNodo = new Nodo($dato);
       $nuevoNodo->siguiente=$this->inicio;
       $this->inicio=$nuevoNodo;
   }

   public function imprimirHTML(){
    $actual = $this->inicio;
    echo"<ul>";

    while($actual!=null){
        echo"<li>".$actual->dato."<li>";
        $actual=$actual->siguiente; 
    }
    
    echo"</ul>";
   }
}
$lista = new listaenlazada();

$lista->insertar(dato:"johan");
$lista->insertar(dato:"Felipe");
$lista->insertar(dato:"Karol");
$lista->imprimirHTML();

?>
