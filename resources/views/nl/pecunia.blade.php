@extends('parent-blades.inhoudnl')
@section('content')
    <div class="desktop1">
        <p style="margin-right: 25px">Dit is de home pagina van mijn webapp pecunia. Hier heb je een klein overzicht van je laatste paar transacties, hoeveel geld je uitgeeft aan elke catogorie, hoeveel geld je elke dag hebt. en het totaal bedrag. De grafieken zijn gemaatk doormiddel van Chartisan een Javascript plugin om grafieken mee te maken. De data word opgehaalt uit de MySQL database doormiddel van Laravel haar Eloquent functie. verder word er PHP en HTML gebruikt voor de rest van de pagina en is het allemaal niet heel bijzonder. De grafieken was het moeilijke.</p>
        <img class="img" src="../images/pucunia.png" alt="Foto Van mijzelf.">
    </div>
    <div class="desktop2">
        <img class="img" src="../images/mindcraft.jpg" alt="Foto Van mijzelf.">
        <p style="margin-left: 25px">Dit is een hele simpele pagina die eigenlijk alleen bestaat uit CSS en HTML. Deze pagina is er puur om je door te linken naar de de game met de moeilijkheidsgraad die je kiest. Niks bijzonders dus maar toch wel nodig.</p>
    </div>
    <div class="desktop1">
        <p style="margin-right: 25px">Dit is de pagina van de game zelf. Onderaan de pagina zie je een balk met allemaal verschillende soorten blokken. Klik je op 1 van deze blokken wordt die in het speelveld geplaatst. Als de rij vol is word die gecontrolleerd en komt er een melding hoeveel je er goed hebt en hoeveel je er exact goed hebt. Heb je vervolgens de hele rij goed dan krijg je een melding dat je hebt gewonnen. Raad je de blokken code niet binnen de aangegeven rijen dan heb je dus verloren en krijg je daar een melding van. Deze pagina was ook het moeilijkst te maken omdat dit de eerste echte keer is dat we gebruik maakte van PHP en we wisten nog niet hoe we het moesten doen. Uiteindelijk is het dus gelukt en moesten we het doen doormiddel van arrays waaar de data in word opgeslagen en word gecontrolleerd. Ook hebben wij gebruik gemaakt van if en else statements om zo te kunnen controleren of je aan het einde van het spel bent of hoeveel je goed hebt. al en al veel geleerd dus.</p>
        <img class="img" src="../images/mindcraft-game.jpg" alt="Foto Van mijzelf.">
    </div>
@endsection
