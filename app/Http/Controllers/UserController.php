<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function register1(Request $request)
    {
        $item = \App\Models\User::query()
                ->where('email', $request->email)
                ->first();
            // ->firstOrFail();    
                //where('email', $request->email )->get(); 
        if($item==null)
        {
            return "<a href=\>back</a> empty";//dd(403); 
        }
        else
        {         
            return "register111".$item;
        }
    }

    public function login1(Request $request)
    {
        $item = \App\Models\User::query()
        ->where('email', $request->email)
        ->where('user', $request->user)
        ->first();
    // ->firstOrFail();    
        //where('email', $request->email )->get(); 
        if($item==null)
        {
            return "<a href=\>back</a> empty<br>". $request->email.$request->user;//dd(403); 
        }
        else
        {         
            return "login1111<br>".$item;
        }  
    }

}
 
//     public function registerx(Request $request)//: Response
//     {
//          try
//          { 
//             new Hash($request->password);
//             $item = \App\Models\User::query()
//                 ->where('email', $request->email)
//                 ->first();//firstOrFail();        
//                 // return $request->email; 
//          }
//          catch( Exception $ex)
//          {
//             echo"err:".$ex;
//          }
//          //_________________________
//         $has="";
//         $pss="";
//         if($item==null)
//         {
//             $item="null";
//         }
//         else
//         {
//             $pss=$item->password;
//         }
//         if($pss==null){$pss="null";}
//         if (!Hash::check($request->password, $pss)) 
//         { 
//             $str=  "<hr>" 
//             ."itemname=".($request->name)."<hr>" 
//             ."itemmail=".($request->email)."<hr><a href='\'>Home</a>";

            
//             $user = new User;
//             $user->fill($request->all());
//             $user->password = Hash::make($request->password);
//             $token = Str::random(100);
//             $user->token = hash('sha256', $token);
//             try{
//                 $user->save();
//             }
//             catch( Exception $ex)
//             {
//                 echo"err:".$ex;
//             }
//             //echo "<<<".$user.">>>"; 
//             //dd($item->name);response($user->toArray() .
//             return " <hr>  User Save Now.OK<br>کاربر با موفقیت ذخیره شد".$str;
//         }
//         else
//         {
//             $str=  "<hr>"
//             //."email=".$request->email."<hr>" 
//             //."pass=".$request->password."<hr>" 
//              //."request=".$request."<hr>" 
//             //."item=".$item."<hr>" 
//             ."itemname=".($item->name)."<hr>" 
//             ."itemmail=".($item->email)."<hr>"
//             ."<a href='\'>Home</a>";
//             return response("<br>کاربر قبلا تعریف شده بود<br>ok user:".$str);
//         }
//     }

  
//     public function loginx(Request $request)
//     {
//       // new Hash($request->password);
//         $item = \App\Models\User::where('email', $request->email )->get(); 
//         if($item==null)
//         {
//             return "<a href=\>back</a>".dd(403);}
//         else
//         {
//          new Hash($request->password);//
//       //$ps= Hash::make($request->password);
//       //->where('password', $ps )
//         $has="";
        
//         //dd($item);
//         if (!Hash::check($request->password, $item->password)) 
//         { 
//             //throw new \ErrorException('Error user and password not found');
//             $str=  "<hr>"
//             ."email=".$request->email."<hr>" 
//             ."pass=".$request->password."<hr>" 
//             ."request=".$request."<hr>" 
//             ."item=".$item."<hr>" 
//             ."itemname=".($item->name)."<hr>" 
//             ."itemmail=".($item->email)."<hr><a href='\'>Home</a>";

//             return 'Error user and password not found'.$str;
//             //redirect()->away('http://google.com');
//         }
//         else
//         {
//             $str=  "<hr>"
//             //."email=".$request->email."<hr>" 
//             //."pass=".$request->password."<hr>" 
//              //."request=".$request."<hr>" 
//             //."item=".$item."<hr>" 
//             ."itemname=".($item->name)."<hr>" 
//             ."itemmail=".($item->email)."<hr>"
//             ."<a href='\'>Home</a>";
//            // return redirect()->route('/greeting', ['name' =>   "<br>ok user:".$str]);
//            // return  "<br>ok user:".$str."<hr>".route('greeting');
//            return view('greeting',[
//                //'name'=>"<br>ok user:".$str."<hr>",
//                'ke'=>$item->email,
//                'nm'=>$item->name,
//         ]);
//         }
 
//            dd($item); 
//         }
//         //return response($item);
         
//     }

//     public function logout(Request $request)
//     {
//         dd("logout");
//     }
// }
 


