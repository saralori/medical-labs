<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Restituisce tutte le fatture in formato json
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // IN INGRESSO: Request contenente:
        //              total_price (obbligatorio-float)
        //              vat_number (partita IVA) (obbligatorio-stringa)
        //              vat_amount (IVA in percentuale) (obbligatorio-stringa)
        //              progression_number (progressivo fattura) (obbligatorio-stringa)
        //              invoice_date (data di fatturazione) (obbligatorio-stringa)
        //              sdi (stringa-può essere nullo)
        //              pec (stringa-può essere nullo)
        // DETTAGLI OPERAZIONE: andrà effettuato un ulteriore controllo su sdi e pec,
        // in quanto almeno uno dei due campi deve essere presente. L'invoice_date
        // verrà ricevuta come stringa ma successivamente convertita in date
        // RESTITUITO: response dell'operazione, 
        // oggetto Point in formato json in caso di esito positivo
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        // IN INGRESSO: Request contenente id della fattura richiesta
        // RESTITUITO: response dell'operazione, 
        // oggetto Invoice in formato json in caso di esito positivo
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // IN INGRESSO: Request contenente:
        //              id (obbligatorio-intero)
        //              total_price (obbligatorio-float)
        //              vat_number (partita IVA) (obbligatorio-stringa)
        //              vat_amount (IVA in percentuale) (obbligatorio-stringa)
        //              progression_number (progressivo fattura) (obbligatorio-stringa)
        //              invoice_date (data di fatturazione) (obbligatorio-stringa)
        //              sdi (stringa-può essere nullo)
        //              pec (stringa-può essere nullo)
        // ELABORAZIONE: il metodo prevederà l'aggiornamento di tutti i dati del modello
        // RESTITUITO: response dell'operazione, 
        // oggetto Invoice in formato json in caso di esito positivo
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // IN INGRESSO: Request contenente id (obbligatorio-intero) della fattura
        // DETTAGLIO OPERAZIONE: avendo utilizzato il soft deleting nel model,
        // avverrà la cancellazione esclusivamente logica del dato
        // RESTITUITO: response dell'operazione
    }
}
