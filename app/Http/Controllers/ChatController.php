<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat'); // Sesuaikan dengan nama file blade chat kamu
    }



}