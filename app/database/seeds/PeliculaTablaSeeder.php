<?php

use Illuminate\Database\Seeder;
/**
 * Created by PhpStorm.
 * User: juanlopez
 * Date: 7/12/15
 * Time: 4:01 PM
 */
class PeliculaTablaSeeder extends Seeder
{
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('Pelicula')->insert(array(

            'titulo' =>'Minions',
            'sinopsis' =>'En los años 60, los Minions viven marginados en la Antártida a la espera de encontrar un nuevo villano al que servir, dado el desastroso éxito de sus anteriores amos. Serán descubiertos en una convención de villanos por Scarlet Overkill, la primera supervillana femenina y Hamm a Herb Overkill, su marido inventor y querrán convertirse en sus fieles secuaces.',
            'trailer_url' =>'https://www.youtube.com/embed/87ZdxScQnro',
            'image' =>'',
            'rated' =>'A',
            'genero' =>'Animacion/Fantasia/Aventura',
        ));
        \Illuminate\Support\Facades\DB::table('FormatoPelicula')->insert(array(

            'nombre' =>'Digital 3D',
            'descripcion' =>'Simula el efecto que se produce en el ojo humano mientras percibe un objeto tridimensional real en los cines 3D.',
        ));
        \Illuminate\Support\Facades\DB::table('TipoSala')->insert(array(

            'nombre' =>'3D',
            'descripcion' =>'Simula el efecto que se produce en el ojo humano mientras percibe un objeto tridimensional real en los cines 3D.',
        ));
        \Illuminate\Support\Facades\DB::table('Cine')->insert(array(
            'nombre' =>'kinal',
            'direccion' =>'6A Avenida 13-54',
            'telefono' =>'23877600',
            'latitud' =>'14.6254314',
            'longitud' =>'-90.5359831',
            'hora_apertura' =>'07:00',
            'hora_cierre' =>'17:00',
        ));
        \Illuminate\Support\Facades\DB::table('Sala')->insert(array(
            'cine_id'=>'1',
            'numero'=>'80',
            'tiposala_id'=>'1',
        ));
        \Illuminate\Support\Facades\DB::table('Cartelera')->insert(array(
            'sala_id'=>'1',
            'pelicula_id'=>'1',
            'formatopelicula_id'=>'1',
            'formato_lenguaje'=>'es',
            'fecha'=>'2015-07-14',
            'hora'=>'14:00',
        ));
    }
}