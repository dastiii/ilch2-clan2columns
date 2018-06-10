# ilch2-clan2columns
Ein einfaches, responsives Zwei-Spalten-Layout, das für jeden Zweck eingesetzt werden kann. Angepasste Templates für viele Module sind bereits enthalten und sorgen für eine ansprechende Optik der jeweiligen Boxen bzw. Seiten.

## Verwendung
Bevor das Layout verwendet werden kann, müssen erst die entsprechenden Assets kompiliert werden. Dies geschieht ganz einfach dank [Laravel Mix](https://github.com/JeffreyWay/laravel-mix).

Als erstes muss dieses Repository geklont und in das neu erstellte Verzeichnis gewechselt werden.

```
$ git clone https://github.com/dastiii/ilch2-clan2columns.git
$ cd ilch2-clan2columns
```

Als nächstes müssen die benötigten Abhängigkeiten installiert werden. Dies geschieht per [npm (Teil von NodeJS)](https://nodejs.org/en/) oder [yarn](https://yarnpkg.com/).

### Yarn (empfohlen)
```
$ yarn
```

### npm
```
$ npm install
```

Um die Assets nun zu kompilieren, muss nun, je nach Umgebung, eine der folgenden Befehle ausgeführt werden:

### Produktionsumgebung (die fertige Website)
```
$ yarn run prod
```

oder

```
$ npm run prod
```

**Empfohlen:** Um Probleme mit dem Browsercache zu umgehen (nachdem die Dateien neu kompiliert wurden), können einfach die Pfade aus der mix-manifest.json verwendet werden und in der index.php bzw. index_full.php entsprechend angepasst werden. So denkt der Browser, es handelt sich um eine neue Datei und lädt diese nicht aus dem Cache. Die Pfade enthalten in diesem Fall nach jeder Ausführung von `yarn run production` eine neue Versionszeichenkette.

### Entwicklungsumgebung
```
// muss nach jeder Änderung neu ausgeführt werden
$ yarn run dev

// kompiliert die Dateien automatisch neu, wenn Änderungen gespeichert werden
$ yarn run watch
$ yarn run watch-poll
```

statt `yarn`  kann hier natürlich auch `npm` verwendet werden.

Abschließend müssen alle notwendigen Dateien und Ordner in den Layout -Ordner deiner Ilch-Installation kopiert werden, sodass dieser wie folgt aussieht:

* application
    * layouts
        * clan2columns
            * config
            * css
            * fonts
            * images
            * js
            * views
            * index.php
            * index_full.php


#ilch2-clan2columns
