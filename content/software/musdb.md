+++
title = "musdb"
description = "musdb ist unser Tool für Erfassung, Inventarisierung und Museumsmanagement."

[extra]
keywords = "musdb, Inventarisierung, Museumsmanagement, Museen, Software"
banner_image = "/data/img/banners/usda_nrcs_montana_snow_survey65.jpg"
banner_image_alt = "Public domain / US gov't work. USDA NRCS Montana / Snow Survey65.tif / Man working on computer, analyzing data, 1977."
html_id = "musdb"
og_image = "/data/img/logo-musdb/musdbLogoBrown.svg"
faq = [
    [
        "Was kostet die Nutzung von musdb?",
        "musdb kann kostenfrei genutzt werden, jetzt und in Zukunft. Benutzer mit den nötigen Berechtigungen innerhalb des Museums können soviele zusätzliche Benutzerkonten erstellen wie nötig."
    ],
    [
        "Welche Systemanforderungen stellt die Nutzung von musdb?",
        "musdb ist vollständig web-basiert. Ein aktueller Browser ist damit die einzige Anforderung für die Benutzung von musdb."
    ],
    [
        "Ist es möglich, musdb ausschließlich für die Inventarisierung zu verwenden und nicht zur Veröffentlichung?",
        "Ja."
    ],
    [
        "Kann ich meine existierenden Sammlungsdaten in musdb importieren?",
        "Im Prinzip, ja. Solange die Daten in einem strukturierten Format vorliegen, haben wir bisher immer einen Weg gefunden, die Daten zu importieren. Importscripte für übliche Austauschformate wie LIDO und die Standard-Exportformate anderer Inventarisierungslösungen sind bereits verfügbar (eine Liste der direkt importierbaren  Formate [findet sich im Handbuch](https://de.handbook.museum-digital.info/import/liste-der-importformate.html)) und können zusammen mit unserem Technik-Team oder über musdb's WebDAV-Schnittstelle für den Import genutzt werden."
    ],
    [
        "Unterstützt musdb Zwei-Faktor-Authentifizierung?",
        "Ja. musdb unterstützt Zwei-Faktor-Authentifizierung mit Hardware-Tokens (wie Yubikeys oder Nitrokeys), TOTP (das Protokoll hinter z.B. dem Google Authenticator) oder per Mail."
    ],
    [
        "Gibt es eine Beschränkung der Abbildungen, die pro Objekt hochgeladen werden können?",
        "Nein. Es können so viele Abbildungen (Bilder, Videos, Audio-Dateien, PDFs oder 3D-Abbildungen) wie nötig hochgeladen oder verknüpft werden."
    ],
    [
        "Kann musdb für die Verwaltung der Museumsbibliothek verwendet werden?",
        "Ja."
    ],
]
+++

## musdb

musdb wurde ursprünglich als Eingabetool zur öffentlichen Seite entwickelt. Seitdem haben wir es zu einem vollständigen Inventarisierungswerkzeug erweitert. Auch Funktionen zum Museumsmanagement sind vorhanden.

Zentral ist dabei:

- Weiterenwicklungen findet auf Wunsch und in Rücksprache mit den Museen statt
- musdb wird kollaborativ entwickelt: Anpassungen für ein Museum stehen allen Museen zur Verfügung
- mit musdb arbeitet man kollaborativ: die Vokabulare, die für Verknüpfungen mit Personen, Orten, Zeiten und Schlagworten benutzt werden, werden von allen Museen im gleichen Sprachraum gemeinsam genutzt
- musdb ist auf eine einfache und intuitive Benutzung ausgelegt
- Hilfestellungen und Warnungen regen dazu an, nicht nur einzugeben, sondern qualitativ hochwertige Datensätze zu erzeugen

----

