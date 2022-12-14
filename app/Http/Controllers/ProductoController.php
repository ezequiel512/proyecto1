<?php

namespace App\Http\Controllers;
use App\Models\Productos;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function getIndex()
    {
        $productos = Productos::all();
        return view('productos.index' , array($this->$productos));
    }

    public function getShow($id)
    {
        return view('productos.show', array('productos'=>$this->arrayProductos[$id] ,
                                            'id' => $id));
    }

    public function getCreate()
    {
        return view('productos.create');
    }

    public function getEdit($id)
    {
        return view('productos.edit' , array('productos'=>$this->arrayProductos[$id] ,
                                             'id' => $id));
    }

}
