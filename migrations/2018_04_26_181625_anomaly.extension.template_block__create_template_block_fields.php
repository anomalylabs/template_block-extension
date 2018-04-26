<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Anomaly\TemplateBlockExtension\Support\RelationshipFieldType\TemplateOptions;
use Anomaly\TemplatesModule\Template\TemplateModel;

/**
 * Class AnomalyExtensionTemplateBlockCreateTemplateBlockFields
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyExtensionTemplateBlockCreateTemplateBlockFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'template' => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'mode'    => 'search',
                'related' => TemplateModel::class,
                'handler' => TemplateOptions::class,
            ],
        ],
    ];

}
