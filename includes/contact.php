<section class="block">
    <div class="split lead">
        <hgroup class="container">
            <h2>Email us</h2>
        </hgroup>
    </div>
    <div class="split primary">
        <div class="container">
            <?php if ($_GET["result"] == 'thanks'): ?>
                
            <p>Thanks for getting in touch. We'll get back to you shortly.</p>
            
			<?php else: ?>
            
            <form action="/contact" method="post" accept-charset="utf-8" class="contact">
				<div class="container">
					<label for="name">
						Your name
<?php if(!empty(DconFrame::$errors['name'])) { echo "<em>This ".DconFrame::$errors['name']."</em>"; } ?>
					</label>
					<input type="text" name="name" id="name" value="<?php if(!empty($_POST['name'])) { echo htmlspecialchars($_POST['name']); } ?>" />
				</div>
				<div class="container">
					<label for="email">
						Your email address
<?php if(!empty(DconFrame::$errors['email'])) { echo "<em>This ".DconFrame::$errors['email']."</em>"; } ?>
					</label>
					<input type="text" name="email" id="email" value="<?php if(!empty($_POST['email'])) { echo htmlspecialchars($_POST['email']); } ?>" />
				</div>
				<div class="container">
					<label for="message">
						Your message
<?php if(!empty(DconFrame::$errors['message'])) { echo "<em>This ".DconFrame::$errors['message']."</em>"; } ?>
					</label>
					<textarea name="message" id="message" rows="10" cols="35"><?php if(!empty($_POST['name'])) { echo htmlspecialchars($_POST['message']); } ?></textarea>
				</div>
			
				<div class="container">
					<button type="submit" name="submit">Send</button>
				</div>
			</form>
			<?php endif; ?>
			
        </div>
    </div>
</section>