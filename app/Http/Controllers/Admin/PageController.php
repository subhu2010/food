<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Str;
use App\Trait\{ValidateRequest, ImageUpload};


class PageController extends Controller{

    use ValidateRequest, ImageUpload;


    public function pageList(){

        $data["pages"] = Page::with(["parent:id,page_id,name"])->get();

        return view("admin.pages.page.page-list", compact("data"));

    }


    public function addPage(){

        $data["parent"] = Page::whereNull("page_id")
                                ->select(["id","name"])
                                ->orderBy("order")->get();

        return view("admin.pages.page.add-page", compact("data"));
        
    }


    public function addPageProcess(Request $request){

        $this->validatePage($request);

        try{

            $data = [   
                        "page_id" => $request->page,
                        "name"    => $request->name,
                        "slug"    => Str::slug($request->name),
                        "description" => $request->desc,
                        "page"    => $request->page,
                        "status"  => $request->status,
                        "order"   => $request->order,
                        "seo_title" => $request->seo_title,
                        "seo_keywords" => $request->seo_keywords,
                        "seo_description" => $request->seo_description
                    ];

            $pics = $request->file("pics");
            $backup = "";

            if($pics != null) $backup = $data["pics"] = $this->singleImageUpload($pics, "uploads/pages/");

            Page::create($data);

            $request->session()->flash("success", "Page Created Successfully ! ! !");

            return redirect()->route("admin.pageList");

        }catch(\Exception $error){

            @unlink("uploads/pages/".$backup);
            $request->session()->flash("error", $error->getMessage());

            return redirect()->back()->withInput($request->all());

        }

    }


    public function editPage(Page $page){

        $data["parent"] = Page::whereNull("page_id")
                                ->orderBy("order")->get();
        $data["page"] = $page;

        return view("admin.pages.page.edit-page", compact("data"));

    }


    public function editPageProcess(Request $request, Page $page){

        $this->validatePage($request, "update");

        try{

            $page->page_id = $request->page;         
            $page->name    = $request->name;
            $page->description = $request->desc;
            $page->page    = $request->page;
            $page->status  = $request->status;
            $page->order   = $request->order;
            $page->seo_title = $request->seo_title;
            $page->seo_keywords = $request->seo_keywords;
            $page->seo_description = $request->description;

            $pics = $request->file($request->pics);

            $backup = "";
            $old_pics = "uploads/pages/".$page->pics;

            if($pics != null) $backup = $page->pics = $this->singleImageUpload($pics);

            $page->update();

            if($pics != null) @unlink($old_pics);

            $request->session()->flash("success", "Page Updated Successfully ! ! !");
            return redirect()->route("admin.pageList");

        }catch(\Exception $error){

            @unlink("uploads/pages/".$backup);
            $request->session()->flash("error", $error->getMessage());

            return redirect()->back()->withInput($request->all());

        }

    }


    public function deletePage(Request $request){

        $id = $request->id;

        try{

            $page = Page::with("child")->find($id);

            if($page->child != null):

                return response()->json([
                                            "success" => false,
                                            "meesage" => "Page Contain Child, Cannot Delete ! ! !"
                                        ]);

            endif;

            $pics = "uploads/pages/".$page->pics;

            $page->delete();
            @unlink($pics);

            return response()->json([
                                        "success" => true,
                                        "message" => "Page Deleted Successfully ! ! !"
                                    ]);

        }catch(\Exception $error){

            return response()->json([
                                        "success" => false,
                                        "message" => $error->getMessage()
                                    ]);

        }

    }

    
}
