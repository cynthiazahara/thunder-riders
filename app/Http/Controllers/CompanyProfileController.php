<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Client;

class CompanyProfileController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->take(3)->get();
        $events = Event::latest()->take(3)->get();
        $galleries = Gallery::latest()->take(6)->get();
        $clients = Client::all();

        return view('company.index', compact('articles', 'events', 'galleries', 'clients'));
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        return back()->with('success', 'Pesan Anda telah berhasil terkirim!');
    }
}
