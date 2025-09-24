<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handbal Ionica Munteanu</title>
    <!-- CSS -->
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
                <li class="nav_item"><a href="{{ url('/ionicamunteanu.html') }}" class="nav_link">Ionica Munteanu</a></li>
                <li class="nav_item"><a href="{{ url('/') }}#tabara2025" class="nav_link">Tabăra 2025</a></li>
                <li class="nav_item"><a href="{{ url('/') }}#workshops-section" class="nav_link">Workshop</a></li>
                <li class="nav_item"><a href="{{ url('/sali.html') }}" class="nav_link">Săli antrenament</a></li>
                <li class="nav_item"><a href="{{ url('/grupe.html') }}" class="nav_link">Grupe</a></li>
                <li class="nav_item"><a href="{{ url('/contact') }}" class="nav_link">Contact</a></li>
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

<!-- PAGINA PRINCIPALA SITE -->
<div class="pagina-principala-section">
    <img id="background" src="{{ asset('Assets/background2.jpg') }}" alt="background">
    <div class="pagina-principala-container">
        <div><img class="logo" src="{{ asset('Assets/logo.png') }}" alt="logo" height="150" width="150"></div>
        <div class="title1"><h4 class="texte">Academia de Handbal</h4></div>
        <div class="title2"><h2 class="texte">Ionica Munteanu</h2></div>
        <div><a href="#formular-intra-in-academie" class="button1">Vino ACUM la handbal</a></div>
    </div>
    <img id="hand-ball" src="{{ asset('Assets/hand_with_ball.png') }}" alt="hand with ball">
</div>

<!-- IONICA MUNTEANU -->
<section class="row">
    <div class="text">
        <h2><span class="text-negru">Ionica</span><br><span class="text-portocaliu">Munteanu</span></h2>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <a href="{{ url('/ionicamunteanu') }}" class="btn">Citeste mai mult</a>
    </div>
    <div class="image">
        <img src="{{ asset('Assets/Ionica.jpg') }}" alt="Ionica Munteanu" width="300" height="300">
    </div>
</section>

<!-- TABARA 2025 -->
<section class="row reverse" id="tabara2025">
    <div class="image"><img src="{{ asset('Assets/minge.jpg') }}" alt="Minge handbal"></div>
    <div class="text">
        <h2><span class="text-negru">Tabara</span><br><span class="text-portocaliu">2025</span></h2>
        <h4>27-30 Decembrie</h4>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
        <a href="{{ url('/tabara') }}" class="btn">Citeste mai mult</a>
    </div>
</section>

<!-- WORKSHOPURI -->
<section class="workshops-section" id="workshops-section">
    <div class="workshops">
        <div class="prezentare-workshop">
            <div class="workshop__content">
                <h2>Workshop handbal</h2>
                <ul class="bullets">
                    <li>&#8226; Tehnici avansate de handbal</li>
                    <li>&#8226; Strategii de joc</li>
                    <li>&#8226; Antrenament personalizat</li>
                </ul>
                <div class="price">300 RON</div>
                <a class="buton-workshop" href="#formular-intra-in-academie">Rezervă locul</a>
            </div>
        </div>
    </div>
</section>

<!-- SALI ANTRENAMENT -->
<section class="sali-section">
    <div class="sali-antrenament">
        <div class="sali-head"><h1 class="text-negru">Săli antrenament</h1></div>
        <div class="sala1">
            <img src="{{ asset('Assets/sala-handbal.jpg') }}" alt="Sala Handbal">
            <p class="prezentare-scoli"><span class="nume-scoli">Școala 20</span><br>Ut enim ad minim veniam...</p>
            <a href="{{ url('/sali') }}" class="button2">Vezi detalii</a>
        </div>
        <div class="sala2">
            <img src="{{ asset('Assets/sala-handbal.jpg') }}" alt="Sala Handbal">
            <p class="prezentare-scoli"><span class="nume-scoli">Școala 103</span><br>Ut enim ad minim veniam...</p>
            <a href="{{ url('/sali') }}" class="button2">Vezi detalii</a>
        </div>
    </div>
