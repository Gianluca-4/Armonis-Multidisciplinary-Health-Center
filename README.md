# Armonis – Centro Polifunzionale Sanitario

**Armonis** è un progetto web sviluppato come caso studio per un centro sanitario polifunzionale e multidisciplinare. Il sito è stato progettato e ingegnerizzato con un approccio interamente incentrato sull'utente, focalizzato sulla chiarezza dei percorsi di cura integrati e sulla comunicazione immediata dei benefici per il paziente.

L'architettura è sviluppata in ambiente WordPress tramite codice custom, sfruttando l'editor nativo a blocchi (Gutenberg) per la gestione dei contenuti, escludendo l'utilizzo di page builder esterni (come Elementor) per garantire performance eccellenti, pulizia semantica e totale controllo del codice.

---

## Stack Tecnico & Strumenti

Il progetto è stato realizzato curando l'intero workflow, dall'ideazione visiva allo sviluppo tecnico:

*   **Design & Progettazione**: Figma (UI/UX Design e Wireframing).
*   **Sviluppo Front-End**: HTML, CSS, JavaScript.
*   **Animazioni**: GSAP (GreenSock Animation Platform) per micro-interazioni dinamiche.
*   **CMS**: WordPress (Tema Custom).
*   **Architettura Dati**: PHP, Custom Post Types (CPT) per l'ingegnerizzazione dell'équipe medica.
*   **Ottimizzazione**: Struttura codice e testi orientati alla SEO (On-Page, semantica, performance di caricamento e posizionamento).

---

## Architettura WordPress & Struttura delle Pagine

L'organizzazione dei file sfrutta la gerarchia nativa dei template di WordPress per separare nettamente le logiche di visualizzazione dei contenuti dinamici.

### 1. Home Page
La landing principale del centro si apre con una cover istituzionale forte. La struttura logica scende poi nel dettaglio del posizionamento di mercato:
*   Presentazione della filosofia multidisciplinare del centro.
*   Griglia panoramica dei servizi offerti.
*   Call to Action (CTA) strategiche distribuite lungo la pagina per facilitare la conversione.

### 2. Chi Siamo
Pagina dedicata alla nascita e alla mission della struttura:
*   **Sezione Fondazione**: Focus sulla nascita del centro nel 2024 e sull'obiettivo del fondatore di offrire un approccio clinico integrato.
*   **Équipe Medica**: Presentazione storica e biografie focalizzate sul percorso accademico e professionale dei quattro specialisti fondatori del team.

### 3. Professionisti (Gestione dinamica tramite CPT)
Una delle sezioni più rilevanti dal punto di vista dell'ingegnerizzazione del codice:
*   **Archivio Medici (`archive-professionista.php`)**: Una griglia composta da card dinamiche che pescano direttamente i dati inseriti nel Custom Post Type dedicato:
    *   *Dott. Armando Lo Presti* – Fisioterapista (Fondatore)
    *   *Dott.ssa Giovanna Giorgi* – Nutrizionista
    *   *Dott. Alfredo Montesino* – Osteopata
    *   *Dott.ssa Sara Pistoia* – Psicologa
*   **Pagina Singola Professionista (`single-professionista.php`)**: Struttura semantica coerente per tutti i professionisti, ma personalizzata nei contenuti:
    *   **Cover**: Volto, nome, ruolo e CTA diretta "Prenota una visita".
    *   **Box Disciplina & Sinergia**: Spiega chiaramente l'ambito trattato e inserisce il gancio strategico del *percorso completo multidisciplinare* in collaborazione con il resto dell'équipe.
    *   **Sezioni Media-Text**: Approfondimento pratico su come si struttura il percorso clinico (dal colloquio conoscitivo ai controlli) e focus sulla disponibilità del medico (supporto diretto via telefono/WhatsApp per i dubbi tra una seduta e l'altra).
    *   **Testimonianze Verticali**: Chiusura della pagina con recensioni mirate esclusivamente sull'operato del singolo professionista per massimizzare l'effetto Social Proof.

### 4. Convenzioni e Agevolazioni
Pagina finalizzata ad abbattere le barriere d'ingresso economiche e informative per il paziente:
*   **Sezione Educativa a due blocchi**: Chiarisce visivamente la differenza fondamentale tra *Convenzioni Dirette* e *Convenzioni Indirette*.
*   **Griglia Partner**: Layout a 6 loghi che mappa le collaborazioni attive (assicurazioni, aziende e associazioni sportive locali), realizzati tramite intelligenza artificiale per escludere problematiche di copyright.
*   **CTA di Chiusura**: Pulsante "Richiedi Informazioni" per profilare le richieste degli utenti.

### 5. Contatti
La pagina di atterraggio finale per la conversione:
*   **Blocco Info & Orari**: Indicazione chiara degli orari di segreteria e canali di contatto rapidi.
*   **Form di Contatto Avanzato**: Modulo strutturato in cui l'utente può selezionare preventivamente l'ambito di interesse (il singolo specialista o il *percorso multidisciplinare completo*).
*   **Mappa Interattiva**: Integrazione della mappa geografica della sede fisica per ottimizzare la reperibilità sul territorio e la Local SEO.

## Autore
**Gianluca Casano**
