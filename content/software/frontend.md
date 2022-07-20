+++
title = "Ausgabe / Portal"
description = "museum-digitals vorrangiges Ziel ist die digitale Zugänglichmachung von Museumsinformationen - besonders Objektinformationen. Dies geschieht primär mit der 'Ausgabe'."

[extra]
keywords = "Software, Museen, Museumsobjekte, Museumssoftware, Webportal"
banner_image = "/data/img/banners/RooseveltRoadViaduct_1920_InternetArchive_p280.jpg"
banner_image_alt = 'Image from page 280 of "The practical aspect of the slope deflection method and its application to the design of the Roosevelt Road Viaduct" (1920); Grodsky, Morris; Contributing Library: Paul V. Galvin Library, Illinois Institute of Technology; Digitizing Sponsor: CARLI: Consortium of Academic and Research Libraries in Illinois'
html_id = "frontend"
og_image = "/data/img/logo/mdlogo-code-1024px.png"
faq = [
    [
        "Wie kann ein Museum seine Objekte auf museum-digital veröffentlichen?",
        "Zuerst muss das Museum in einer der regionalen Instanzen von [musdb](/software/musdb) eingerichtet werden. Dies geschieht durch die jeweils zuständigen Regionaladministratoren und erfordert einen Namen, eine Adresse, eine kurze Beschreibung des Museums (mindestens 25 Buchstaben) und ein Bild zum Museum. Sobald das Museum in musdb eingerichtet ist können neue Objekte direkt in musdb erfasst werden - oder sie können importiert werden, falls die Sammlungsdaten schon anderweitig strukturiert erfasst wurden. Eine Institution wird erst öffentlicht gelistet, wenn sie mindestens ein Objekt veröffentlicht hat."
    ],
    [
        "Werden Objektseiten in einer wissenschaftlich referenzierbaren Form archiviert?",
        'Ja. Sobald ein öffentliches Objekt bearbeitet wird, wird ein Schnappschuss der entsprechenden Seiteninhalte erstellt und über die "Seitenarchiv"-Funktion verfügbar gemacht.'
    ],
    [
        "Bietet die Ausgabe von museum-digital persistente URIs?",
        "Wir erstellen beim Veröffentlichen neuer Inhalte nicht automatisch DOIs, handles, oder andere der üblichen für Methoden für das erstellen persistenter Identifier. Frei [nach Tim Berners-Lee](https://www.w3.org/Provider/Style/URI) achten wir aber darauf, unsere klassischen URLs stabil zu halten und, wo das nicht möglich ist, auf die heute genutzte URL weiterzuleiten. So sollten, abseits von z.B. wegen rechtlicher Gründe depublizierten Objekten, alle primären Inhaltsseiten (wie Objekte, Institutionen, Sammlungen, etc.) bis heute erreichbar sein."
    ],
    [
        "Unterstützt die Ausgabe von museum-digital _responsive design_?",
        "Ja."
    ],
    [
        "Ich habe eine tolle Idee für eine neue Visualisierungsfunktion! Kann die implementiert werden?",
        "Falls es wirklich eine gute Idee ist - unbedingt! Am besten erreichen uns Vorschläge per Mail."
    ],
]
+++

## Die "Ausgabe"

museum-digital wurde gegründet, um Museumsobjekte im Netz zugänglich zu machen. Das geht nicht ohne die entsprechende Software.

So ist die "Ausgabe" die erste Anwendung, die im Rahmen von museum-digital geschrieben wurde. Mit ihr können Museen sich und ihre Objekte gemeinsam im Netz darstellen und durchsuchbar machen.

Um ein umfassendes Bild der Museen und ihrer Objekte zu liefern, wurden seitdem vielfältige zusätzliche Informationen anzeigbar gemacht. Einerseits sind dies Informationen zu Sammlungen, Objektgruppen, Ausstellungen und Veranstaltungen, andererseits eine Vielzahl von Optionen, um die Objekte zu verknüpfen und zu visualisieren.

----

