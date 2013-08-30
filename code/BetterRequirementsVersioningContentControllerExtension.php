<?php
class BetterRequirementsVersioningContentControllerExtension extends Extension {

	function onBeforeInit() {
		Requirements::set_backend(new BetterRequirementsVersioning_Backend());
	}

}