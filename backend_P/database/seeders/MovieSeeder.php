<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movie = new Movie();
        $movie->name = "One Piece film Red";
        $movie->release_year = "2022";
        $movie->description = "Uta a világ leghíresebb énekesnője, aki megannyi rövid, Den Den Mushis közvetítést követően végre színpadra áll élőben is. A Szalmakalaposoknak természetesen ott a helye a koncerten. A dolgok akkor kezdenek bonyolódni, amikor kiderül, hogy ez a leányzó nem más, mint Shanks lánya, és a célja egy új korszak megteremtése, ahol a boldogság és a béke uralkodik.";
        $movie->imageUrl = "one_piece_film_red_official.webp";
        $movie->length = "115";
        $movie->origin = "Japán";
        $movie->save();

        $movie = new Movie();
        $movie->name = "Batman: Kezdődik";
        $movie->release_year = "2005";
        $movie->description = "Bruce Wayne (Christian Bale), az árva milliomos önszántából járja meg az erőszak poklát, amikor Henri Ducard (Liam Neeson), a keleti mester a harcosai közé veszi és tökéletesen kiképzi. Wayne azonban nem osztozik mestere elvakult nézeteiben és visszatér Gotham Citybe. Célja, hogy az igazságtalanság ellen harcoljon minden lehetséges eszközzel. A várost azonban megfertőzte a korrupció, csak a fiatal ügyésznő, Rachel (Katie Holmes) és James Gordon nyomozó (Gary Oldman) mernek szembeszállni Ra's Al Ghul embereivel.";
        $movie->imageUrl = "batman_begins.jpg";
        $movie->length = "140";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "A sötét lovag";
        $movie->release_year = "2008";
        $movie->description = "Batman (Christian Bale), Gordon felügyelő (Gary Oldman) és a megvesztegethetetlen ügyész, Harvey Dent (Aaron Eckhart) hatásos hadjáratot indítanak a bűnözők ellen. Önként vállalt feladatukat már-már siker koronázza, ám ekkor megjelenik Joker (Heath Ledger), aki a bűnözők között is rettegett, ravaszabb és veszélyesebb bárkinél. A városban újra a félelem az úr, kitör a káosz, és mindenkit megfertőz a romlottság.";
        $movie->imageUrl = "the_dark_knight.jpg";
        $movie->length = "152";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "A sötét lovag - Felemelkedés";
        $movie->release_year = "2012";
        $movie->description = "Nyolc év telt el azóta, hogy egy szörnyű éjszakát követően Batman nyom nélkül eltűnt. Magára vállalta Harvey Dent államügyész minden vétkét, és a hősből üldözött bűnöző lett. Önfeláldozása azonban nem volt hiábavaló: a Dent-törvénynek köszönhetően Gotham békés várossá vált. Átmenetileg. A városban feltűnik egy macskajelmezes betörő, aki sötét titkokat rejteget; és megérkezik Bane is, a különös álarcot viselő, gátlástalan bűnöző. Bruce Wayne féltve őrzött magánya nem tarthat örökké, a városnak ismét szüksége van a Sötét Lovagra. Ám a köpönyeg és az álarc ellenére úgy tűnik, Bane legyőzhetetlen.";
        $movie->imageUrl = "the_dark_knight_rises.jpg";
        $movie->length = "164";
        $movie->origin = "USA";
        $movie->save();
        

        
        $movie = new Movie();
        $movie->name = "Jujutsu Kaisen: 0";
        $movie->release_year = "2021";
        $movie->description = "Yuta Okkotsut a Jujutsu Boszorkánymesterek a Tokiói Prefektúra Jujutsu Középiskolájába íratják be, hogy segítsenek neki kontrollálni az erejét, és szemmel tartsák őt.";
        $movie->imageUrl = "jujutsu_kaisen_0.jpg";
        $movie->length = "105";
        $movie->origin = "Japán";
        $movie->save();

        $movie = new Movie();
        $movie->name = "A Gyűrűk Ura: A Gyűrű Szövetsége";
        $movie->release_year = "2001";
        $movie->description = "Frodó (Elijah Wood), az ifjú hobbit egy gyűrűt kap Bilbótól, amiről kiderül, hogy az Egy Gyűrű, mellyel a Sötétség Ura rabszolgasorba taszíthatja Középfölde népeit. Gandalf (Ian McKellen) Völgyzugolyba küldi Frodót, ahol a tündék legbölcsebb vezetője, Elrond dönt a gyűrű sorsáról. Nincs más lehetőség, a gyűrűt el kell pusztítani Mordorban, a Végzet-katlanban. A szabadnépek tanácsán megújul a Szövetség, és Gandalf vezetésével Frodó és társai, a dúnadán Aragorn (Viggo Mortensen), a tünde Legolas (Orlando Bloom), Gimli, a törp (John Rhys-Davies), és Boromir, az emberek képviseletében, nekivágnak a reménytelen küldetésnek. A jövő attól függ, hogyan alakul a szövetség sorsa.";
        $movie->imageUrl = "the_lord_of_the_rings_the_fellowship_of_the_ring.jpg";
        $movie->length = "178";
        $movie->origin = "Új-Zéland, USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "A Gyűrűk Ura: A két torony";
        $movie->release_year = "2002";
        $movie->description = "Hamarosan eldől Középfölde sorsa: a gonosz ereje egyre nő, mert szövetséget kötött a két torony: Barad-dúr, Szauron, a sötét úr vára és Orthanc, amely Szarumán, az áruló mágus erődje. Frodó, a Gyűrűhordozó és hű barátja, Samu Mordor földje felé tart, hogy a tűzbe hajítsa terhét: ám egy újabb veszéllyel kell szembenézniük - felbukkan Gollam, aki magának követeli a kincset. Eközben a szövetség még élő tagjai a Kósza vezetésével újabb harcokba keverednek. Rohan lovasai mellett küzdenek és különös szövetségesekre lelnek: az Entekre. Árnyék vetül a világra. A Sötét Úr hadseregei Gondor felé vonulnak. Kezdetét veszi a Gyűrűháború.";
        $movie->imageUrl = "the_lord_of_the_rings_the_two_towers.jpg";
        $movie->length = "210";
        $movie->origin = "Új-Zéland, USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "A Gyűrűk Ura: A király visszatér";
        $movie->release_year = "2003";
        $movie->description = "Gandalf (Ian McKellen) Pipinnel (Billy Boyd) Gondorba vágtat, hogy Denethort (John Noble) felkészítse Szauron túlerejével szemben. Théoden király (Bernard Hill) összevonja seregeit Gondor segélyhívására. Aragorn (Viggo Mortensen) végül vállalja sorsát, és hű társaival harcba szólítja a hegyek közt élő holtakat. Középfölde sorsa azonban egészen máshol fog eldőlni. Frodó (Elijah Wood) és Samu (Sean Astin) a Hatalom gyűrűjével Mordor sötét útvesztőit járja. De minél közelebb kerülnek a Végzet hegyéhez, Frodót annál jobban húzza a Gyűrű szörnyű súlya. A világ sorsa egy apró hobbit kezében van, aki kétséges, hogy ellen tud állni a legnagyobbakat is legyőző kísértésnek.";
        $movie->imageUrl = "the_lord_of_the_rings_the_return_of_the_king.jpg";
        $movie->length = "201";
        $movie->origin = "Új-Zéland, USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "The Sunset Limited";
        $movie->release_year = "2011";
        $movie->description = "A két New York-i férfi egyike fehér, a másik fekete. A fehér egyetemi professzor véget akart vetni az életének, ám öngyilkossági kísérletét a másik megakadályozta. A fekete felviszi magához a lepukkant lakásába, és megpróbál a lelkére beszélni. Furcsa helyzet, hiszen gyilkosságért ült, ám amikor megérintette a halál szele, Isten megszólította őt, és új célt, értelmet adott életének. Az ateista professzor viszont kiábrándult a világból, ön- és embergyűlölő lett. Különös vita bontakozik ki kettejük között az életről, Istenről, az emberekről.";
        $movie->imageUrl = "the_sunset_limited.jpg";
        $movie->length = "91";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "Csillagok között";
        $movie->release_year = "2014";
        $movie->description = "A legendásan titkolózó rendező új sci-fijéről annyit már tudni, hogy csupa sztár működik közre benne és a csillagok között játszódik. Tudósok felfedeznek egy féreglyukat az űrben, és egy csapatnyi felfedező meg kalandor nekivág, hogy átlépje mindazokat a határokat, amelyeket addig áthághatatlannak hittünk: túl akarnak lépni téren és időn.";
        $movie->imageUrl = "interstellar.jpg";
        $movie->length = "169";
        $movie->origin = "UK, USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "A keresztapa";
        $movie->release_year = "1972";
        $movie->description = "Minden idők legnagyobb gengszterfilmje azokat az embereket és azt a gépezetet mutatja be, ami az olasz maffiában gyökerezve a világ leghatalmasabb és legrettegettebb hatalmává vált az Egyesült Államokban. Figyelemmel követhetjük a kegyetlen, gyilkos módszereket, amivel a Corleone család feje dolgozik. Tanúi lehetünk a hihetetlen összetartásnak, az érdekek és a félelem összetartó erejének, ami ezt a világot jellemzi. Emberek sorsa, élet és halál kérdése dől el Don Vito Corleone dolgozószobájában. Egyesek védelemért fordulnak a nagyúrhoz, mások hadüzenettel érkeznek. A rivális maffia, a Tattaglia család ugyanis végső leszámolásra szólította fel a Corleonékat. És a hadüzenet után az egész város lángba borul...";
        $movie->imageUrl = "the_godfather.jpg";
        $movie->length = "175";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "A keresztapa 2";
        $movie->release_year = "1974";
        $movie->description = "Vito Corleone halála után Michael lép apja örökébe. A férfi szerteágazó kapcsolatrendszerének felhasználásával új profilt alakít ki a családja vezette maffiának. Hamarosan újabb összeütközések és árulások veszik kezdetüket, s Michael nem habozik a legveszedelmesebb fegyverekhez nyúlni, hogy hatalmát, befolyását és pénzét megtartsa, s védelmet biztosítson családjának. Közben az is kiderül, hogy néhai apja hogyan alapozta meg a Corleone család hírnevét.
        ";
        $movie->imageUrl = "the_godfather_2.jpg";
        $movie->length = "200";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "A keresztapa 3";
        $movie->release_year = "1990";
        $movie->description = "Michael Corleone egyre inkább úgy érzi, hogy családja tevékenységeit ideje lenne legalizálni. A régi típusú maffiának ugyanis mára már leáldozott. Ezért dönt úgy, hogy a szerencsejáték-iparból kiszállva inkább a tőzsde és a bankvilág irányába fordul. Így kerül kapcsolatba a Vatikán egyik bankjával is. S hamarosan olyan üzletet kötnek, ami végleg eldönti a Corleone család sorsát.";
        $movie->imageUrl = "the_godfather_3.jpg";
        $movie->length = "170";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "A remény rabjai";
        $movie->release_year = "1994";
        $movie->description = "1946-ban egy Andy Dufresne nevű bankárt - noha makacsul hangoztatja ártatlanságát - kettős gyilkosság elkövetése miatt életfogytiglani börtönbüntetésre ítélnek. Dufresne egy Maine állambeli büntetés-végrehajtó intézetbe kerül és hamar meg kell ismerkedjen a börtönélet kegyetlen mindennapjaival, a szadista börtönszemélyzettel, a szinte elállatiasodott rabokkal. Azonban Andy nem törik meg. A bankéletben szerzett tapasztalatai segítségével elnyeri az őrök kegyét és azzal, hogy elvállalja egyik rabtársa illegális akcióiból származó bevételeinek könyvelését, kivívja \"társai\" elismerését is. Cserébe viszont lehetőséget kap a börtön könyvtár fejlesztésére, ezzel némi emberi méltóságot csempészve a keserű körülmények között élő rabok mindennapjaiba.";
        $movie->imageUrl = "the _shawshank_redemption.jpg";
        $movie->length = "137";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "Schindler listája";
        $movie->release_year = "1993";
        $movie->description = "Egyetlen ember is képes lehet arra, hogy a körülmények ellenére megváltoztassa a dolgok menetét. A mondás igazát mi sem bizonyítja jobban, mint Oskar Schindler története. Steven Spielberg nem sokkal a megjelenése után elolvasta az ausztrál Thomas Keneally regényét, mégis tíz évnek kellett eltelnie, hogy elég érettnek tartsa magát a Schindler listája filmre vitelére. A film főhőse, Oskar Schindler született üzletember és szerencsejátékos. A II. világháború legelején elkerül a megszállt Lengyelországba, és azonnal megérzi, milyen hatalmas üzleti lehetőségek nyílhatnak meg előtte.";
        $movie->imageUrl = "schindler's_list.jpg";
        $movie->length = "195";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "Dühöngő bika";
        $movie->release_year = "1980";
        $movie->description = "Az ökölvívó Jake La Motta a brutális harcmodora miatt kapta a Bronxi Bika nevet. 1948-ban szerezte meg a középsúlyú világbajnoki címet. Sikerét, hírnevét azonban beárnyékolta zaklatott magánélete. Jake New York rosszhírű negyedében, Bronxban nőtt fel. Az utcán gyorsan megtanulta, hogyan kell lopni és harcolni, hogyan lehet keményebb mindenkinél. A magányos ifjú végül a bokszban találta meg célját, a szorítóban adta ki minden dühét. A sikert azonban nem tudta feldolgozni. A pénzét italra és nőkre költötte, a címét elveszítette, a családja szétesett, végül pedig börtönbe került. Szabadulása után egy mulatóban kapott munkát.";
        $movie->imageUrl = "raging_bull.jpg";
        $movie->length = "129";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "Casablanca";
        $movie->release_year = "1942";
        $movie->description = "Egy cinikus, külföldön élő amerikai kávézótulajdonos azzal a döntéssel küzd, hogy segítsen-e egykori szeretőjének és annak szökésben lévő férjének a nácik elől menekülni Francia Marokkóban.";
        $movie->imageUrl = "casablanca.jpg";
        $movie->length = "102";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "Elfújta a szél";
        $movie->release_year = "1939";
        $movie->description = "Egy védett és manipulatív déli szépasszony és egy szélhámos haszonleső viharos románcba keveredik, miközben a rabszolgaság megszűnésével a körülöttük lévő társadalom összeomlik, majd a polgárháború és az újjáépítés időszakában újjáépül.";
        $movie->imageUrl = "gone_with_the_wind.jpg";
        $movie->length = "238";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "Óz, a csodák csodája";
        $movie->release_year = "1939";
        $movie->description = "A fiatal Dorothy Gale-t és kutyáját, Totót egy tornádó elsodorja kansasi farmjukról Óz, a varázslatos országba, és három új barátjával elindulnak, hogy megkeressék a varázslót, aki visszaviheti őt hazájába, és teljesítheti a többiek kívánságait.";
        //$movie->imageUrl = "the_wizard_of_oz.jpg";
        $movie->length = "102";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "Óz, a hatalmas";
        $movie->release_year = "2013";
        $movie->description = "Amikor Oscar Diggs (James Franco), az igencsak gyanús, piti kis cirkuszi bűvész sietve távozik a porlepte, unalmas Kansas-ből az izgalmas Óz birodalmába, úgy tűnik, megütötte a főnyereményt: hírnév és gazdagság vár reá. Egészen addig gondolja így, amíg nem találkozik a három boszorkánnyal, Theodora-val (Mila Kunis), Evanora-val (Rachel Weisz) és Glinda-val (Michelle Williams), hiszen ők hárman nem egészen biztosak abban, hogy ő lenne a várva várt nagy varázsló.";
        $movie->imageUrl = "oz_the_great_and_powerful.jpg";
        $movie->length = "127";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "Star Wars: Egy új remény";
        $movie->release_year = "1977";
        $movie->description = "Réges régen, egy távoli galaxisban kezdődött a nagy kaland, amikor Leia Organa hercegnő (Carrie Fisher) két fura robottal egy alig értékelhető hologramot küldött az egyetlen Jedi lovagnak, a remeteként élő Ben Kenobinak (Alec Guinness). Az idős jedi Luke Skywalker (Mark Hamill), Han Solo (Harrison Ford) és szőrős vukija, a hatalmas Chewbacca társaságában útra kel, hogy kiszabadítsa a hercegnőt Darth Vader fogságából, és győzelemre vigye az igaz ügyet az egész Galaxisban.";
        $movie->imageUrl = "star_wars_episode_iv_a_new_hope.jpg";
        $movie->length = "121";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "Star Wars: A Birodalom visszavág";
        $movie->release_year = "1980";
        $movie->description = "A felkelők maréknyi csapata a hó borította Hoth bolygó földalatti támaszpontján rejtőzködik. A szondák azonban felfedik a rejtekhelyet, és hamarosan birodalmi lépegetők lepik el a bolygót. Han Solo, Chewbacca és Leia a megbízhatatlan Lando Calrissian segítségét kérik. Nem is sejtik, hogy a birodalom rettegett ura, Darth Vader már várja őket nem kis meglepetést tartogatva Han számára. Luke Skywalker a Dagobah rendszerben az utolsó és legnagyobb Jedit, Yodát keresi, hogy felkészülhessen a végső összecsapásra az Erő sötét oldalával.";
        $movie->imageUrl = "star_wars_episode_v_the_empir_strikes_back.jpg";
        $movie->length = "124";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "Star Wars: A Jedi visszatér";
        $movie->release_year = "1983";
        $movie->imageUrl = "star_wars_episode_vi_return_of_the_jedi.jpg";
        $movie->description = "Miután Luke megmentette barátját, Han Solót és a szépséges Leia hercegnőt a biztos haláltól, ismét csatlakozik Yodához, hiszen igazi Jedi Lovaggá kell válnia ahhoz, hogy szembeszállhasson Darth Vaderrel és az Erő sötét oldalával. Végre eljött a végső összecsapás ideje! A felkelők készen állnak arra, hogy megsemmisítő csapást mérjenek a Halálcsillagra. Arra azonban nem számítanak, hogy a bolygót elpusztíthatatlan energiapajzs védi és a Birodalom csapdába csalja őket.";
        $movie->length = "134";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "Star Wars: Baljós árnyak";
        $movie->release_year = "1999";
        $movie->description = "Nyugtalanság uralkodik a Galaktikus Köztársaságban. A távoli csillagrendszerekbe irányuló kereskedelmi utak megadóztatásának tervét heves viták övezik. A kapzsi Kereskedelmi Szövetség felfegyverzett csatahajóival blokád alá veszi a parányi Naboo bolygót. A Főkancellár titokban útnak indít két Jedi lovagot, a béke és az igazság szerzőit, hogy oldják meg a konfliktust és védjék meg Amidala királynőt. Hamarosan azonban kényszerleszállást kell végrehajtaniuk a Tatooine-on, ahol találkoznak az ifjú Anakinnal, akiben túlárad az erő.";
        $movie->imageUrl = "star_wars_episode_i_the_phantom_menace.jpg";
        $movie->length = "136";
        $movie->origin = "USA";
        $movie->save();
       

        $movie = new Movie();
        $movie->name = "Star Wars: A klónok támadása";
        $movie->release_year = "2002";
        $movie->description = "A Galaktikus Köztársaság polgárháború küszöbén áll. A Padmé Amidala elleni merényletkísérlet után a tanács Anakin Skywalkert bízza meg a védelmével. A távoli bolygón olyan titkokra bukkannak, ami eldöntheti a polgárháború kimenetelét.";
        $movie->imageUrl = "star_wars_episode_ii_ attack_of_the_clones.jpg";
        $movie->length = "142";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "Star Wars: A Sith-ek bosszúja";
        $movie->release_year = "2005";
        $movie->description = "A tanács Obi-Wan Kenobit (Ewan McGregor) bízza meg azzal, hogy felkutassa és a törvény színe elé hozza őket a klónháború felelőseit. Ezalatt Palpatine szenátor (Ian McDiarmid) egyre nagyobb hatalomra tesz szert, létrehozza a Galaktikus Birodalmat. A szenátor közvetlen társaságában Anakin (Hayden Christensen) egyre nehezebben tud ellenállni Palpatine befolyásának, aki mindent elkövet, hogy a fiatal jedit a sötét oldalra csábítsa.";
        $movie->imageUrl = "star_wars_episode_iii_revenge_of_the_sith.jpg";
        $movie->length = "143";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "Star Wars: Az ébredő Erő";
        $movie->release_year = "2015";
        $movie->description = "A Csillagok háborúja VI: A jedi visszatér cselekménye után 30 évvel járunk (YU 34), az Új Köztársaság idejében. Az Első Rend jelent meg és háborúzott a Galaktikus Birodalom maradványaival, melynek vezetője Supreme Leader Snoke és tanítványa, Kylo Ren, aki sajátos fénykardjával a Galaxis egy részét elfoglalta a (Hux tábornokkal) Starkiller bázisról vezetve seregét.";
        $movie->imageUrl = "star_wars_episode_vii_the_force_awakens.jpg";
        $movie->length = "136";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "Star Wars: Az utolsó Jedik";
        $movie->release_year = "2017";
        $movie->description = "Rey megkezdi a Jedi kiképzését Luke Skywalker tanítványaként annak a reményében, hogy ezzel változtathat az Ellenállás helyzetén és legyőzhetik Kylo Rent és az Első Rendet, eközben Leia Organa, Finn és Poe Dameron megpróbálnak elmenekülni egy Első rendi támadás elől.";
        $movie->imageUrl = "star_wars_episode_viii_the_last_jedi.jpg";
        $movie->length = "150";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "Star Wars: Skywalker kora";
        $movie->release_year = "2019";
        $movie->description = "A Skywalker-saga befejezésében új legendák születnek – és a szabadságért vívott végső csata még hátravan.";
        $movie->imageUrl = "star_wars_episode_ix_the_rise_of_skywalker.jpg";
        $movie->length = "142";
        $movie->origin = "USA";
        $movie->save();

        $movie = new Movie();
        $movie->name = "Halálsoron";
        $movie->release_year = "1999";
        $movie->description = "Paul Edgecomb börtönőrként szolgál a Cold Mountain fegyház siralomházában a múlt század harmincas éveiben. Az E blokkban halálraítéltek várják, hogy végig menjenek a halálsoron - a folyosón, amely a villamosszékhez vezet. Edgecomb úgy gondolja, már semmilyen meglepetés sem érheti. Ám minden megváltozik, amikor új rab érkezik az E blokkba. Az óriás termetű fekete férfit, John Coffeyt az esküdtszék két fehér gyermek meggyilkolásáért ítélte halálra. A férfi azonban egyáltalán nem tűnik gyilkosnak, sőt, egészen különös képességekkel rendelkezik. Stephen King regényéből.";
        $movie->imageUrl = "the_green_mile.jpg";
        $movie->length = "189";
        $movie->origin = "USA";   
        $movie->save();
    }


}
