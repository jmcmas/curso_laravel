<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = "permiso";       // Es necesario porque él espera una tabla con el nombre de la clase en plural "permisos"
                                        // y nuestra tabla se llama "permiso"
}
