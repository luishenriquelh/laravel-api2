<?php

namespace App\Http\Controllers;

use App\Models\Musica;
use App\Http\Resources\Musica as MusicaResource;
use Illuminate\Http\Request;

class MusicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musicas = Musica::paginate(15);
        return MusicaResource::collection($musicas);
    }
    public function show($id){
        $musica = Musica::findOrFail( $id );
        return new MusicaResource( $musica );
      }
    
      public function store(Request $request){
        $musica = new Musica;
        $musica->titulo = $request->input('titulo');
        $musica->artista = $request->input('artista');
    
        if( $musica->save() ){
          return new MusicaResource( $musica );
        }
      }
    
       public function update(Request $request){
        $musica = Musica::findOrFail( $request->id );
        $musica->titulo = $request->input('titulo');
        $musica->artista = $request->input('artista');
    
        if( $musica->save() ){
          return new MusicaResource( $musica );
        }
      } 
    
      public function destroy($id){
        $musica = Musica::findOrFail( $id );
        if( $musica->delete() ){
          return new MusicaResource( $musica,"Registro deletado");
        }

    }
  }