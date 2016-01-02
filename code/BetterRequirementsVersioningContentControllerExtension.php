<?php
class BetterRequirementsVersioningContentControllerExtension extends Extension
{

    public function onBeforeInit()
    {
        Requirements::set_backend(new BetterRequirementsVersioning_Backend());
    }
}
