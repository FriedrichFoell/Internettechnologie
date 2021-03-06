<!doctype html>

<html lang="de">

<head>
  <meta charset="utf-8" />
  <title>Schwarzwild</title>
   <script src="main.js"></script>
  <meta name="description" content="VFH ICS WEBSTART" />
  <meta name="author" content="Friedrich Föll" />
  <link rel="stylesheet" href="./css/StyleNew.css" />
  <link rel="icon" href="./images/trees.png" />
</head>

<body>
  <header>
    <h1>Wildschwein (Sus scrofa)</h1>
    <button type="button" onclick="myFunction()">Zurück</button>
    <script>
      function myFunction() {
        history.back();
      }
    </script>
  </header>
  <br>
  <img src="./images/Wildschwein.png" alt="Wildschwein" width="500" height="auto"/>
  <section>
    <h2>Kennzeichen</h2>
    <ul>
      <li>Größe schwankt in Abhängigkeit von der Region; in Deutschland etwa 100 bis 150 kg, in Osteuropa fast doppelt so schwer.
        <li>Dichtes Fell mit derben Borsten, im Sommer braun-schwarz, im Winter überwiegend schwarz, daher der Name “Schwarzkittel”.
          <li>Frischlinge mit längsgestreiftem Fell.
            <li>Besonders männliche Wildschweine (Keiler) haben starke Eckzähne, die zu schweren Verletzungen bei Mensch und Tier führen können, die der weiblichen Tiere (Bachen) sind deutlich kleiner
    </ul>
  </section>
  <section>
    <h2>Verbreitung und Lebensraum</h2>
    <ul>
      <li>Wildschweine leben in unterholzreichen Laub- und Mischwäldern, aber auch in offenen Feldfluren, solange im Sommer die Feldfrüchte auf dem Acker stehen und genügend Deckung vorhanden ist.</li>
      <li>Sie brauchen Wasserstellen, um zu trinken und zu suhlen.</li>
      <li>Wildschweine sind sehr anpassungsfähig und tauchen zunehmend auch in den Vorgärten von Stadtgebieten auf.</li>
    </ul>
  </section>
  <section>
    <h3>Ernährung</h3>
    <ul>
      <li>Wildschweine sind Allesfresser.</li>
      <li>Das Nahrungsspektrum umfaßt pflanzliche und tierische Nahrung: Gras, Kräuter, Knollen, Wurzeln, Früchte und Samen, Würmer, Insekten, Mäuse und Gelege, Jungtiere, frißt auch Aas.</li>
      <li>Mit der Schnauze brechen die Sauen den Boden nach Nahrung um, sie pflügen im wahrsten Sinne des Wortes den Boden.</li>
    </ul>
  </section>
  <section>
    <h4>Fortpflanzung</h4>
    <ul>
      <li>Geschlechtsreife ab dem 1. Lebensjahr bei guten Nahrungsbedingungen
      <li>Paarungszeit: November und Dezember (sog. Rausche). Bei guter Nahrungsversorgung können Bachen allerdings das ganze Jahr über paarungsbereit sein.

      <li> Vor der Geburt sondert sich die Bache von der Rotte ab und zieht sich in einen geschlossenen Wurfkessel zurück, den sie zuvor aus Zweigen gebaut hat.

      <li>Nach einer Tragzeit von 4 Monaten wirft sie im Januar oder Februar dort 1 bis 8 Frischlinge, die 3 Monate gesäugt werden.
      <li>In den ersten Tagen nach der Geburt duldet sie keine Artgenossen, sie verliert sogar die Furcht vor den Menschen und
        greift an, wenn sich jemand dem Kessel nähert.

      <li>Bachen und die Jungtiere leben meist in Familienverbänden. Erwachsene Keiler sind Einzelgänger.

      <li>Wildschweine haben eine hohe Vermehrungsrate, sie sind damit angepasst an hohe Verluste durch die Witterung, die durch die frühe Setzzeit vor allem die Jungtiere betrifft

      <li>In freier Wildbahn wird Schwarzwild selten älter als 7 bis 8 Jahre.

    </ul>
  </section>
  <section>

    <button onclick="KommentarKnopf('Kommentarfeld')">Kommentar verfassen</button>
    <br><br>

    <?php
	   if (isset($_POST['Kommentarfeld'])) {
       file_put_contents('Kommentare.txt',"Schwarzwild-Kommentar:".$_POST['Kommentarfeld']."\n",FILE_APPEND);
	     echo "Kommentar gespeichert";}
    ?>
    <form name "test"  method="POST">
    <textarea id="Kommentarfeld" name="Kommentarfeld" rows="4" cols="50" font-size=large style="display:none" maxlength="500">
    </textarea>
    <input name=submit type="submit" name="speichern" value="speichern" />
    </form>

  </section>
  <h5>Quellen</h5>
  <ul>
    <li>Niethammer, J.; Krapp, F.(1986): Handbuch der Säugetiere Europas. Band 2/II Paarhufer – Artiodactyla. Aula Verlag Wiesbaden.</li>

  </ul>
  <script src="./js/main.js"></script>


</body>

</html>
