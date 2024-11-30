<?php

namespace yii\DynamicForm;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;
use yii\widgets\ActiveFormAsset;

/**
 * Asset bundle for dynamic form Widget
 *
 */
class DynamicFormAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $depends = [
        JqueryAsset::class,
        ActiveFormAsset::class,
    ];

    /**
     * Set up CSS and JS asset arrays based on the base-file names
     * @param string $type whether 'css' or 'js'
     * @param array $files the list of 'css' or 'js' basefile names
     */
    protected function setupAssets(string $type, array $files = []): void
    {
        $srcFiles = [];
        $minFiles = [];
        foreach ($files as $file) {
            $srcFiles[] = "{$file}.{$type}";
            $minFiles[] = "{$file}.min.{$type}";
        }
        if (empty($this->$type)) {
            $this->$type = YII_DEBUG ? $srcFiles : $minFiles;
        }
    }

    /**
     * @inheritdoc
     */
    public function init(): void
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('js', ['yii2-dynamic-form']);
        parent::init();
    }

    /**
     * Sets the source path if empty
     * @param string $path the path to be set
     */
    protected function setSourcePath(string $path): void
    {
        if (empty($this->sourcePath)) {
            $this->sourcePath = $path;
        }
    }
}
