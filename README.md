# Implementation

Live version @ http://gorillaravelblog.herokuapp.com/
- http://gorillaravelblog.herokuapp.com/post/create
- http://gorillaravelblog.herokuapp.com/categories/create

Trello board @ https://trello.com/b/wB3TUVdD/laravel-blog-heiner-en-rob

# User Stories

User Story  | Als een ... | wil ik ... | zodat ...
----------- | ----------- | ---------- | ---------
W3-001      | Blogger     | artikelen om mijn blog plaatsen | ik mijn ideeen met andere kan delen
W3-002      | Lezer       | een overzicht hebben van de artikelen die mijn favoriete blogger heeft geschreven met het meest recente artikel bovenaan | ik zeker weet dat ik de meeste recente artikelen blijf lezen
W3-003      | Blogger     | een artikel aan één categorie kunnen koppelen | mijn lezers sneller artikelen kunnen vinden rondom een bepaald thema
W3-004      | Lezer       | alleen de artikelen in een bepaalde categorie kunnen selecteren met behulp van een kolom aan de linkerkant van het scherm | ik gericht alle artikelen over een bepaald thema kan lezen
W3-005      | Blogger     | zelf categorieën kunnen toevoegen | ik niet afhankelijk ben van de developer die mijn blog heeft ontwikkeld
W3-006      | Blogger     | ook meerdere categorieën kunnen koppelen aan een artikel | ik me niet hoef te beperken tot één thema, wat in de praktijk nooit zo is
W3-007      | Blogger     | wil ik de tekst in het artikel kunnen formateren (bijv. vet gedrukt of cursief maken). Tip: maak hierbij gebruik van een standaard Javascript library | ik duidelijker mijn boodschap kan overbrengen
W3-008      | Blogger     | wil ik een afbeeldingen in een artikel kunnen plaatsen | ik duidelijker mijn boodschap kan overbrengen

User Story  | Als een ... | wil ik ... | zodat ...
----------- | ----------- | ---------- | ---------
W4-001      | Blogger     | wil ik een text-expander die als ik een artikel aan het schrijven ben door mij zelf gedefinieerde afkortingen die ik type direct omzet in de volledige tekst<br><br><i>Voorbeeld: Als ik CG type moet er direct CodeGorilla verschijnen. En als ik gn type mot er direct Groningen verschijnen<br><br>Tip: Maak hiervoor gebruik van Javascript</i> | ik sneller mijn artikelen schrijven
W4-002      | Lezer       | wil ik anoniem commentaar kunnen geven op een artikel | ik mijn mening over het artikel kan geven
W4-003      | Lezer       | alleen de artikelen in een bepaalde categorie kunnen selecteren met behulp van een kolom aan de linkerkant van het scherm ​EN wordt de pagina niet opnieuwe ingelezen<br><br><i>Tip: Maak hiervoor gebruik van Javascript. NB: Dit is een variant van W3-004</i> | ik nog sneller gericht alle artikelen over een bepaald thema kan lezen
W4-004      | Blogger     | wil ik ongewenst commentaar kunnen verwijderen | ik trollen kan stoppen
W4-005      | Blogger     | wil ik voor een artikel kunnen instellen dat geen commentaar kan worden gegeven | ik een uit de hand gelopen discussie kan stoppen

User Story  | Als een ... | wil ik ... | zodat ...
----------- | ----------- | ---------- | ---------
W6-001      | Lezer | kunnen zoeken naar een bepaald artikel door het invoeren van 1 of meerdere trefwoorden | ik een artikel over een bepaald ontwerp snel kan terugzoeken
W6-002      | Blogger | kunnen inloggen en toegang krijgen tot de backend waarmee ik o.a. artikelen kan schrijven | alleen ik de artikelen kan publiceren
W6-003      | Blogger | een bestaand artikel kunnen wijzigen | ik, als ik een schrijffout heb gemaakt, of andere inzicht heb gekregen dit kan verwerken
W6-004      | Blogger | dat alleen mensen die geregistreerd en ingelogd zijn commentaar kunnen geven | ik het lastiger maak voor trollen om commentaar te geven op artikelen
W6-005      | Lezer | mijzelf kunnen registreren en inloggen | ik commentaar kan geven op een artikel
W6-006      | Blogger | dat de wachtwoorden op een veilige manier worden opgeslagen in de database | ik, mocht er een keer worden ingebroken op de server, er zeker van ben dat er geen wachtwoorden kunnen lekken
W6-007      | Lezer | de mogelijkheid hebben om een nieuw wachtwoord aan te vragen. Via email ontvang ik daarvoor een link om het wachtwoord te kunnen wijzigen | ik nog in kan loggen als ik mijn wachtwoord ben vergeten
W6-008      | Lezer | in de linkerkolom een lijstje hebben met maanden zien waarin artikelen gepubliceerd zijn. Als ik op een maand klik worden de betreffende artikelen getoond | ik ook snel kan zien wat er in het verleden is gepubliceerd
W6-009      | Platform eigenaar | de functionaliteit die ik nu voor mijn eigen blog heb ontwikkeld gaan gebruiken als basis voor een blog platform waar meerdere bloggers gebruik van kunnen maken | bloggers worden geholpen hun ideeen te delen, en om hiermee voor mijzelf een nieuwe bron van inkomsten te genereren
W6-010      | Blogger | geïnformeerd worden over de mogelijkheden om op het blogplatform zelf een blog bij te gaan houden | ik kan bepalen of dit een goed platform voor mij is
W6-011      | Blogger | mij registreren als blogger op het platform. Daarbij mag ik zelf de naam van mijn blog bepalen. Deze naam moet uniek zijn | ik mij blog kan starten
W6-012      | Blogger | mijn artikelen kunnen beheren: nieuwe artikelen schrijven, artikelen wijzigen, artikelen verwijderen, commentaar verbergen, commentaar stoppen voor een bepaald artikel | ik ontzorgt wordt als blogger dan al deze functionaliteit zelf moet gaan bouwen
W6-013      | Blogger | een afbeelding uploaden die wordt gebruikt als header boven mijn blog | ik mijn blog een persoonlijke touch kan geven
W6-014      | Blogger | een email ontvangen als iemand commentaar geeft op een artikel | ik op de hoogte blijft hoe lezers op mijn artikelen reageren
W6-015      | Lezer | kunnen zien welke nieuwe artikelen op de verschillende blogs zijn geplaatst | ik interessante nieuwe blogs kan ontdekken
W6-016      | Lezer | me abonneren op een blog en krijg ik een email als er een nieuwe artikel van een blogger verschijnt | ik op de hoogte kan blijven wat mijn favoriete bloggers doen