### Screenshots

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Startpage.jpg",
    image_alt="Startseite des deutschlandweiten Portals von museum-digital"
    ) %}Startseite des deutschlandweiten Portals von museum-digital.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-ExtendedSearch.jpg",
    image_alt="Erweiterte Sucheinstellungen in der Ausgabe von museum-digital"
    ) %}Mithilfe der erweiterten Suche, können Benutzer exakte Abfragen formulieren.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-EnrichedSearchPages.jpg",
    image_alt="Angereicherte Ergebnisseiten im museum-digital Frontend"
    ) %}Such-Ergebnisseiten werden, so möglich, mit Informationen aus den kontrollierten Vokabularen angereichert.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Timeline.jpg",
    image_alt="Eine Timeline-Seite bei museum-digital"
    ) %}Die "Ausgabe" von museum-digital bietet eine Zeitleiste, mit der Suchergebnisse nach Zeit sortiert betrachtet werden können.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-oak.jpg",
    image_alt="Eine Objekte-auf-Karte-Seite von museum-digital."
    ) %}Mit der "Objekte-auf-Karte"-Funktion können Benutzer interessante Objekte auf Basis ihres geographischen Hintergrunds finden.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Object.jpg",
    image_alt="Eine Objektseite."
    ) %}Eine Objektseite im Frontend von museum-digital.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Multilingual.jpg",
    image_alt="Mehrsprachigkeit im Frontend von museum-digital."
    ) %}museum-digital ist mehrsprachig, und so können es auch die erfassten Einträge sein. Die Navigationssprache und Eintragssprache können unabhängig voneinander ausgewählt werden.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-ExhibitionOverview.jpg",
    image_alt="Ausstellungsübersichtsseite in der Ausgabe von museum-digital"
    ) %}Eine Ausstellungs-Übersichts-Seite im Kachel-Modus.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Calendar.jpg",
    image_alt="Kalender sind Verfügbar auf den Übersichtsseiten für Ausstellungen und Veranstaltungen."
    ) %}Kalender sind Verfügbar auf den Übersichtsseiten für Ausstellungen und Veranstaltungen.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-GraphView.jpg",
    image_alt="Graphenansicht"
    ) %}Mit der "Graphenansicht" bietet sich Benutzern eine alternative Navigationsoption.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Keyboard.jpg",
    image_alt="Tastatursteuerung im Frontend von museum-digital."
    ) %}Power-User können das Portal mithilfe der eingebauten Tastatursteuerung navigieren.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Compare.jpg",
    image_alt="Objekte vergleichen."
    ) %}Objekte können mit einem anderen - vorher zum Vergleich vorgemerkten - Objekt verglichen werden.{% end %}

{{ museumdigital_preview_list_end() }}

----

### Technisches

#### Design

Die "Ausgabe" von museum-digital ist nach dem Prinzip gestaltet, dass auf jeder Seite nur einige wenige zentrale Elemente im Fokus stehen sollen, sodass ein einfaches Verständnis der Inhalte erleichtert wird. Viele weitere Optionen bestehen für Power-User - von Visualisierungen bis zu einer in die Webseite eingebauten Kommandozeile. Diese sind allerdings "versteckt", etwa in einer Seitenspalte oder durch Tastenkombinationen, um die Benutzbarkeit der Seite für Erstbenutzer nicht einzuschränken.

#### Schnittstellen

Zur Veröffentlichung und Verfügbarmachung zählt nicht nur das Ermöglichen der Betrachtung. Auch eigene Ideen mit den Daten umzusetzen gehört dazu. Entsprechend sind alle Informationen, die mit der "Ausgabe" von museum-digital veröffentlicht sind auch maschinell über eine einfach zu benutzende JSON-Schnittstelle auslesbar.

