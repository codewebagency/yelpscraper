<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 10/23/2016
 * Time: 2:37 AM
 */
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use YelpScraper\ScrapeByCategories;

echo ScrapeByCategories::test();
