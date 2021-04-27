<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Comment;

use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use App\Models\Contact;
use App\Tag;
use Illuminate\Support\Str;

use Validator;
class Homepage extends Controller
{
    public function __construct()
    {
        //tüm fonsiyonlarda çalışır
        view()->share('pages',Page::orderBy('order','ASC')->get());
        view()->share('categories',Category::inRandomOrder()->get());
        

    }
    public function index(){
        $data['articles']=Article::orderBy('created_at','ASC')->take(20)->paginate(10);
        $data['articles']->withPath(url('sayfa'));
        return view('front.homepage',$data);
    }
    public function single($category,$slug){
        $category=Category::whereSlug($category)->first() ?? abort(403,'böyle bir kategori bulunamadı.');
        $article=Article::whereSlug($slug)->whereCategoryId($category->id)->first() ?? abort(403,'böyle bir yazı bulunamadı. ');
        $article->increment('hit'); //okuma sayısını arttırır
        $data['article']=$article;
      //  $data['comments']=Comment::all() ;

        return view('front.single',$data);
    }
    public function category($slug){
        $category=Category::whereSlug($slug)->first() ?? abort(403,'böyle bir kategori bulunamadı.');
        $data['category']=$category;
        $data['articles']=Article::where('category_id',$category->id)->orderBy('created_at','DESC')->paginate(5);
        return view('front.category',$data);
    }
    public function page($slug){
        $page=Page::whereSlug($slug)->first() ?? abort(403,'böyle bir kategori bulunamadı.');
        $data['page']=$page;
       
       return view('front.page',$data);
    }
   
    public function contact(){
        return view('front.contact');
    }
    public function contactpost(Request $request){
      $rules=[
        'name'=>'required|min:5',
        'email'=>'required|email',
        'topic'=>'required',
        'message'=>'required|min:10'

      ];
      $validate=Validator::make($request->post(),$rules);
        if($validate->fails()){
            return redirect()->route('contact')->withErrors($validate)->withInput();
        }
      $contact=new Contact;
      $contact->name=$request->name;
      $contact->email=$request->email;
      $contact->topic=$request->topic;
      $contact->message=$request->message;
      $contact->save();
      return redirect()->route('contact')->with('success','Mesajınız bize başarıyla iletildi. Teşekkür ederiz!');
    }


    public function email(){
        return view('back.register-email' );
    }

    public function yazar(){
        return view('front.yazarlik_talebi' );
    }
   
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cshow($id)
    {
    	$articles = Article::find($id);
        return view('single', compact('articles'));
    }
    public function comment(){
        $comment=Comment::all();
        return view('front.single');
    }
    public function commentpost(Request $request){
      $rules=[
        'name'=>'required|min:3',
        'email'=>'required|email', 
        'message'=>'required|min:10' 
      ];
      $validate=Validator::make($request->post(),$rules);
        if($validate->fails()){
            return redirect()->route('comment')->withErrors($validate)->withInput();
        }
      $comment=new Comment;
      $comment->name=$request->name;
      $comment->email=$request->email;
      $comment->message=$request->message;
      $comment->save();
      return redirect()->route('comment')->with('success','Yorumunuz eklendi. Teşekkür ederiz!');
    }
}
