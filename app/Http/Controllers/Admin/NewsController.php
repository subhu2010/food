<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Trait\{ValidateRequest, ImageUpload};


class NewsController extends Controller{

    use ValidateRequest, ImageUpload;


    public function newsList(){

        $data["news"] = News::get();

        return view("admin.pages.news.news-list", compact("data"));

    }


    public function addNews(){
        return view("admin.pages.news.add-news");
    }


    public function addNewsProcess(Request $request, News $news){

        $this->validateNews($request);

        try{

            $data = [   
                        "name"    => $request->name,
                        "slug"    => $request->slug,
                        "description" => $request->desc,
                        "status"  => $request->status,
                        "post_by" => $request->post_by,
                        "time"    => $request->time,
                        "seo_title" => $request->seo_title,
                        "seo_keywords" => $request->seo_keywords,
                        "seo_description" => $request->seo_description
                    ];

            $pics = $request->file("pics");
            $backup = "";

            if($pics != null) $backup = $data["pics"] = $this->singleImageUpload($pics);

            News::create($data);

            $request->session()->flash("success", "News Created Successfully ! ! !");

            return redirect()->route("admin.newsList");

        }catch(\Exception $error){

            @unlink("uploads/pages/".$backup);
            $request->session()->flash("error", $error->getMessage());

            return redirect()->back()->withInput($request->all());

        }

    }


    public function editNews(News $news){

        $data["news"] = $news;

        return view("admin.pages.news.edit-news", compact("data"));

    }


    public function editNewsProcess(Request $request, News $news){

        $this->validateNews($request, "update");

        try{

            $news->name = $request->name;
            $news->description = $request->desc;
            $news->status  = $request->status;
            $news->post_by = $request->post_by;
            $news->time    = $request->time;
            $news->seo_title = $request->seo_title;
            $news->seo_keywords = $request->seo_keywords;
            $news->seo_description = $request->description;

            $pics = $request->file($request->pics);

            $backup = "";
            $old_pics = "uploads/news/".$news->pics;

            if($pics != null) $backup = $news->pics = $this->singleImageUpload($pics);

            $news->update();

            if($pics != null) @unlink($old_pics);

            $request->session()->flash("success", "News Updated Successfully ! ! !");
            return redirect()->route("admin.newsList");

        }catch(\Exception $error){

            @unlink("uploads/news/".$backup);
            $request->session()->flash("error", $error->getMessage());

            return redirect()->back()->withInput($request->all());

        }

    }


    public function deleteNews(Request $request){

        $id = $request->id;

        try{

            $news = News::find($id);

            $pics = "uploads/news/".$news->pics;

            $news->delete();
            @unlink($pics);

            return response()->json([
                                        "success" => true,
                                        "message" => "News Deleted Successfully ! ! !"
                                    ]);

        }catch(\Exception $error){

            return response()->json([
                                        "success" => false,
                                        "message" => $error->getMessage()
                                    ]);

        }

    }

    
}
