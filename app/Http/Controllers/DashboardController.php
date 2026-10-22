<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption;

class DashboardController extends Controller {

    public function index() {
        $zgloszenia = Adoption::orderBy('created_at', 'desc')->get();

        return view('panel', ['zgloszenia' => $zgloszenia]);
    }

    public function updateStatus(Request $request, $id) {
        $wniosek = Adoption::findOrFail($id);
        $wniosek->status = $request->status;
        $wniosek->save();

        return redirect('/panel')->with('success', 'Status zgłoszenia został zmieniony.');
    }

    public function delete($id) {
        $wniosek = Adoption::findOrFail($id);
        $wniosek->delete();

        return redirect('/panel')->with('success', 'Zgłoszenie zostało trwale usunięte.');
    }
}
