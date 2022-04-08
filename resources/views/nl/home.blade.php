@extends('parent-blades.inhoudnl')
@section('content')
<!---Dit is het eerste block met tekst en een foto. Hier komt een voorbeeld foto en een stukje tekst van een project.--->
    <div class="voorbeeld1">
        <img class="img" src="../images/Mastermind-Beginscherm.jpg" alt="Foto Van mijzelf.">
        <p style="margin-bottom: 75px">Op school kregen Emiel van der Linde en ik 10 weken de tijd om het ouderwetse spel Mastermind na te maken online. Wij hebben dit gedaan met een Minecraft thema. Dit is ook waarom het MasterMind heet. Dit project is gemaakt in het framework Laravel wat gebruik maakt van PHP, HTML en CSS. Tijdens het maken hiervan hebben we vooral veel geleerd over IF statements, For en Foreach loops, Arrays en hoe je data van een client naar php krijgt en weer terug.</p>
        <img class="img" src="../images/pucunia.png" alt="Foto Van mijzelf.">
        <p style="margin-bottom: 75px">Dit is Pecunia, De alles in 1 plek voor je financieën. Christiaan en ik moesten dit maken op school. In deze web app kan je je financieën beheren door transacties in te voeren en spaardoelen te stellen. Pecunia houd dat automatisch bij hoeveel geld jij gemiddelt uitgeeft of binnen krijg of hoeveel jij nog moet sparen tot je je doel hebt berijkt. Deze web app is wederom gemaakt in Laravel en maakt gebruik van PHP, Javascript, MySQL, HTML en CSS. We hebben tijdens het maken van deze web app vooral geleerd hoe je data ophaalt en in een database stopt en hoe je dat er vervolgens uit kan halen om weer te gebruiken in dingen zoals grafieken of het optellen om een totaal bedrag te laten zien.</p>
    </div>
<!---Dit is het tweede block met een foto en dan een stukje tekst. Hier komt een voorbeeld foto en een korte text van een project.--->
<div class="desktop1">
    <p style="margin-right: 25px">Op school kregen Emiel van der Linde en ik 10 weken de tijd om het ouderwetse spel Mastermind na te maken online. Wij hebben dit gedaan met een Minecraft thema. Dit is ook waarom het MasterMind heet. Dit project is gemaakt in het framework Laravel wat gebruik maakt van PHP, HTML en CSS. Tijdens het maken hiervan hebben we vooral veel geleerd over IF statements, For en Foreach loops, Arrays en hoe je data van een client naar php krijgt en weer terug.</p>
    <img class="img" src="../images/Mastermind-Beginscherm.jpg" alt="Foto Van mijzelf.">
</div>
<div class="desktop2">
    <img class="img" src="../images/pucunia.png" alt="Foto Van mijzelf.">
    <p style="margin-left: 25px">Dit is Pecunia, De alles in 1 plek voor je financieën. Christiaan en ik moesten dit maken op school. In deze web app kan je je financieën beheren door transacties in te voeren en spaardoelen te stellen. Pecunia houd dat automatisch bij hoeveel geld jij gemiddelt uitgeeft of binnen krijg of hoeveel jij nog moet sparen tot je je doel hebt berijkt. Deze web app is wederom gemaakt in Laravel en maakt gebruik van PHP, Javascript, MySQL, HTML en CSS. We hebben tijdens het maken van deze web app vooral geleerd hoe je data ophaalt en in een database stopt en hoe je dat er vervolgens uit kan halen om weer te gebruiken in dingen zoals grafieken of het optellen om een totaal bedrag te laten zien. </p>
</div>
@endsection


