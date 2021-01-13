<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    private $articles;

    public function __construct(Article $articles)
    {
        $this->articles = $articles;
    }

    public function index(){
       
        return response()->json($this->articles->all());
    }

    public function create(){
        
        return response("---Criar artigo---");
        
    }

    public function store(Request $request){

        $idphoto = date("dHis").rand(1,999999);

        $request->request->add(['id'=>$idphoto]);

        $guarded = $this->articles->create($request->all());

        return response()->json($guarded,201);
        
    }

    public function show($id){

        return response()->json($this->articles->findorFail($id));   

    }

    public function edit($id){

        return response()->json($this->articles->findorFail($id));   

    }

    public function update($id,Request $request){

        $article = $this->articles->findOrFail($id);

        $article->update($request->all());

        return response()->json($article,200);

    }

    public function destroy($id){

        $article = $this->articles->findOrFail($id);

        $article->delete();

        return response('Artigo deletado',200);
    }



    

}
