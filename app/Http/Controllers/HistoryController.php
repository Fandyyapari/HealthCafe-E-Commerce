<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index()
    {
        $histories = History::with('product')
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('history', compact('histories'));
    }
}