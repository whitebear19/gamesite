<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Model\Game;
use App\Model\MainCategory;
use App\Model\SubCategory;
use App\Model\Compatible;
use App\Model\Setting;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $mail = '';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page = "home";
        $games = Game::where('status','1')->orderby('updated_at')->get();
        $soon = Game::where('status','99')->orderby('updated_at')->get();
        $most = Game::where('status','9')->orderby('updated_at')->take(3)->get();        
        $latest = Game::where('status','1')->latest()->first();
        if(!empty($latest))
        {
            $banners = json_decode($latest->main_imgs);
        }
        else
        {
            $banners = '';
        }
        
        $category = MainCategory::all();
        $compatible = Compatible::all();
        return view('home',compact('page','games','category','banners','soon','most','compatible'));
    }

    public function apps()
    {
        $page = "apps";
        return view('apps',compact('page'));
    }

    public function games(Request $request)
    {
        $page = "games";
        $sort = $request->get('sort');
        
        $gid = $request->get('gid');
        $hid = $request->get('hid');
        
        $games = new Game();
        switch ($sort) {
            case "az":
                $games = $games->where('status','!=','99')->orderBy("title",'ASC');
              break;
            case "ph":                
                $games = $games->where('status','!=','99')->orderBy("price",'DESC');
              break;
            case "pl":
                $games = $games->where('status','!=','99')->orderBy("price",'ASC');
              break;
            default:
                $games = $games->where('status','!=','99')->orderBy("title",'ASC');
        }
        if(!empty($gid))
        {
            foreach($gid as $id)
            {
                $games = $games->where('cat_main',$id);
            }
        }
        if(!empty($hid))
        {
            foreach($hid as $id)
            {
                $com = '"'.$id.'"';   
                $games = $games->where('compatible_with','like','%'.$com.'%');
            }
        }
        
        $games = $games->get();
        
        $category = MainCategory::all()->sortBy('name');        
        $compatible = Compatible::all();
        return view('games',compact('page','games','category','sort','compatible','gid','hid'));
    }
    public function videos()
    {
        $page = "videos";
        return view('videos',compact('page'));
    }
    public function subscription()
    {
        if(empty(Auth::user()->email_verified_at))
        {   
            return redirect(url('/confirm'));
        }
        else
        {
            $page = "";
            return view('subscription',compact('page'));
        }
        
    }
    public function confirm(Request $request)
    {
        if(empty(Auth::user()->email_verified_at))
        {               
            $page = "";
            return view('confirm',compact('page'));
        }
        else
        {
            return redirect(url('/'));
        }
        
    }
    public function library(Request $request)
    {
        $page = "library";        
        $sort = $request->get('sort');        
        $gid = $request->get('gid');
        $hid = $request->get('hid');
        
        $games = new Game();
        switch ($sort) {
            case "az":
                $games = $games->where('status','!=','99')->orderBy("title",'ASC');
              break;
            case "ph":                
                $games = $games->where('status','!=','99')->orderBy("price",'DESC');
              break;
            case "pl":
                $games = $games->where('status','!=','99')->orderBy("price",'ASC');
              break;
            default:
                $games = $games->where('status','!=','99')->orderBy("title",'ASC');
        }
        if(!empty($gid))
        {
            foreach($gid as $id)
            {
                $games = $games->where('cat_main',$id);
            }
        }
        if(!empty($hid))
        {
            foreach($hid as $id)
            {
                $com = '"'.$id.'"';   
                $games = $games->where('compatible_with','like','%'.$com.'%');
            }
        }
        
        $games = $games->get();
        
        $category = MainCategory::all()->sortBy('name');        
        $compatible = Compatible::all();
        return view('library',compact('page','games','category','sort','compatible','gid','hid'));       
    }
    public function ioasis()
    {
        $page = "ioasis";
        $oasis = Setting::find('1')->oasis_enjoy_img;
        $headset = Setting::find('1')->oasis_headset_img;
        $video = Setting::find('1')->oasis_video;
        if(empty($oasis))
        {
            $oasis = '/public/assets/img/input_img.jpg';
        }
        if(empty($headset))
        {
            $headset = '/public/assets/img/input_img.jpg';
        }
        return view('ioasis',compact('page','oasis','headset','video'));
    }
        
    public function game_detail(Request $request,$game_id)
    {        
        $page = "";
        
        try {
            $game = Game::find($game_id);
            if(!empty($game))
            {
                return view('detail',compact('page','game'));
            }
            else
            {
                return redirect('/');
            }
            
        } catch (Throwable $e) {
            return redirect('/');
        }
    }

    public function resend_link(Request $request)
    {        
        if (Auth::user()) 
        {
            $id = Auth::user()->id;
            $this->mail = Auth::user()->email;
            
            // \Mail::to($this->mail)->send(new \App\Mail\VerifyMail($enc_id));
            return response()->json(TRUE);
        } else {
            return response()->json(FALSE);
        }
    }
    public function verify(Request $request,$id)
    {        
        $id = \Illuminate\Support\Facades\Crypt::decryptString($id);
        $user = User::find($id);
        if(!empty($user))
        {
            if(empty($user->email_verified_at))
            {
                $user->email_verified_at = date('Y-m-d H:i:s');
                $user->save();
                return redirect(url('/subscription'))->with("success","Your account has been verified successfully!");
            }
        }
        return redirect(url('/'));
    }
    
}
