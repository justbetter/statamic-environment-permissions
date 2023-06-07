<?php

return [
    // The environments where the permissions should be disabled.
    'environments' => ['testing', 'staging', 'production'],

    // The permissions to disable on the above environments.
    'permissions' => [
        'access email utility',
        'access licensing utility',
        'access phpinfo utility',
        'configure addons',
        'configure asset containers',
        'configure collections',
        'configure fields',
        'configure globals',
        'configure navs',
        'configure taxonomies',
        'manage preferences',
        'super',
        'view updates',
    ],

    // Also apply this to super users?
    'super' => true,
];
