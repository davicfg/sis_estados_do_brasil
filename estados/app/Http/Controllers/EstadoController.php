<?php

namespace estados\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use estados\Estado;
use Request;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function adiciona()
    {
        $nome = Request::input('nome');
        $uf = Request::input('uf');
        $historico = Request::input('historico');

        DB::insert('insert into estados (nome, uf, historico) 
                  values (?,?,?)', array($nome, $uf, $historico));
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));

    }

    public function lista ()
    {
        $estados = DB::select('select * from estados');
        return view('estado.listagem')->withProdutos($estados);
    }

    public function novo(){
        return view('estado.formularioEstado');
    }
}
