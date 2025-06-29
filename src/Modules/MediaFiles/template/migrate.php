<?php global $loaded_profile; ?>
<div class="option-section media-files-options">
  <label class="media-files checkbox-label" for="media-files">
    <input type="checkbox" name="media_files" value="1" data-available="1" id="media-files" <?php echo (isset($loaded_profile['media_files']) ? ' checked="checked"' : ''); ?> />
    <?php _e('Media Files', 'wp-sync-db-media-files'); ?>
  </label>
  <div class="indent-wrap expandable-content">
    <ul>
      <li id="remove-local-media-list-item">
        <label for="remove-local-media" class="remove-local-media">
          <input type="checkbox" name="remove_local_media" value="1" id="remove-local-media" <?php echo (isset($loaded_profile['remove_local_media']) ? ' checked="checked"' : ''); ?> />
          <?php _e('Remove <span class="remove-scope-1">local</span> media files that are not found on the <span class="remove-scope-2">remote</span> site', 'wp-sync-db-media-files'); ?>
        </label>
      </li>
    </ul>
  </div>
</div>
