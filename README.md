# Benelli.Alessandro.PHP_MySQL

PROGETTO: Sito Web "Palestra 648"
CORSO: Sviluppo Web - Homework 2 (PHP/MYSQL)

AUTORE:
- Alessandro Benelli (1983399)

REPOSITORY GITHUB:
- Indirizzo repo: https://github.com/Tiltaments/Benelli.Alessandro.PHP_MySQL.git

DESCRIZIONE DEL SITO:
Il sito web è la naturale evoluzione (dinamicamente) del precedente sito Palestra 648 con l'utilizzo di php per caricare, inserire in database ed eseguire logica per effettuare queste operazioni. È composto da 4 pagine (Home, Pacchetti, Servizi, Trainer), per illustrare l'offerta della struttura, i prezzi e presentare lo staff, ed in alto a destra ( attraverso una topbar ) funzioni per effettuare il login, la registrazione e controllare il carrello.
Gli utenti registrati possono, oltre a navigare sul sito, effettuare acquisti di abbonamenti e vedere il loro storico di acquisti.

INSTALLAZIONE DEL SITO
Per poter utilizzare anche il database è necessario dover avviare come primo file install.php che permette di creare il db (se non esistente) con le relative tabelle.

TECNICHE PRINCIPALI UTILIZZATE:
1. Architettura Data-Driven (MySQL): I contenuti, come le schede dei trainer in "trainer.php" o lo storico nell'Area Personale, non sono statici ma generati dinamicamente estrapolando i dati dal database tramite query SQL.
2. Gestione dello Stato (Sessioni PHP): Utilizzo massiccio dell'array superglobale $_SESSION per mantenere l'identità dell'utente loggato durante la navigazione e per gestire il salvataggio temporaneo degli articoli nel "Carrello".
3. Modularità del Codice (Include): La struttura del layout (Top-bar, Menu laterale, Footer) è centralizzata in file separati e inserita nelle pagine tramite la funzione "include", riducendo la ridondanza del codice e facilitando la manutenzione.
4. Separazione Logica/Presentazione: Le operazioni sui dati (registrazione, login, checkout) sono state separate dalle pagine di visualizzazione, delegandole a file dedicati (es. reg_action.php, login_action.php) che processano i dati POST e gestiscono i reindirizzamenti (Header Location).
5. Sicurezza Base: Utilizzo della funzione $conn->real_escape_string() per sicurezza e per evitare mal interpretazioni da parte del database.
