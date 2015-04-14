<?php return [

    // Turn on/off minification
    'enabled' => true,

    // If you are using a javascript framework that conflicts
    // with Blade's tags, you can change them here
    'blade' => [
		'rawTags' => ['{!!', '!!}'],
        'contentTags' => ['{{', '}}'],
        'escapedContentTags' => ['{{{', '}}}']
    ]
];
