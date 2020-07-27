# Twig Templating engine
Na prošloj radionici smo obradili temu "PHP templating engines" gdje smo rekli što su to templating engines, koji je benefit njihove upotrebe, nabrojali smo neke od zastupljenijih i stavili fokus na Twig templating engine. Cilj ovog zadatka je upoznati se sa sintaksom twiga i što bolje i više iskoristiti njegovu sintaksu u izradi/kodiranju category pagea nekog ecommerce sajta.

## Zadatak
Figma Design: [https://www.figma.com/file/lY4dSsn4LOBVIFxB5nYN1e/Zadatak-1---2---3---4?node-id=408%3A5](https://www.figma.com/file/lY4dSsn4LOBVIFxB5nYN1e/Zadatak-1---2---3---4?node-id=408%3A5)
Podatci koji se šalju u `home.html.twig` template su dostupni na linku https://pastebin.com/kdjedCcd (_ovo je samo informativno, kako bi si lakše mogli vizualizirati što trebate napraviti_)
Trenutno postoje 2 templatea kreirana za vas
- `src/views/layouts/main_layout.html.twig`
- `src/views/templates/home.html.twig`

Upute za postavljanje projekta su na dnu dokumenta

**Faze zadatka**
1. Potrebno je iskodirati template sa linka iznad
2. Potrebno je povezati iskodirani template sa podatcima koji se prosljeđuju u template

U template se šalje `data` objekt koji ima 3 propertija
- `navigation` - _lista navigation objekata_
- `title` _predstavlja naslov stranice_
- `products` _predstavlja listu product objekata koji se trebaju ispisati na stranici_

### Navigation
Ovaj skup podataka koristimo u headeru; Potrebno je izgenerirati centralni dio header izbornika na osnovu podataka koji se nalaze u propertiju `data.navigation`.
Ikonice `srce` i `košarica` su odvojene od ovog dijela i uvijek vidljive
Važno je još za napomenuti kako određeni navigation itemi imaju još jedan nivo navigacije koji se nalazi pod ključem/propertijem `items`. Nije potrebno raditi logiku za renderiranje izbornika dublje od drugog nivoa.

### Title
Naslov page-a se, osim kao naslov stranice treba prikazati i u title baru kartice preglednika

### Products
Na osnovu ove liste podataka potrebno je generirati kartice proizvoda; Postoje posebne napomene za neke propertije objekat product.
- `type` _Ovisno o ovom podatku, razlikujemo dvije vrste kartica **default** i **bundle**_
- `regularPrice` _ova vrijednost se ispisuje ako je `specialPrice` `null`, inače se ispisuje kao prekrižena vrijednost_
- `specialPrice` _prikazuje se ako je različita od `null`_
- `favorite` _ovisno o ovom podatku treba se naglasiti ikonica srce_
- `image` _koristite `thumbnail` property iz objekat `image`_

## Upute za postavljanje projekta
1. potrebno je "forkati" repozitorij https://github.com/tbuljevic/template-engines
2. skinuti svoju (_forkanu verziju_) repozitorija na svoje računalo
3. navigirati se sa _**CMD-om**_ ili _**Git Bash terminalom**_ unutar kloniranog folder (_tamo gdje se nalazi fajl `composer.lock_)
4. pokrenuti komandu `composer install` (_preduvjet je da imate instaliran PHP i composer_)
5. za pokretanje servera potrebno je unutar tog istog servera pokrenuti naredbu `php -S localhost:8080 -t public/`
6. otvoriti link u browseru http://localhost:8080/home