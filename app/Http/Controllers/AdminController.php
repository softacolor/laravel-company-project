<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Image;

class AdminController extends Controller
{
    public function logout(){
        Auth::logout();
        return Redirect()->route('softacolor')->with('success','User Logout Succesfully');
    }

    public function category(){
        $category = DB::table('categories')->orderBy('id','desc')->paginate(5);
        return view('category.index', compact('category'));
    }
    public function addcategory(){
        return view('category.create');
    }

    public function storecategory(Request $request){

        $validated = $request->validate([
            'category' => 'required|unique:categories|max:255',
        ]);

        $data = array();
        $data['category']= $request->category;
        DB::table('categories')->insert($data);
        $note = array(
            'message' => 'Category Added Successfully',
            'alert-type' =>'success',
        );
        return Redirect()->route('categories')->with($note);

    }

    public function editcategory($id){
        $cat = DB::table('categories')->where('id',$id)->first();
        return view('category.edit',compact('cat'));
    }
    public function updatecategory(Request $request,$id){

        $data = array();
        $data['category']= $request->category;
        DB::table('categories')->where('id',$id)->update($data);
        $note = array(
            'message' => 'Category Updated Successfully',
            'alert-type' =>'success',
        );
        return Redirect()->route('categories')->with($note);

    }

