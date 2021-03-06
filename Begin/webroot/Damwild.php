<!doctype html>
<html lang="de">

<head>
  <meta charset="utf-8" />
  <title>Damwild</title>
  <meta name="description" content="VFH ICS WEBSTART" />
  <meta name="author" content="Friedrich Föll" />
  <link rel="stylesheet" href="./css/StyleNew.css" />
  <link rel="icon" href="./images/trees.png" />
</head>

<body>
  <header>
    <h1>Damwild (Dama dama)</h1>
    <button type="button" onclick="myFunction()">Zurück</button>
    <script>
      function myFunction() {
        history.back();
      }
    </script>
  </header>
  <br>
  <img src="./images/Damhirsch.jpg" alt="Damhirsch" width="300" height="auto" />
  <section>
    <h2>Kennzeichen</h2>
    <ul>
      <li>Deutlich kleiner als Rotwild, lange Läufe, langer Wedel mit schwarzer Spitze, schwarz umrahmter weißer Spiegel
      <li>Neben vielen Farbschlägen von fast weiß über rotbraun, silbergrau bis fast schwarz, gibt es Damwild mit langem Fell. Im Sommer ist das Fell (Decke) rotbraun mit Aalstrich und weißen Flecken und im Winter graubraun. Die weißen Flecken sind
        im Winter kaum sichtbar.
      <li>Die Hirsche sind größer als die Tiere (weibliches Damwild).
      <li>Die Hirsche können eine Körperlänge bis zu 175cm und ein Körpergewicht bis zu 120kg aufweisen
      <li>Damtiere können von 35-50kg wiegen.
      <li>charakteristisch ist das Schaufelgeweih
      <li>Das Geweih kann bis zu 70cm lang werden und wird im März/April abgeworfen. Das neu geschobene Geweih wird Ende August verfegt.
    </ul>
  </section>
  <section>
    <h3>Verbreitung und Lebensraum</h3>
    <ul>
      <li>Das Damwild stammt ursprünglich aus Kleinasien und aus dem östlichen Mittelmeerraum. Es wurde bereits vor 2000 Jahren als Gatterwild gehalten und heute ist es eine der weltweit am weitesten verbreitete Hirschart. Der Bestand aus
        Mitteleuropa stammt aus frei lebenden Beständen, aus „Gehegeflüchtlingen“ und gezielten Aussetzungen.
      <li>Bevorzugt deckungsreiche Laub- und Mischwälder mit Freiflächen und Lichtungen
      <li>Damwild ist sehr anpassungsfähig und besiedelt unterschiedliche, vor allem lichtere Wald-Lebensräume
    </ul>
  </section>
  <section>
    <h4>Ernährung</h4>
    <ul>
      <li>Gräser, Kräuter, Blätter, Früchte, Eicheln, Bucheckern usw.
      <li>Wiederkäuer
    </ul>
  </section>
  <section>
    <h5>Lebensweise und Fortpflanzung</h5>
    <ul>
      <li>Tag- und nachtaktiv, sehr gesellig
      <li>Die Tiere bilden sogenannte Kahlwildrudel.
      <li>Junge Damhirsche bilden „Junggesellenrudel“.
      <li>Alte Hirsche sind sehr oft Einzelgänger.
      <li>In der Brunft (Oktober-November) steht das Damwild nicht nach Geschlechtern getrennt zusammen.
      <li>Entweder besetzt der Damhirsch ein Brunftterritorium oder versucht wie Rotwild sich eine Gruppe Dam-Tiere als Harem zu halten. Dieses Verhalten richtet sich nach der örtlichen Populationsdichte.
      <li>Besetzt der Damhirsch ein Brunftterritorium schlägt er mit den Läufen eine Brunftkuhle, in die er uriniert und sich dann oft darin suhlt. Dieses Territorium wird stark gegen andere Hirsche verteidigt. Durch den intensiven Geruch und dem
        eintönigen Rufen, werden Damtiere angelockt.
      <li>Die Tragzeit beträgt ca. 230 Tage und das Tier setzt meist ein, sehr selten zwei Kälber.
      <li>Zum Setzen sondern sich die Damtiere vom Kahlwildrudel ab.
      <li>Die Kälber folgen erst mit 2-3 Wochen der Mutter.
      <li>Die Kälber werden 8-9 Monate gesäugt.
      <li>Junge Damtiere können bereits als Jährlinge ein Kalb setzen
      <li>Der Damhirsch ist erst ab ca. 4 Jahren bei der Brunft erfolgreich
      <li>Währen der Brunft nehmen die Damhirsche wenig Nahrung auf und verlieren in dieser Zeit viel Gewicht.
    </ul>
  </section>
  <section>

    <button onclick="KommentarKnopf('Kommentarfeld')">Kommentar verfassen</button>
    <br><br>

    <?php
	   if (isset($_POST['Kommentarfeld'])) {
       file_put_contents('Kommentare.txt',"Damwild-Kommentar:".$_POST['Kommentarfeld']."\n",FILE_APPEND);
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
    <li>Christine Miller, Wildtierkunde Kompakt ISBN 978-3-8354-0338-3
    <li>DJV-Handbuch 2014, Jagdstatistiken
    <li>Ekkehard Ophoven, Kosmos Wildtierkunde, ISBN 978-440-102229-9
  </ul>


  <script src="./js/main.js"></script>
</body>

</html>
