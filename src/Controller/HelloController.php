<?php
# Apertura del tag #

// Dichiarazione dello spazio dei nomi (namespace) per il controller
namespace App\Controller;

// Importazione delle classi Response e Route dal componente Symfony
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// Definizione della classe HelloController
class HelloController{
    
    // Dichiarazione di un array privato $messages contenente saluti
    private array $messages = ["Hello", "Hi", "Good morning"];
    
    // Dichiarazione dell'annotazione di routing per la route '/'
    #[Route('/', name: 'app_index')]
    // Definizione del metodo index che restituisce una Response
    public function index(): Response /*definisco il tipo di 'return'*/ {
        // Creazione di una nuova Response contenente l'implode degli elementi dell'array $messages
        return new Response(implode(',', $this->messages));
    }

    // Dichiarazione dell'annotazione di routing per la route '/messages/{id}'
    #[Route('/messages/{id}', name: "app_show_one")]
    // Definizione del metodo showOne che restituisce una Response, prende un parametro $id
    public function showOne($id): Response{
        // Creazione di una nuova Response contenente il messaggio corrispondente all'indice $id nell'array $messages
        return new Response($this->messages[$id]);
    }
}
