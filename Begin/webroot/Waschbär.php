<!doctype html>
<html lang="de">

<head>
  <meta charset="utf-8" />
  <title>Waschbär</title>
  <meta name="description" content="VFH ICS WEBSTART" />
  <meta name="author" content="Friedrich Föll" />
  <link rel="stylesheet" href="./css/StyleNew.css" />
  <link rel="icon" href="./images/trees.png" />
</head>

<body>
  <header>
    <h1>Waschbär (Procyon lotor)</h1>
    <button type="button" onclick="myFunction()">Zurück</button>
    <script>
      function myFunction() {
        history.back();
      }
    </script>
  </header>
  <br>
  <img src="./images/Waschbär.jpg" alt="Waschbär" width="450" height="auto" />
  <section>
    <section>
      <h2>Kennzeichen</h2>
      <ul>
        <li>Kleinbär mit auffälliger schwarz-weißer Gesichtsmaske
        <li>Langhaariges, farblich stark variierendes Fell; Allgemeinbild tendenziell graues Haar mit schwarzem Deckhaar, aber auch fast schwarze Tiere kommen vor. Schwarz-weiß geringelter Schwanz.
        <li>Etwa katzengroß mit einer Kopf-Rumpf-Länge von 40-70 cm und einer Schwanzlänge von 20-30 cm.
        <li>Gewicht um die 5 bis 9 kg.
        <li>Typische Gangart der Sohlengänger und mit rundem Rücken
        <li>Pfotenabdruck: die Vorderpfote ähnelt einer Hand, der Abdruck der Hinterpfoten hat Ähnlichkeit mit dem Fußabdruck eines Kleinkindes.
      </ul>
    </section>
    <section>
      <h3>Verbreitung und Lebensraum</h3>
      <ul>
        <li>Ursprünglich südliches Kanada, Vereinigte Staaten bis nach Mittelamerika.
        <li>Als Neozoon (Neubürger) in Mitteleuropa vorwiegend zur Pelztierzucht eingeführt
        <li>In Deutschland besitzt er zwei Verbreitungsschwerpunkte. Das größere und ältere Verbreitungsgebiet befindet sich in Südwestdeutschland rund um Kassel, das zweite und kleinere nordöstlich von Berlin, beide Teilpopulationen sind aber
          mittlerweile in Kontakt
        <li>Die erste offizielle Ansiedlung des Waschbären in Deutschland fand 1934 in Hessen zu jagdlichen Zwecken statt. Der zweite Kernpunkt der Verbreitung geht auf die Fluchttiere einer Pelztierfarm im Jahre 1945 nördlich von Berlin zurück.
        <li>Bevorzugt Strukturreiche Laubmischwälder, gerne mit Gewässern in der Nähe.
        <li>Ruhe-, Tagesschlaf- und Aufzuchtsplätze für die Jungen sind hauptsächlich auf Bäumen in Astgabeln oder Höhlungen, aber auch Bodenschlafplätze in verlassenen Dachs- und Fuchsbaue; in urbanen Räumen werden auch Schuppen, Speicher und
          Dachböden genutzt.
        <li>Dachböden genutzt.
          Als Kulturfolger lebt er auch in Vorstädten, Parks und Gärten. Siedlungsräume bieten zum einen ein reichhaltiges und leicht zu beschaffendes Nahrungsangebot und zum anderen optimale Deckungs- und Fortpflanzungsbedingungen im Schutze der
          menschlichen Infrastruktur
      </ul>
    </section>
    <section>
      <h4>Ernährung</h4>
      <ul>
        <li>Allesfresser (also sowohl pflanzliche als auch tierische Nahrung), wobei er mehr Sammler als Jäger ist.
        <li>Nach jahreszeitlichem Angebot hauptsächlich Schnecken, Würmer, Fische, Frösche, Vögel, Eier aber auch zu ca. 1/3 vegetarische Nahrung wie Nüsse, Obst usw.
        <li>Die Nahrung wird mit den Vorderpfoten intensiv betastet. Wenn er in Gewässern nach Futter sucht, sieht es so aus, als würde er sein Essen waschen, daher auch der Name Waschbär.
      </ul>
    </section>
    <section>
      <h5>Lebensweise und Fortpflanzung</h5>
      <ul>
        <li>die Ranz beginnt im Januar/ Februar
        <li>nach einer Tragzeit von 63 Tagen werden ab April/Mai durchschnittlich 3 Jungtiere geboren, spätere Würfe sind nicht selten
        <li>die Jungtiere bleiben die ersten Wochen in der Setzhöhle, die Fähe geht allein auf Nahrungssuche, später hält sich die Fähe mit ihrem Nachwuchs in ihrem Streifgebiet auf
        <li>weiblicher Nachwuchs verbleibt eher in der Nähe des Geburtsortes, junge Rüden wandern zunächst ab, bilden dabei oft Männchengemeinschaften und kommen manchmal auch wieder zu ihren Geburtsorten zurück
        <li>Kaum Feinde in Mitteleuropa. Erwachsenen Tieren kann nur der Luchs, den Jungen auch Adler, Uhu und Fuchs gefährlich werden.
        <li>Als häufigste Todesursache gilt allerdings der Verkehr.
        <li>Erkrankungen: Tollwut und Staupe, aber nicht populationsgefährdend.
      </ul>
    </section>
    <section>

      <button onclick="KommentarKnopf('Kommentarfeld')">Kommentar verfassen</button>
      <br><br>

      <?php
  	   if (isset($_POST['Kommentarfeld'])) {
         file_put_contents('Kommentare.txt',"Waschbär-Kommentar:".$_POST['Kommentarfeld']."\n",FILE_APPEND);
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
      <li>http://www.projekt-waschbaer.de/allgemeine-angaben/
      <li>http://www.gwn.de/projekte/waschbaeren/daten-zum-waschbaer/
      <li>https://www.jagdverband.de/zahlen-fakten/tiersteckbriefe/waschbaer-procyon-lotor
    </ul>

    <script src="./js/main.js"></script>
</body>

</html>
