<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactdetail;
use App\Message;
use App\Social;
use App\Aboutdetail;
use App\Blog;

class PagesController extends Controller
{
    public function index() {
        $title = '';
        $contact = Contactdetail::all();
        $projects = Blog::all();

        return view('home', compact('contact', 'title', 'projects'));
    }

    public function about() {
        $about = Aboutdetail::all()[0];

        return view('about', compact('about'));
    }

    public function diensten() {
        $title = 'Diensten';
        return view('diensten', compact('title'));
    }

    public function projecten() {
        $projects = Blog::all();
        return view('projecten', compact('projects'));
    }

    public function project($id) {

        $project = Blog::find($id);
        $title = $project->title;

        return view('project', compact('project', 'title'));
    }

    public function contact() {
        $contactdetail = Contactdetail::all();
        $sended = false;

        return view('contact', compact('contactdetail', 'sended'));
    }

    public function message() {

        $message = new Message;
        $message->name = request("name");
        $message->email = request("email");
        $message->message = request("message");
        $message->save();

        $contactdetail = Contactdetail::all();
        $socials = Social::all();
        $sended = true;

        return view('contact', compact('contactdetail', 'sended', 'socials'));
    }
}
