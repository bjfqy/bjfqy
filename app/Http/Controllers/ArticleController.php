<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Article;//取得数据库模型
use Illuminate\Support\Facades\Storage;//引入存储文件类,用于图片url的展现和生成

//use App\Http\Requests\ArticleRequest;自创建请求对象验证规则

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          //$art = new Article;
         //$artdata=$art->get(['id','title','artnav','tag','img','created_at']);
        $artdata= Article::orderBy('id','desc')->get(); //降序排列 
       /* return $artdata;
        exit;*/

        //通过with 方法给出别名
        return view('article')->with('artdata',$artdata);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //准备创建 弹出创建文章页面


        return view('articlecreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //点击创建按钮之后,进入 store 写入数据库操作
        

        // 表单验证   这里要注意的是form表单中添加 !!!!enctype="multipart/form-data"!!!!
        $this->validate($request,['title'=>'required','img'=>'required']);
        //storage\app\public\uploads\article
         $path = $request->img->store('/uploads/article');
         //$path = $request->photo->path();
       // return $request->all();
       // exit;
       
        // $file = $request->file('img');


       // return $file;

        
         //Article::create($request->all());
        $art = new Article;

        $art->title = $request->title;
        $art->qizi = $request->qizi;
        $art->artnav = $request->artnav;
        $art->tag = $request->tag;
        $art->content = $request->content;
        $art->img = $path;
        $art->save();

        //Model::with('relation')->get();
        return redirect('article');
        //return view('article');
        //return Route::get('/article');
       
      
        

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //article/3 {id}来检索页面
        $art=Article::findOrFail($id);

        return view('articleshow',compact('art'));

       
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
        $art=Article::findOrFail($id);


        return view('articleedit',compact('art'));
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
        $art=Article::findOrFail($id) ;


        $art->update($request->all());
         return redirect('article');
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
        echo "1";
        Article::destroy($id);
         return redirect('article');

    }
}
