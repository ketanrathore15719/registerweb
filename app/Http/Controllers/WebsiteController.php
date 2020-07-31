<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;
use App\Contact;
use App\User;

class WebsiteController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function message(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'name' => ['required','max:20',],
            'email' => ['required', 'string', 'email', 'max:255'],
            'subject' => ['required','max:50',],
            'message' => ['required','max:255',],
        ]);

        if($validator->fails())
        {
            return redirect(route('web.contact'))
                        ->withErrors($validator)
                        ->withInput(); 
        }
        $email = "shopmazic.com@gmail.com";
        Contact::create($request->all());
        $data = $request->all();
        $data = [
            'name' => $data['name'],
            'email' => $data['email'],
            'subject' => $data['subject'],
            'message' => $data['message']
        ];
        $mail = $data['email'];
        Mail::to($mail)->send(new ContactUs($data));
        return back()->with('success', 'Your responce has been sent..!!');
    }

    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'unique:users,email,' .$request->email,
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => 'unique:users,phone,' .$request->phone,
            'phone' => ['required', 'string','max:11'],
            'age' => 'required',
            'profile' => 'mimes:jpeg,jpg,png|required',
            'resume' => 'mimes:pdf,docx|required'
        ]);

        if($validator->fails())
        {
            return redirect(route('registration'))
                        ->withErrors($validator)
                        ->withInput(); 
        }

        if($request->hasfile('profile'))
        {

            $profile = request()->profile->move(public_path('/assets/file/profile/'.$request->phone),$request->phone.".png");
        
        }

        if($request->hasfile('resume'))
        {

            $profile = request()->resume->move(public_path('/assets/file/resume/'.$request->phone),$request->phone.".pdf");
        
        }
        $data = User::create([
                'fname' => $request->fname,
                'lname'=> $request->lname,
                'email' => $request->email,
                'phone' => $request->phone,
                'age' => $request->age,
                'profile' => $request->phone.".png",
                'resume' => $request->phone.".pdf"
            ]);

        return redirect(route('registration'))->with('success',"Registration successfully..!!");
    }
}
