<ul id="speaker-list" class="speaker-list">
    <?php foreach(SpeakerData::get_data() as $speaker) {
        if (!$speaker->is_workshop) { ?>
    <li class="<?php if($_GET["speaker"] == $speaker->id): ?>current<?php else: ?>vcard<?php endif; ?>"><a href="<?php echo $speaker->full_url; ?>" class="url fn"><?php echo $speaker->first_name; ?> <b><?php echo $speaker->last_name; ?></b></a></li>
    <?php } 
    }
    ?>
</ul>
