<?php
session_start();
$submission_message = '';
$contact_email = 'hello@blestradio.com';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : 'Unknown';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : 'Unknown';
    $role = isset($_POST['role']) ? htmlspecialchars(trim($_POST['role'])) : 'N/A';

    $to = $contact_email;
    $subject = "New Blest Radio Interest: Role - " . $role;
    $message_body = "A new user has submitted the interest form.\n\n"
             . "Name: " . $name . "\n"
             . "Email: " . $email . "\n"
             . "Role of Interest: " . $role . "\n\n"
             . "Please follow up with this prospective " . $role . ".";

    $headers = 'From: BlestRadio Website <noreply@blestradio.com>' . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message_body, $headers)) {
        $_SESSION['form_status'] = 'success';
        $_SESSION['form_name'] = $name;
        $_SESSION['form_role'] = $role;
        $_SESSION['form_email_to'] = $contact_email;
    } else {
        $_SESSION['form_status'] = 'error';
        $_SESSION['form_email_to'] = $contact_email;
    }
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_SESSION['form_status'])) {
    if ($_SESSION['form_status'] == 'success') {
        $name = isset($_SESSION['form_name']) ? htmlspecialchars($_SESSION['form_name']) : 'Friend';
        $role = isset($_SESSION['form_role']) ? htmlspecialchars($_SESSION['form_role']) : 'applicant';
        $email_to = isset($_SESSION['form_email_to']) ? htmlspecialchars($_SESSION['form_email_to']) : $contact_email;
        $submission_message = '<div class="alert success">✅ **Success!** Thank you, **' . $name . '**! Your information has been sent to ' . $email_to . '.</div>';
    } elseif ($_SESSION['form_status'] == 'error') {
        $email_to = isset($_SESSION['form_email_to']) ? htmlspecialchars($_SESSION['form_email_to']) : $contact_email;
        $submission_message = '<div class="alert error">❌ **Error!** Please try again or email us at ' . $email_to . '.</div>';
    }
    unset($_SESSION['form_status'], $_SESSION['form_name'], $_SESSION['form_role'], $_SESSION['form_email_to']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blest Radio - Independent Music & Citizen Journalism</title>
    
    <link rel="stylesheet" href="assets/css/style.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="hero">
        <div class="hero-content">
            <h1>BLEST RADIO</h1>
            <p>🎵 Promoting HUMAN Independent Music Artists & Citizen Journalism 🎙️</p>
            <p>24/7 Radio Station for Indie Artists and Aspiring Radio Hosts</p>
            <div>
                <a href="#about" class="cta-btn">Learn More</a>
                <a href="#features" class="cta-btn secondary">Explore Features</a>
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <h2>What We Offer</h2>
        <div class="feature-grid">
            <div class="feature-card">
                <div class="feature-icon">🎵</div>
                <h3>Independent Artists</h3>
                <p>Showcase your music to a global audience. We celebrate human creativity and authentic artistry.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎙️</div>
                <h3>Radio Hosts Wanted</h3>
                <p>Calling all yappers! Join our team of radio hosts and share your voice with the world.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📻</div>
                <h3>24/7 Streaming</h3>
                <p>Non-stop music, playlists, and artist showcases. Tune in anytime, anywhere.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🗞️</div>
                <h3>Citizen Journalism</h3>
                <p>Real stories from real people. We promote authentic voices and independent reporting.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🌍</div>
                <h3>Global Community</h3>
                <p>Connect with artists, listeners, and creators from around the world.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">✨</div>
                <h3>Human First</h3>
                <p>We celebrate human creativity, not AI-generated content. Real art, real voices.</p>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-content">
            <h2>About Blest Radio</h2>
            <p>Blest Radio is a <span class="highlight">24/7 radio station</span> dedicated to promoting independent music artists and citizen journalism.</p>
            <p>We believe in the power of <span class="highlight">human creativity</span> and authentic storytelling.</p>
            <h3 class="live-status">( ( ( <span class="status-green">Spring 2027 LIVE ON AIR</span> ) ) )</h3>       
        </div>
    </section>

    <section class="cta-section intake-form-section">
        <div class="about-content">
            <h2>Ready to Join Us?</h2>
            <p>We are starting small and local in the <span class="highlight-local">Raleigh, NC area</span>.</p>

            <?php echo $submission_message; ?>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="intake-form">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group role-selection">
                    <label>I am interested in becoming a:</label>
                    <div class="radio-options">
                        <input type="radio" id="role-artist" name="role" value="Artist" required>
                        <label for="role-artist" class="radio-label">Artist</label>

                        <input type="radio" id="role-host" name="role" value="Host">
                        <label for="role-host" class="radio-label">Host</label>

                        <input type="radio" id="role-both" name="role" value="Both">
                        <label for="role-both" class="radio-label">Both</label>
                    </div>
                </div>

                <button type="submit" class="cta-btn">Let's Learn Together</button>
            </form>
        </div>
    </section>

    <footer>
        <p>© 2026 Blest Radio. All rights reserved.</p>
        <p>Promoting HUMAN Independent Music Artists & Citizen Journalism</p>
    </footer>
</body>
</html>