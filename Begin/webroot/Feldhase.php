<!doctype html>
<html lang="de">

<head>
  <meta charset="utf-8" />
  <title>Feldhase</title>
  <meta name="description" content="VFH ICS WEBSTART" />
  <meta name="author" content="Friedrich Föll" />
  <link rel="stylesheet" href="./css/StyleNew.css" />
  <link rel="icon" href="./images/trees.png" />
</head>

<body>
  <header>
    <h1>Feldhase (Lepus europaeus)</h1>
    <button type="button" onclick="myFunction()">Zurück</button>
    <script>
      function myFunction() {
        history.back();
      }
    </script>
  </header>
  <br>
  <img src="./images/Hase.jpg" alt="Feldhase" width="500" height="auto" />
  <section>
    <section>
      <h2>Kennzeichen</h2>
      <ul>
        <li>Langer, stromlinienförmiger Körper mit langen Hinterläufen
        <li>Lange Ohren meist mit schwarz-umrandeten Spitzen, dienen als Schalltrichter
        <li>Seitlich am Kopf sitzende große bernsteinfarbene Augen, dienen der Rundumsicht
        <li>Fell an der Oberseite erdbraun und an der Bauchseite weiß, dient der Tarnung
        <li>Fellfärbung im Winter heller
        <li>Äußerlich unterscheiden sich Häsin und Hase kaum
        <li>Gewicht: 3 bis 5 kg
      </ul>
    </section>
    <section>
      <h3>Verbreitung und Lebensraum</h3>
      <ul>
        <li>Der Hase stammt ursprünglich aus der Steppenlandschaft und lebt heute in unserer Kulturlandschaft. Dort bevorzugt er strukturreiche Agrarlandschaften mit Feldgehölzen, Ackerrandstreifen und Brachflächen, die ihm Nahrung und
          Versteckmöglichkeiten vor Feinden bietet.
        <li>Das europäische Areal reicht vom Polarkreis bis zum Mittelmeer und von Nordspanien bis zum Ural. Auch in Asien und Übersee gibt es den Feldhasen. In alpinen Bereichen lebt er bis zur Waldgrenze.
        <li>Er liebt trockenes, warmes Wetter und ist in Deutschland fast flächendeckend verbreitet, selbst in Waldgebieten, suburbanen und urbanen Lebensräumen kommt er vor.
      </ul>
    </section>
    <section>
      <h4>Ernährung</h4>
      <ul>
        <li>Rein pflanzlich und sehr vielfältig: bevorzugt Wildkräuter und –gräser (zusammen die sogenannte „Hasenapotheke“), aber auch Getreide und Feldfrüchte, Knospen, Triebe und Rinde.
        <li>Der Bedarf an lebenswichtigen Vitaminen (v.a. B1) wird durch Caecotrophie gedeckt, dies bezeichnet die Aufnahme der ausgeschiedenen Blinddarmlosung, dieser vitaminreiche Brei bildet sich im Blinddarm.
      </ul>
    </section>
    <section>
      <h5>Lebensweise und Fortpflanzung</h5>
      <ul>
        <li>Geschlechtsreife mit 6 bis 8 Monaten
        <li>Paarung: von Dezember/Januar bis Juli/August
        <li>Die Häsin setzt 3- bis 4mal im Jahr je 1 bis 3 Junge (maximal bis zu 6 Junge), die als Nestflüchter sehend und behaart zur Welt kommen
        <li>Die Tragzeit beträgt 42-43 Tage
        <li>Die Häsin säugt die Junghasen meist nachts einmal mit einer sehr gehaltvollen, fettreichen Milch
        <li>Mit etwa 30 Lebenstagen endet die Säugezeit
        <li>Die Häsin hält sich nicht direkt bei den Jungen auf, häufig aber in der Nähe
        <li>Die Häsin kann ab 38. Trächtigkeitstag erneut befruchtet werden, trägt dann in einem Gebärmutterhorn die geburtsreifen Föten, im anderen Horn den neuen Keimlingssatz (Superfötation)
        <li>Mehr als 60 Prozent der Junghasen verenden im ersten Lebensjahr, die Ursachen sind u.a. nass-kalte Witterung, Beutegreifer, landwirtschaftliche Bearbeitung
        <li>Hasen werden in freier Wildbahn im Durchschnitt etwa 4 Jahre alt, in Gefangenschaft bis zu 12 Jahre
      </ul>
    </section>
    <section>

      <button onclick="KommentarKnopf('Kommentarfeld')">Kommentar verfassen</button>
      <br><br>

      <?php
  	   if (isset($_POST['Kommentarfeld'])) {
         file_put_contents('Kommentare.txt',"Feldhase-Kommentar:".$_POST['Kommentarfeld']."\n",FILE_APPEND);
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
      <li>Hackländer, K. (2014): Die Bedeutung von Brachen für die Besatzentwicklung: Nahrungsökologie und Lebensraumnutzung von Feldhasen. In: Oberösterreichischer Jäger (März), S. 8–14.
      <li>Niethammer, J.; Krapp, F. (2003): Handbuch der Säugetiere Europas. Band 3/II: Hasentiere - Lagomorpha. Aula Verlag Wiesbaden.
      <li>Schai-Braun, S. C.; Hackländer, K. (2013): Welchen Einfluss hat die Getreidernte auf die Raumnutzung der Feldhasen? In: Schweizer Jäger, S. 34–37.
      <li>Hackländer, K.; Frisch, C.; Klansek, E.; Steineck, T.; Ruf, T. (2001): Die Fruchtbarkeit weiblicher Feldhasen (Lepus europaeus) aus Revieren mit unterschiedlicher Populationsdichte. In: Zeitschrift für Jagdwissenschaften (47), S. 100–110.
    </ul>

    <script src="./js/main.js"></script>
</body>

</html>
