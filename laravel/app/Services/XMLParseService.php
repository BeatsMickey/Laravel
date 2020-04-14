<?php


namespace App\Services;

use App\model\News;
use Orchestra\Parser\Xml\Facade as XmlParser;

class XMLParseService
{
    public function saveNews($link, $category) {
        $xml = XmlParser::load($link);
        $xml_parse = $xml->parse([
            'news' => ['uses' => 'channel.item[title,link,guid,description,pubDate]'],
        ]);

        foreach ($xml_parse['news'] as $value ) {
            //dump($value['title'], $value['description'], $value['pubDate'], $value['link']);
            $news = new News();
            $news->fill([
                'title' => $value['title'],
                'description' => $value['description'],
                'publication_date' => (new \DateTime($value['pubDate']))->format('Y-m-d'),
                'categories_id' => $category,
                'is_active' => true,
                'text' => $value['link']
            ]);
            $news->save();
        }
        return redirect()->route('home.index');
    }

}
