# 3aAPC

Lisa Schloffer
2025/26

## Sicherheitsrisikeen von Webanwendungen

### Phishing

Phishing ist ein Betrugsversuch, bei dem Angreifer gefälschte Webseiten oder E-Mails verwenden, um Benutzer datz tz bringen, vertrauliche Daten (z.B. Passwörter, Kreditkarteninformationen, Logins) einzugeben.

Gegen Phishing hilft, misstraurisch gegenüber unbekannte Links und E-Mails sein, Zwei-Faktor-Authentifizierung (2FA) nutzen und URLs sorgfältig prüfen.

### Datendiebstahl

Angreifer verschaffen sich unbefugt Zugriff auf sensible Daten, z. B. persönliche Informationen oder Kundendatenbanken.

Um sich gegen Datendiebstahl zu schützen, sollte man Daten verschlüsseln (sowohl im Speicher als auch bei der Übertragung), starke Passwörter verwenden und Zugriffskontrollen implementieren.

### SQL Injection

Angreifer fügen bösartigen SQL-Code in Eingabefelder ein, um die Datenbank zu manipulieren oder Daten auszulesen.

Als Schutz sollte man vorbereitete Statements verwenden, Eingaben validieren und Berechtigungen in der Datenbank einschränken.

### Cross-Site-Scripting (XSS)

Angreifer schleusen schädlichen JavaScript-Code in Webseiten ein, der dann im Browser anderer Nutzer ausgeführt wird.

Damit man davo geschützt wird sollte man Eingaben immer filtern oder escapen, Content-Security-Policy (CSP) nutzen und Skripte von Drittanbietern genau prüfen.

### Session-Hijacking

Ein Angreifer stiehlt oder errät die Session-ID eines Nutzers, um sich unbefugt als dieser auszugeben.

Session-IDs zufällig und lang wählen, HTTPS erzwingen, Sessions nach Inaktivität ablaufen lassen und Tokens regelmäßig erneuern, hilft gegen solche Angriffe.

### Denial of Service (DoS)

Angreifer überlasten eine Webanwendung oder einen Server gezielt, sodass legitime Nutzer keinen Zugriff mehr haben.

Um sich zu schützen sollte man Firewalls einsetzen, Anfragenraten begrenzen (Rate Limiting) und Cloud-basierte Schutzdienste nutzen.

### Verschlüsselung (Transport Layer Security - TLS/SSL)

TLS (der Nachfolger von SSL) verschlüsselt die gesamte Kommunikation zwischen dem Webbrowser des Benutzers und dem Webserver.

### Multifaktor-Authentifizierung (MFA)

Ein Benutzer muss zwei oder mehr unabhängige Verifikationsfaktoren vorlegen, um Zugriff zu erhalten.

### Prepared Statements / Parametrisierte Abfragen

Die Abfragestruktur wird vorab definiert und die Benutzerdaten werden separat als Parameter an die Datenbank übergeben. Die Datenbank behandelt die Eingabedaten dann strikt als Daten und nicht als ausführbaren Code.
