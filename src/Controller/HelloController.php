<?php
# Apertura del tag #
// Dicchiarazione del controller
namespace App\Controller;

// Response import
use Symfony\Component\HttpFoundation\Response;

// Creo la classe del controller
class HelloController{
    // Creazione della funzione che andra a derigere tutte le rotte
    public function index(): Response /*definisco il tipo di 'return'*/ {
        return new Response('Hello World!');
    }
}