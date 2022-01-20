<!doctype html>
<html lang="de">

<head>
  <meta charset="utf-8" />
  <title>Rehwild</title>
  <meta name="description" content="VFH ICS WEBSTART" />
  <meta name="author" content="Friedrich Föll" />
  <link rel="stylesheet" href="./css/StyleNew.css" />
  <link rel="icon" href="./images/trees.png" />
</head>

<body>
  <header>
    <h1>Rehwild (Capreolus capreolus)</h1>
    <button type="button" onclick="myFunction()">Zurück</button>
    <script>
      function myFunction() {
        history.back();
      }
    </script>
  </header>
  <br>
  <img src="./images/Rehwild.jpg" alt="Ricke" width="500" height="auto" />
  <section>
    <h2>Kennzeichen</h2>
    <ul>
      <li>Gewicht: ausgewachsene Tiere 17-22 kg, sehr gut entwickelte Individuen bis zu 25kg.
      <li>Sommerfell: gelblich-rot, Winterfell: graubraun, Haarwechsel April/Mai und September/Oktober.
      <li>Rehe haben am Hinterteil einen weißen Fleck, Spiegel genannt.
        Frisch geborene Kitze tragen ein gepunktetes Tarnkleid und verschmelzen ganz mit der Umgebung.
      <li>Der Rehbock wirft im Herbst sein Geweih (Gehörn genannt) aus Knochensubstanz ab, das bald darauf wieder neu zu wachsen beginnt. Im Frühjahr reibt (fegt) der Bock an kleinen Bäumchen die Nährhaut (Bast) von seinem fertigen Gehörn, dies dient
        auch der Reviermarkierung. Im Winter geben Rehe ihre Territorien auf und schließen sich zu größeren Gruppen, den sog. Sprüngen, zusammen, die sich dann vor der Zeit des Setzens im Frühjahr wieder auflösen.
    </ul>
  </section>
  <section>
    <h3>Verbreitung und Lebensraum</h3>
    <ul>
      <li>Das Reh besiedelt weite Teile Europas und Asiens.
      <li>In Europa kommt es von der Küste bis ins Hochgebirge, von Flußauen bis hin zu Bergwäldern, in Agrarlandschaften und Parklandschaften vor.
      <li>Lebensraum: Randzonen reich strukturierter Busch- und Mischwälder.
      <li>Auch offene Feldflur (Feldrehe), in der Nähe von menschlichen Siedlungen, auch in stadtnahen Parks.
      <li>Als Kulturfolger ist das Reh sehr anpassungsfähig.
    </ul>
  </section>
  <section>
    <h4>Ernährung</h4>
    <ul>
      <li>Als Wiederkäuer ist das Reh ein reiner Pflanzenfresser.
      <li>Nahrung besteht aus: Kräutern, Gräsern, Blättern, Triebe, Knospen sowie Wald- und Feldfrüchten.
      <li>Es bevorzugt nährstoff- und energiereiche, nicht stark verholzte Pflanzenteile (Konzentratselektierer).
    </ul>
  </section>
  <section>
    <h5>Fortpflanzung</h5>
    <ul>
      <li>Paarungszeit: Juli/August (Blattzeit)
      <li>Tragzeit: 9 ½ Monate. Nach der Befruchtung tritt eine 4 ½-monatige Keimruhe (Eiruhe) ein, das heißt, die befruchteten Eizellen entwickeln sich verzögert.
      <li>Im Mai/Juni werden meist 2 (selten 1 oder 3) Kitze mit etwa 1 kg Gewicht geboren.
      <li>In den ersten Lebenstagen besucht die Mutter die Kitze nur zum Säugen, um nicht die natürlichen Feinde auf die Spur der Jungtiere zu locken. Die Kitze werden aus sicherer Entfernung von der Ricke beobachtet.
      <li>Ricken legen die Kitze ab, d.h. die Kitze drücken sich reglos ins Gras, um vor Feinden sicher zu sein. In den ersten Lebenstagen haben sie noch keinen Eigengeruch. Abgelegte Kitze daher niemals berühren, da die Ricke sie dann nicht mehr
        annimmt. Kitze sind nicht verwaist, die Ricke kommt regelmäßig zum Säubern und Säugen.
      <li>Rehe können bis zu 15 Jahre alt werden. Das Gebiß ist dann so stark abgenutzt, daß die Tiere die Nahrung nicht mehr aufnehmen und wiederkäuen können.

    </ul>
  </section>
  <section>

    <button onclick="KommentarKnopf('Kommentarfeld')">Kommentar verfassen</button>
    <br><br>

    <?php
	   if (isset($_POST['Kommentarfeld'])) {
       file_put_contents('Kommentare.txt',"Rehwild-Kommentar:".$_POST['Kommentarfeld']."\n",FILE_APPEND);
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
    <li>Kurt, Fred (1991): Das Reh in der Kulturlandschaft. Sozialverhalten und Ökologie eines Anpassers. Hamburg, Berlin: Parey.
    <li>Melis, C.; Basille, M.; Herfindal, I.; Linnell, J.D.C.; Odden, J.; Gaillard, J. M. et al. (2010): Roe deer population growth and lynx predation along a gradient of environmental productivity and climate in Norway. In: Ecoscience 17 (2), S.
      166–174.
    <li>Niethammer, J.; Krapp, F. (1986): Handbuch der Säugetiere Europas. Band 2/II Paarhufer - Artiodactyla. Aula Verlag Wiesbaden.
    <li>Nitze, M. (2012): Schalenwildforschung im Wolfsgebiet der Oberlausitz. Projektzeitraum 2007-2010. Forschungsbericht. Hg. v. Institut für Forstbotanik und Forstzoologie. AG Wildtierforschung; TU Dresden. Dresden.
  </ul>


  <script src="./js/main.js"></script>
</body>

</html>
