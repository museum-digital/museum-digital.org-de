<?PHP
/**
 * Fetches data from RSS feeds and caches them as JSON files to the relevant cache directory.
 * For use with museumdigital_rss_tile.
 *
 * @author Joshua Ramon Enslin <joshua@jrenslin.de>
 */
declare(strict_types = 1);

const CACHE_DIR = __DIR__ . '/../cached/fetched_feeds/';

const FEEDS = [
    'https://blog.museum-digital.org/de/tag/kontrollierte-vokabulare/feed/',
    'https://blog.museum-digital.org/de/category/technik-design/feed/',
    'https://blog.museum-digital.org/de/category/technik-design/ausgabe/feed/',
    'https://blog.museum-digital.org/de/category/technik-design/musdb-technik-design/feed/',
    'https://blog.museum-digital.org/de/category/technik-design/themator-de/feed/',
    'https://blog.museum-digital.org/de/category/technik-design/entwicklung-mdterm/feed/',
    'https://blog.museum-digital.org/category/technik-design/externe-tools/feed/',
    'https://blog.museum-digital.org/de/category/community-de/feed/',
    'https://blog.museum-digital.org/de/feed/',

    'https://blog.museum-digital.org/de/author/andersm/feed/',
    'https://blog.museum-digital.org/de/author/jrenslin/feed/',
    'https://blog.museum-digital.org/de/author/malygina/feed/',
    'https://blog.museum-digital.org/de/author/stefan-rohde-enslin/feed/',
];

require __DIR__ . '/../themes/museum-digital-theme-zola/scripts/getRssFeed.php';

