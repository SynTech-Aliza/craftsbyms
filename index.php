<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="assets/img/white-logo.png">
<title>Crafts by M's — Handcrafted with Love</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Karla:wght@400;500;600;700&family=Caveat:wght@500;600;700&display=swap" rel="stylesheet">
<style>
  :root{
    --cream:#F4ECE2;
    --cream-deep:#EEE2D2;
    --white:#FFFDFA;
    --ink:#4A3238;
    --ink-soft:#7A5C63;
    --mauve:#8B4A5C;
    --mauve-deep:#6E3948;
    --rose:#C17A8E;
    --rose-soft:#D99BAC;
    --blush:#EEDAD5;
    --gold:#D98E4A;
    --gold-deep:#C06A2C;
    --green:#7C8B5E;
    --green-deep:#5E6E45;
    --line: rgba(139,74,92,0.28);
    --shadow: 0 20px 45px -25px rgba(110,57,72,0.35);
  }
  *{margin:0;padding:0;box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{
    font-family:'Karla', sans-serif;
    color:var(--ink);
    background:var(--white);
    line-height:1.6;
    -webkit-font-smoothing:antialiased;
    overflow-x:hidden;
  }
  img,svg{display:block;max-width:100%;}
  a{color:inherit; text-decoration:none;}
  ul{list-style:none;}
  h1,h2,h3{font-family:'Fraunces', serif; color:var(--mauve-deep); font-weight:600; letter-spacing:-0.01em;}
  .wrap{ max-width:1180px; margin:0 auto; padding:0 32px; }
  .eyebrow{
    font-family:'Karla', sans-serif;
    font-weight:700;
    letter-spacing:0.14em;
    text-transform:uppercase;
    font-size:13px;
    color:var(--rose);
  }
  .script{ font-family:'Caveat', cursive; }
  :focus-visible{ outline:2px solid var(--mauve); outline-offset:3px; border-radius:4px; }

  /* ---------- stitched divider (signature element) ---------- */
  .stitch{
    width:100%;
    height:22px;
    overflow:visible;
  }
  .stitch path{
    fill:none;
    stroke:var(--rose);
    stroke-width:2.4;
    stroke-linecap:round;
    stroke-dasharray:9 11;
    stroke-dashoffset: 900;
    transition: stroke-dashoffset 1.6s cubic-bezier(.2,.7,.2,1);
  }
  .stitch.in path{ stroke-dashoffset:0; }

  /* ---------- buttons ---------- */
  .btn{
    display:inline-flex; align-items:center; justify-content:center; gap:8px;
    padding:15px 30px;
    border-radius:100px;
    font-weight:700;
    font-size:14px;
    letter-spacing:0.04em;
    text-transform:uppercase;
    cursor:pointer;
    border:1.5px solid transparent;
    transition:transform .25s ease, box-shadow .25s ease, background .25s ease, color .25s ease;
    white-space:nowrap;
  }
  .btn-solid{ background:var(--rose); color:var(--white); box-shadow:var(--shadow); }
  .btn-solid:hover{ background:var(--mauve-deep); transform:translateY(-2px); }
  .btn-outline{ background:transparent; color:var(--mauve-deep); border-color:var(--rose); }
  .btn-outline:hover{ background:var(--blush); transform:translateY(-2px); }

  /* ---------- header ---------- */
  header{
    position:sticky; top:0; z-index:100;
    background:rgba(244,236,226,0.88);
    backdrop-filter:blur(10px);
    border-bottom:1px solid var(--line);
  }
  .nav{
    display:flex; align-items:center; justify-content:space-between;
    padding:16px 32px;
    max-width:1180px; margin:0 auto;
  }
  .logo{ display:flex; align-items:center; gap:10px; }
  .logo-text{ line-height:1.05; }
  .logo-text .name{ font-family:'Caveat', cursive; font-size:26px; font-weight:700; color:var(--mauve-deep); }
  .logo-text .tag{ font-size:9px; letter-spacing:0.12em; text-transform:uppercase; color:var(--rose); display:block; }
  .nav-links{ display:flex; gap:38px; }
  .nav-links a{
    font-weight:600; font-size:14.5px; color:var(--mauve);
    position:relative; padding:4px 0;
  }
  .nav-links a::after{
    content:''; position:absolute; left:0; bottom:-2px; width:0; height:2px;
    background:var(--rose); transition:width .25s ease;
  }
  .nav-links a:hover::after{ width:100%; }
  .nav-cta{ display:flex; align-items:center; gap:18px; }
  .burger{ display:none; background:none; border:none; cursor:pointer; padding:6px; }
  .burger span{ display:block; width:24px; height:2px; background:var(--mauve-deep); margin:5px 0; transition:.3s; }

  /* ---------- hero ---------- */
  .hero{
    background:linear-gradient(180deg, var(--cream) 0%, var(--cream-deep) 100%);
    position:relative;
    overflow:hidden;
  }
  .hero .wrap{
    display:grid; grid-template-columns:1.05fr 1fr; gap:40px; align-items:center;
    padding-top:78px; padding-bottom:70px;
  }
  .hero-copy h1{
    font-size:clamp(34px, 4.6vw, 50px);
    line-height:1.08;
    margin:16px 0 20px;
  }
  .hero-copy p{
    color:var(--ink-soft);
    font-size:16.5px;
    max-width:460px;
    margin-bottom:32px;
  }
  .hero-btns{ display:flex; gap:16px; flex-wrap:wrap; }
  .hero-art{ position:relative; }
  .hero-art svg{ width:100%; height:auto; }
  .float-badge{
    position:absolute; bottom:8%; right:6%;
    width:78px; height:78px;
    animation: bob 5s ease-in-out infinite;
  }
  @keyframes bob{ 0%,100%{ transform:translateY(0) rotate(0deg);} 50%{ transform:translateY(-10px) rotate(4deg);} }

  /* reveal on scroll */
  .reveal{ opacity:0; transform:translateY(26px); transition:opacity .7s ease, transform .7s ease; }
  .reveal.in{ opacity:1; transform:translateY(0); }

  /* ---------- section shell ---------- */
  section{ padding:96px 0; }
  .section-head{ text-align:center; max-width:640px; margin:0 auto 56px; }
  .section-head h2{ font-size:clamp(28px,3.4vw,42px); margin-bottom:14px; }
  .section-head p{ color:var(--ink-soft); font-size:16px; }
  .kicker{ display:flex; justify-content:center; margin-bottom:14px; }

  /* ---------- about ---------- */
  .about{ background:var(--white); }
  .about-grid{
    display:grid; grid-template-columns:1fr 1fr; gap:64px; align-items:start;
  }
  .about-text p{ color:var(--ink-soft); font-size:16.5px; margin-bottom:18px; max-width:520px; }
  .values{ display:grid; grid-template-columns:1fr 1fr; gap:20px; margin-top:8px; }
  .value-card{
    border:1.5px solid var(--line); border-radius:16px; padding:22px 20px;
    transition:transform .25s ease, box-shadow .25s ease, border-color .25s ease;
  }
  .value-card:hover{ transform:translateY(-4px); box-shadow:var(--shadow); border-color:var(--rose); }
  .value-card .icon{ width:34px; height:34px; margin-bottom:12px; color:var(--rose); }
  .value-card h3{ font-family:'Fraunces',serif; font-size:17px; margin-bottom:6px; color:var(--mauve-deep); }
  .value-card p{ font-size:13.5px; color:var(--ink-soft); }
  .about-art{ position:relative; }
  .about-art svg{ width:100%; height:auto; }

  /* ---------- our works ---------- */
  .works{ background:var(--cream); position:relative; }
  .works::before, .works::after{
    content:''; position:absolute; top:0; bottom:0; width:80px; z-index:2; pointer-events:none;
  }
  .works::before{ left:0; background:linear-gradient(90deg, var(--cream), transparent); }
  .works::after{ right:0; background:linear-gradient(270deg, var(--cream), transparent); }
  .carousel{
    display:flex; gap:24px; overflow-x:auto; scroll-snap-type:x mandatory;
    padding:6px 32px 26px; margin:0 -32px;
    scrollbar-width:none;
  }
  .carousel::-webkit-scrollbar{ display:none; }
  .card{
    scroll-snap-align:start;
    flex:0 0 280px;
    border-radius:22px;
    overflow:hidden;
    background:var(--white);
    box-shadow:var(--shadow);
    transition:transform .3s ease;
  }
  .card:hover{ transform:translateY(-6px); }
  .card-art{
    height:280px; display:flex; align-items:center; justify-content:center;
    position:relative;
  }
  .card-art svg{ width:64%; height:64%; }
  .card-body{ padding:20px 22px 26px; }
  .card-body .tag{ font-size:11px; letter-spacing:0.1em; text-transform:uppercase; color:var(--rose); font-weight:700; }
  .card-body h3{ font-size:19px; margin:6px 0 6px; color:var(--mauve-deep); }
  .card-body p{ font-size:13.5px; color:var(--ink-soft); }

  .dots{ display:flex; justify-content:center; gap:10px; margin-top:8px; }
  .dot{
    width:11px; height:11px; border-radius:50%;
    background:var(--rose-soft); opacity:.45;
    border:none; cursor:pointer; padding:0;
    transition:transform .2s ease, opacity .2s ease, background .2s ease;
  }
  .dot.active{ opacity:1; background:var(--mauve); transform:scale(1.25); }

  /* ---------- how to order ---------- */
  .order{ background:var(--white); }
  .steps{ max-width:760px; margin:0 auto; position:relative; }
  .steps::before{
    content:''; position:absolute; left:23px; top:14px; bottom:14px; width:2px;
    background:repeating-linear-gradient(180deg, var(--rose-soft) 0 8px, transparent 8px 16px);
  }
  .step{ display:flex; gap:26px; padding:0 0 44px; position:relative; }
  .step:last-child{ padding-bottom:0; }
  .step-num{
    flex:0 0 48px; height:48px; border-radius:50%;
    background:var(--mauve); color:var(--white);
    display:flex; align-items:center; justify-content:center;
    font-family:'Fraunces',serif; font-weight:600; font-size:18px;
    box-shadow:var(--shadow); position:relative; z-index:1;
  }
  .step-content h3{ font-size:18.5px; margin-bottom:8px; color:var(--mauve-deep); font-family:'Fraunces',serif; }
  .step-content p{ color:var(--ink-soft); font-size:15px; margin-bottom:10px; }
  .step-list{ display:grid; gap:8px; }
  .step-list li{ display:flex; gap:10px; align-items:flex-start; font-size:14.5px; color:var(--ink-soft); }
  .step-list li svg{ flex:0 0 16px; margin-top:4px; color:var(--rose); }
  .order-intro{ text-align:center; max-width:560px; margin:0 auto 52px; color:var(--ink-soft); font-size:16px; }

  /* ---------- contact ---------- */
  .contact{ background:linear-gradient(180deg, var(--cream-deep), var(--cream)); position:relative; overflow:hidden; }
  .contact-grid{
    display:grid; grid-template-columns:1fr 1fr; gap:56px; align-items:center;
  }
  .contact-copy p{ color:var(--ink-soft); font-size:16.5px; margin-bottom:28px; max-width:440px; }
  .contact-actions{ display:flex; gap:16px; flex-wrap:wrap; margin-bottom:34px; }
  .social-row{ display:flex; gap:14px; }
  .social-btn{
    width:46px; height:46px; border-radius:50%;
    display:flex; align-items:center; justify-content:center;
    background:var(--white); color:var(--mauve); border:1.5px solid var(--line);
    transition:transform .25s ease, background .25s ease, color .25s ease;
  }
  .social-btn:hover{ background:var(--rose); color:var(--white); transform:translateY(-3px); }
  .contact-card{
    background:var(--white); border-radius:24px; padding:40px 34px;
    box-shadow:var(--shadow); border:1px solid var(--line);
  }
  .contact-card h3{ font-size:21px; margin-bottom:8px; }
  .contact-card p{ font-size:14.5px; color:var(--ink-soft); margin-bottom:22px; }
  .field{ margin-bottom:16px; }
  .field label{ display:block; font-size:12.5px; font-weight:700; letter-spacing:0.05em; text-transform:uppercase; color:var(--mauve); margin-bottom:6px; }
  .field input, .field textarea{
    width:100%; padding:12px 14px; border-radius:12px; border:1.5px solid var(--line);
    font-family:'Karla',sans-serif; font-size:14.5px; color:var(--ink); background:var(--cream);
    transition:border-color .2s ease;
  }
  .field input:focus, .field textarea:focus{ border-color:var(--rose); outline:none; }
  .field textarea{ resize:vertical; min-height:86px; }
  .contact-card .btn{ width:100%; }

  /* ---------- footer ---------- */
  footer{
    background:var(--mauve-deep); color:var(--blush); padding:56px 0 26px;
  }
  .footer-grid{
    display:grid; grid-template-columns:1.4fr 1fr 1fr; gap:40px; margin-bottom:40px;
  }
  .footer-brand .name{ font-family:'Caveat',cursive; font-size:30px; color:var(--white); }
  .footer-brand p{ font-size:14px; color:var(--blush); opacity:.8; margin-top:10px; max-width:280px; }
  footer h4{ font-size:13px; letter-spacing:0.1em; text-transform:uppercase; color:var(--rose-soft); margin-bottom:16px; }
  footer ul li{ margin-bottom:10px; font-size:14.5px; opacity:.88; }
  footer ul li a:hover{ text-decoration:underline; }
  .footer-bottom{
    border-top:1px solid rgba(255,255,255,0.14); padding-top:22px;
    display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:10px;
    font-size:13px; opacity:.75;
  }

  /* ---------- responsive ---------- */
  @media (max-width: 980px){
    .hero .wrap{ grid-template-columns:1fr; padding-top:52px; }
    .hero-art{ order:-1; max-width:420px; margin:0 auto; }
    .about-grid{ grid-template-columns:1fr; }
    .about-art{ order:-1; max-width:380px; margin:0 auto; }
    .contact-grid{ grid-template-columns:1fr; }
    .footer-grid{ grid-template-columns:1fr 1fr; }
  }
  @media (max-width: 760px){
    .nav-links{
      position:fixed; top:73px; left:0; right:0; background:var(--cream);
      flex-direction:column; gap:0; padding:10px 32px 20px;
      border-bottom:1px solid var(--line);
      transform:translateY(-130%); opacity:0; pointer-events:none;
      transition:transform .3s ease, opacity .3s ease;
    }
    .nav-links.open{ transform:translateY(0); opacity:1; pointer-events:auto; }
    .nav-links a{ padding:14px 0; border-bottom:1px solid var(--line); }
    .burger{ display:block; }
    .nav-cta .btn-solid{ padding:11px 20px; font-size:12.5px; }
    section{ padding:70px 0; }
    .values{ grid-template-columns:1fr; }
    .footer-grid{ grid-template-columns:1fr; gap:28px; }
    .step{ gap:16px; }
  }
  @media (max-width: 480px){
    .wrap{ padding:0 20px; }
    .nav{ padding:14px 20px; }
    .hero-btns .btn, .contact-actions .btn{ width:100%; }
    .card{ flex-basis:240px; }
    .card-art{ height:230px; }
  }

  @media (prefers-reduced-motion: reduce){
    *{ animation:none !important; transition:none !important; }
    html{ scroll-behavior:auto; }
  }
</style>
</head>
<body>

<header>
  <nav class="nav">
    <a href="#top" class="logo">
      <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
        <circle cx="22" cy="22" r="20.5" stroke="#C17A8E" stroke-width="1.4"/>
        <path d="M22 14c-1.5 2-2 4.2-.7 6 1.1 1.5 3 1.6 3.9.2 1-1.6-.1-3.5-2-3.7" stroke="#7C8B5E" stroke-width="1.3" fill="none" stroke-linecap="round"/>
        <circle cx="17.5" cy="15" r="3.2" fill="#D98E4A" opacity=".85"/>
        <circle cx="26" cy="20" r="2.2" fill="#C17A8E" opacity=".8"/>
        <path d="M15 27c2 3 5 5 8 5.3M25 27c-1.6 3-4 4.8-6.5 5.2" stroke="#8B4A5C" stroke-width="1.1" fill="none" stroke-linecap="round"/>
      </svg>
      <span class="logo-text">
        <span class="name">Crafts by M's</span>
        <span class="tag">Handmade with love</span>
      </span>
    </a>
    <ul class="nav-links" id="navLinks">
      <li><a href="#top">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#works">Our Works</a></li>
      <li><a href="#order">How to Order</a></li>
    </ul>
    <div class="nav-cta">
      <a href="#contact" class="btn btn-solid" style="padding:13px 24px; font-size:12.5px;">Contact Us</a>
      <button class="burger" id="burger" aria-label="Toggle menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </nav>
</header>

<main id="top">

  <!-- HERO -->
  <section class="hero" style="padding-bottom:0;">
    <div class="wrap">
      <div class="hero-copy reveal">
        <span class="eyebrow">Handmade with love &amp; intention</span>
        <h1>Handcrafted with Love,<br>Made Just for You</h1>
        <p>Unique custom gifts, personalized craft items &amp; home decor. We turn your ideas, special moments, and celebration themes into beautiful, lasting keepsakes created completely by hand.</p>
        <div class="hero-btns">
          <a href="#contact" class="btn btn-solid">Contact Us</a>
          <a href="#works" class="btn btn-outline">Explore Our Work</a>
        </div>
      </div>
      <div class="hero-art reveal">
        <!-- Image Here -->
      </div>
    </div>
    <svg class="stitch" viewBox="0 0 1180 22" preserveAspectRatio="none"><path d="M0 11 Q 30 0, 60 11 T 120 11 T 180 11 T 240 11 T 300 11 T 360 11 T 420 11 T 480 11 T 540 11 T 600 11 T 660 11 T 720 11 T 780 11 T 840 11 T 900 11 T 960 11 T 1020 11 T 1080 11 T 1140 11 T 1180 11" pathLength="900"/></svg>
  </section>

  <!-- ABOUT -->
  <section class="about" id="about">
    <div class="wrap about-grid">
      <div class="about-text reveal">
        <span class="eyebrow">Our story</span>
        <h2 style="font-size:clamp(28px,3.4vw,40px); margin:14px 0 22px;">Behind the Crafts</h2>
        <p>Welcome to Crafts by Ms! What started as a passion for creating unique, detailed handmade pieces has grown into a space dedicated to crafting special keepsakes for your favorite moments.</p>
        <p>Every item — from crocheted bouquets to customized gifts — is carefully crafted by hand with patience, care, and attention to detail. No two pieces are ever quite the same, because no two stories are either.</p>
        <div class="values">
          <div class="value-card">
            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 21s-7-4.35-9.5-8.5C.7 8.8 2.4 5 6 5c2 0 3.5 1.2 4 2.5C10.5 6.2 12 5 14 5c3.6 0 5.3 3.8 3.5 7.5C19 16.65 12 21 12 21z"/></svg>
            <h3>Made with care</h3>
            <p>Every stitch is placed by hand, never mass-produced.</p>
          </div>
          <div class="value-card">
            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 2l2.6 6.2L21 9l-5 4.6L17.4 21 12 17.3 6.6 21 8 13.6 3 9l6.4-.8z"/></svg>
            <h3>Fully custom</h3>
            <p>Colors, sizes, and details tailored to your idea.</p>
          </div>
          <div class="value-card">
            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a4 4 0 0 1 8 0v2"/></svg>
            <h3>Made to last</h3>
            <p>Durable materials for keepsakes you'll hold onto.</p>
          </div>
          <div class="value-card">
            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M20 6L9 17l-5-5"/></svg>
            <h3>Small-batch</h3>
            <p>Every order gets our full, unhurried attention.</p>
          </div>
        </div>
      </div>
      <div class="about-art reveal">
        <!-- Image here -->
      </div>
    </div>
  </section>

  <!-- OUR WORKS -->
  <section class="works" id="works">
    <div class="wrap">
      <div class="section-head reveal">
        <span class="eyebrow">Gallery</span>
        <h2>Our Works</h2>
        <p>Browse through our popular handcrafted categories and recent custom orders.</p>
      </div>
    </div>
    <div class="carousel reveal" id="carousel">
  </section>

  <!-- HOW TO ORDER -->
  <section class="order" id="order">
    <div class="wrap">
      <div class="section-head reveal">
        <span class="eyebrow">Simple &amp; personal</span>
        <h2>How to Order</h2>
      </div>
      <p class="order-intro reveal">Ordering your custom handcrafted piece is simple! All custom orders are processed directly through our official Facebook page.</p>

      <div class="steps reveal">
        <div class="step">
          <div class="step-num">1</div>
          <div class="step-content">
            <h3>Visit Our Facebook Page</h3>
            <p>Click the link below or head directly to Crafts by M's on Facebook to see our full gallery and available crafts.</p>
            <a href="https://www.facebook.com/profile.php?id=61592484693069" target="_blank">Crafts By M's Facebook Page</a>
          </div>
        </div>
        <div class="step">
          <div class="step-num">2</div>
          <div class="step-content">
            <h3>Send Us a Direct Message</h3>
            <p>Send us a message with your order details, including:</p>
            <ul class="step-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>The item or design you'd like</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Preferred colors, names, or personalization details</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Your required event or delivery date</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Any reference photos or inspiration images</li>
            </ul>
          </div>
        </div>
        <div class="step">
          <div class="step-num">3</div>
          <div class="step-content">
            <h3>Confirm &amp; We Start Crafting</h3>
            <p>We'll reply to confirm your design details, price, and delivery timeline. Once confirmed, we'll craft your custom piece with love and package it carefully for delivery!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="contact" id="contact">
    <div class="wrap contact-grid">
      <div class="contact-copy reveal">
        <span class="eyebrow">Let's create something</span>
        <h2 style="font-size:clamp(28px,3.4vw,40px); margin:14px 0 18px;">Contact Us</h2>
        <p>Unique custom gifts, personalized craft items &amp; home decor. We turn your ideas, special moments, and celebration themes into beautiful, lasting keepsakes created completely by hand.</p>
        <div class="contact-actions">
          <a href="https://www.facebook.com/profile.php?id=61592484693069" class="btn btn-solid" target="_blank" rel="noopener">Message us on Facebook</a>
        </div>
        <div class="social-row">
          <a class="social-btn" href="https://www.facebook.com/profile.php?id=61592484693069" aria-label="Facebook"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M13.5 22v-8h2.7l.4-3.1h-3.1V9c0-.9.25-1.5 1.55-1.5H17V4.7c-.3 0-1.3-.1-2.4-.1-2.4 0-4.1 1.5-4.1 4.2v2.3H8v3.1h2.5V22h3z"/></svg></a>
          <a class="social-btn" href="https://www.instagram.com/itscraftsbyms" aria-label="Instagram"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="0.8" fill="currentColor"/></svg></a>
          <a class="social-btn" href="#" aria-label="Email"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a>
        </div>
      </div>

      <div class="contact-card reveal">
        <h3>Send a quick message</h3>
        <p>Prefer email? Drop your details here and we'll get back to you within a day.</p>
        <form onsubmit="event.preventDefault(); this.reset(); alert('Thanks! We\'ll be in touch soon.');">
          <div class="field">
            <label for="name">Name</label>
            <input id="name" type="text" placeholder="Your name" required>
          </div>
          <div class="field">
            <label for="email">Email</label>
            <input id="email" type="email" placeholder="you@email.com" required>
          </div>
          <div class="field">
            <label for="msg">What are you dreaming up?</label>
            <textarea id="msg" placeholder="Tell us about the piece you'd like made..." required></textarea>
          </div>
          <button type="submit" class="btn btn-solid">Send message</button>
        </form>
      </div>
    </div>
  </section>

</main>

<footer>
  <div class="wrap">
    <div class="footer-grid">
      <div class="footer-brand">
        <span class="name">Crafts by M's</span>
        <p>Handmade gifts, keepsakes and decor — crafted with patience, one stitch at a time.</p>
      </div>
      <div>
        <h4>Explore</h4>
        <ul>
          <li><a href="#top">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#works">Our Works</a></li>
          <li><a href="#order">How to Order</a></li>
        </ul>
      </div>
      <div>
        <h4>Get in touch</h4>
        <ul>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="https://www.facebook.com/profile.php?id=61592484693069">Facebook</a></li>
          <li><a href="https://www.instagram.com/itscraftsbyms">Instagram</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2026 Crafts by M's. All rights reserved.</span>
      <span>Developed by SynTech</span>
    </div>
  </div>
</footer>

<script>
  // mobile menu
  const burger = document.getElementById('burger');
  const navLinks = document.getElementById('navLinks');
  burger.addEventListener('click', () => {
    const open = navLinks.classList.toggle('open');
    burger.setAttribute('aria-expanded', open);
  });
  navLinks.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
    navLinks.classList.remove('open');
    burger.setAttribute('aria-expanded', false);
  }));

  // scroll reveal
  const revealEls = document.querySelectorAll('.reveal, .stitch');
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('in'); });
  }, { threshold: 0.15 });
  revealEls.forEach(el => io.observe(el));

  // carousel dots
  const carousel = document.getElementById('carousel');
  const dotsWrap = document.getElementById('dots');
  const cards = carousel.querySelectorAll('.card');
  cards.forEach((_, i) => {
    const d = document.createElement('button');
    d.className = 'dot' + (i === 0 ? ' active' : '');
    d.setAttribute('aria-label', 'Go to slide ' + (i+1));
    d.addEventListener('click', () => {
      cards[i].scrollIntoView({ behavior:'smooth', inline:'start', block:'nearest' });
    });
    dotsWrap.appendChild(d);
  });
  const dots = dotsWrap.querySelectorAll('.dot');
  let ticking = false;
  carousel.addEventListener('scroll', () => {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(() => {
      let closest = 0, min = Infinity;
      cards.forEach((c, i) => {
        const diff = Math.abs(c.getBoundingClientRect().left - carousel.getBoundingClientRect().left);
        if (diff < min) { min = diff; closest = i; }
      });
      dots.forEach((d, i) => d.classList.toggle('active', i === closest));
      ticking = false;
    });
  });
</script>

</body>
</html>
