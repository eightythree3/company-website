<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleComment;
use App\Page;
use App\Setting;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function dashboard(){


           return view("admin.dashboard")->with(["articles" => Article::count() , "users" => User::where("role" , 1)->count()]);

    }

    public function pages(){


         $pages =  Page::all();
         foreach ($pages as $page){
             $title =  json_decode($page->title);
             $page->title_ar =  $title->ar;
             $page->title_en =  $title->en;

         }

//         return $pages[0];
        return view("admin.pages.index")->with("pages" , $pages);
    }

    public function members(){
        return view("admin.members.index")->with("members" , User::latest()->get());
    }

    public function memberCreate(Request  $request){
        if($request->isMethod("POST")){
            $request_array = $request->all();

//            $image_name =  time().$request->file("main_image")->getClientOriginalName();
//            $request->file("main_image")->move("storage/app/public/pages", $image_name);
//            $request_array["main_image"] = "pages/".$image_name;
            $request_array["password"] = Hash::make($request->password);
            User::create($request_array);
            return redirect()->route("members");
        }else{

            return view("admin.members.create");
        }
    }

    public function memberEdit(Request $request , $id){
        $user = User::find($id);
        if($request->isMethod("POST")) {
            $request_array = $request->all();
//            $image_name = time() . $request->file("main_image")->getClientOriginalName();
//            $request->file("main_image")->move("storage/app/public/pages", $image_name);
//            $request_array["main_image"] = "pages/".$image_name;
             if($request->password){
                 $request_array["password"] = Hash::make($request->password);
             }else{
                 $request_array["password"] = $user->password;
             }
            $user->update($request_array);
            return redirect()->route("members");
        }else{

            return view("admin.members.edit")->with("member"  , $user);
        }
    }
    public function memberDelete($id){
        User::find($id)->delete();
        return redirect()->route("admin.members.index");
    }
    public function settings(Request $request){
        if ($request->isMethod("post")){
            $settings = Setting::first();
            $settings->update($request->all());
            return redirect()->route("settings");
        }else{

            return view("admin.settings.index")->with("settings" , Setting::first());
        }
    }



    public function pageCreate(Request  $request){
        if($request->isMethod("POST")){
              $request_array = $request->all();
              $image_name =  time().$request->file("main_image")->getClientOriginalName();
              $request->file("main_image")->move("storage/app/public/pages", $image_name);
              $request_array["main_image"] = "pages/".$image_name;
              Page::create($request_array);
              return redirect()->route("admin.pages.index");
        }else{

            return view("admin.pages.create");
        }
    }

    public function pageUpdate(Request  $request , $id){
        $page = Page::find($id);
        if($request->isMethod("POST")) {
            $request_array = $request->all();
            $image_name = time() . $request->file("main_image")->getClientOriginalName();
            $request->file("main_image")->move("storage/app/public/pages", $image_name);
            $request_array["main_image"] = "pages/".$image_name;

            $page->update($request_array);
            return redirect()->route("admin.pages.index");
        }else{
            $title =  json_decode($page->title);
            $page->title_ar =  $title->ar;
            $page->title_en =  $title->en;
            $description =  json_decode($page->description);
            $page->description_ar =  $description->ar;
            $page->description_en =  $description->en;
            return view("admin.pages.edit")->with("page"  , $page);
        }
    }

    public function pageDelete($id){
        Page::find($id)->delete();
        return redirect()->route("admin.pages.index");
    }

    public function articles(){
        return view("admin.articles.index")->with("articles" , Article::latest()->get());
    }


    public function articlesCreate(Request $request){
        if($request->isMethod("POST")) {

            $request_array = $request->all();
            if($request->hasFile("image")){
                $image_name = time() . $request->file("image")->getClientOriginalName();
                $request->file("image")->move("storage/app/public/articles", $image_name);
                $request_array["image"] = "articles/".$image_name;
            }else{
                $video_name = time() . $request->file("video")->getClientOriginalName();
                $request->file("video")->move("storage/app/public/articles", $video_name);
                $request_array["video"] = "articles/".$video_name;
            }

            if ($request->keywords){
                $request_array["keywords"] = json_encode(explode("," , $request->keywords)) ;
            }

            Article::create($request_array);
            return redirect()->route("articles");
        }else{

            return view("admin.articles.create");
        }
    }

    public function articlesEdit(Request $request , $id){
        $article = Article::find($id);

        if($request->isMethod("POST")) {
            $request_array = $request->all();
            if($request->hasFile("image")){
                $image_name = time() . $request->file("image")->getClientOriginalName();
                $request->file("image")->move("storage/app/public/articles", $image_name);
                $request_array["image"] = "articles/".$image_name;
            }
            if($request->hasFile("video")){

                $video_name = time() . $request->file("video")->getClientOriginalName();
                $request->file("video")->move("storage/app/public/articles", $video_name);
                $request_array["video"] = "articles/".$video_name;
            }
            if ($request->keywords){
                $request_array["keywords"] = json_encode(explode("," , $request->keywords)) ;
            }



          $article->update($request_array);
            return redirect()->route("articles");
        }else{
             $article->keywords = json_decode($article->keywords);

            return view("admin.articles.edit")->with("article"  , $article);
        }
    }

    public function articleDelete($id){
        Article::find($id)->delete();
        return redirect()->route("articles");
    }


    public function articlesComments(){
        return view("admin.articles.article_comments")->with("articles_comments" , ArticleComment::where("permission_view" , 0)->latest()->get());
    }

    public function articleCommentDelete($id){
        ArticleComment::find($id)->delete();
        return redirect()->route("articles.comments")->with("success_delete" , "تم حذف التعليق");
    }

    public function articleVerifyComment($id){
        ArticleComment::find($id)->update(["permission_view" => 1]);
        return redirect()->route("articles.comments")->with("success_commit" , "تم إضافه التعليق للمدونة");
    }
}
