<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
        // include class
        include 'SitemapGenerator.php';

        // create object
        $sitemap = new SitemapGenerator("localhost/brgy/");

        // add urls
        $sitemap->addUrl("localhost/brgy/",                date('c'),  'daily',    '1');
        $sitemap->addUrl("localhost/brgy/page1",          date('c'),  'daily',    '0.5');
        $sitemap->addUrl("localhost/brgy/page2",          date('c'),  'daily');
        $sitemap->addUrl("localhost/brgy/page3",          date('c'));
        $sitemap->addUrl("localhost/brgy/page4");
        $sitemap->addUrl("localhost/brgy/admin",  date('c'),  'daily',    '0.4');
        $sitemap->addUrl("localhost/brgy/admin/subpage1",  date('c'),  'daily');
        $sitemap->addUrl("localhost/brgy/admin/subpage2",  date('c'),  'daily');
        $sitemap->addUrl("localhost/brgy/admin/subpage3",  date('c'),  'daily');

        // create sitemap
        $sitemap->createSitemap();

        // write sitemap as file
        $sitemap->writeSitemap();

        // update robots.txt file
        $sitemap->updateRobots();

        // submit sitemaps to search engines
        $sitemap->submitSitemap();
        ?>
    </body>
</html>
