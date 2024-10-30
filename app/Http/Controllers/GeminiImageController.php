<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GeminiService;

class GeminiImageController extends Controller
{
    public function create()
    {
        return view("home");
    }

    public function store(Request $request, GeminiService $geminiSirvice)
    {

        $url = $request->input("image_url");

        try {
            $analysisResult = $geminiSirvice->analyzeImage($url);
            $message = $analysisResult;
        } catch (\Exception $e) { 
            $message = "Não foi possível analisar a imagem: " . $e->getMessage();
        }

        return back()->with("message", $message);

    }
}
