+++
title = "Infrastruktur"
description = "Erläuterung der Infrastruktur bei museum-digital"

[extra]
keywords = "museum-digital, Infrastruktur, Server"
banner_image = "/data/img/banners/A-test-of-a-pneumatic-ASH-handling-system_1914_InternetArchive_p216_rotated.jpg"
banner_image_alt = " Image from page 216 of 'A test of a pneumatic ASH handling system' (1914) "
html_id = "infrastructure"
faq = [
    [
        "Wo wird museum-digital gehostet? / In welchem Land stehen die Server von museum-digital?",
        "Unsere Server befinden sich in Deutschland. [digiS](https://www.digis-berlin.de/), das Forschungs- und Kompetenzzentrum für Digitalisierung des Landes Berlin, finanziert freundlicherweise einen unserer Server, während die restlichen Server bei Strato angemietet sind."
    ],
]
+++

## Infrastruktur

Alle Dienste von museum-digital werden zentralisiert betrieben - einerseits wegen unseres Zieles, Museen das _gemeinsame_ publizieren und verwalten ihrer Daten zu ermöglichen, und andererseits wegen der Vorteile desselben, besonders im Bezug auf die gemeinsame Nutzung eines gemeinsamen Sets von kontrollierten Vokabularen und der gemeinsamen Veröffentlichung auf einer sammlungsübergreifend durchsuchbaren Plattform. Entsprechend gehört neben dem Schreiben der Software auch die Administration der Systeme zu unseren Aufgaben.

----

### Server

Das Hosting und die Entwicklung von museum-digital geschieht derzeit mit drei dedizierten Servern. Ein Server, gehostet bei Strato, ist als zentraler Server für das Bearbeiten und Ausspielen der Museumsdaten im Einsatz. Ein zweiter, gehostet von digiS in Berlin, kommt als Bild- und Backupserver zum Einsatz. Schlussendlich wird der Dritte (ebenfalls bei Strato gehostet) für den Betrieb interner Werkzeuge wie einer [Nextcloud](https://nextcloud.com/) und einer [Gitea](https://gitea.io/)-Instanz und für unseren Mailserver genutzt.

#### Backup-Strategie

Bei museum-digital gibt es drei verschiedene Arten von Daten, deren Unterscheidung für die Entwicklung einer Backup-Strategie wichtig ist: Datenbankinhalte, Mediendateien und Konfigurationsdateien.

Datenbankinhalte werden einmal am Tag GPG-verschlüsselt exportiert. Die verschlüsselten Inhalte werden dann vom Backup-Server heruntergeladen. Auf beiden Servern werden zu jeder Zeit vollständige Abzüge der jeweils letzten sieben Tage vorgehalten, um eine zügige Wiederherstellung im Falle eines Fehlers zu ermöglichen. Die Abzüge werden vom Backup-Server  aus ferner in digiS' Backupsystem überführt.

Der Backup-Server ist gleichzeitig auch als Bildserver im Einsatz. Um diese Rolle zu erfüllen bezieht er alle neu hochgeladenenen oder geänderten Mediendateien alle drei bis sechs Stunden (das genaue Interval hängt von der Tageszeit ab, weil nur sehr wenige Inhalte hinzugefügt werden, wenn in Europa Nacht ist). Eine zweite Kopie der Mediendateien ist so schon aus dem normalen Betrieb heraus immer verfügbar. Wie auch die Datenbankinhalte werden die Mediendateien einmal am Tag in digiS' Backupsystem überführt.

Konfigurationsdateien werden regelmäßig in ein git-Repository synchronisiert, das in der Folge auf unsere Gitea-Instanz und von dort zu Rechnern unseres Admin-Teams synchronisiert wird.

Um eine zusätzliche Ebene leicht erreichbarer und schnell wiederherstellbarer Backups zu haben, werden monatliche Abzüge des Gesamtsystems auf eine externe Festplatte heruntergeladen.

----

### Open Source

Suksessive veröffentlichen wir mehr und mehr unseres Codes in Open Source. Besonders inhaltsgetriebene Projekte wie das Handbuch können über [GitHub](https://github.com/museum-digital/) angesehen und bearbeitet werden, während Module und Bibliotheken über unsere Gitea-Instanz verwaltet werden.

----

### Technologie-Stack

Unsere Systeme laufen auf Basis eines recht üblichen Stacks: [Ubuntu](https://ubuntu.com/) wird als Betriebssystem genutzt, [nginx](https://www.nginx.com/) als Webserver, [MariaDB](https://mariadb.org/) als Datenbankserver und [PHP](https://www.php.net/) kommt als primäre Programmiersprache für allen serverseitigen Code zum Einsatz. [Redis](https://redis.io/) und [Manticore](https://manticoresearch.com/) werden als schneller Key-Value Store und als Volltext-Suchserver eingetzt. Für die Entwicklung serverseitiger Komponenten kommen [PHPUnit](https://phpunit.de/) für das Testing, [PHPStan](https://phpstan.org/) for für statische Code-Analyse und [PHPBench](https://github.com/phpbench/phpbench) für das Benchmarking zum Einsatz.

Einige Seiten, die keine tiefergehende serverseitige Logik benötigen werden direkt auf Basis der Funktionalitäten des Webservers generiert (das Dokumentenarchiv) oder mit statischen Seitengeneratoren ([Zola](https://www.getzola.org/) im Fall dieser Seite, [mdbook](https://github.com/rust-lang/mdBook) im Fall des Handbuchs) erstellt.

----

{{ build_faq_list(title = "FAQ") }}
