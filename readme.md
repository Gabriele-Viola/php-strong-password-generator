# Password Generator

L'applicazione **Password Generator** consente agli utenti di generare password sicure in modo semplice e rapido. Il generatore di password permette di personalizzare la lunghezza e la complessità della password, scegliendo quali set di caratteri utilizzare, come lettere maiuscole, lettere minuscole, numeri e simboli. Il progetto è suddiviso in varie **milestones** per consentire uno sviluppo progressivo e ben strutturato.

## Milestone 1 - Creazione del form per la generazione della password

La prima milestone prevede la creazione di un semplice form che permetta agli utenti di specificare la lunghezza desiderata per la password. La password generata sarà composta da una combinazione casuale di:

- Lettere minuscole
- Lettere maiuscole
- Numeri
- Simboli

Il form invierà la lunghezza desiderata della password tramite il metodo **GET**. Una funzione PHP sarà responsabile per generare la password casuale della lunghezza specificata, che verrà poi mostrata all'utente sulla stessa pagina.

La logica di generazione della password e il layout sono scritti nel file **index.php**.

## Milestone 2 - Separazione della logica in un file functions.php

Una volta verificato il corretto funzionamento della generazione della password, sposteremo la logica di creazione della password nel file **functions.php**. Questo file conterrà la funzione per generare la password e verrà incluso nel file principale **index.php** per una migliore organizzazione del codice e separazione delle responsabilità.

## Milestone 3 - Redirect alla pagina dei risultati 

Come miglioramento, invece di mostrare la password generata sulla stessa pagina, verrà effettuato un **redirect** alla pagina **result.php**. La password generata verrà inviata tramite **sessione** alla pagina dei risultati, che la mostrerà all'utente. Questo approccio permette di separare la logica di generazione della password dalla visualizzazione del risultato.

## Milestone 4 - Personalizzazione dei caratteri 

In questa milestone, estenderemo le funzionalità del generatore di password consentendo agli utenti di scegliere quali set di caratteri includere nella generazione della password. Gli utenti potranno selezionare tra:

- Lettere maiuscole
- Lettere minuscole
- Numeri
- Simboli

A seconda delle selezioni fatte dall'utente, la password sarà generata solo con i caratteri consentiti, aumentando la personalizzazione e la sicurezza delle password.

## Funzionalità principali

- **Generazione password casuale**: La password viene generata casualmente in base alla lunghezza e ai set di caratteri selezionati.
- **Form interattivo**: Gli utenti possono scegliere la lunghezza della password e specificare i set di caratteri da utilizzare.
- **Sessione per i risultati**: La password generata viene mostrata su una pagina separata tramite sessione.
- **Personalizzazione avanzata**: Gli utenti possono scegliere di includere lettere maiuscole, minuscole, numeri e simboli nella password.


