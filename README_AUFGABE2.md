# Aufgabe 2: erste PHP Applikation

Author: Schloffer Lisa
3aAPC | 2025/26

Es befinden sich 2 PHP Datein in diesem Projekt, das mit dem Namen "statisch.php" ist der erste Versuch mit statischen Daten.

Die Datei mit dem Namen "rechner.php" ist der Rechner, bei dem der Benutzer die Daten eingeben kann.

Es war neu für mich, da ich davor noch nie wirklich etwas in PHP progammiert habe und nur die Basics selbst erlernt hatte, weshalb ich mich bei Fragen an meine Kollegin gewandt habe.

Das Ergebnis ist aber selbstständig umgesetzt und funktioniert.

Hier sieht man die Umsetzung:

![Screenshot vom Rechner](assets/Rechner.png)

![Screenshot vom statischen](assets/Statisch.png)


## Fragen

### Welche Informationen liefert die Funktion phpinfo();

Die Funktion phpinfo() ist eine der wichtigsten Informationsfunktionen in PHP. Wenn sie in einem Skript aufgerufen und im Browser ausgeführt wird, erzeugt sie eine Seite mit einer Zusammenfassung der aktuellen PHP-Konfiguration.

### PHP.ini Einstellungen - erkläre die jeweilige Funktion: 

#### PHP-Fehler ausgeben

Kontrolliert, ob Fehler, Warnungen und Hinweise, die während der Skriptausführung auftreten.

#### Speichernutzung und die Laufzeit deiner Skripte limitieren

Legt fest, wie viel Arbeitsspeicher (RAM) ein einzelnes PHP-Skript maximal belegen darf.
Legt die maximale Zeit in Sekunden fest, die ein PHP-Skript laufen darf, bevor der Parser es abbricht.

#### allow_url_fopen = off

Diese Funktion steuert, ob dein PHP-Skript Dateien (oder Datenströme) von externen URLs öffnen und verarbeiten darf, so wie es lokale Dateien im eigenen Ordner kann.
Durch off kann das Skirpt nur auf Datein innerhalb des Servers zugreifen.

#### session.auto_start = off
Diese Einstellung bestimmt, ob die Session, die Informationen über den Besucher speichert (z.B. ob er eingeloggt ist, was im Warenkorb liegt), automatisch für jeden einzelnen Seitenaufruf gestartet wird.
Durch off werden diese Informationen nur dann zurückgegeben, wenn es nötig ist.
