<?php 

return array(

  // client
  'organization' => 'Organizzazione',
  'name' => 'Nome',
  'website' => 'Sito web',
  'work_phone' => 'Telefono',
  'address' => 'Indirizzo',
  'address1' => 'Via',
  'address2' => 'Appartamento/Piano',
  'city' => 'Città',
  'state' => 'Stato/Provincia',
  'postal_code' => 'Codice postale', /* CAP */
  'country_id' => 'Paese',
  'contacts' => 'Contatti',
  'first_name' => 'Nome',
  'last_name' => 'Cognome',
  'phone' => 'Telefono',
  'email' => 'Email',
  'additional_info' => 'Maggiori informazioni',
  'payment_terms' => 'Condizioni di pagamento',
  'currency_id' => 'Valuta',
  'size_id' => 'Dimensione',
  'industry_id' => 'Industria',
  'private_notes' => 'Note Personali',

  // invoice
  'invoice' => 'Fattura',
  'client' => 'Cliente',
  'invoice_date' => 'Data Fattura',
  'due_date' => 'Scadenza Fattura',
  'invoice_number' => 'Numero Fattura',
  'invoice_number_short' => 'Fattura #', /* Fattura N° */
  'po_number' => 'Numero d\'ordine d\'acquisto',
  'po_number_short' => 'Ordine d\'acquisto #', /* Ordine d'acquisto N° */
  'frequency_id' => 'Frequenza',
  'discount' => 'Sconto',
  'taxes' => 'Tasse',
  'tax' => 'Tassa',
  'item' => 'Articolo',
  'description' => 'Descrizione',
  'unit_cost' => 'Costo Unitario',
  'quantity' => 'Quantità',
  'line_total' => 'Totale Riga',
  'subtotal' => 'Subtotale',
  'paid_to_date' => 'Pagato in Data',
  'balance_due' => 'Saldo Dovuto',
  'invoice_design_id' => 'Stile',
  'terms' => 'Condizioni',
  'your_invoice' => 'Tua Fattura',

  'remove_contact' => 'Rimuovi contatto',
  'add_contact' => 'Aggiungi contatto',
  'create_new_client' => 'Crea nuovo cliente',
  'edit_client_details' => 'Modifica dati cliente',
  'enable' => 'Abilita',
  'learn_more' => 'Scopri di più',
  'manage_rates' => 'Gestisci tassi',
  'note_to_client' => 'Nota al cliente',
  'invoice_terms' => 'Termini della fattura',
  'save_as_default_terms' => 'Salva termini come predefiniti', /* Imposta termini come predefiniti */
  'download_pdf' => 'Scarica PDF',
  'pay_now' => 'Paga Adesso', /* Paga Ora */
  'save_invoice' => 'Salva Fattura',
  'clone_invoice' => 'Duplica Fattura',
  'archive_invoice' => 'Archivia Fattura',
  'delete_invoice' => 'Elimina Fattura',
  'email_invoice' => 'Manda Fattura', /* Spedisci Fattura */
  'enter_payment' => 'Inserisci Pagamento',
  'tax_rates' => 'Aliquote Fiscali', /* ^^Unsure^^ */
  'rate' => 'Aliquota', /* ^^Unsure^^ */
  'settings' => 'Impostazioni',
  'enable_invoice_tax' => 'Abilita la specifica di <b>aliquote fiscali</b>', /* ^^Unsure^^ */
  'enable_line_item_tax' => 'Abilita la specifica di <b>aliquote di voci di bilancio</b>', /* ^^Unsure^^ */

  // navigation
  'dashboard' => 'Cruscotto', /* Pannello */
  'clients' => 'Clienti',
  'invoices' => 'Fatture',
  'payments' => 'Pagamenti',
  'credits' => 'Crediti',
  'history' => 'Storia', /* Cronologia */
  'search' => 'Cerca', /* Cerca */
  'sign_up' => 'Registrati',
  'guest' => 'Ospite',
  'company_details' => 'Dettagli Azienda',
  'online_payments' => 'Pagamenti Online',
  'notifications' => 'Notifiche',
  'import_export' => 'Importa/Esporta',
  'done' => 'Fatto',
  'save' => 'Salva',
  'create' => 'Crea',
  'upload' => 'Carica',
  'import' => 'Importa',
  'download' => 'Scarica',
  'cancel' => 'Annulla',
  'close' => 'Close',
  'provide_email' => 'Per favore, fornisci un indirizzo Email valido',
  'powered_by' => 'Powered by', /* Realizzato da */
  'no_items' => 'Nessun articolo',

  // recurring invoices
  'recurring_invoices' => 'Fatture ricorrenti',
  'recurring_help' => '<p>Invia automaticamente al cliente le stesse fatture settimanalmente, bimestralmente, mensilmente, trimestralmente o annualmente. </p>
        <p>Usa :MESE, :TRIMESRE o :ANNO per date dinamiche. Funziona anche con la matematica di base, ad esempio :MESE-1.</p>
        <p>Esempi di variabili di fattura dinamiche:</p>
        <ul>
          <li>"Iscrizione palestra per il mese di :MESE" => "Iscrizione palestra per il mese di Luglio"</li>
          <li>":ANNO+1 iscrizione annuale" => "Anno d\'iscrizione 2015"</li>
          <li>"Pagamento fermo a :TRIMESTRE+1" => "Pagamento fermo al 2° trimestre"</li>
        </ul>',  /* ^^Variables translated in case you'll need it for front end^^ */

  // dashboard
  'in_total_revenue' => 'di fatturato',
  'billed_client' => 'Cliente fatturato',
  'billed_clients' => 'Clienti fatturati',
  'active_client' => 'cliente attivo',
  'active_clients' => 'clienti attivi',  
  'invoices_past_due' => 'Fatture Insolute', /* Insoluti */
  'upcoming_invoices' => 'Prossime fatture',
  'average_invoice' => 'Fattura media',
  
  // list pages
  'archive' => 'Archivia',
  'delete' => 'Elimina',
  'archive_client' => 'Archivia cliente',
  'delete_client' => 'Elimina cliente',
  'archive_payment' => 'Archivia pagamento',
  'delete_payment' => 'Elimina pagamento',
  'archive_credit' => 'Archivia credito',
  'delete_credit' => 'Elimina credito',
  'show_archived_deleted' => 'Mostra Archiviati/eliminati',
  'filter' => 'Filtra',
  'new_client' => 'Nuovo Cliente',
  'new_invoice' => 'Nuova Fattura',
  'new_payment' => 'Nuovo Pagamento',
  'new_credit' => 'Nuovo Credito',
  'contact' => 'Contatto',
  'date_created' => 'Data di Creazione',
  'last_login' => 'Ultimo Accesso',
  'balance' => 'Saldo',
  'action' => 'Azione',
  'status' => 'Stato',
  'invoice_total' => 'Totale Fattura',
  'frequency' => 'Frequenza',
  'start_date' => 'Data Inizio',
  'end_date' => 'Data Fine',
  'transaction_reference' => 'Riferimento Transazione',
  'method' => 'Metodo',
  'payment_amount' => 'Importo Pagamento',
  'payment_date' => 'Data Pagamento',
  'credit_amount' => 'Importo Credito',
  'credit_balance' => 'Saldo Credito',
  'credit_date' => 'Data Credito',
  'empty_table' => 'Nessun dato disponibile nella tabella',
  'select' => 'Seleziona',
  'edit_client' => 'Modifica Cliente',
  'edit_invoice' => 'Modifica Fattura',

  // client view page
  'create_invoice' => 'Crea Fattura',
  'enter_credit' => 'Inserisci Credito',
  'last_logged_in' => 'Ultimo accesso',
  'details' => 'Dettagli',
  'standing' => 'Fermo',
  'credit' => 'Credito',
  'activity' => 'Attività',
  'date' => 'Data',
  'message' => 'Messaggio',
  'adjustment' => 'Correzione',
  'are_you_sure' => 'Sei sicuro?',

  // payment pages
  'payment_type_id' => 'Tipo di Pagamento',
  'amount' => 'Importo',

  // account/company pages
  'work_email' => 'Email',
  'language_id' => 'Lingua',
  'timezone_id' => 'Fuso Orario',
  'date_format_id' => 'Formato data',
  'datetime_format_id' => 'Formato Data/Ora',
  'users' => 'Utenti',
  'localization' => 'Localizzazione',
  'remove_logo' => 'Rimuovi logo',
  'logo_help' => 'Supportati: JPEG, GIF e PNG. Altezza raccomandata: 120px',
  'payment_gateway' => 'Servizi di Pagamento',
  'gateway_id' => 'Piattaforma',
  'email_notifications' => 'Notifiche Email',
  'email_sent' => 'Mandami un\'email quando una fattura è <b>inviata</b>',
  'email_viewed' => 'Mandami un\'email quando una fattura è <b>visualizzata</b>',
  'email_paid' => 'Mandami un\'email quando una fattura è <b>pagata</b>',
  'site_updates' => 'Aggiornamenti Sito',
  'custom_messages' => 'Messaggi Personalizzati',
  'default_invoice_terms' => 'Salva termini come predefiniti',
  'default_email_footer' => 'Salva firma email come predefinita',
  'import_clients' => 'Importa Dati Clienti',
  'csv_file' => 'Seleziona file CSV',
  'export_clients' => 'Esporta Dati Clienti',
  'select_file' => 'Seleziona un file, per favore',
  'first_row_headers' => 'Usa la prima riga come Intestazione',
  'column' => 'Colonna',
  'sample' => 'Esempio',
  'import_to' => 'Importa in',
  'client_will_create' => 'il cliente sarà creato',
  'clients_will_create' => 'i clienti saranno creati',

  // application messages
  'created_client' => 'Cliente creato con successo',
  'created_clients' => ':count clienti creati con successo',
  'updated_settings' => 'Impostazioni aggiornate con successo',
  'removed_logo' => 'Logo rimosso con successo',
  'sent_message' => 'Messaggio inviato con successo',
  'invoice_error' => 'Per favore, assicurati di aver selezionato un cliente e correggi tutti gli errori',
  'limit_clients' => 'Ci dispiace, questo supererà il limite di :count clienti',
  'payment_error' => 'C\'è stato un errore durante il pagamento. Riprova più tardi, per favore.',
  'registration_required' => 'Per favore, registrati per inviare una fattura',
  'confirmation_required' => 'Per favore, conferma il tuo indirizzo email',

  'updated_client' => 'Cliente aggiornato con successo',
  'created_client' => 'Cliente creato con successo',
  'archived_client' => 'Cliente archiviato con successo',
  'archived_clients' => ':count clienti archiviati con successo',
  'deleted_client' => 'Cliente eliminato con successo',
  'deleted_clients' => ':count clienti eliminati con successo',

  'updated_invoice' => 'Fattura aggiornata con successo',
  'created_invoice' => 'Fattura creata con successo',
  'cloned_invoice' => 'Fattura duplicata con successo',
  'emailed_invoice' => 'Fattura inviata con successo',
  'and_created_client' => 'e cliente creato',
  'archived_invoice' => 'Fattura archiviata con successo',
  'archived_invoices' => ':count fatture archiviate con successo',
  'deleted_invoice' => 'Fattura eliminata con successo',
  'deleted_invoices' => ':count fatture eliminate con successo',

  'created_payment' => 'Pagamento creato con successo',
  'archived_payment' => 'Pagamento archiviato con successo',
  'archived_payments' => ':count pagamenti archiviati con successo',
  'deleted_payment' => 'Pagamenti eliminati con successo',
  'deleted_payments' => ':count pagamenti eliminati con successo',
  'applied_payment' => 'Pagamento applicato con successo',

  'created_credit' => 'Credito creato con successo',
  'archived_credit' => 'Credito archiviato con successo',
  'archived_credits' => ':count crediti archiviati con successo',
  'deleted_credit' => 'Credito eliminato con successo',
  'deleted_credits' => ':count crediti eliminati con successo',

  // Emails
  'confirmation_subject' => 'Conferma Account Invoice Ninja',
  'confirmation_header' => 'Conferma Account',
  'confirmation_message' => 'Per favore, accedi al link qui sotto per confermare il tuo account.',
  'invoice_subject' => 'Nuova fattura da :account',
  'invoice_message' => 'Per visualizzare la tua fattura di :amount, clicca sul link qui sotto.',
  'payment_subject' => 'Pagamento Ricevuto',
  'payment_message' => 'Grazie per il tuo pagamento di :amount.',
  'email_salutation' => 'Caro :name,',
  'email_signature' => 'Distinti saluti,',
  'email_from' => 'Il Team di InvoiceNinja',
  'user_email_footer' => 'Per modificare le impostazioni di notifiche via email per favore accedi a: http://www.invoiceninja.com/company/notifications',
  'invoice_link_message' => 'Per visualizzare la tua fattura del cliente clicca sul link qui sotto:',
  'notification_paid_subject' => 'La fattura :invoice è stata pagata da :client',
  'notification_sent_subject' => 'La fattura :invoice è stata inviata a :client',
  'notification_viewed_subject' => 'La fattura :invoice è stata visualizzata da :client',
  'notification_paid' => 'Un pagamento di :amount è stato effettuato dal cliente :client attraverso la fattura :invoice.',
  'notification_sent' => 'Al seguente cliente :client è stata inviata via email la fattura :invoice di :amount.',
  'notification_viewed' => 'Il seguente cliente :client ha visualizzato la fattura :invoice di :amount.',
  'reset_password' => 'Puoi resettare la password del tuo account cliccando sul link qui sotto:',
  'reset_password_footer' => 'Se non sei stato tu a voler resettare la password per favore invia un\'email di assistenza a: ' . CONTACT_EMAIL,

  // Payment page
  'secure_payment' => 'Pagamento Sicuro',
  'card_number' => 'Numero Carta',
  'expiration_month' => 'Mese di Scadenza',  
  'expiration_year' => 'Anno di Scadenza',
  'cvv' => 'CVV',
  
  // Security alerts
  'confide' => [
    'too_many_attempts' => 'Troppi tentativi fatti. Riprova tra qualche minuto.',
    'wrong_credentials' => 'Email o password non corretti.',
    'confirmation' => 'Il tuo account è stato confermato!',
    'wrong_confirmation' => 'Codice di verifica errato.',
    'password_forgot' => 'I dati per resettare la tua password sono stati inviati alla tua email.',
    'password_reset' => 'La tua password è stata cambiata con successo.',
    'wrong_password_reset' => 'Password errata. Riprova',
  ],
  
  // Pro Plan
  'pro_plan' => [
    'remove_logo' => ':link per rimuovere il logo di Invoice Ninja aderendo al programma pro',
    'remove_logo_link' => 'Clicca qui',
  ],

  'logout' => 'Log Out', /* Esci */
  'sign_up_to_save' => 'Registrati per salvare il tuo lavoro',
  'agree_to_terms' =>'Accetto i :terms di Invoice Ninja',
  'terms_of_service' => 'Condizioni di Servizio',
  'email_taken' => 'Questo indirizzo email è già registrato',
  'working' => 'In elaborazione',
  'success' => 'Fatto',
  'success_message' => 'Registrazione avvenuta con successo. Per favore visita il link nell\'email di conferma per verificare il tuo indirizzo email.',
  'erase_data' => 'Questo eliminerà definitivamente i tuoi dati.',
  'password' => 'Password',

  'pro_plan_product' => 'Pro Plan',
  'pro_plan_description' => 'One year enrollment in the Invoice Ninja Pro Plan.',
  'pro_plan_success' => 'Thanks for joining! Once the invoice is paid your Pro Plan membership will begin.',


);