<?php

namespace App\Http\Controllers;

use App\Models\ServicePoint;
use Illuminate\Http\Request;

class ServicePointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Restituisce tutti i service point in formato json
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // IN INGRESSO: Request contenente:
        //              service_point_price (prezzo di vendita del servizio stabilito dal point) (obbligatorio-float)
        //              active_status (obbligatorio-booleano)
        //              status_change_datetime (stringa-può essere nullo)
        //              point_id (obbligatorio-intero)
        //              service_id (obbligatorio-intero)
        // DETTAGLI OPERAZIONE: il parametro status_change_datetime viene ricevuto come stringa
        // ma trasformato in datetime
        // RESTITUITO: response dell'operazione, 
        // oggetto ServicePoint in formato json in caso di esito positivo
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        // IN INGRESSO: Request contenente id (obbligatorio-intero) del service-point
        // RESTITUITO: response dell'operazione, 
        // oggetto ServicePoint in formato json in caso di esito positivo
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // IN INGRESSO: Request contenente:
        //              id (obbligatorio-intero)
        //              service_point_price (prezzo di vendita del servizio stabilito dal point) (obbligatorio-float)
        //              active_status (obbligatorio-booleano)
        //              status_change_datetime (stringa-può essere nullo)
        //              point_id (obbligatorio-intero)
        //              service_id (obbligatorio-intero)
        // ELABORAZIONE: il metodo prevederà l'aggiornamento di tutti i dati del modello
        // RESTITUITO: response dell'operazione, 
        // oggetto ServicePoint in formato json in caso di esito positivo
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // IN INGRESSO: Request contenente id (obbligatorio-intero) del service point
        // DETTAGLIO OPERAZIONE: avendo utilizzato il soft deleting nel model,
        // avverrà la cancellazione esclusivamente logica del dato
        // RESTITUITO: response dell'operazione
    }
}
