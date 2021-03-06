<!doctype html>
<html lang="de">

<head>
  <meta charset="utf-8" />
  <title>Rotwild</title>
  <meta name="description" content="VFH ICS WEBSTART" />
  <meta name="author" content="Friedrich Föll" />
  <link rel="stylesheet" href="./css/StyleNew.css" />
  <link rel="icon" href="./images/trees.png" />
</head>

<body>
  <header>
    <h1>Rotwild (Cervus elaphus)</h1>
    <button type="button" onclick="myFunction()">Zurück</button>
    <script>
      function myFunction() {
        history.back();
      }
    </script>
  </header>
  <br>
  <img src="./images/Hirsch1.jpg" alt="Rothirsch" width="350" height="auto" />
  <section>
    <section>
      <h2>Kennzeichen</h2>
      <ul>
        <li>Männliche Tiere (Hirsche) erreichen in Europa bis zu 250 kg Lebendgewicht, weibliche Tiere (Hirschkühe) deutlich weniger, Schulterhöhe beim Hirsch bis zu 150 cm, beim weiblichen Tier bis 120 cm
        <li>Das Sommerfell ist rotbraun, daher leitet sich auch der Name Rothirsch ab, das Winterfell ist dunkelgrau bis braungrau
        <li>Zu Beginn der Paarungszeit (Brunftzeit) im September, tragen die älteren Hirsche am Hals eine mächtige Brunftmähne, die er beim Haarwechsel im Frühjahr wieder verliert
        <li>Die Hirsche tragen ein Geweih, das bis zu 15 kg schwer werden kann. Es wird Ende Februar bis April abgeworfen und bis zum Frühherbst wieder komplett aufgebaut, das Geweih wird ab den Monaten Juni/Juli gefegt, d.h. Hirsche reiben dann die
          fellähnliche Haut, den sogenannten Bast, der das Geweih zur Nährstoffversorgung während des Wachstums umhüllt, an Stämmen und Zweigen ab.
        <li>Hirschkühe tragen wie die Kälber kein Geweih, diese werden daher auch als Kahlwild bezeichnet
      </ul>
    </section>
    <section>
      <h3>Verbreitung und Lebensraum</h3>
      <ul>
        <li>Das natürliche Verbreitungsgebiet umfasst Europa und Zentral- und Westasien sowie Nordafrika. Rothirschreiche Länder in Europa sind v.a. Großbritannien (insb. Schottland), Deutschland, Österreich und Spanien
        <li>Der Rothirsch darf per Gesetz in einigen Bundesländern Deutschlands nur in behördlich festgelegten Gebiete, den sogenannten Rotwildbezirken, vorkommen. Außerhalb dieser Gebiete gilt zum Teil ein strenges Abschussgebot
        <li>Nach dem Elch ist das Rotwild die größte Hirschart Europas
        <li>In Mitteleuropa kommt das Rotwild heute vorwiegend in Waldgebieten vor
        <li>Ursprünglich: lichte Wälder und offene Landschaften; im Voralpenraum früher im Winter in Flussauen, die heute oft nicht mehr existieren
      </ul>
    </section>
    <section>
      <h4>Ernährung</h4>
      <ul>
        <li>Der Rothirsch zählt zum sogenannten intermediären Äsungstyp: er kann sich an verfügbare Äsung und sich verändernde Äsungszusammensetzung gut anpassen. Er frisst Wildgräser und –kräuter, Sträucher, Beeren und Obst, nimmt aber bei
          Verfügbarkeit auch gerne Knospen, Triebe und Blätter von Bäumen auf.
        <li>Auf landwirtschaftlich genutzten Flächen frisst der Rothirsch auch Feldfrüchte
        <li>Im Sommer sucht er gezielt eiweißreiche, rohfaserarme Nahrung wie Kräuter
        <li>Im Winter wird die Nahrungsaufnahme gedrosselt, ein zu hoher Eiweißanteil in der Nahrung wirkt sich negativ auf den reduzierten Stoffwechsel aus
        <li>Der Rothirsch ist ein Wiederkäuer, er besitzt einen vierkammerigen Magen (Labmagen, Netzmagen, Pansen, Blättermagen)
        <li>Zur Sicherung der Magenfüllung und aufgrund des physiologischen Bedürfnisses wiederzukäuen, nimmt der Rothirsch am Tag ca. 5-8 mal Nahrung auf
      </ul>
    </section>
    <section>
      <h5>Lebensweise und Fortpflanzung</h5>
      <ul>
        <li>Als reiner Pflanzenfresser wird der Aktivitätsrhythmus von der Dauer der Nahrungsaufnahme und des Wiederkäuens bestimmt
        <li>Alle anderen Aktivitäten sind in diesen Tagesablauf, der aus äsen (fressen) und wiederkäuen besteht, eingebunden
        <li>Rotwild reagiert empfindlich auf menschliche Störungen
        <li>Die Paarungszeit findet in Mitteleuropa im September/Oktober statt
        <li>Die Tragzeit beträgt etwa 8 ½ Monate. Meist wird ein Kalb, selten zwei Kälber Ende Mai/Anfang Juni geboren
        <li>Die Kälber tragen ein hellgeflecktes Tarnkleid, bei Gefahr drücken sie sich reglos am Boden, um nicht entdeckt zu werden
        <li>Rotwild ist sehr gesellig, lebt aber bis auf die Brunftzeit nach Geschlechtern getrennt: Die Hirsche bis zur Brunft im Hirschrudel, alte Hirsche auch allein, Hirschkühe und ihre Kälber sowie die Jungtiere des Vorjahres (Spießer und
          Schmaltiere) im Kahlwildrudel
        <li>Während der Brunft finden sich die Hirsche an den Brunftplätzen, die meist von den Hirschkühen ausgewählt werden
        <li>Die Platzhirsche sind während der Brunft damit beschäftigt die Hirschkühe gegen Rivalen zu verteidigen, um sich so mit möglichst vielen von ihnen fortpflanzen zu können
        <li>Zwischen ebenbürtigen Gegnern kann es zu heftigen Kämpfen kommen, schwächere Hirsche werden durch Drohrituale abgeschreckt

      </ul>
    </section>
    <section>

      <button onclick="KommentarKnopf('Kommentarfeld')">Kommentar verfassen</button>
      <br><br>

      <?php
  	   if (isset($_POST['Kommentarfeld'])) {
         file_put_contents('Kommentare.txt',"Rotwild-Kommentar:".$_POST['Kommentarfeld']."\n",FILE_APPEND);
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
      <li>Niethammer, J.; Krapp, F. (1986): Handbuch der Säugetiere Europas. Band 2/II Paarhufer - Artiodactyla. Aula Verlag Wiesbaden.
    </ul>

    <script src="./js/main.js"></script>
</body>

</html>
