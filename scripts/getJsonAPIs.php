<?PHP
/**
 * Fetches data from RSS feeds and caches them as JSON files to the relevant cache directory.
 * For use with museumdigital_rss_tile.
 *
 * @author Joshua Ramon Enslin <joshua@jrenslin.de>
 */
declare(strict_types = 1);

const CACHE_DIR = __DIR__ . '/../cached/fetched_apis/';

$feeds = [
    'https://global.museum-digital.org/index.php?output=json&navlang=en' => 'md_global_stats',
    'https://museum-digital.jrenslin.de/piwik/index.php?date=' . date("Y-m-d", strtotime("-1 month")) . ',' . date("Y-m-d") . '&expanded=1&filter_limit=100&format=JSON&format_metrics=1&idSite=1&method=API.get&module=API&period=day&token_auth=anonymous' => 'md_users_stats',
    'https://term.museum-digital.de/?output=json' => 'md_term_stats',
    'https://term.museum-digital.de/editStats.php?output=json' => 'md_term_stats_edits',
];

require __DIR__ . '/../themes/museum-digital-theme-zola/scripts/getJsonAPIs.php';
