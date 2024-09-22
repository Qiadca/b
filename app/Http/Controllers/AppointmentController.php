<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create()
    {
        return view('appointment.create');
    }

    public function store(Request $request)
    {
        // Randevu kaydetme işlemleri burada yapılır.
        // Örneğin, doğrulama ve veri kaydetme

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        // Randevu veritabanına kaydedilebilir veya e-posta gönderilebilir.

        return redirect()->route('appointment.create')->with('success', 'Randevunuz başarıyla alındı!');
    }
}
