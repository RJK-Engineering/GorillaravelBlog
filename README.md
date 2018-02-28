# Implementation

Live version @ http://gorillaravelblog.herokuapp.com/
- http://gorillaravelblog.herokuapp.com/blogs/create
- http://gorillaravelblog.herokuapp.com/posts/create
- http://gorillaravelblog.herokuapp.com/categories/create

Trello board @ https://trello.com/b/wB3TUVdD/laravel-blog-heiner-en-rob

```
Prerequisites:
PHP 7.2.1
Composer
MySql or other laravel compatible database software
```
```
Install:
Clone repository
run composer install
run php artisan migrate
run php artisan db:seed
```
Implemented features week 6:
- add image to post
- js text expander
- js categories menu without reload
- home page with information about the blog platform
- register and login functionality
- multi user platform started
- archives feature in the sidebar
- edit post functionality
- get new password by email
- search function
- add image to post

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
