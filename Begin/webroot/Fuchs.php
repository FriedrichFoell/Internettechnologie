<!doctype html>
<html lang="de">

<head>
  <meta charset="utf-8" />
  <title>Fuchs</title>
  <meta name="description" content="VFH ICS WEBSTART" />
  <meta name="author" content="Friedrich Föll" />
  <link rel="stylesheet" href="./css/StyleNew.css" />
  <link rel="icon" href="./images/trees.png" />
</head>

<body>
  <header>
    <h1>Fuchs (Vulpes vulpes)</h1>
    <button type="button" onclick="myFunction()">Zurück</button>
    <script>
      function myFunction() {
        history.back();
      }
    </script>
  </header>
  <br>
  <img src="./images/Fuchs.jpg" alt="Rotfuchs" width="450" height="auto" />
  <section>
    <section>
      <h2>Kennzeichen</h2>
      <ul>
        <li>Verschiedene Farbvarianten von rotbraun bis schwarz.
        <li>buschiger, im Winter besonders dichter Schwanz (Lunte) mit weißer Spitze
        <li>Sommerbehaarung: kurz und stumpf, Winterfell: dick und glänzend.
        <li>Körperlänge: zwischen 60 und 90 cm
        <li>Gewicht: Rüde (Männchen) 5 bis 10 kg, Fähe (Weibchen) 4 bis 8 kg.
      </ul>
    </section>
    <section>
      <h3>Verbreitung und Lebensraum</h3>
      <ul>
        <li>Ordnung: Raubsäuger (Carnivora) Familie: Hundeartige (Canidae) Gattung: Vulpes
        <li>Der Rotfuchs lebt im gesamten europäischen Raum sowie in Nordafrika und Nordamerika, eingeführt in vielen anderen Gebieten
        <li>Ist in allen Lebensräumen von der Meeresküste bis in die Wüstengebiete zu Hause.
        <li>Der Fuchs lebt im Wald, in landwirtschaftlich genutzten Flächen und in Ödländereien.
        <li>Er besiedelt in zunehmendem Maße auch städtische Bereiche
        <li>Der Fuchs gilt als typischer Kulturfolger, da er sich allen Lebensverhältnisse anzupassen vermag.
      </ul>
    </section>
    <section>
      <h4>Ernährung</h4>
      <ul>
        <li>Beutefang bei Dämmerung oder bei Nacht.
        <li>Hauptbeute: Mäuse.
        <li>Daneben auch: Kaninchen, Jungwild wie Hasen, Rehkitze, Vogelgelege und Jungvögel, schleicht sich an oder springt an, hetzt auch.
        <li>Töten der Beute durch Genick- oder Kehlbiß, “totschütteln” wie beim Hund.
        <li>Der Fuchs frißt auch Insekten, Heuschrecken, Käfer, Hausgeflügel, Obst und Wildfrüchte. Bei schlechten Nahrungsbedingungen auch Aas oder Hausmüll.
        <li>Er klettert gut und durchschwimmt Gewässer.
      </ul>
    </section>
    <section>
      <h5>Lebensweise und Fortpflanzung</h5>
      <ul>
        <li>Geschlechtsreife: mit 9 bis 10 Monaten.
        <li>Paarungszeit: Januar und Februar.
        <li>Aufzucht der Jungen: Nach einer Tragzeit von 51 bis 54 Tagen werden 1-10 Junge im März/April blind geboren und rund 24 Tage gesäugt. Erst dann erhalten sie feste Nahrung, die die Füchsin in den Bau schleppt.
        <li>Ab der 5. Woche verlassen die Jungen die Kinderstube und spielen vor dem Bau oder machen mit der Mutter Erkundungsausflüge. Im Juli/August löst sich der Familienverband auf. Die Jungfüchse werden selbständig und suchen sich ein eigenes
          Revier.
        <li>In freier Wildbahn werden Füchse 10 bis 12 Jahre alt. Der Fuchs lebt in einem Bau, den er sich häufiger mit dem Baumeister “Dachs” teilt. Auch alte Kaninchenbauten werden erweitert und bezogen.
      </ul>
    </section>
    <section>

      <button onclick="KommentarKnopf('Kommentarfeld')">Kommentar verfassen</button>
      <br><br>

      <?php
  	   if (isset($_POST['Kommentarfeld'])) {
         file_put_contents('Kommentare.txt',"Fuchs-Kommentar:".$_POST['Kommentarfeld']."\n",FILE_APPEND);
  	     echo "Kommentar gespeichert";}
      ?>
      <form name "test"  method="POST">
      <textarea id="Kommentarfeld" name="Kommentarfeld" rows="4" cols="50" font-size=large style="display:none" maxlength="500">
      </textarea>
      <input name=submit type="submit" name="speichern" value="speichern" />
      </form>

    </section>
    <h6>Quellen</h6>
    <ul>
      <li>Labhardt, F. (1996): Der Rotfuchs. Naturgeschichte, Ökologie und Verhalten dieses erstaunlichen Jagdwildes. Parey Verlag, Hamburg
      <li>MacDonald, D. (1993): Unter Füchsen – eine Verhaltensstudie. Knesebeck Verlag, München
      <li>MacDonald, D. (Hrsg.) 2004: Die große Enzyklopädie der Säugetiere. Könemann Verlag, Königswinter
    </ul>

    <script src="./js/main.js"></script>
</body>

</html>
