<?php

use Illuminate\Database\Seeder;
use ICMS\Models\Menu;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Menu::create(['name' => 'admin']);
        $web = Menu::create(['name' => 'web']);
        $apps = Menu::create(['name' => 'apps']);

        $menu_admin = [
        	['name' => '<i class="fa fa-home"></i> Dashboard', 'options' => ['type' => 'url', 'target' => 'self', 'route' => 'admin.home']],
        	['name' => '<i class="fa fa-newspaper-o"></i> Posts', 'options' => ['type' => 'url', 'target' => 'self', 'route' => 'admin.post']],
        	['name' => '<i class="fa fa-file"></i> Page', 'options' => ['type' => 'url', 'target' => 'self', 'route' => 'admin.page']],
        	['name' => '<i class="fa fa-calendar"></i> Events', 'children' => [
        		['name' => 'Events', 'options' => ['type' => 'url', 'target' => 'self', 'route' => 'admin.event']],
        		['name' => 'Upcoming Events', 'options' => ['type' => 'url', 'target' => 'self', 'route' => 'admin.event.upcomming']],
        	]],
        	['name' => '<i class="fa fa-youtube-play"></i> Media', 'children' => [
        		['name' => 'Document', 'options' => ['type' => 'url', 'target' => 'self', 'route' => 'admin.media']],
        		['name' => 'Image', 'options' => ['type' => 'url', 'target' => 'self']],
        		['name' => 'Music', 'options' => ['type' => 'url', 'target' => 'self']],
        		['name' => 'Video', 'options' => ['type' => 'url', 'target' => 'self']],
        	]],
        	['name' => '<i class="fa fa-bell-o"></i> Notification', 'options' => ['type' => 'url', 'target' => 'self', 'route' => 'admin.notify']],
        	['name' => '<i class="fa fa-cogs"></i> Settings', 'children' => [
        		['name' => 'Application', 'options' => ['type' => 'url', 'target' => 'self']],
        		['name' => 'Packages', 'options' => ['type' => 'url', 'target' => 'self']],
        		['name' => 'Users', 'options' => ['type' => 'url', 'target' => 'self', 'route' => 'admin.users']],
        	]],
        ];

        $menu_web = [
            ['name' => 'Home', 'options' => ['type' => 'url', 'target' => 'self', 'route' => 'app.home']],
            ['name' => 'Contact Us', 'options' => ['type' => 'url', 'target' => 'self', 'route' => 'app.about']],
        ];

        $admin->makeTree($menu_admin);
        $web->makeTree($menu_web);
    }
}
