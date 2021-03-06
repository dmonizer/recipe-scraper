<?php

namespace RecipeScraperTests\Scrapers;

use RecipeScraperTests\ScraperTestCase;
use RecipeScraper\Scrapers\RecipesSparkPeopleCom;

class RecipesSparkPeopleComTest extends ScraperTestCase
{
    protected function getHost()
    {
        return 'recipes.sparkpeople.com';
    }

    protected function makeScraper()
    {
        return new RecipesSparkPeopleCom;
    }
}
