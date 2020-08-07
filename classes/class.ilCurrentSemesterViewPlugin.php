<?php


class ilCurrentSemesterViewPlugin extends ilUserInterfaceHookPlugin
{

    /**
     * Get Plugin Name. Must be same as in class name il<Name>Plugin
     * and must correspond to plugins subdirectory name.
     * Must be overwritten in plugin class of plugin
     * @return    string    Plugin Name
     */
    public function getPluginName()
    {
        return "CurrentSemesterView";
    }
}