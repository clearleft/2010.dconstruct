<div class="vcard">
<div class="horizontal-container">
    <div class="box bruckner horizontal hidden"></div>
    <div class="box fill first horizontal">
        <div class="content image <?php echo $_GET["speaker"] ?>">
            <img src="<?php echo DconFrame::$media_url_2; ?>/i/speakers/profile/<?php echo $_GET["speaker"] ?>.jpg" alt="" class="photo">
        </div>
    </div>
    <div class="box fill second horizontal">
    
    </div>
    <div class="box fill third horizontal">
        <div class="content">
            <div class="bottom">
                <?php $speaker = SpeakerData::get_speaker($_GET['speaker']); ?>
                <h1 class="fn"><?php echo $speaker->first_name; ?> <b><?php echo $speaker->last_name; ?></b></h1>
                <?php if (!empty($speaker->title)): ?>
                <h2><?php echo $speaker->title; ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div><!-- /.horizontal-container -->
<div class="box fill fifth vertical">
    <div class="content speaker-profile">
        <div class="description">
            <?php echo $speaker->mini_bio; ?>
        </div>
    </div>
</div>
<div class="box fill sixth vertical">
    <div class="content speaker-profile">
        <div>
            <ul class="social full">
                <?php if (!empty($speaker->website)): ?>
                <li class="website"><a href="http://<?php echo $speaker->website; ?>" class="url"><?php echo $speaker->website; ?></a></li>
                <?php endif; ?>
                <?php if (!empty($speaker->twitter_name)): ?>
                <li class="twitter"><a href="http://twitter.com/<?php echo $speaker->twitter_name; ?>">@<?php echo $speaker->twitter_name; ?></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
</div>