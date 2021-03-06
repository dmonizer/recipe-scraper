<?php

namespace RecipeScraperTests\Scrapers;

use RecipeScraperTests\ScraperTestCase;
use RecipeScraper\Scrapers\WwwEpicuriousCom;

class WwwEpicuriousComTest extends ScraperTestCase
{
    protected function getHost()
    {
        return 'www.epicurious.com';
    }

    protected function makeScraper()
    {
        return new WwwEpicuriousCom;
    }
}
