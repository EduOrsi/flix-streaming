<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function __construct(private Content $content) {}
    public function index(){
        $contents = $this->content->get();

        return inertia('media/ContentIndex', ['teste' => 'Inertia First Steps']);
    }
}
