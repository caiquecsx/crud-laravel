<?php

namespace CRUD\Http\Controllers;

use CRUD\Http\Requests;
use CRUD\Produto;
use Illuminate\Http\Request;
use CRUD\Http\Requests\ProdutoRequest;

class ProdutosController extends controller{
  public function index(){
    $produtos = Produto::all();
    return view('produtos.index',['produtos'=>$produtos]);
  }

  public function create(){
    return view('produtos.create');
  }

  public function store(ProdutoRequest $request){
    $input = $request->all();
    Produto::create($input);

    return redirect()->route('produtos');
  }

  public function destroy($id){
    $this->model->find($id)->delete();

    return redirect()->route('produtos');
  }

  public function update(ProdutoRequest $request, $id){
    $produto = Produto::find($id)->update($request->all());
    return redirect()->route('produtos');
  }

  public function edit($id){
    $produto = Produto::find($id);
    return view('produtos.edit', compact('produto'));
  }


}
