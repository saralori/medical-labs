<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Restituisce tutte le vendite in formato json
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // IN INGRESSO: Request contenente:
        //              service_amount (obbligatorio-float)
        //              service_point_id (obbligatorio-intero)
        //              invoice_id (intero-può essere nullo)
        // RESTITUITO: response dell'operazione, 
        // oggetto Sale in formato json in caso di esito positivo
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        // IN INGRESSO: Request contenente id della vendita richiesta
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
        //              service_amount (obbligatorio-float)
        //              service_point_id (obbligatorio-intero)
        //              invoice_id (intero-può essere nullo)
        // ELABORAZIONE: il metodo prevederà l'aggiornamento di tutti i dati del modello
        // RESTITUITO: response dell'operazione, 
        // oggetto Sale in formato json in caso di esito positivo
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // IN INGRESSO: Request contenente id (obbligatorio-intero) della vendita
        // DETTAGLIO OPERAZIONE: avendo utilizzato il soft deleting nel model,
        // avverrà la cancellazione esclusivamente logica del dato
        // RESTITUITO: response dell'operazione
    }
}
