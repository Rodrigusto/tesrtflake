<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sitecontroller extends Controller
{
   public function home()
   {
       return view('site.home');
   }

   public function sobre()
   {
       return view('site.sobre');
   }

   public function produtos()
   {
       return view('site.produtos');
   }
   
   public function contato()
   {
       return view('site.contato');
   }
   
   public function cotacaoflakeverde()
   {
       return view('site.cotflverde');
   }

   public function cotacaoflakecristal()
   {
       return view('site.cotflcristal');
   }

   public function cotmasterplast()
   {
       return view('site.cotmasterplast');
   }
}