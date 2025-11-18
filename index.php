<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blest Radio - Independent Music & Citizen Journalism</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --background-color: #ffffff;
            --text-color: #2c3e50;
            --accent-color: #007bff;
            --button-text-color: #ffffff;
            --header-bg: #ecf0f1;
            --section-bg: #f8f8f8;
            --box-shadow: 0 4px 8px rgba(0,0,0,0.08);
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        h1, h2, h3 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
            padding: 100px 20px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="%23ffffff"></path><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="%23ffffff"></path><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%23ffffff"></path></svg>') no-repeat bottom;
            background-size: cover;
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            letter-spacing: 8px;
        }

        .hero p {
            font-size: 1.3em;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
        }

        .cta-btn {
            display: inline-block;
            padding: 15px 40px;
            background-color: #ff6b6b;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1em;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            margin: 10px;
        }

        .cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
            background-color: #ff5252;
        }

        .cta-btn.secondary {
            background-color: transparent;
            border: 2px solid white;
        }

        .cta-btn.secondary:hover {
            background-color: white;
            color: #667eea;
        }

        /* Features Section */
        .features {
            padding: 80px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .features h2 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 50px;
            color: var(--text-color);
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .feature-card {
            background-color: var(--section-bg);
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: var(--box-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }

        .feature-icon {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 1.5em;
            margin-bottom: 15px;
            color: var(--accent-color);
        }

        .feature-card p {
            color: #666;
            line-height: 1.8;
        }

        /* About Section */
        .about {
            background-color: var(--section-bg);
            padding: 80px 20px;
            text-align: center;
        }

        .about-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .about h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        .about p {
            font-size: 1.2em;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .highlight {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 20px;
            text-align: center;
        }

        .cta-section h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .cta-section p {
            font-size: 1.3em;
            margin-bottom: 30px;
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 30px 20px;
        }

        footer p {
            margin: 10px 0;
        }

        footer a {
            color: #667eea;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2em;
                letter-spacing: 4px;
            }

            .hero p {
                font-size: 1.1em;
            }

            .features h2,
            .about h2,
            .cta-section h2 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
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

    <!-- Features Section -->
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

    <!-- About Section -->
    <section class="about" id="about">
        <div class="about-content">
            <h2>About Blest Radio</h2>
            <p>Blest Radio is a <span class="highlight">24/7 radio station</span> dedicated to promoting independent music artists and citizen journalism.</p>
            <p>We believe in the power of <span class="highlight">human creativity</span> and authentic storytelling. Our platform gives voice to indie artists and aspiring radio hosts who want to share their passion with the world.</p>
            <p>Stay tuned for streams, playlists, artist showcases, and real conversations that matter.</p>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <h2>Ready to Join Us?</h2>
        <p>Whether you're an artist, a radio host, or just love great music...</p>
        <a href="mailto:contact@blestradio.com" class="cta-btn">Get In Touch</a>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2025 Blest Radio. All rights reserved.</p>
        <p>Promoting HUMAN Independent Music Artists & Citizen Journalism</p>
    </footer>
</body>
</html>