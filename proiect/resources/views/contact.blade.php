<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

<!-- NAVBAR -->
<header class="header">
    <div class="header_content">
        <a href="{{ url('/') }}" class="logo-navbar">
            <img src="{{ asset('Assets/logo.png') }}" alt="Academia de Handbal" class="logo-navbar-img">
            <span>
                <span class="logo-navbar-title-portocaliu">Academia de Handbal</span><br>
                <span class="logo-navbar-title-negru">Ionica Munteanu</span>
              </span>
        </a>

        <nav class="nav">
            <ul class="nav_list">
                <li class="nav_item">
                    <a href="{{ url('/ionicamunteanu.html') }}" class="nav_link">Ionica Munteanu</a>
                </li>
                <li class="nav_item">
                    <a href="{{ url('/') }}#tabara2025" class="nav_link">Tabăra 2025</a>
                </li>
                <li class="nav_item">
                    <a href="{{ url('/') }}#workshops-section" class="nav_link">Workshop</a>
                </li>
                <li class="nav_item">
                    <a href="{{ url('/sali.html') }}" class="nav_link">Săli antrenament</a>
                </li>
                <li class="nav_item">
                    <a href="{{ url('/grupe.html') }}" class="nav_link">Grupe</a>
                </li>
                <li class="nav_item">
                    <a href="{{ url('contact') }}" class="nav_link">Contact</a>
                </li>
            </ul>
        </nav>
        <a href="{{ url('/') }}#formular-intra-in-academie" class="buton-navbar">
            <img src="{{ asset('Assets/logo.png') }}" alt="logo" style="height:24px;vertical-align:middle;margin-right:8px;">
            <span>Vino ACUM <br>la handbal</span>
        </a>

        <div class="hamburger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </div>
</header>

<!-- FORMULAR -->
<section class="pagina-contact-section">
    <h2><span class="text-portocaliu"> Contactează-ne </span></h2>
    <div class="contact-grid">

        <form class="formular" action="{{ url('contact') }}" method="POST">
            @csrf
            <div class="field">
                <input id="p-nume" name="nume" type="text" placeholder="Nume*" required>
            </div>
            <div class="field">
                <input id="p-phone" name="telefon" type="tel" placeholder="Telefon*" required>
            </div>
            <div class="field">
                <input id="p-email" name="email" type="email" placeholder="Email*" required>
            </div>
            <div class="field">
                <textarea id="p-message" name="mesaj" placeholder="Mesajul tău*" required></textarea>
            </div>
            <button type="submit" class="btn trimite">Trimite</button>
        </form>

        <div class="formular-info">
            <ul class="formular-contact-list">
                <li>
                    <span class="ico" aria-hidden="true">📞</span>
                    <a href="tel:0752252367">0752.252.367</a>
                </li>
                <li>
                    <span class="ico" aria-hidden="true">✉️</span>
                    <a href="mailto:contact@academiedehandbal.ro">contact@academiedehandbal.ro</a>
                </li>
            </ul>
            <div class="social">
                <a href="#" aria-label="Facebook" class="social-btn contact-social-btn">
                    <img src="{{ asset('Assets/facebook.png') }}" alt="logo facebook">
                </a>
                <a href="#" aria-label="Instagram" class="social-btn contact-social-btn">
                    <img src="{{ asset('Assets/instagram.png') }}" alt="logo instagram">
                </a>
            </div>
            <img class="contact-logo" src="{{ asset('Assets/logo.png') }}" alt="Academia de Handbal" class="logo-navbar-img">
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer-section">
    <div class="footer-inner">
        <div class="footer-head">
            <h2 class="text-alb">Gata să începi aventura handbalului?</h2>
            <p class="text-alb">Alătură-te familiei noastre și descoperă pasiunea pentru sport!</p>
        </div>

        <div class="footer-grid">
            <nav class="footer-col">
                <ul class="footer-links">
                    <li><a href="{{ url('/ionicamunteanu.html') }}">Ionica Munteanu</a></li>
                    <li><a href="{{ url('/') }}#tabara2025">Tabăra 2025</a></li>
                    <li><a href="{{ url('/') }}#workshops-section">Workshop</a></li>
                    <li><a href="{{ url('/sali.html') }}">Săli antrenament</a></li>
                    <li><a href="{{ url('/grupe.html') }}">Grupe</a></li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                </ul>
            </nav>

            <div class="footer-col">
                <ul class="contact-list">
                    <li>
                  <span class="ico" aria-hidden="true">
                    <img src="{{ asset('Assets/telefon.png') }}" alt="telefon">
                  </span>
                        <a href="tel:0752252367">0752.252.367</a>
                    </li>
                    <li>
                  <span class="ico" aria-hidden="true">
                    <img src="{{ asset('Assets/email.png') }}" alt="email">
                  </span>
                        <a href="mailto:contact@academiedehandbal.ro">contact@academiedehandbal.ro</a>
                    </li>
                </ul>

                <div class="social">
                    <a href="#" aria-label="Facebook" class="social-btn">
                        <img src="{{ asset('Assets/facebook.png') }}" alt="logo facebook">
                    </a>
                    <a href="#" aria-label="Instagram" class="social-btn">
                        <img src="{{ asset('Assets/instagram.png') }}" alt="logo instagram">
                    </a>
                </div>
            </div>

            <nav class="footer-col">
                <ul class="footer-links">
                    <li><a href="#">Termeni și condiții</a></li>
                    <li><a href="#">Politica de confidențialitate</a></li>
                    <li><a href="#">Cookies</a></li>
                </ul>
            </nav>
        </div>
    </div>
</footer>

<script src="{{ asset('script.js') }}" defer></script>
</body>
</html>
