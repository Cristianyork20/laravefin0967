<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TallerController extends Controller
{
    public function createUno(){
        return view('formulario');
    }
    public function createDos(){
        return view('formularioAmigo');
    }
    public function createTres(){
        return view('formularioPromedio');
    }
    public function createCuatro(){
        return view('formularioCuadratica');
    }

    public function storeUno(Request $request){
        $numero = $request->numPrimo;
        $divisores = 0;
        for ($i=1; $i <= $numero; $i++) {
            if($numero%$i == 0){
                $divisores++;
            }
        }
        if ($divisores > 2) {
            return "No es primo";
        } else {
            return "Es primo";
        }
    }

    public function storeDos(Request $request){
        $numero1 = $request->numAmigo1;
        $numero2 = $request->numAmigo2;
        $divNum1 = 0;
        $divNum2 = 0;

        for ($i=1; $i <= $numero1; $i++) {
            if($numero1%$i == 0){
                $divNum1 += $i;
            }
        }

        for ($i=1; $i <= $numero2; $i++) {
            if($numero2%$i == 0){
                $divNum2 += $i;
            }
        
        if ($divNum1 === $divNum2) {
            return "Son amigos";
        } else {
            return "No son amigos";
        }
    }
    
    }
    public function storeTres(Request $request){
        $num1 = $request->numPromedio1;
        $num2 = $request->numPromedio2;
        $num3 = $request->numPromedio3;

        $promedio = round((($num1 + $num2 + $num3)/3), 2);

        return $promedio;
    }
    public function storeCuatro(Request $request){
        $a = $request->a;
        $b = $request->b;
        $c = $request->c;
        $aux = (pow($b, 2) - (4*$a*$c));
        if ($a == 0 || $aux < 0){
            return "No se puede calcular. Ingresaste algún dato no válido";
        } else {
            $x1 = round(((($b*-1) + sqrt($aux)) / 2 * $a),2);
            $x2 = round((($b*-1) - sqrt($aux) / 2 * $a),2);
            return [$x1, $x2];
        }
    }
}
