
## Informazioni generali

I controller sono impostati in modo tale da ricevere sempre in ingresso una Request, in quanto ritengo sempre opportuno impostare un middleware di autenticazione per proteggere le API. Il middleware riceve in ingresso una request contenente, oltre ai dati specifici per il metodo di destinatione, dei dati di autenticazione, e in caso di esito positivo restituisce la Request al metodo.

Per ogni modello è stata impostata la soft delete, che permette la cancellazione logica del dato.