### Screenshots

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Dashboard.jpg",
    image_alt="Dashboard / Standard-Startseite von musdb."
    ) %}Die Standard-Startseite von musdb ist ein benutzerdefinierbares Dashboard. Auch andere Seiten können vom Benutzer als Startseite eingestellt werden.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-BatchEditing.jpg",
    image_alt="Stapelverarbeitung in musdb."
    ) %}musdb bietet Funktionalitäten zur Stapelverarbeitung. Beispielsweise können Filtermengen gesammelt vertaggt oder veröffentlicht werden.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Export.jpg",
    image_alt="XML-Export"
    ) %}Benutzer können ihre Daten in md:xml (einer einfachen Notation für die Informationen aller verfügbaren Felder) und LIDO exportieren.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Backgrounds.jpg",
    image_alt="Hintergrund-Recherche-Tool."
    ) %}Im Bereich "Hintergründe" können Benutzer direkt in musdb in den kontrollierten Vokabularen recherchieren.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Find-an-Expert.jpg",
    image_alt='Finde einen Exporten": Benutzer verbinden.'
    ) %}Mit dem "Finde einen Experten"-Button können Benutzer andere finden, die zum gleichen Thema gearbeitet haben. Nur solche Benutzer, die dies explizit anschalten, werden hier aufgelistet.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Multilingual.jpg",
    image_alt="Mehrsprachigkeit in musdb."
    ) %}musdb ist mehrsprachig und kann auch mit mehrsprachigen Eingaben arbeiten.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Navigation.jpg",
    image_alt="Navigation von musdb."
    ) %}Die Navigation gibt einen groben Überblick über die verschiedenen Sektionen von musdb: Museen, Sammlungen, Objekte, Objektgruppen, Ausstellungen, und mehr.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-ObjectOverview.jpg",
    image_alt="Objektübersicht in musdb."
    ) %}Eine Objekt-Übersichtsseite im Bildermodus. In der rechten Sidebar werden verschiedene Option zur Suche und zum filterbasierten Export angeboten. Eine einfache Listenansicht ist ebenfalls verfügbar.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-ObjectPage.jpg",
    image_alt="Objektseite"
    ) %}Die Hauptsektion der Objektseite. Oben können Basisinformationen zum Objekt eingegeben werden. Unten sind die Registerkarten für die Bearbeitung detaillierter Informationen zum Objekt sichtbar.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-RecordHistory.jpg",
    image_alt="Datensatzgeschichte eines Objektes."
    ) %}Bearbeitungen an Objektdatensätzen werden geloggt.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Research.jpg",
    image_alt="Registerkarte: Provenienzrecherche."
    ) %}Mit der Registerkarte Provenienzrecherche können detaillierte Reporte zu einer vordefinierten Auswahl von relevanten Themen gespeichert werden.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Restoration.jpg",
    image_alt="Registerkarte: Restaurierung"
    ) %}Die Registerkarte Restauration bietet einerseits die Option, eine farbkodierte und schnell zu erfassende Zusammenfassung des Objektzustands zu notieren, andererseits detaillierte Reporte zu speichern.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Settings.jpg",
    image_alt="Benutzer- und Rechteverwaltung."
    ) %}Museumsdirektoren können detaillierte Rechte- und Zugriffseinstellungen für die Benutzer ihres Museums vornehmen.{% end %}

{{ museumdigital_preview_list_end() }}

----

### Technisches

#### Design

musdb soll einfach und intuitiv zu benutzen sein. Es soll Spaß machen. Das heißt, dass die Oberfläche einen klaren Fokus auf den Haupt-Gegenstand der jeweiligen Seite bieten sollte. Um dieses Ziel zu erreichen besteht für Benutzer an vielen Stellen die Möglichkeit, sich Features an- und auszuschalten. Optionale Features (etwa die zur Generierung eines QR-Codes für Objektseiten, oder ein "Inhaltsverzeichnis" um auf einer längeren Seite direkt zum richtigen Bereich zu springen) sind in einer Toolbox am Fensterrand untergebracht.

_Einfach_ heißt aber auch, dass häufige Benutzer schnell - und auf die ihnen am meisten gelegene Art - arbeiten können. Dafür bietet musdb eine Vielzahl an Hilfestellungen. Bei der folgenden Liste handelt es sich deshalb nur um eine Auswahl:

- Eine Anzeige, wieviele Buchstaben in einem Eingabefeld eingegeben sind und wieviele es mindestens und maximal sein können
- PuQi: Der Publikationsqualitätsindex zeigt, wie sich die Angaben zum Objekt verbessern lassen
- Plausi: Mithilfe der kontrollierten Vokabulare kann musdb warnen, wenn Eingaben nicht plausibel sind (Beispiel: Eine Malerin kann ein Gemälde nicht gemalt haben, bevor sie geboren wurde)
- Textbausteine erleichtern die schnelle Eingabe von gleichen Inhalten

Alternativ zur üblichen Navigation mit der Maus ermöglicht musdb eine umfassende Steuerung per Tastatur und ein eigenes Kontextmenü.

