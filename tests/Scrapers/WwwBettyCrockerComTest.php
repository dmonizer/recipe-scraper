<?php

namespace RecipeScraperTests\Scrapers;

use RecipeScraperTests\ScraperTestCase;
use RecipeScraper\Scrapers\GeneralMills;

/**
 * @group gm
 */
class WwwBettyCrockerComTest extends ScraperTestCase
{
    protected function getHost()
    {
        return 'www.bettycrocker.com';
    }

    protected function makeScraper()
    {
        return new GeneralMills;
    }
}
