<?php return [

    // Turn on/off minification
    'enabled' => true,

    // Turn on/off the comment stripping in the minified file
    'comment_stripping' => true,

    // If you are using a javascript framework that conflicts
    // with Blade's tags, you can change them here
    'blade' => [
		'rawTags' => ['{!!', '!!}'],
        'contentTags' => ['{{', '}}'],
        'escapedContentTags' => ['{{{', '}}}']
    ]
];