    public function deletecategory($id){
        DB::table('categories')->where('id',$id)->delete();

        $note = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' =>'success',
        );
        return Redirect()->route('categories')->with($note);
        
    }

    public function contact_massege(){
        $contact = DB::table('contact')->orderBy('id','desc')->paginate(5);

        return view('contact.index',compact('contact'));
    }


    public function storecontact(Request $request){

        $validated = $request->validate([
            'first_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'massege' => 'required|max:255',

        ]);

        $data = array();
        $data['first_name']= $request->first_name;
        $data['last_name']= $request->last_name;
        $data['phone']= $request->phone;
        $data['email']= $request->email;
        $data['subject']= $request->subject;
        $data['massege']= $request->massege;
        DB::table('contact')->insert($data);
        $note = array(
            'message' => 'Massege Sent Successfully',
            'alert-type' =>'info',
        );
        return Redirect()->route('contact')->with($note);

    }

    public function deletemassege($id){
        DB::table('contact')->where('id',$id)->delete();

        $note = array(
            'message' => 'Message Deleted Successfully',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($note);
        
    }

    public function storesub(Request $request){
        $data = array();
        $data['email']= $request->email;
        $data['phone']= $request->phone;
        DB::table('subscribe')->insert($data);
        $note = array(
            'message' => 'Subscriber added Successfully',
            'alert-type' =>'info',
        );
        return redirect()->back()->with($note);

    }

    public function subscriber(){
        $subs = DB::table('subscribe')->orderBy('id','desc')->paginate(5);

        return view('contact.subscribe',compact('subs'));
    }

    public function deletesubscriber($id){
        DB::table('subscribe')->where('id',$id)->delete();

        $note = array(
            'message' => 'Subscriber Deleted Successfully',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($note);
        
    }

    public function allsetting(){
        $setting = DB::table('setting')->orderBy('id','desc')->paginate(5);
        return view('setting.index', compact('setting'));
    }
    public function addsetting(){
        return view('setting.create');
    }

    public function storesetting(Request $request){

        $data = array();
        $data['meta_title']= $request->meta_title;
        $data['meta_des']= $request->meta_des;
        $data['meta_keyword']= $request->meta_keyword;
        $data['google_code']= $request->google_code;
        $data['google_analytics']= $request->google_analytics;
        $data['google_tag']= $request->google_tag;
        $data['bing']= $request->bing;
        $data['yandex']= $request->yandex;

        DB::table('setting')->insert($data);

        $note = array(
            'message' => 'Setting Added Successfully',
            'alert-type' =>'success',
        );
        return Redirect()->route('allsetting')->with($note);

    }
    public function editsetting($id){
        $setting = DB::table('setting')->where('id',$id)->first();
        return view('setting.edit',compact('setting'));
    }
    public function updatesetting(Request $request,$id){

        $data = array();
        $data['meta_title']= $request->meta_title;
        $data['meta_des']= $request->meta_des;
        $data['meta_keyword']= $request->meta_keyword;
        $data['google_code']= $request->google_code;
        $data['google_analytics']= $request->google_analytics;
        $data['google_tag']= $request->google_tag;
        $data['bing']= $request->bing;
        $data['yandex']= $request->yandex;

        DB::table('setting')->where('id',$id)->update($data);
        
        $note = array(
            'message' => 'Setting Updated Successfully',
            'alert-type' =>'success',
        );
        return Redirect()->route('allsetting')->with($note);

    }

    // Post
    public function allpost(){
        $post = DB::table('posts')->orderBy('id','desc')->paginate(5);
        return view('post.index', compact('post'));
    }
    public function addpost(){
        $cat = DB::table('categories')->get();
        return view('post.create',compact('cat'));
    }

    public function storepost(Request $request){
           $data = array();
           $data['user_id'] = Auth::id();
           $data['category_id'] = $request->category_id;
           $data['title'] = $request->title;
           $data['subtitle'] = $request->subtitle;
           $data['tags'] = $request->tags;
           $data['description'] = $request->description;
           $data['description1'] = $request->description1;
           $data['post_date'] = date('d-m-Y');
           $data['post_month'] = date("F");
    
    
           $image = $request->image;
               if ($image) {
                   $image_one = uniqid().'.'.$image->getClientOriginalExtension(); 
                   Image::make($image)->resize(500,300)->save('image/postimg/'.$image_one);
                   $data['image'] = 'image/postimg/'.$image_one;
                   // image/postimg/343434.png
                   DB::table('posts')->insert($data);
    
                   $note = array(
                 'message' => 'Post Inserted Successfully',
                 'alert-type' => 'success'
             );
    
             return Redirect()->route('allpost')->with($note);
               
               }else{
                   return Redirect()->back();
               } // End Condition
    
    
      }  // END Method 


      public function editpost($id){
        $post = DB::table('posts')->where('id',$id)->first();
        $cat = DB::table('categories')->get();
        return view('post.edit',compact('post','cat'));
    }

    public function updatepost(Request $request,$id){

        $data = array();
        $data['user_id'] = Auth::id();
        $data['category_id'] = $request->category_id;
        $data['title'] = $request->title;
        $data['subtitle'] = $request->subtitle;
        $data['tags'] = $request->tags;
        $data['description'] = $request->description;
        $data['description1'] = $request->description1;
        $data['post_date'] = date('d-m-Y');
        $data['post_month'] = date("F");

        $oldimage = $request->oldimage;
        $image = $request->image;
            if ($image) {
                $image_one = uniqid().'.'.$image->getClientOriginalExtension(); 
                Image::make($image)->resize(500,300)->save('image/postimg/'.$image_one);
                $data['image'] = 'image/postimg/'.$image_one;
                // image/postimg/343434.png
                DB::table('posts')->where('id',$id)->update($data);
                unlink($oldimage);
 
                $note = array(
              'message' => 'Post Updated Successfully',
              'alert-type' => 'success'
          );
 
          return Redirect()->route('allpost')->with($note);
            
            }else{
                $data['image'] = $oldimage;
                DB::table('posts')->where('id',$id)->update($data);
                 
                $note = array(
              'message' => 'Post Updated Successfully',
              'alert-type' => 'success'
          );
          return Redirect()->route('allpost')->with($note);
            } // End Condition
   }  // End Method

   public function deletepost($id){
    DB::table('posts')->where('id',$id)->delete();

    $note = array(
        'message' => 'Post Deleted Successfully',
        'alert-type' =>'success',
    );
    return Redirect()->route('allpost')->with($note);
    
}

    public function single_post($id){

        $post = DB::table('posts')
        ->join('categories','posts.category_id','categories.id')
        ->join('users','posts.user_id','users.id')
        ->select('posts.*','categories.category','users.name')
        ->where('posts.id',$id)->first();
        return view('post.singlepost',compact('post'));

    }





    
}
