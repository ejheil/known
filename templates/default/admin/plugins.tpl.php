<div class="row">

    <div class="span10 offset1">
	<?=$this->draw('admin/menu')?>
        <h1>Plugins</h1>

        <div class="explanation">
            <p>
                The plugins section allows you to add features to your site. These include new kinds of content, options to syndicate content to different sites,
                and features to change the way Known behaves. To enable or disable a plugin, just click its enable or
                disable button.
            </p>
        </div>
        <?php

            if (!empty($vars['plugins_stored']) && is_array($vars['plugins_stored'])) {
                foreach($vars['plugins_stored'] as $shortname => $plugin) {
                    $plugin['shortname'] = $shortname;
                    echo $this->__(array('plugin' => $plugin))->draw('admin/plugins/plugin');
                }
            }

        ?>
    </div>

</div>