Soweit sinnvoll, gibt die "Ausgabe" Informationen auch in passenden offenen Standardformaten aus: Objektinformationen können im [LIDO](http://www.lido-schema.org/)-Format abgerufen werden, für Museumsinformationen stehen digitale Visitenkarten ([vCard](https://de.wikipedia.org/wiki/VCard)) und für Termine Kalender und Kalendereinträge im [iCalendar](https://de.wikipedia.org/wiki/ICalendar)-Format zur Verfügung.

{{ highlighted_tile_section(headline = "Open Standards", tiles = [
    [
        'LIDO',
        'für Objektmetadaten',
        "Basierend auf [CIDOC-CRM](https://www.cidoc-crm.org/) ist LIDO ein standartisiertes XML-Format für den Austausch von Objektmetadaten von Museen. Viele der zentralen Konzepte von museum-digital basieren auf LIDO (z.B. die Ereignisstruktur um Orte und Datierungen eines Objektes zu erfassen).",
    ],
    [
        'iCalendar',
        'für Termine',
        "Termine für Veranstaltungen und Ausstellungen sowie ganze Kalender derselben können mit dem [iCalendar](https://de.wikipedia.org/wiki/ICalendar)-Format und dem darauf aufbauenden WebCal exportiert und abonniert werden. iCalendar ist ein etablierter Standard, der z.B. auch für den Import eines Termins in den Kalender eines Smartphones genutzt werden kann.",
    ],
    [
        'vCard',
        "für Kontaktinformationen",
        "Was iCalendar für Kalendereinträge ist, ist vCard für das Adressbuch: Ein simpler und weit verbreiteter Standard für das Austauschen von Kontaktinformationen, der von den allermeisten gebräuchlichen Adressbuch-Anwendungen unterstützt wird. Die Ausgabe von museum-digital implementiert vCards für den Austausch der Kontaktinformationen von Museen.",
    ],
    [
        'oEmbed',
        'for das Einbetten von Objekt- Objektgruppen- und Museumsseiten',
        'oEmbed ist ein Standard für das Beschreiben eines bevorzugten Weges für das Einbetten einer Seite in eine Andere. Mit oEmbed können Objekte, Institutionen und Objektgruppen in andere Webseiten - z.B. ein WordPress-Blog - eingebettet werden.',
    ],
    [
        'TEI',
        'für Transkriptionen',
        'TEI (Text Encoding Initiative) ist ein Standard für das Kodieren von Text in einem Maschinenlesbaren Format. Bei museum-digital können Transkriptionen eines Objektes in TEI erfasst werden. Gleichzeitig bietet jede Objektseite eine Ausgabe im TEI-Format, die besonders für die Beschreibung des Sendens und Empfangens von Briefen und ähnlichen Objekten optimiert ist.',
    ],
    [
        'IIIF',
        'für Bilder',
        '[IIIF](https://iiif.io/) bietet eine standartisierte Schnittstelle für das referenzieren von Bildern oder Bildausschnitten. museum-digital unterstützt IIIF für lokal gehostete Bilder in der Version 2.1.',
    ],
    [
        'RSS',
        'um auf dem aktuellsten Stand zu bleiben',
        "Wo Objekte, Austellungen oder Veranstaltungen aufgelistet werden, findet sich in der Ausgabe von museum-digital ein RSS-Feed. Mit diesen Feeds lassen sich Aktualisierungen in der jeweiligen Liste abonnieren.",
    ],
    [
        'JSON-LD',
        'um Inhalte für Suchmaschinen verständlicher zu machen',
        "Google und andere Suchmaschinen können mithilfe der passenden [strukturierten Daten](https://developers.google.com/search/docs/advanced/structured-data/intro-structured-data) wesentlich genauere, zusätzliche Voransichten generieren. Die Reihe der Unterstützten Inhaltetypen geht von FAQs über Bildlizenzen zu Veranstaltungshinweisen.",
    ]
]) }}

#### Entwicklung

Die Ausgabe von museum-digital basiert auf PHP8 und MySQL. Für Visualisierungen kommt JavaScript zum Einsatz, auch unter Zuhilfenahme einer Reihe von Bibliotheken, die hier eingesehen werden können. Für die Versionierung benutzen wir git.

----

{% counter_section_left(api = "md_frontend_system", name = "Sprachen") %}
Das Frontend ist für die mehrsprachige Nutzung gebaut, und ist in mehrere Sprachen übersetzt worden. Natürlich freuen wir uns immer über zusätzliche Hilfe, die Ausgabe auch in andere Sprachen zu übersetzen. Hierfür steht ein eigenes Tool zur Verfügung, das wir [im Blog beschrieben haben](https://blog.museum-digital.org/de/2019/03/02/museum-digital-uebersetzen/).
{% end %}

----

{% counter_section_right_plain_number(api = "md_global_stats", selector = "museums", name = "Institutionen") %}
Viele Museen und Gedächtnisinstitutionen nutzen museum-digital - und damit primär die Ausgabe -  gemeinsam als Veröffentlichungsplattform.
{% end %}

----

{{ build_faq_list(title = "FAQ") }}

----

### Resourcen

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/Ausgabe/",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="") %}Handbuch zur Ausgabe{% end %}

{% museumdigital_linktiles_tile(link="https://nat.museum-digital.de/index.php?t=text&st=api",
    image="/data/img/icons/more.svg",
    image_alt="") %}Kurze Einführung zur API{% end %}

{{ museumdigital_linktiles_list_end() }}

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/de/category/technik-design/ausgabe/feed/",
    html_url="https://blog.museum-digital.org/de/category/technik-design/ausgabe/",
    title="Neuigkeiten zur Entwicklung der Ausgabe im Blog") }}
