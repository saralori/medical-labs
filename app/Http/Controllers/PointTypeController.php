<?php

namespace App\Http\Controllers;

use App\Models\PointType;
use Illuminate\Http\Request;

class PointTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Restituisce tutti i point type in formato json
    }

    
    public function create(Request $request)
    {
        // IN INGRESSO: Request contenente name (obbligatorio-stringa)
        // RESTITUITO: response dell'operazione, 
        // oggetto PointType in formato json in caso di esito positivo
    }


    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        // IN INGRESSO: Request contenente id (obbligatorio-intero) del point type
        // RESTITUITO: response dell'operazione, 
        // oggetto PointType in formato json in caso di esito positivo
    }

    public function update(Request $request)
    {
        // IN INGRESSO: Request contenente id (obbligatorio-intero) e name
        // ELABORAZIONE: il metodo prevederà l'aggiornamento di tutti i dati del modello
        // RESTITUITO: response dell'operazione, 
        // oggetto PointType in formato json in caso di esito positivo
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // IN INGRESSO: Request contenente id (obbligatorio-intero) del point type
        // DETTAGLIO OPERAZIONE: avendo utilizzato il soft deleting nel model,
        // avverrà la cancellazione esclusivamente logica del dato
        // RESTITUITO: response dell'operazione
    }
}
