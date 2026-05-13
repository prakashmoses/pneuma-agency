<?php
</section>

<section class="contact" id="contact">
<div class="container">
<div class="section-title">
<h2>Contact Us</h2>
<p>Get a free insurance consultation today.</p>
</div>

<?php if(isset($success)) { ?>
<div class="success-message"><?php echo $success; ?></div>
<?php } ?>

<form method="POST" action="">
<div class="form-grid">
<input type="text" name="name" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email Address" required>
<input type="text" name="phone" placeholder="Phone Number" required>

<select name="insurance" required>
<option value="">Select Insurance Type</option>
<option>Health Insurance</option>
<option>Life Insurance</option>
<option>Vehicle Insurance</option>
<option>Business Insurance</option>
</select>
</div>

<textarea name="message" rows="5" placeholder="Your Message"></textarea>

<button type="submit" class="btn-primary">Submit Enquiry</button>
</form>
</div>
</section>

<footer>
<div class="container footer-grid">
<div>
<h2>Pneuma Agency</h2>
<p>Trusted Insurance • Secure Future</p>
</div>

<div>
<h4>Quick Links</h4>
<ul>
<li><a href="#home">Home</a></li>
<li><a href="#services">Services</a></li>
<li><a href="#plans">Plans</a></li>
</ul>
</div>

<div>
<h4>Contact</h4>
<p>Phone: +91 9876543210</p>
<p>Email: info@pneumaagency.com</p>
</div>
</div>

<div class="copyright">
© 2026 Pneuma Agency. All Rights Reserved.
</div>
</footer>

<script src="script.js"></script>
</body>
</html>

