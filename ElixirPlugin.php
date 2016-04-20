<?php

namespace Craft;

class ElixirPlugin extends BasePlugin
{
    /**
     * Define the plugins name.
     *
     * @return string
     */
    public function getName()
    {
        return 'Elixir';
    }

    /**
     * Define the plugins version.
     *
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * Define the schema version.
     * 
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * Get the Developer.
     *
     * @return string
     */
    public function getDeveloper()
    {
        return 'Venveo';
    }

    /**
     * Define the developers website.
     *
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://www.venveo.com';
    }

    /**
     * Define the plugins settings.
     *
     * @return array
     */
    public function defineSettings()
    {
        return [
            'buildPath' => [
                'type' => AttributeType::String,
                'default' => 'build'
            ],
            'publicPath' => [
                'type' => AttributeType::String,
                'default' => 'public'
            ],
        ];
    }

    /**
     * Get the settings template.
     *
     * @return string
     */
    public function getSettingsHtml()
    {
        return craft()->templates->render('elixir/settings', array(
            'settings' => $this->getSettings()
        ));
    }
}