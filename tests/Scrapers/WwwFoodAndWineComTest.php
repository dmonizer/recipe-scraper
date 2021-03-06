<?php

namespace RecipeScraperTests\Scrapers;

use RecipeScraper\Scrapers\TimeInc;
use RecipeScraperTests\ScraperTestCase;

/**
 * @group time
 */
class WwwFoodAndWineComTest extends ScraperTestCase
{
    protected function getHost()
    {
        return 'www.foodandwine.com';
    }

    protected function makeScraper()
    {
        return new TimeInc;
    }
}
