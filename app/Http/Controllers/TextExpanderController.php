<?php

namespace App\Http\Controllers;

use App\TextExpander;
use Illuminate\Http\Request;

class TextExpanderController extends Controller
{
    public function index()
    {
        $snippets = TextExpander::get();
        return view('textExpander.index', compact('snippets'));
    }

    public function json() {
        return TextExpander::get();
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'snippet' => 'required',
            'abbreviation' => 'required',
        ]);
        $snippet = TextExpander::create([
            'snippet' => request('snippet'),
            'abbreviation' => request('abbreviation'),
        ]);
        flash('Succesfully created snippet ' . $snippet->abbreviation);
        return $this->index();
    }
}
