<?php
class BetterRequirementsVersioning_Backend extends Requirements_Backend
{

    /**
     * Finds the path for specified file.
     *
     * @param string $fileOrUrl
     * @return string|boolean
     */
    protected function path_for_file($fileOrUrl)
    {
        if (preg_match('{^//|http[s]?}', $fileOrUrl)) {
            return $fileOrUrl;
        } elseif (Director::fileExists($fileOrUrl)) {
            $path = pathinfo($fileOrUrl);
            $absoluteFile = Director::getAbsFile(preg_replace('/([^\?]*)?.*/', '$1', $fileOrUrl));
            $v = '.'.filemtime($absoluteFile).'.';

            $prefix = Director::baseURL();
            $fileOrUrl = $path['dirname'].'/'.str_replace('.', $v, $path['basename']);
            return "{$prefix}{$fileOrUrl}";
        } else {
            return false;
        }
    }
}
