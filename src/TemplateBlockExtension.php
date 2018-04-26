<?php namespace Anomaly\TemplateBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Anomaly\TemplateBlockExtension\Block\BlockModel;

/**
 * Class TemplateBlockExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class TemplateBlockExtension extends BlockExtension
{

    /**
     * This extension provides a template
     * extension for the Blocks Module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blocks::block.template';

    /**
     * The block view.
     *
     * @var string
     */
    protected $view = 'anomaly.extension.template_block::content';

    /**
     * The block model.
     *
     * @var string
     */
    protected $model = BlockModel::class;

}
