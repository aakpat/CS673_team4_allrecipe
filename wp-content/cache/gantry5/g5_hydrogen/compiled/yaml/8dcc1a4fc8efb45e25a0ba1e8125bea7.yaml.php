<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'gantry-admin://blueprints/layout/inheritance/messages/empty.yaml',
    'modified' => 1477008717,
    'data' => [
        'name' => 'Inheritance',
        'description' => 'Nothing to inherit tab',
        'type' => 'empty.inheritance',
        'form' => [
            'fields' => [
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-warning blocksize-note',
                    'content' => 'This item does not exist in any other Outline and cannot be inherited because of that.'
                ]
            ]
        ]
    ]
];
