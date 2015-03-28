<?php defined('APPLICATION') or exit();
/**
 * Copyright (C) 2015  Austin S. (Shadowdare)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

// An associative array of information about this plugin.
$PluginInfo['ResponsiveVideos'] = array(
    'Name' => 'Responsive Videos',
    'Description' => 'Makes video preview and embeds responsive to fit the width of the page.',
    'Version' => '1.0.0',
    'Author' => 'Austin S. (Shadowdare)',
    'AuthorUrl' => 'http://vanillaforums.org/profile/addons/16014/Shadowdare',
    'License' => 'GNU GPL2',
    'MobileFriendly' => true
);

class ResponsiveVideosPlugin extends Gdn_Plugin {
    /**
     * Add CSS and JS files to a controller.
     *
     * @param Gdn_Controller $Sender
     */
    private function IncludeAssets($Sender) {
        $Sender->AddCssFile('responsivevideos.css', 'plugins/ResponsiveVideos');
        $Sender->AddJsFile('responsivevideos.js', 'plugins/ResponsiveVideos');
    }

    /**
     * Include assets in the Vanilla app's DiscussionController.
     *
     * @param DiscussionController $Sender
     */
    public function DiscussionController_Render_Before($Sender) {
        $this->IncludeAssets($Sender);
    }

    /**
     * Include assets in the Vanilla app's PostController.
     *
     * @param PostController $Sender
     */
    public function PostController_Render_Before($Sender) {
        $this->IncludeAssets($Sender);
    }

    /**
     * Include assets in the Dashboard app's ActivityController.
     *
     * @param ActivityController $Sender
     */
    public function ActivityController_Render_Before($Sender) {
        $this->IncludeAssets($Sender);
    }

    /**
     * Include assets in the Dashboard app's ProfileController.
     *
     * @param ProfileController $Sender
     */
    public function ProfileController_Render_Before($Sender) {
        $this->IncludeAssets($Sender);
    }

    /**
     * Include assets in the Basic Pages app's PageController.
     *
     * @param PageController $Sender
     */
    public function PageController_Render_Before($Sender) {
        $this->IncludeAssets($Sender);
    }

    /**
     * Include assets in the Articles app's ArticlesController.
     *
     * @param ArticlesController $Sender
     */
    public function ArticlesController_Render_Before($Sender) {
        $this->IncludeAssets($Sender);
    }

    /**
     * Include assets in the Articles app's ArticleController.
     *
     * @param ArticleController $Sender
     */
    public function ArticleController_Render_Before($Sender) {
        $this->IncludeAssets($Sender);
    }

    /**
     * Include assets in the Articles app's ComposeController.
     *
     * @param ComposeController $Sender
     */
    public function ComposeController_Render_Before($Sender) {
        $this->IncludeAssets($Sender);
    }
}
