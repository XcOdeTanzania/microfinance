<?php

namespace App\Http\ViewComposers;

class SidebarViewComposer {

	public function compose($view) {
        // Get config from config/sidebar.php
		$sidebarMenu = app('config')->get('sidebar');
        // make it available to Blade
		$view->with('sidebarMenu', $sidebarMenu);
	}
}
