<div class="block primary">
    <div class="container">
        <?php echo SpeakerData::get_speaker($_GET["speaker"])->blurb; ?>
		<?php if (SpeakerData::get_speaker($_GET["speaker"])->audio): ?>
		<h2>Audio</h2>
		<p>Download: <a type="audio/mpeg" rel="enclosure" href="<?php echo SpeakerData::get_speaker($_GET["speaker"])->audio; ?>">
        <?php echo SpeakerData::get_speaker($_GET["speaker"])->title; ?></a></p>
		<object type="application/x-shockwave-flash" data="http://huffduffer.com/flash/player.swf?soundFile=<?php echo SpeakerData::get_speaker($_GET["speaker"])->audio; ?>" width="290" height="24">
			<param name="movie" value="http://huffduffer.com/flash/player.swf?soundFile=<?php echo SpeakerData::get_speaker($_GET["speaker"])->audio; ?>" />
			<param name="wmode" value="transparent" />
			<audio controls src="<?php echo SpeakerData::get_speaker($_GET["speaker"])->audio; ?>">
				<?php if (SpeakerData::get_speaker($_GET["speaker"])->huffduffer): ?>
				<a href="http://huffduffer.com/dConstruct/<?php echo SpeakerData::get_speaker($_GET["speaker"])->huffduffer; ?>">
				<?php echo SpeakerData::get_speaker($_GET["speaker"])->title; ?> on Huffduffer
				</a>
				<?php endif; ?>
			</audio>
		</object>
		<?php if (SpeakerData::get_speaker($_GET["speaker"])->huffduffer): ?>
		<p><a href="http://huffduffer.com/add/<?php echo SpeakerData::get_speaker($_GET["speaker"])->huffduffer; ?>">Huffduff it</a></p>
		<?php endif; ?>
		<?php endif; ?>
    </div>
</div>