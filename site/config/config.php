<?php
return [
    'debug' => true,
    'markdown' => [
        'extra' => true
    ],
    'smartypants' => true,
    'kirby-extended.highlighter.line-numbering' => true,
    'community.markdown-field.buttons' => ['headlines', 'bold', 'italic', 'ul', 'ol', 'link', 'email', 'blockquote', 'horizontal', 'rule', 'strikethrough', 'pagelink', 'file', 'footnote'],
    'routes' => [
        [
            'pattern' => 'sitemap.xml',
            'action'  => function () {
                $pages = site()->pages()->index();

                // fetch the pages to ignore from the config settings,
                // if nothing is set, we ignore the error page
                $ignore = kirby()->option('sitemap.ignore', ['error']);

                $content = snippet('sitemap', compact('pages', 'ignore'), true);

                // return response with correct header type
                return new Kirby\Cms\Response($content, 'application/xml');
            }
        ],
        [
            'pattern' => 'sitemap',
            'action'  => function () {
                return go('sitemap.xml', 301);
            }
        ]
    ]
];
