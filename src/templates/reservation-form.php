<section class="reservation_wrapper">
			<h3>Table Reservation</h3>
			<form method="post" class="reservation_form">
				<div class="contact_field">
					<input type="text" name="name" placeholder="Name" required>
				</div>
				<div class="contact_field">
					<input type="datetime-local" name="date" placeholder="Date" step="300" required>
				</div>
				<div class="contact_field">
					<input type="email" name="email" placeholder="E-mail">
				</div>
				<div class="contact_field">
					<input type="tel" name="phone" placeholder="Phone Number" required>
				</div>
				<div class="contact_field">
					<textarea name="message" placeholder="Message here" required></textarea>
				</div>
				<div class="contact_field">
					<div class="g-recaptcha" data-sitekey="6Lf2C6kUAAAAALwDF9J4eRxKXVJIklC29nGNzd53
"></div>
					<input type="submit" name="reservation" class="form_submit" value="Send">
					<input type="hidden" name="hidden" value="1" class="form_submit">
				</div>
			</form>
</section>