<?php


namespace App\Http\Controllers\api;


use App\Article;
use App\ArticleComment;
use App\Contact;
use App\Http\Controllers\Controller;
use App\Mail\ContactEmail;
use App\Page;
use App\Setting;
use Hash;
use Illuminate\Http\Request;
use function GuzzleHttp\Psr7\str;

class ComponentsControllerApi extends Controller
{
  public function services(){
    $pages = Page::where([["in_home" ,'!=', 1] ,[ "type" , "service"]])->orderBy('ordering','asc')->get();
      foreach ($pages as $page) {
          $json_title = json_decode($page->title);


          $json_description = json_decode($page->description);


          $page->title_ar = $json_title->ar;
          $page->title_en = $json_title->en;
          $page->description_ar = $json_description->ar;
          $page->description_en = $json_description->en;
      }
		return response($pages->toArray(),200);
  }

    public function sections(){

        $pages = Page::where("in_home" , 1)->orderBy('ordering','asc')->get();
        foreach ($pages as $page) {
            $json_title = json_decode($page->title);


            $json_description = json_decode($page->description);


            $page->title_ar = $json_title->ar;
            $page->title_en = $json_title->en;
            $page->description_ar = $json_description->ar;
            $page->description_en = $json_description->en;
        }
        return response()->json($pages, 200);
    }

    public function settings(){

        $settings = Setting::first();
        return response()->json($settings, 200);
    }
   public function users (){
        return response()->json(User::nativeUsers());
    }

    public function admins (){
        return response()->json(Admin::all());
    }

    public function newAdmin(Request $request){
        if(Admin::where("email" , "like" , $request->email)->first()){
            return  response()->json("Email Already Exists",201);
        }else{
            Admin::create($request->all());
            return  response()->json("success added",200);
        }

    }
    public function deleteAdmin ($id= null){
        if(Admin::find($id)->delete()){
            return response()->json("success delete", 200);
        }

    }

    public function deleteUser ($id= null){
        if(User::find($id)->delete()){
            return response()->json("success delete", 200);
        }

    }


    public function editAdmin  (Request $request ,  $id= null){
        if($admin = Admin::find($id)){
        if($request->isMethod("get")){
            return response()->json($admin, 200);
        }else{
            $request->password = Hash::make($request->password);
            $admin->update($request->all());
            return response()->json("success update", 200);
        }



        }


    }

    public function editUser  (Request $request ,  $id= null){
        if($user = User::find($id)){
        if($request->isMethod("get")){
            return response()->json($user, 200);
        }else{
            $request['password'] = Hash::make($request->password);
            $user->update($request->all());
            return response()->json("success update", 200);
        }



        }


    }

    public function imageUploader(Request $request){
        return response()->json("success" , 200);
    }

    public function news(){
        $data = News::all();
        foreach($data as $new){
            $new->image = url("uploads/news/images/".$new->image);
        }
        return  response()->json($data, 200);
    }

    public function addNews(Request $request){
        $request_array = $request->all();
        if(News::where("title_en" , "like" , $request_array['title_en'])->first()){
            return  response()->json("alread  title exists", 202);
        }
        if($request->file('image')){
            $image_name = $request->image->getClientOriginalName();
            $request->image->move("uploads/news/images" , $image_name);
            $request_array['image'] = $image_name;
        }
        News::create($request_array);
        return  response()->json("success", 200);
    }





    public function deleteNew($id)
            {

                News::find($id)->delete();
                return response()->json("success delete", 200);
            }


            public function contactRequest(Request $request){
                $input = $request->all();

                $contact = Contact::create($input);
                try {
//                    \Mail::to('info@eightyythree.com')->send(new ContactEmail($contact));

                } catch (\Exception $e) {
                    echo 'Error - ' . $e;
                }
                return response()->json(
                    $contact->toArray(),
                   200
                );
            }

    public function articles(){
      $articles = Article::latest()->get();
     foreach ($articles as $article){

         $article->date = date("Y-m-d" , strtotime($article->created_at));


     }


        return response()->json($articles , 200);
    }

    public function articleDetails($id){
        $article = Article::find($id);
        $article->keywords = json_decode($article->keywords);
       return response()->json($article,200);
    }



    public function articlesRelated($id){

        return response()->json( Article::where("id" , "!=" , $id)->take(3)->get(),200);
    }

    public function articlesComment(Request $request , $id){

      ArticleComment::create([
          "article_id" => $id,
          "comment"    => $request->comment
      ]);
      return response()->json($request->comment,200);
    }

    public function articleComments($id){


        return response()->json(ArticleComment::where([["article_id" , $id],["permission_view" , 1]])->latest()->get(),200);
    }
}
