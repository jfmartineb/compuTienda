<?php 

namespace App\Interfaces;
use Illuminate\Http\Request;

interface Exports {
    public function save(Request $request);
}
