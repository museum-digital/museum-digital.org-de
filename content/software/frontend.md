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
        "How can a museum publish its objects on museum-digital?",
        "The museum first needs to set up in [musdb](/software/musdb) by the regional administrators responsible for the respective instance of museum-digital. For this, we require a name, an address, a short description of the museum (min. 25 characters), and an image symbolizing the museum. Once the museum has been set up in musdb, objects can be entered and published one by one - or the existing collection data of an institution can be imported in bulk. The institution is only publicly listed once one of its objects has been published."
    ],
    [
        "Are past versions of object pages archived for enabling scientific references?",
        "Yes. Once a public object page has been updated, a snapshot of its contents are taken and made available using the page archive."
    ],
    [
        "Does the frontend of museum-digital offer persistent URLs?",
        "We do not automatically assign DOIs, handles, or anything alike to published pages. We however take utmost care, that any URL of a primary page (e.g. an object or museum page) is kept stable and that there are sufficient referals from old URL structures to have no links be lost."
    ],
    [
        "Is the layout of the frontend of museum-digital responsive?",
        "Yes."
    ],
    [
        "I have a great idea for a new visualization method? Can you implement it?",
        "If it is really a good and suitable idea, sure. Just send us a mail."
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
    image_alt="alt="Tastatursteuerung im Frontend von museum-digital."
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
        'for object metadata',
        "Based on [CIDOC-CRM](https://www.cidoc-crm.org/), LIDO offers a standardized XML format for exchanging object metadata for museums. Many of the central concepts museum-digital is built on originate from LIDO (such as the event structure for more precisely describing location and dating).",
    ],
    [
        'iCalendar',
        'for calendar entries',
        "Calendar entries for events and exhibitions can be downloaded and subscribed to using the [iCalendar](https://de.wikipedia.org/wiki/ICalendar) format and the adjacent WebCal standard. iCalendar is a well-established format that can - among others - be used for importing events to one's mobile calendar.",
    ],
    [
        'vCard',
        "for institutions' contact information",
        "What iCalendar is for calendar entries, vCard is for contact information: A very simple and widely adopted standard that can be used for exchanging contact information between practically all of the popular address book managers. museum-digital's frontend implements the interoperable sharing of museums and collections' contact information using vCard.",
    ],
    [
        'oEmbed',
        'for referencing object, series, and institution pages',
        'oEmbed is a standard for describing the preferred way to embed a page in another. Using oEmbed, object, institution and series pages can be referenced in - e.g. - WordPress blog posts in a breeze.',
    ],
    [
        'TEI',
        'for transcriptions',
        'TEI (Text Encoding Initiative) is a standard for encoding text in a maschine-readable way. At museum-digital, it is natively supported for transcriptions and can be used as an alternative output format for object information focusing on transcriptions and the sending / receiving of letters and similar objects.',
    ],
    [
        'IIIF',
        'for images',
        '[IIIF](https://iiif.io/) offers a standardized API for referencing images or sections of these. In the standard setup, images are gathered to represent a thing (e.g. a museum object), but these collections can in turn be compiled into superordinate collections. As IIIF requires server-side editing of the images before they are sent to the user, it is only available for locally hosted images. For these however, IIIF version 2.1 is fully implemented.',
    ],
    [
        'RSS',
        'for staying up-to-date',
        "Where objects are listed, museum-digital's frontend generates an RSS feed. These feeds can be subscribed to using a feed reader.",
    ],
    [
        'JSON-LD',
        'for making information legible to Search Engines',
        "Google and other search engines can use more detailed [structured data](https://developers.google.com/search/docs/advanced/structured-data/intro-structured-data) for generating previews about some commonly appearing types of data - such as events or FAQs. Whereever suitable, the required structured data is provided by the frontend.",
    ]
]) }}

#### Entwicklung

Die Ausgabe von museum-digital basiert auf PHP8 und MySQL. Für Visualisierungen kommt JavaScript zum Einsatz, auch unter Zuhilfenahme einer Reihe von Bibliotheken, die hier eingesehen werden können. Für die Versionierung benutzen wir git.

----

{% counter_section_left(api = "md_frontend_system", name = "languages") %}
The frontend is build for multi-lingual use and has been translated to a number of languages. Of course, we are always looking forward to help in translating the frontend (just like all other tools at museum-digital) to new languages. A description of how our dedicated translation tool can be used for doing so is [available on the blog (German)](https://blog.museum-digital.org/de/2019/03/02/museum-digital-uebersetzen/).
{% end %}

----

{% counter_section_right_plain_number(api = "md_global_stats", selector = "museums", name = "institutions") %}
Many museums come together to use museum-digital as a publication platform - and thus come to present their objects using the frontend.
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
