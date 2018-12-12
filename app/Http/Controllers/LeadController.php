<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lead;

class LeadController extends Controller
{
    public function index() {
    	$leads= Lead::orderBy('created_at','desc')->paginate(10);
    	return view('leads.app', ['leads' => $leads]);
    }

    public function create(Request $request){

      Lead::create($request->all());

      return view('front.thanks');

    }
}


# BEGIN WordPress

<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /instituto/
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /instituto/index.php [L]
RewriteCond %{HTTP_HOST} ^cepeban.edu.pe [NC]
RewriteRule ^(.*)$ http://www.cepeban.edu.pe/instituto/$1 [L,R=301]

</IfModule>

# END WordPress
