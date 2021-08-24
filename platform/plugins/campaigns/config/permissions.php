<?php

return [
    [
        'name' => 'Campaigns',
        'flag' => 'campaigns.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'campaigns.create',
        'parent_flag' => 'campaigns.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'campaigns.edit',
        'parent_flag' => 'campaigns.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'campaigns.destroy',
        'parent_flag' => 'campaigns.index',
    ],
];