#### Entwicklung

musdb basiert auf PHP8 und MySQL. Eine Reihe PHP- und JavaScript-Bibliotheken kommen zum Einsatz. Die Liste der verwendeten Bibliotheken kann im Handbuch gefunden werden.

----

{{ build_accordion_lr_section(title = "Features und Grundkonzepte", items = [
    [
        "Zentralisiert verwaltete kontrollierte Vokabulare",
        "Alle Museen, die mit musdb arbeiten, arbeiten mit einem gemeinsamen Katalog von kontrollierten Vokabularen für Akteure, Orte, Zeiten und Schlagworte. Die Arbeit diese kontrollierten Vokabulare anzureichern wid dabei von einer zentralen Redaktion übernommen - und muss dank der Zentralisierung nur einmal gemacht werden. So profitiert ein Museum von den Einträgen, die ein anderes schon gemacht hat."
    ],
    [
        "Exporte",
        "Alle Objektdaten können in einer einfachen XML-Notation, die unsere Datenstruktur abbildet ('md:xml') für die Datensicherung und in üblichen Austauschformatenformaten wie LIDO exportiert werden. Ein Export in Excel ist ebenfalls möglich.",
    ],
    [
        "Sammlungsdaten auf dem passendsten Weg bearbeiten",
        'musdb unterstützt verschiedene Wege, Objektdaten zu bearbeiten. Benutzer können die "benutzerdefinierte Objektbearbeitungsseite" aktivieren, in der nur die nötigen Felder herangezogen und per Drag-and-Drop positioniert werden können.  Um viele Objekte nebeneinander zu bearbeiten, ist ein Tabellen-Bearbeitungsmodus verfügbar. Und wenn auch das nicht reicht, können eigene Oberflächen mithilfe der API von musdb erstellt werden.'
    ],
    [
        "Flexible Suchfunktionen",
        "Objekte werden auf Basis einer eigenen Abfragesprache, die auf Basis der Manticore Suchdatenbank und unseren Taxonomien arbeitet, gesucht. Eine graphische Oberfläche bietet einen einfachen Einstieg in die Suchfunktion. Möchte man in allen Inhalten der Institution suchen, bietet sich dafür die universelle Suche an."
    ],
    [
        "Automatische Qualitätsprüfung",
        "musdb versucht das Erfassen von qualitativ hochwertigen Daten möglichst einfach zu machen. Dafür bietet es viele Features, wie die Möglichkeit, ein verknüpftes Schlagwort per Rechtsclick zu spezifizieren; PuQI, ein Werkzeug zum Quantifizierung der Qualität von publizierbaren Objektdaten; einen Plausibilitäts-Check (ein Maler kann z.B. kein Gemälde gemalt haben, bevor er geboren wurde); und automatische Verbesserungsvorschläge zur Vervollständigung des Datensatzes."
    ],
]) }}

----

{% counter_section_left(api = "md_musdb_system", name = "languages") %}
musdb ist für die mehrsprachige Nutzung gebaut, und ist in mehrere Sprachen übersetzt worden. Natürlich freuen wir uns immer über zusätzliche Hilfe, musdb auch in andere Sprachen zu übersetzen. Hierfür steht ein eigenes Tool zur Verfügung, das wir [im Blog beschrieben haben](https://blog.museum-digital.org/de/2019/03/02/museum-digital-uebersetzen/).
{% end %}

----

{{ build_faq_list(title = "FAQ") }}

----

### Resourcen

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/musdb/",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="") %}musdb im Handbuch{% end %}

{% museumdigital_linktiles_tile(link="https://www.youtube.com/playlist?list=PLFbmcALPcmvLtbv38OpjEkHFteP-qhmDY",
    image="/data/img/logos-ext/YouTube_social_red_square_2017.svg",
    image_alt="") %}Videos on YouTube{% end %}

{% museumdigital_linktiles_tile(link="https://demo.museum-digital.org/musdb/swagger/",
    image="/data/img/icons/more.svg",
    image_alt="") %}API-Dokumentation{% end %}

{{ museumdigital_linktiles_list_end() }}

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/de/category/technik-design/musdb-technik-design/feed/",
    html_url="https://blog.museum-digital.org/de/category/technik-design/musdb-technik-design/",
    title="Neuigkeiten zur Entwicklung von musdb im Blog") }}
