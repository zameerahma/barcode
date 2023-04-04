<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function Add_Page(){
        return view('pages.page.add-page');
    }
    public function postpage(Request $request){
        $page=new Page();
        $page->title=$request->input('title');
        $page->slug=Str::slug($page->title);
        $page->description=$request->input('description');
        $page->meta=$request->input('meta');
        $page->content=$request->input('content');
        $page->headings=$request->input('headings');
        $page->save();
        return redirect()->back()->with('message','Page Add Successfully');
       
        
    }
    public function AllPages(){
        $pages= Page::all();
        return view('pages.page.all-pages',compact('pages'));
    }
    public function editpage($id){
        $page=Page::find($id);
        return view('pages.page.edit',compact('page'));
    }
    public function updatePage(Request $request, $id){
        $page=Page::find($id);
        $page->title=$request->input('title');
        $page->slug=Str::slug($request->title);
        $page->description=$request->input('description');
        $page->meta=$request->input('meta');
        $page->content=$request->input('content');
        $page->headings=$request->input('headings');
        $page->update();
        return redirect()->to('/all-pages')->with('message','Page updated successfully');
    }
    public function deletepage($id){
        $page=Page::find($id);
        $page->delete();
        return redirect()->back()->with('message1','Page Delete Successfully');
    }
    public function LoginPage(){
        return view('pages.authenticate.login');
    }
    public function RegisterPage(){
        return view('pages.authenticate.register');
    }
}
