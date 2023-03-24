<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Restituisce tutti i service in formato json
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // IN INGRESSO: Request contenente:
        //              name (obbligatorio-stringa)
        //              customer_price (prezzo stabilito dall'azienda cliente) (obbligatorio-float)
        //              notes (può essere nullo-stringa)
        // RESTITUITO: response dell'operazione, 
        // oggetto Service in formato json in caso di esito positivo
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        // IN INGRESSO: Request contenente id del servizio
        // RESTITUITO: response dell'operazione, 
        // oggetto Service in formato json in caso di esito positivo
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // IN INGRESSO: Request contenente:
        //              id (obbligatorio-intero)
        //              name (obbligatorio-stringa)
        //              customer_price (prezzo stabilito dall'azienda cliente) (obbligatorio-float)
        //              notes (può essere nullo-stringa)
        // ELABORAZIONE: il metodo prevederà l'aggiornamento di tutti i dati del modello
        // RESTITUITO: response dell'operazione, 
        // oggetto Sale in formato json in caso di esito positivo
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // IN INGRESSO: Request contenente id (obbligatorio-intero) del servizio
        // DETTAGLIO OPERAZIONE: avendo utilizzato il soft deleting nel model,
        // avverrà la cancellazione esclusivamente logica del dato
        // RESTITUITO: response dell'operazione
    }
}
