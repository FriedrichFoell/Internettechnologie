<!doctype html>
<html lang="de">

<head>
  <meta charset="utf-8" />
  <title>Dachs</title>
  <meta name="description" content="VFH ICS WEBSTART" />
  <meta name="author" content="Friedrich Föll" />
  <link rel="stylesheet" href="./css/StyleNew.css" />
  <link rel="icon" href="./images/trees.png" />
</head>

<body>
  <header>
    <h1>Dachs (Meles meles)</h1>
    <button type="button" onclick="myFunction()">Zurück</button>
    <script>
      function myFunction() {
        history.back();
      }
    </script>
  </header>
  <br>
  <img src="./images/Dachs.jpg" alt="Dachs" width="500" height="auto" />
  <section>
    <section>
      <h2>Kennzeichen</h2>
      <ul>
        <li>Markante schwarz-weiße längsgestreifte Färbung am Kopf
        <li>Kompakter, gedrungener Körper mit kurzen, schwarzen Beinen
        <li>langgezogener Kopf und Schnauze
        <li>Kräftige Pfoten mit langen Krallen zum Graben
        <li>Das Fell ist am Rücken schmutzbraun bis silbergrau und am Bauch hell.
        <li>Das Gewicht beträgt im Durchschnitt 7 bis 15 kg
        <li>Eine äußerliche, optische Geschlechtsbestimmung zwischen Männchen und Weibchen ist schwierig, das Weibchen ist aber meist schlanker mit einem schmaleren, oben abgeflachten Schädel
        <li>Die Lebenserwartung liegt bei maximal 15 Jahren, die mittlere Lebenserwartung liegt aber bei nur 4 Jahren
      </ul>
    </section>
    <section>
      <h3>Verbreitung und Lebensraum</h3>
      <ul>
        <li>Der Dachs zählt zu den marderartigen Raubtieren, dabei wird er in die Ordnung der Raubtiere (Carnivora) und die Familie der Marder (Mustelidae) eingeordnet.
        <li>Der Dachs kommt in weiten Teilen Eurasiens vor, dabei erstreckt sich sein Gebiet von den Britischen Inseln, Südwesteuropa bis hin zum Kaukasusvorland in Westasien, er kommt nicht in nordskandinavischen Regionen vor.
        <li>Der Dachs bevorzugt die Laub- und Mischwälder des Flachlandes und der Mittelgebirge mit einer starken Strauchschicht, dabei besiedelt er gerne hügelige, reich strukturierte Landschaften mit Wäldern, Gehölzen und Hecken.
        <li>Er benötigt lockere Böden oder zerklüftete Gebiete, um seine Baue anzulegen
        <li>Auch den suburbanen und urbanen Raum besiedelt der Dachs immer häufiger
        <li>Die Grenze der Höhenverbreitung liegt meist zwischen 1200-1700 m, oberhalb dieser Grenze kann sich der Dachs aufgrund der Schneelage nicht mehr halten
        <li>der Dachs gilt als standorttreues Tier, zur Nahrungssuche werden auch offene, landwirtschaftlich genutzte Gebiete aufgesucht, diese können auch mehrere hunderte Meter vom Bau entfernt sein
        <li>Der Dachs legt eine Dachsburg an, diese besteht aus einem weit verzweigten Bausystem bis zu 30 m Durchmesser meist an Waldrändern mit umliegenden Feldern und Wiesen. Als Untermieter wird oft der Fuchs aufgenommen, aber Dachse können auch
          Baue von Füchsen zu Dachsburgen umfunktionieren.
      </ul>
    </section>
    <section>
      <h4>Ernährung</h4>
      <ul>
        <li>Allesfresser mit Grundnahrung Regenwürmer, Insekten, kleine Wirbeltiere, gelegentlich auch Bodengelege oder Junghasen, Aas, Wurzeln und Früchte sowie Fallobst, Mais oder Hafer, Beeren, Pilze und Eicheln
        <li>Kleintiere wie Insekten, Mäuse, Würmer und Schnecken werden mit den langen Krallen und der trichterförmigen Nase aus dem Boden gegraben. Der Dachs jagt wenig aktiv, sondern sammelt alles auf, was auf dem Waldboden liegt und genießbar ist,
          er legt dabei aber keine Nahrungsvorräte an
        <li>Bis zum Herbst hat er sich eine Winterreserve angefressen, da er eine Winterruhe hält. Während dieser Zeit verlässt er hin und wieder den Bau, um sein Dachsklosett, eine kleine Grube abseits des Baus, zu benutzen.
      </ul>
    </section>
    <section>
      <h5>Lebensweise und Fortpflanzung</h5>
      <ul>
        <li>Dachse sind gesellige Tiere, sie leben in sogenannten Clans zusammen
        <li>Oft leben sie in einer lebenslangen Dauerehe
        <li>Die Geschlechtsreife wird bei den Weibchen im 2., bei den Männchen im 3. Lebensjahr erreicht
        <li>Grundsätzlich ist eine Paarung von Januar bis Oktober möglich, die Hauptpaarungszeiten liegen im Februar bis März und Juli bis August
        <li>Der Eisprung wird durch die Paarung ausgelöst
        <li>Die Tragzeit entspricht 45 Tage, beim Dachs kann es aufgrund von Eiruhe zu einer verlängerten Tragezeit von 5 bis 12 Monaten kommen
        <li>Ende Februar bis Anfang April werden 2 bis 5 Junge (Welpen) in einem ausgepolsterten Nest im Bau geboren
        <li>Junge besitzen ein wolliges, rein weißes Fell und öffnen nach 3-4 Wochen die Augen.
        <li>Die Säugezeit beträgt etwa 2-4 Monate
        <li>Mit 6 bis 8 Wochen verlassen die Jungtiere erstmalig den Bau. Die selbständigen Dachse überwintern mit dem Familienverband im Mutterbau, erst im darauffolgenden Jahr löst sich der Verband auf.
      </ul>
    </section>
    <section>

      <button onclick="KommentarKnopf('Kommentarfeld')">Kommentar verfassen</button>
      <br><br>

      <?php
  	   if (isset($_POST['Kommentarfeld'])) {
         file_put_contents('Kommentare.txt',"Dachs-Kommentar:".$_POST['Kommentarfeld']."\n",FILE_APPEND);
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
      <li>Walliser, G. (2003): Auswirkungen anthropogener Landnutzung auf die Siedlungsstruktur, Raum -und Habitatnutzung des Europäischen Dachses (Meles meles L., 1758) auf der Insel Rügen. Dissertation Universität Greifswald.
      <li>Niethammer, J.; Krapp, F. (1993): Handbuch der Säugetiere Europas. Band 5: Raubsäuger – Carnivora, Teil II: Mustelidae 2, Viverridae, Herpestidae, Felidae Aula Verlag Wiesbaden.
    </ul>

    <script src="./js/main.js"></script>
</body>

</html>
