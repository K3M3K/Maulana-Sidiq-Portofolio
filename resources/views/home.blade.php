@extends('layouts.main')

@section('title', 'Maulana Sidik | Portfolio')

@section('content')

{{-- ================= HERO ================= --}}
<section id="home"
  class="hero-section vh-100 d-flex align-items-center justify-content-center text-center position-relative">

  <div class="hero-overlay"></div>

  <div class="hero-content">
    <h1 class="hero-title glitch mb-3" data-text="MAULANA SIDIQ">
      MAULANA SIDIQ
    </h1>

    <p class="hero-subtitle glow-text">
      Cyber Security • Web Developer • OSINT
    </p>
  </div>

</section>


{{-- ================= ABOUT ================= --}}

<section id="about" class="about-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">

        <h2 class="display-6 fw-bold mb-4 text-center">About Me</h2>

        <div class="about-content">

          <p class="about-text scroll-fade">
            Fresh graduate <strong>Teknik Informatika</strong> Universitas Prof. Dr.Hamka dengan fokus pada
            <strong>Web Application Security</strong>,
            <strong>Penetration Testing</strong>, dan
            <strong>Open Source Intelligence (OSINT)</strong>.
            Memiliki ketertarikan kuat terhadap analisis dan penguatan
            keamanan sistem berbasis web.
          </p>

          <p class="about-text scroll-fade">
            Berpengalaman melakukan pengujian keamanan aplikasi web secara
            terstruktur, mulai dari <em>information gathering</em>,
            <em>enumeration</em>, hingga
            <em>vulnerability analysis</em> berdasarkan standar
            <strong>OWASP Top 10</strong>.
          </p>

          <p class="about-text scroll-fade">
            Familiar dengan eksploitasi dasar seperti
            <strong>SQL Injection</strong>,
            <strong>XSS</strong>,
            dan <strong>Broken Authentication</strong>,
            serta memahami pentingnya dokumentasi dan
            <em>risk assessment</em>.
          </p>

          <p class="about-text scroll-fade">
            Aktif mengembangkan kemampuan melalui praktik mandiri,
            security lab, dan studi kasus untuk mempersiapkan
            karier di bidang <strong>Cyber Security</strong> dan
            <strong>Application Security</strong>.
          </p>

          <div class="about-meta scroll-fade">
            <span>Linux (Kali, Ubuntu)</span>
            <span>Python Programming</span>
            <span>Laravel</span>
            <span>Windows</span>
            <span>Burp Suite</span>
            <span>OWASP ZAP</span>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>


{{-- ================= SKILLS ================= --}}
<section id="skills" class="py-5 bg-white">
  <div class="container">

    <h2 class="text-center display-6 fw-bold mb-5">
      Skills
    </h2>

    <div class="row g-4 justify-content-center">

      @foreach ([
        [
          'Penetration Testing',
          'OWASP Top 10, Injection, API Security, Manual Testing'
        ],
        [
          'OSINT Investigation',
          'Footprinting, Scam & Fraud Analysis, Open Data Research'
        ],
        [
          'Laravel Backend',
          'Secure Authentication, Validation, REST API Development'
        ],
        [
          'Python Programming',
          'Automation, Security Scripting, Data Processing'
        ],
        [
          'AI & Machine Learning',
          'Model Training, Data Analysis, AI-assisted Tools'
        ],
        [
          'Computer Vision (OpenCV)',
          'Motion Detection, Image Processing, Gesture Analysis'
        ],
        [
          'Cyber Security Tools Development',
          'Custom Python Tools for Reconnaissance & Analysis'
        ]
      ] as $skill)

      <div class="col-md-6 col-lg-4">
        <div class="card h-100 card-hover text-center p-4">
          <div class="card-body">
            <h5 class="fw-semibold mb-2">
              {{ $skill[0] }}
            </h5>
            <p class="text-muted mb-0">
              {{ $skill[1] }}
            </p>
          </div>
        </div>
      </div>

      @endforeach

    </div>
  </div>
</section>



{{-- ================= PROJECTS ================= --}}
<section id="projects" class="py-5 bg-light">
  <div class="container">

    <h2 class="text-center display-6 fw-bold mb-5">
      Projects
    </h2>

    <div class="row justify-content-center g-4">

      <!-- Web Vulnerability Analysis -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 card-hover p-4">
          <div class="card-body">
            <h5 class="fw-semibold mb-2">
              Web Vulnerability Analysis
            </h5>
            <p class="text-muted mb-2">
              Security testing aplikasi web berdasarkan
              <strong>OWASP Top 10</strong>, mencakup identifikasi
              celah dan rekomendasi mitigasi.
            </p>
            <small class="text-secondary">
              Burp Suite • SQLMap • Manual Testing
            </small>
          </div>
        </div>
      </div>

      <!-- Bug Bounty / Security Research -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 card-hover p-4">
          <div class="card-body">
            <h5 class="fw-semibold mb-2">
              Bug Bounty & Security Research
            </h5>
            <p class="text-muted mb-2">
              Melakukan pengujian keamanan secara mandiri pada
              beberapa aplikasi web publik, termasuk proses
              reconnaissance, vulnerability validation,
              dan <em>responsible disclosure</em>.
            </p>
            <small class="text-secondary">
              Recon • OWASP • Responsible Disclosure
            </small>
          </div>
        </div>
      </div>

      <!-- Web Developer Internship -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 card-hover p-4">
          <div class="card-body">
            <h5 class="fw-semibold mb-2">
              Web Developer Intern
            </h5>
            <p class="text-muted mb-2">
              Pengembangan dan pemeliharaan aplikasi web selama
              program magang di
              <strong>BPTI UHAMKA</strong>,
              termasuk implementasi backend dan integrasi fitur.
            </p>
            <small class="text-secondary">
              Laravel • Bootstrap • MySQL
            </small>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



{{-- ================= CONTACT ================= --}}
<section id="contact" class="py-5 bg-white">
  <div class="container text-center">

    <h2 class="display-6 fw-bold mb-2">Contact</h2>
    <p class="text-muted mb-4">Let’s connect</p>

    <div class="d-flex justify-content-center gap-3 flex-wrap">

      <a href="https://github.com/K3M3K" target="_blank" class="contact-item">
        <i class="bi bi-github"></i><span>GitHub</span>
      </a>

      <a href="https://www.linkedin.com/in/maulana-sidik-31278b283" target="_blank" class="contact-item">
        <i class="bi bi-linkedin"></i><span>LinkedIn</span>
      </a>

      <a href="https://instagram.com/mauljck" target="_blank" class="contact-item">
        <i class="bi bi-instagram"></i><span>Instagram</span>
      </a>

      <a href="https://wa.me/6281219456093" target="_blank" class="contact-item">
        <i class="bi bi-whatsapp"></i><span>WhatsApp</span>
      </a>

    </div>

  </div>
</section>

@endsection