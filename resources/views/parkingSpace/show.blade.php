@extends('layouts/layout')

<style>
    td{
        padding-top: 17px;
    }
</style>

<script>
    window.addEventListener('load', function (){
        const  houseRule= document.getElementById('houseRuleHead');
        const toggleBtnEl = document.getElementById('toggle-btn');
        const moreTextEl = document.getElementById('more-text');
        const hideBtnEl = document.getElementById('hide-btn');
        toggleBtnEl.addEventListener('click', () => {
            moreTextEl.classList.toggle('hidden');
            toggleBtnEl.classList.toggle('hidden');
            hideBtnEl.classList.toggle('hidden');
            houseRule.className='align-center text-black font-bold';
        });

        hideBtnEl.addEventListener('click', () => {
            moreTextEl.classList.toggle('hidden');
            toggleBtnEl.classList.toggle('hidden');
            hideBtnEl.classList.toggle('hidden');
            houseRule.className='align-center text-black font-bold bg-gradient-to-b from-black to-transparent text-transparent bg-clip-text';
        });
    });
</script>

@section('content')
    <script>
        let navBar = document.getElementById('header');
        navBar.className = 'reveal'
    </script>
    <main class="flex flex-col items items-center bg-zinc-100 gap-6">
        <section class="flex lg:flex-row flex-col items-start w-full gap-8 mt-[50px] p-8">
            <article class="flex p-8 bg-white shadow-xl rounded-md lg:w-[1400px] lg:h-[600px]">
                <img class="object-scale-down" src="images/ricardo.jpg" alt="image"/>
            </article>

            <div class="flex flex-col lg:h-[600px] lg:w-[1000px] justify-between">
                <h1 class="text-3xl font-semibold">Parkeerplaats huren in Neeltje Jans</h1>
                <p class="text-xl">Straatnaam</p>

                <!--Price info-->
                <div class="bg-white w-full p-10 flex flex-col text-center rounded-md gap-5 lg:overflow-y-auto lg:h-[500px] shadow-xl">
                    <!--Boat length annual rate-->

                    <h1 class="text-xl font-semibold">Jaartarief</h1>
                    <table >
                        <tbody class="text-gray-400 lg:text-base text-sm ">
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Eerste 7 meters</td>
                            <td class="bg-white text-right ">150 € / meter</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Volgende 5 meters (tot 12 meters)</td>
                            <td class="bg-white text-right">100 € per meter</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Elke meter boven de 12 (tot 18 meters)</td>
                            <td class="bg-white text-right">80 € per meter</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Ligplaats buiten ponton van langssteiger 10% opslag over totaal</td>
                        </tr>
                        </tbody>
                    </table>

                    <!--Monthly-->
                    <h1 class="text-xl font-semibold">Maandtarief</h1>
                    <table>
                        <tbody class="text-gray-400 text-sm lg:text-base">
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Maandtarief </td>
                            <td class="bg-white text-right">Jaartarief / 10</td>
                        </tr>
                        </tbody>
                    </table>

                    <!--Daily rates-->
                    <h1 class="text-xl font-semibold">Dagtarief </h1>
                    <table>
                        <tbody class="text-gray-400 text-sm lg:text-base">
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Dagtarief</td>
                            <td class="bg-white text-right">1.5 € per meter</td>
                        </tr>
                        </tbody>
                    </table>

                    <!--Special req.-->
                    <h1 class="text-xl font-semibold">Speciale vereisten</h1>
                    <table>
                        <tbody class="text-gray-400 text-sm lg:text-base">
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Lengte langer dan 18 meter</td>
                            <td class="bg-white text-right">Prijs op aanvraag</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Breedte Groter dan 5 meter</td>
                            <td class="bg-white text-right">prijs op aanvraag</td>
                        </tr>
                        </tbody>
                    </table>

                    <!--Additional req.-->
                    <h1 class="text-xl font-semibold">Aanvullende vereisten</h1>
                    <table>
                        <tbody class="text-gray-400 text-sm lg:text-base">
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Prijzen zijn inclusief BTW</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Aan dit overzicht kunnen geen rechten worden ontleend</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">Voor een ligplaatsaanvraag neemt u contact op met Hoop Maritiem BV</td>
                        </tr>
                        <tr class="border-b-2 border-t-0">
                            <td class="bg-white text-left">
                                Houd er rekening mee dat deze tarieven onderhevig zijn aan wijzigingen
                                Het is raadzaam om direct contact op te nemen met Hoop Maritiem BV voor de meest actuele prijzen en beschikbaarheid
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </section>
        <!--Contact info-->
        <form method="POST" action="{{route('email.send')}}" class="mx-10 rounded-md shadow-xl lg:w-2/4 flex flex-col gap-6 p-4 bg-white">
            <h1  class="text-xl">Contact the seller</h1>
            @csrf
            <div class="flex flex-col lg:flex-row gap-6 w-full">
                <div class="w-full lg:w-1/2">
                    <label for="email" value="email">Email</label>
                    <input  class="border-gray-300  bg-gray-100 text-black focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 " id="email" type="email" name="email" required="required" autofocus="autofocus" autocomplete="email">
                </div>

                <div class="w-full lg:w-1/2">
                    <label for="phone" >Phone</label>
                    <input  class="border-gray-300  bg-gray-100 text-black focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 " id="phone" type="text"  name="phone" required="required" autofocus="autofocus" autocomplete="phone">
                </div>
            </div>

            <div class="flex flex-row justify-between gap-6 ">
                <div>
                    <label for="initials" >Initial</label>
                    <input  class="border-gray-300  bg-gray-100 text-black focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 " id="initials" type="text" name="initials" maxlength="1"  autofocus="autofocus" autocomplete="name">
                </div>

                <div class="w-3/4">
                    <label for="surname" >Surname</label>
                    <input  class="border-gray-300  bg-gray-100 text-black focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" id="surname" type="text" name="surname" required="required" autofocus="autofocus" autocomplete="name">
                </div>
            </div>
            <button class="lg:w-1/4 w-full self-end bg-zinc-200 hover:bg-green-100 rounded-md text-white" type="submit">Submit</button>
        </form>

        <!--Contact info-->
        <section class=" w-full p-20">

            <div id="accordion-collapse" data-accordion="collapse" class="bg-white rounded-xl shadow-xl pt-7 flex flex-col items-center">

                <h2 id="accordion-collapse-heading-1">
                    <div class="align-center">
                        <strong class="text-black font-bold">Havenreglement</strong>
                    </div>
                    <div id="houseRuleHead" class="align-center text-center text-black font-bold bg-gradient-to-b from-black to-transparent text-transparent bg-clip-text">
                        <!-- Title -->
                        <h1 class="align-center text-black font-bold">Noordlandhaven binnen/Neeltje Jans.</h1>
                        <br>
                        <p>Dit Reglement geldt in de haven van:</p>
                        <p>“Hoop Maritiem BV”</p>
                        <p>Datum: 1-8-2023</p>
                        <button id="toggle-btn" class="mt-4 bg-black hover:bg-gray-400 text-white py-2 px-4 rounded-full">Read More</button>
                    </div>
                    <br>
                    <span class="hidden" id="more-text">
                    <div class="px-12">
                        <!-- Article 1 -->
                        <h3><strong class="text-black font-medium">Artikel 1 Definities</strong></h3>
                        <br>
                        <ol class="text-black pl-4">
                            <li>A. Verhuurder: Hoop Maritiem BV.</li>
                            <li>B. Huurder: Is een natuurlijk persoon die tegen betaling aan verhuurder, een deel van de
                                haven in gebruik heeft/neemt.
                            </li>
                            <li>C. Jaarhuur: De periode van 1 Maart t/m laatste dag van februari in het daarop volgende
                                jaar.
                            </li>
                            <li>D. Zomerseizoen: De periode van 1 April tot 1 oktober in hetzelfde jaar.</li>
                            <li>E. Winterseizoen: De periode van 1 oktober van een bepaald jaar tot 1 april van het
                                daaropvolgend jaar.
                            </li>
                            <li>F. Passant: Een derde die met de verhuurder een huurovereenkomst met betrekking tot een
                                ligplaats aangaat, waarbij de huurprijs per dag of per week in rekening wordt gebracht.
                            </li>
                            <li>G. Havenreglement: Regels van huishouding, gedrag en orde.</li>
                            <br>
                        </ol>
                        <!-- Article 2 -->
                        <h3><strong class="text-black font-medium">Artikel 2 Geldigheid</strong></h3>
                        <br>
                        <ol class="text-black pl-4">
                            <li>1. Dit regelement is van toepassing vanaf datum vermeld in titel.</li>
                            <li>2. Dit regelement kan te allen tijde worden aangevuld / gewijzigd door verhuurder.
                                Wijzigingen zullen met huurders worden gedeeld.
                            </li>
                        </ol>
                        <br>
                        <!-- Article 3 -->
                        <h3><strong class="text-black font-medium">Artikel 3 Toepasselijkheid</strong></h3>
                        <br>
                        <ol class="text-black pl-4">
                            <li>1. Wanneer de huurovereenkomst, niet minimaal 3 maanden voor het verlopen van de
                                huurtermijn
                                schriftelijk door de huurder dan wel verhuurder wordt opgezegd, dan wordt deze
                                huurovereenkomst stilzwijgend met eenzelfde termijn verlengd. De huurder ontvangt dan
                                uiterlijk een maand voor het verlopen van de lopende termijn een nieuwe factuur met een
                                huurovereenkomst voor de volgende termijn.
                            </li>
                            <li>2. De huursom kan jaarlijks worden aangepast overeenkomstig de stijging of daling van
                                het
                                gemiddeld landelijk consumenten prijs indexcijfer (CPI).
                            </li>
                            <li>3. Als verhuurder een hogere verhoging als vermeld onder sub. 2 wil toepassen, moet hij
                                dit
                                schriftelijk drie maanden voor het verstrijken van de huurtermijn aangeven aan huurder.
                                Tussentijdse verhogingen in het lopend termijn door verhuurder, zijn niet toegestaan.
                            </li>
                            <li>4. Aan de huurder is niet toegestaan deze ligplaats tegen betaling of in een andere vorm
                                van
                                gebruik over te doen aan een ander rechtspersoon of rechtsvorm.
                            </li>
                            <li>5. Het is de huurder verboden het in de haven afgemeerde vaartuig of de ligplaats tot
                                een
                                voorwerp van commerciële activiteit te maken.
                            </li>
                            <li>6. Niet toegestaan is het aanbrengen van daartoe strekkende borden, mededelingen,
                                aanduidingen enz. in de haven en/of op het vaartuig en het in de haven te koop aanbieden
                                van
                                het/een vaartuig.
                            </li>
                        </ol>
                        <br>
                        <!-- Article 4 -->
                        <h3><strong class="text-black font-medium">Artikel 4 Gebruik steigers</strong></h3>
                        <br>
                        <ol class="text-black pl-4">
                            <li>1. Verhuurder bepaald in goed overleg met huurder de in te nemen ligplaats door huurder.
                            </li>
                            <li>2. De verhuurder behoud het recht om de indeling van de ligplaatsen aan de afmeer
                                steiger te wijzigen naargelang de
                                afmetingen van de aangeboden vaartuigen.
                            </li>
                            <li>3. Voor uitvoeren van onderhoud werkzaamheden aan de afmeersteiger kan de verhuurder een
                                tijdelijke verandering van
                                ligplaats vragen. Huurder dient hieraan gehoor te geven.
                            </li>
                            <li>4. Huurder geeft nadrukkelijk toestemming aan verhuurder dat deze indien nodig
                                (calamiteiten / onderhoud) het schip van
                                huurder mag verplaatsen naar een andere ligplaats binnen dezelfde ligplaatsvoorziening.
                            </li>
                            <li>5. Gasinstallaties aan boord van vaartuigen dienen veilig en volgens de geldende
                                voorschriften uitgevoerd te zijn en gebruikt
                                te worden.
                                voorwerp van commerciële activiteit te maken.
                            </li>
                            <li>6. Het is niet toegestaan zich op de steigers, vlonders en vingerpieren op een andere
                                wijze voort te bewegen dan lopend,
                                mindervalide personen hiervan uitgezonderd. Het is met name verboden om op de steigers,
                                vlonders en vingerpieren te
                                fietsen, rolschaatsen en skeeleren.
                            </li>
                            <li>7. Het is niet toegestaan steigers, vlonders en/of vingerpieren geheel of gedeeltelijk
                                te blokkeren.
                            </li>
                        </ol>
                        <br>
                        <!-- Article 5 -->
                        <h3><strong class="text-black font-medium">Artikel 5 Aansprakelijkheid</strong></h3>
                        <br>
                        <ol class="text-black pl-4">
                            <li>1. De verhuurder aanvaardt geen enkele aansprakelijkheid voor diefstel, vernieling,
                                schade of ongevallen voortkomende uit
                                het gebruik van de loopbruggen, ponton en de afmeersteigers. Het afmeren aan en betreden
                                van de afmeersteiger door de
                                huurder, mede opvarenden, alsmede alle andere personen, om wat voor reden dan ook,
                                geschied geheel voor eigen risico.
                            </li>
                            <li>2. De huurder dient er voor te zorgen dat zijn vaartuig deugdelijk afgemeerd is en geen
                                schade kan veroorzaken aan andere
                                vaartuigen, de afmeersteiger of enig andere zaak. Goed zeemanschap met betrekking tot
                                het aan brengen van fenders /lijnen / etc. is geboden, zodat het geheel bestand is tegen
                                eventueel optredende extreme omstandigheden zoals
                                stormweer, rukwinden, golfslag en dergelijke.
                            </li>
                            <li>3.De huurder is volledig en te allen tijde aansprakelijk voor schade die door of met
                                zijn vaartuig en/of de opvarenden aan de
                                afmeersteiger en/of de daaraan afgemeerde vaartuigen veroorzaakt en/of toegebracht zijn.
                            </li>
                            <li>4. Alle activiteiten en eventuele voortvloeiende schade ontstaan met het in en
                                ontschepen van goederen van/naar het schip
                                zijn voor risico van de huurder.
                            </li>
                            <li>5. Het is verboden om reparaties te doen plaats vinden aan, op of in het schip die
                                schade kunnen toebrengen aan andere
                                schepen, steigers, pontons of loopbruggen.
                            </li>
                            <li>6. Verhuurder is verplicht om de steigers in goede staat van onderhoud te houden.
                            </li>
                            <li>7. Indien huurder constateert dat er gevaar voor schade dreigt of de veiligheid in
                                gevaar zou kunnen worden gebracht, is de
                                huurder verplicht dit te melden aan de verhuurder.
                            </li>
                            <li>8. De verhuurder is verplicht om behoorlijk toezicht te houden om de goede gang van
                                zaken in de haven en op de vaartuigen
                                te handhaven.
                            </li>
                        </ol>
                        <br>
                        <!-- Article 6 -->
                        <h3><strong class="text-black font-medium">Artikel 6 Verzekering <br>
                                De huurder dient zijn vaartuig tegen wettelijke aansprakelijkheid te verzekeren
                                gedurende de tijd dat hij gebruik maakt
                                van een ligplaats in de haven van verhuurder. Een kopie van de verzekering moet
                                gedeponeerd worden bij de
                                verhuurder. Voorts moet de huurder elk jaar aantonen dat de gedeponeerde kopie polis
                                rechtsgeldig blijft.
                            </strong></h3>
                        <br>
                        <!-- Article 7 -->
                        <h3><strong class="text-black font-medium">Artikel 7 Gedrag en orde</strong></h3>
                        <br>
                        <ol class="text-black pl-4">
                            <li>1. Afmeer lijnen mogen alleen bevestigd worden aan de daarvoor bedoelde bolders en
                                meerogen.
                            </li>
                            <li>2. De huurder is verplicht om er zorg voor te dragen dat zijn vaartuig in goede staat
                                van onderhoud is.
                            </li>
                            <li>3. Het is niet toegestaan om uitrustingstukken, viskisten etc. achter te laten op de
                                steigers.
                            </li>
                            <li>4. Het vaartuig moet schoon worden achtergelaten en ontdaan zijn van visafval resten en
                                mogen geen stankoverlast
                                veroorzaken.
                            </li>
                            <li>5. Het is niet toegestaan om lijnen, stootwillen, aaskorven etc. anders te bevestigen
                                als aan de daarvoor bestemde bolders en
                                ogen. Voorts is het verboden om aan de beplanking van de steigers voorwerpen etc. Vast
                                te binden.
                            </li>
                            <li>6. Het is verboden om handelingen en het schoonmaken van vis te verrichten, die de
                                steigers kunnen bevuilen.
                            </li>
                            <li>7. Het is verboden om handelingen tussen 22.00 uur en 05.00 uur te verrichten die de
                                rust in de haven verstoren.
                            </li>
                            <li>8. In en uitvaren tussen 22.00 uur en 05.00 uur met inachtneming van Art.6 sub 7. Is
                                toegestaan.
                            </li>
                            <li>9. Auto’s dienen op de pieren netjes te worden geparkeerd, zodat een doorgang voor de
                                andere gebruikers blijft
                                gehandhaafd.
                            </li>
                            <li>10. De huurder dient voor gebruik van de pier(en) rondom de steiger ten aller tijde
                                aanwijzingen van de daarvoor aangewezen
                                wetshandhaver op te volgen.
                            </li>
                            <li>11. Het is verboden de schroef van het vaartuig in beweging te brengen als het vaartuig
                                vastligt.
                            </li>
                            <li>12. In de haven mag niet met een hogere snelheid dan 5 km per uur worden gevaren.
                            </li>
                        </ol>
                        <br>
                        <!-- Article 8 -->
                        <h3><strong class="text-black font-medium">Artikel 8 Milieu</strong></h3>
                        <br>
                        <ol class="text-black pl-4">
                            <li>1. In het kader van de Wet Verontreinigingsheffing Oppervlaktewateren en de
                                Watervergunning van de waterwet is het
                                verboden zodanige werkzaamheden aan het vaartuig te verrichten die direct of indirect
                                het water kunnen vervuilen.
                            </li>
                            <li>2. Het is ten strengste verboden om bilge en/of oliehoudend water te lozen op het
                                oppervlakte water.
                            </li>
                            <li><strong class="text-black"><u>3. Het is ten strengste verboden afval overboord te zetten
                                        dan wel op het
                                        steiger of op de wal achter te laten. Houd uw
                                        schip en de omgeving schoon.</u></strong>
                            </li>
                        </ol>
                        <br>
                        <!-- Article 9 -->
                        <h3><strong class="text-black font-medium">Artikel 9 Slotbepalingen</strong></h3>
                        <br>
                        <ol class="text-black pl-4">
                            <li>1. In alle gevallen waarin het havenreglement en de huurovereenkomst niet in voorziet
                                gelden alle normale wettelijke regels
                                en bepalingen.
                            </li>
                            <li><u>2. Het is de verhuurder toegestaan de overeenkomst ieder moment aangetekend
                                    schriftelijk te beëindigen, wanneer een van
                                    de bovenstaande voorschriften herhaaldelijk niet worden nageleefd.
                                </u></li>
                            <li>3. Op alle geschillen met betrekking tot de huurovereenkomst en het Havenreglement is
                                Nederlands recht van toepassing
                                .uitsluitend een Nederlands rechtscollege dan wel een geschillen commissie is bevoegd
                                van deze geschillen kennis te
                                nemen.
                            </li>
                            <li>4. Op het water van de Stadshaven Scheldekwartier zijn in het algemeen de wettelijke
                                bepalingen van het Binnenvaart
                                Politiereglement (BPR) van kracht.
                            </li>
                        </ol>
                    </div>
                    </span>
                </h2>

                <button id="hide-btn" class="hidden mt-4 text-blue-500 focus:outline-none">Hide</button>
            </div>

        </section>
    </main>
@endsection
