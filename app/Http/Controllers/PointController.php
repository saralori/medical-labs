<?php

namespace App\Http\Controllers;

use App\Models\Point;
use Illuminate\Http\Request;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Restituisce tutti i point in formato json
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // IN INGRESSO: Request contenente:
        //              name (obbligatorio-stringa)
        //              indirizzo (stringa-può essere nullo)
        //              numero civico (stringa-può essere nullo)
        //              città (stringa-può essere nullo)
        //              provincia (stringa-può essere nullo)
        //              regione (stringa-può essere nullo)
        //              id point type di riferimento (obbligatorio-intero)
        // RESTITUITO: response dell'operazione, 
        // oggetto Point in formato json in caso di esito positivo
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        // IN INGRESSO: Request contenente id (obbligatorio-intero) del point
        // RESTITUITO: response dell'operazione, 
        // oggetto Point in formato json in caso di esito positivo
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // IN INGRESSO: Request contenente:
        //              id (obbligatorio-intero)
        //              name (obbligatorio-stringa)
        //              indirizzo (stringa-può essere nullo)
        //              numero civico (stringa-può essere nullo)
        //              città (stringa-può essere nullo)
        //              provincia (stringa-può essere nullo)
        //              regione (stringa-può essere nullo)
        //              id point type di riferimento (obbligatorio-intero)
        // ELABORAZIONE: il metodo prevederà l'aggiornamento di tutti i dati del modello
        // RESTITUITO: response dell'operazione, 
        // oggetto Point in formato json in caso di esito positivo
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // IN INGRESSO: Request contenente id (obbligatorio-intero) del point
        // DETTAGLIO OPERAZIONE: avendo utilizzato il soft deleting nel model,
        // avverrà la cancellazione esclusivamente logica del dato
        // RESTITUITO: response dell'operazione
    }
}
