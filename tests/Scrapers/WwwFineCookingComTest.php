<?php

namespace RecipeScraperTests\Scrapers;

use RecipeScraperTests\ScraperTestCase;
use RecipeScraper\Scrapers\WwwFineCookingCom;

class WwwFineCookingComTest extends ScraperTestCase
{
    protected function getHost()
    {
        return 'www.finecooking.com';
    }

    protected function makeScraper()
    {
        return new WwwFineCookingCom;
    }
}