# Excercise Week 5

Deze keer voor het eerst een groepsopdracht: je voert deze opdracht uit samen met één andere trainee. De indeling is reeds bekend gemaakt. Dat betekent het volgende:
* Je werkt samen in 1 git-repository.
* Je verdeelt samen het werk. Je kunt kiezen voor pair-programming: waarbij je met z’n tweeën achter 1 scherm werkt en regelmatig van toetsenbord wisselt. Of je verdeelt het werk en gaat elkaars code-reviewen. Ons advies is om zeker in het begin voor pair-programming te gaan.
* In Trello geef je op de user-stories aan wie er aan werkt (voor het geval je de taken verdeeld).
* Je krijgt allebei hetzelfde cijfer. Belangrijk dus om te zorgen dat het werk eerlijk wordt verdeeld.

Deze week ga je kennis maken met het populaire MVC-framework Laravel door het uitvoeren van de volgende opdrachten:

1. Maak een nieuw Trello Board voor deze opdracht
2. Installeer Laravel op je Laptop zodat de welkomspagina van Laravel in je browser staat.
    * Windows (Floris): met behulp van VirtualBox + Vagrant + Homestead, https://medium.com/@eaimanshoshi/i-am-going-to-write-down-step-by-step-procedure-to-setup-homestead-for-laravel-5-2-17491a423aa
    * Linux (Wouter): met behulp van Docker,
    * OSX (Marco): met behulp van Valet
3. Volg de training “Laravel 5.4 From Scratch” op laracasts.com t/m aflevering 16.
    * https://laracasts.com/series/laravel-from-scratch-2017
    * Let op: training 1 en 4 zijn specifiek voor bepaalde laptops.
4. Ontwikkel stories W3-001 en W3-002 met behulp van Laravel. Zeer belangrijk: ​nadat je Laravel project voor deze opdracht hebt aangemaakt voeg je de nieuwe directory direct toe aan git en doe je een eerste commit (git init, git add . , git commit -m “First Commit”). Daarmee kunnen de coaches eenvoudig zien wat je zelf veranderd hebt aan het Laravel project.
5. Deploy je oplossing naar Heroku. Zie hiervoor de instructies op de gedeelde drive: https://drive.google.com/open?id=1Npbbe9Qc7kNehXJZ-l65O9m7K5b8CYGE
6. Ontwikkel vervolgens zoveel mogelijk user stories opnieuw met Laravel. Zorg dat je minimaal W3-001 t/m W3-004, en W4-002 (geven van commentaar) klaar aan het einde van de week. Alle extra stories leveren extra punten op.
7. Lever op vrijdag uiterlijk 17:30 je oplossing op in github. Zorg ervoor dat in de readme file een link staat naar je Trello Board en de deployment op Heroku. Net zoals de vorige weken, zorg ervoor dat:
    * In Trello je product backlog gemaakt, waarbij de stories verdeeld worden over drie kolommen (Not started, In Progress, Done!).
    * Voor de stories waarmee je aan de slag gaat maak je een takenlijst zodat je een duidelijk plan hebt hoe je het gaan uitpakken.
    * De code is gepushed naar github. Gedurende de week maak je dagelijks meerdere commits op het moment dat je weer een stap heb afgerond. Bij iedere commit geef je tussen blokhaken aan om welke users story het gaat (bijv. [W4-001])
    * Deze opdracht moet je met het MVC-framework Laravel maken

# Excercise Week 6

Je bent nu up-and-running met Laravel en het is tijd om meer ervaring te krijgen door meer stories te ontwikkelen. Deze opdracht bouwt voort op de
blog-opdracht. Er zijn extra stories toegevoegd die de applicatie complexer maken. Het doel is weer om zoveel mogelijk stories af te handelen. Je gebruikt
daarbij de volgorde van de weken. Het mooiste is uiteraard als je aan het eind van de week alle stories van week 3,4 en 6 klaar hebt.
Succes!

Vrijdag om 17:30 heb je het volgende gedaan:
- Je gaat in Trello verder met je backlog van vorige week. De kolom Done!​ verander je in Week 5. ​En je maakt een nieuwe kolom Week 6 ​aan waar je
de stories in gaat zetten die je deze week afrond.
- Voor de stories waarmee je aan de slag gaat maak je een takenlijst zodat je een duidelijk plan hebt hoe je het gaan uitpakken.
- De code is gepushed naar github. Gedurende de week maak je dagelijks meerdere commits op het moment dat je weer een stap heb afgerond.
- Je hebt je werkende oplossing op een Heroku.
- In de readme file op Github zet je de link naar Trello en naar Heroku
- Je maakt gebruik van Laravel.
- Je werkt met dezelfde partner als vorige week.
