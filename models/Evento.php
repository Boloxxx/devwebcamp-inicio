<?php

namespace Model;

class Evento extends ActiveRecord {
    protected static $tabla = 'eventos';
    protected static $columnasDB = ['id', 'nombre', 'descripcion', 'disponibles', 'categoria_id', 'dia_id', 'hora_id', 'ponente_id'];

    public $id;
    public $nombre;
    public $descripcion;
    public $disponibles;
    public $categoria_id;
    public $dia_id;
    public $hora_id;
    public $ponente_id;

    
}