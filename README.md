Dieses Repo enthält die öffentliche Restaurant Essort Website [essort.ch](https://www.essort.ch). Die Website wird mit Git versioniert.

Das CMS Control Panel kann über die Adresse [https://www.essort.ch/cp](https://www.essort.ch/cp) geöffnet werden. Änderungen im CMS auf der Live/Production-Website werden automatisch gepusht.

## Wie kommen Client Änderungen im CMS auf der Live/production Website zurück in Remote Repo?

Der `main`-Branch enthält die Live/Production Website. Dieser Branch ist auf dem cyon Webserver im Ordner *essort.ch* ausgecheckt. Kundenseitige Änderungen im CMS werden einmal täglich um 01:00 Uhr mit einem Cronjob zurück ins Remote Repo auf Github gepusht.

Damit diese automatischen Cronjob Commits besser unterscheidet werden können, ist auf dem Webserver global der Spock User konfiguriert.

```
$ git config --global user.email "helloSpock@danielkaufmann.ch"
$ git config --global user.name "helloSpock"
$ git config --list
```

Der `stage`-Branch enthält die Previewseite für Testzwecke. Er ist ebenfalls auf dem cyon Webserver ausgecheckt, liegt im Ordner *essort.stage* und ist über die Adresse [http://ywrnmkyon.cyon.link/](http://ywrnmkyon.cyon.link/) erreichbar.

Auf dem `stage`-Branch ist das CMS Control Panel deaktiviert. Der Preview-Link dient einzig dazu, grössere Anpassungen an der Website simulieren zu können.

## Wie kommen lokale Änderungen (neue Features, Updates) auf den Webserver?

Sobald lokale Änderungen ins Remote-Repo auf Github gepusht werden, sendet ein Webhook eine POST-Anfrage an eine Datei, welche auf dem Webserver im stage-Verzeichnis im Ordner `/public` liegt.

- Die stage-Website wird aktualisiert, wenn der `stage`-Branch ins Remote Repo gepusht wird.
`…git pull && php please cache:clear && php please stache:warm`

- Die Live/Production-Website wird aktualisert, wenn der `main`-Branch ins Remote Repo gepusht wird.
`…git pull && php please cache:clear && php please static:clear && php please stache:warm`

Da das stage-Verzeichnis ausschliesslich über eine nicht öffentliche Previewdomain und nicht indexierte Website zugänglich ist, ist die Webhock-Datei einigermassen gut geschützt.

## CMS und Addon-Updates

Ein CMS Update übers CP sperrt die jeweilige Version von `statamic/cms` in `composer.json`. Bei einem späteren Update über die Befehlszeile muss zuerst die Version manuell aktualisiert werden, bevor `composer update` ausgeführt werden kann.

Besser ist es, das CMS und die Addons lokal mit `composer update` zu aktualisieren und zu pushen. Dann werden sie mit dem Webhook auf den Webserver gepullt.

**Wichtig**: Auf dem Webserver muss danach zusätzlich immer manuell ein `composer install` ausgeführt werden. Um den Arbeitsspeicher des cyon-Servers zu entlasten, verzichte ich darauf dies nach jedem `git pull` automatisch auszuführen.

## .env Files

Beide Branches haben `.env`-Files mit unterschiedlichen Einstellungen.