</section>

<!-- GRUPE -->
<section class="grupe-section">
    <div class="grupe-content">
        <h3>Grupe</h3>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <a href="{{ url('/grupe') }}" class="grupe-btn">Program</a>
    </div>
    <img class="grupe-img" src="{{ asset('Assets/grupe-poza.webp') }}" alt="Grupe handbal">
</section>

<!-- FORMULAR -->
<section class="formular-section" id="formular-intra-in-academie">
    <h2><span class="text-negru text-formular">Intră în </span> <span class="text-portocaliu">academie</span></h2>
    <h4 class="text-formular">Părinte</h4>
    <form class="form-grid" action="{{ url('/submit-form') }}" method="POST">
        @if(session('success'))
            <dialog open>
                <p>{{ session('success') }}</p>
            </dialog>
        @endif
        @csrf
        <div class="field"><input id="p-nume" name="p-nume" style="@error('p-nume') border: 2px solid red; @enderror" type="text" placeholder="Nume*" value="{{ old('p-nume') }}" required>@error('p-nume')<div class="error">Completati numele</div>@enderror
        </div>
        <div class="field"><input id="p-prenume" name="p-prenume" style="@error('p-prenume') border: 2px solid red; @enderror" type="text" placeholder="Prenume*" value="{{ old('p-prenume') }}" required>@error('p-prenume')<div class="error">Completati prenumele</div>@enderror</div>
        <div class="field"><input id="p-email" name="p-email" style="@error('p-email') border: 2px solid red; @enderror" type="email" placeholder="Email*" value="{{ old('p-email') }}" required>@error('p-email')<div class="error">Completati un email valid</div>@enderror</div>
        <div class="field"><input id="p-phone" name="p-phone" style="@error('p-phone') border: 2px solid red; @enderror" type="tel" placeholder="Telefon*" value="{{ old('p-phone') }}" required>@error('p-phone')<div class="error">Completati un numar de telefon valid</div>@enderror</div>

        <h4 class="grid-full text-formular">Copil</h4>
        <div class="field"><input id="c-nume" name="c-nume" style="@error('c-nume') border: 2px solid red; @enderror" type="text" placeholder="Nume*" value="{{ old('c-nume') }}" required>@error('c-nume')<div class="error">Completati numele copilului</div>@enderror</div>
        <div class="field"><input id="c-data" name="c-data" style="@error('c-data') border: 2px solid red; @enderror" type="text" placeholder="Data nașterii*" value="{{ old('c-data') }}" required>@error('c-data')<div class="error">Completati o data de nastere valida</div>@enderror</div>

        <div class="grid-full locatii" style="{{ $errors->has('locatii') ? 'border: 2px solid red; padding: 7px; border-radius: 6px;' : '' }}">
            <h4>Locație de antrenament preferată</h4>
            <label class="check"><input type="checkbox" name="locatii[]" value="20"><span class="scoli-locatii">Școala 20</span></label>
            <label class="check"><input type="checkbox" name="locatii[]" value="103"><span class="scoli-locatii">Școala 103</span></label>
            @error('locatii')
                <div class="error">Alegeti minimum o locatie</div>
            @enderror
        </div>

        <div class="grid-full">
            <button class="btn btn-formular" type="submit">Înscrie-te</button>
        </div>
    </form>
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
                    <li><a href="{{ url('/ionicamunteanu') }}">Ionica Munteanu</a></li>
                    <li><a href="{{ url('/tabara') }}">Tabăra 2025</a></li>
                    <li><a href="{{ url('/workshop') }}">Workshop</a></li>
                    <li><a href="{{ url('/sali') }}">Săli antrenament</a></li>
                    <li><a href="{{ url('/grupe') }}">Grupe</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
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
                    <a href="#" class="social-btn"><img src="{{ asset('Assets/facebook.png') }}" alt="Facebook"></a>
                    <a href="#" class="social-btn"><img src="{{ asset('Assets/instagram.png') }}" alt="Instagram"></a>
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

<!-- JS -->
<script src="{{ asset('script.js') }}"></script>

</body>
</html>
