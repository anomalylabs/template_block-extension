<?php namespace Anomaly\TemplateBlockExtension\Support\RelationshipFieldType;

use Anomaly\RelationshipFieldType\RelationshipFieldType;
use Anomaly\TemplatesModule\Group\Contract\GroupInterface;
use Anomaly\TemplatesModule\Group\Contract\GroupRepositoryInterface;
use Anomaly\TemplatesModule\Template\Contract\TemplateInterface;

/**
 * Class TemplateOptions
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class TemplateOptions
{

    /**
     * Handle the options.
     *
     * @param RelationshipFieldType    $fieldType
     * @param GroupRepositoryInterface $groups
     */
    public function handle(RelationshipFieldType $fieldType, GroupRepositoryInterface $groups)
    {
        $options = [];

        /* @var GroupInterface $group */
        foreach ($groups->all() as $group) {

            $options[$group->getTitle()] = [];

            /* @var TemplateInterface $template */
            foreach ($group->getTemplates() as $template) {
                $options[$group->getTitle()][$template->getId()] = $template->getTitle();
            }
        }

        $fieldType->setOptions($options);
    }
}
