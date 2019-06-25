<?php

namespace BPN\H5pUpdates\Editor;

class UpdatedH5peditor extends \H5peditor
{

    /**
     * Adds the path to the presave.js file to the list of dependency assets for the library
     *
     * @param array  $assets
     * @param array  $library
     * @param string $prefix
     */
    public function addPresaveFile(&$assets, $library, $prefix = '')
    {
        $path = 'libraries' . '/' . H5PCore::libraryToString($library, true);
        if (array_key_exists('path', $library)) {
            $path = $library['path'];
        }
        $version = "?ver={$library['majorVersion']}.{$library['minorVersion']}.{$library['patchVersion']}";
        if (array_key_exists('version', $library)) {
            $version = $library['version'];
        }

        $assets['scripts'][] = (object)array(
            'path'    => $prefix . '/' . $path . '/' . 'presave.js',
            'version' => $version,
        );
    }
}
