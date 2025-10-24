@extends('layouts.app')

@section('title', 'Yasmine Haddad - Web Developer & Mobile')

@section('content')
  <!-- Header -->
  <header class="fixed inset-x-0 top-0 z-[1000] flex items-center justify-between px-20 py-5 bg-[rgba(255,245,240,0.95)] backdrop-blur">
    <div class="flex items-center gap-2 text-[22px] font-bold">
      <span class="material-symbols-outlined text-[28px] text-[#E8A0A0]">star</span>
      <span>Yasmine Haddad</span>
    </div>

    <nav class="flex gap-10">
      <a href="{{ route('home') }}#home" class="text-[15px] transition-colors hover:text-[#E8A0A0]">Home</a>
      <a href="{{ route('home') }}#about" class="text-[15px] transition-colors hover:text-[#E8A0A0]">About</a>
      <a href="{{ route('home') }}#projects" class="text-[15px] transition-colors hover:text-[#E8A0A0]">Projects</a>
    </nav>
  </header>

  <!-- Hero Section -->
  <section id="home" class="relative flex min-h-screen items-center justify-between px-20 pt-[140px] pb-[100px]">
    <div class="flex-1 max-w-[600px] pl-10">
      <h1 class="mb-7 text-[56px] leading-tight text-[#4A2C2A] font-bold">Hey, I'm Yasmine Haddad</h1>
      <p class="mb-10 text-[18px] leading-8 text-[#6B4F4F]">
        A creative full-stack developer transitioning from a technical background in electronics. I build complete web solutions, from responsive UIs to efficient back-end APIs, and I am driven to create high-performing digital experiences.
      </p>
      <div class="flex items-center gap-5">
        <a href="#projects"
           class="inline-block rounded-full bg-[#E8A0A0] px-10 py-4 text-white text-[16px] transition-all hover:bg-[#D88C8C] hover:-translate-y-0.5 hover:shadow-[0_10px_25px_rgba(232,160,160,0.3)]">
          View Projects
        </a>
      </div>
    </div>

    <div class="relative flex flex-1 items-center justify-center">
      <!-- Decorative elements of the image -->
      <div class="absolute -top-[30px] -left-[30px]">
        <span class="material-symbols-outlined absolute text-[30px] text-[#E8A0A0]" style="top:0;left:0;">star</span>
        <span class="material-symbols-outlined absolute text-[30px] text-[#E8A0A0]" style="top:40px;left:50px;">add</span>
      </div>


      <!-- Image blob of the profile -->
      <div class="relative flex h-[360px] w-[320px] items-center justify-center overflow-hidden shadow-[0_20px_60px_rgba(232,160,160,0.3)] bg-gradient-to-br from-[#FFB8C8] to-[#E8A0A0] [border-radius:50%_50%_50%_50%/60%_60%_40%_40%]">
        <img
          src="{{ asset('photo_profile.jpg') }}"
          alt="Yasmine Haddad"
          class="block h-[78%] w-[78%] object-cover rounded-[60px] [clip-path:ellipse(49%_49%_at_50%_51%)] shadow-[0_12px_30px_rgba(74,44,42,0.12)] transition-transform duration-200"
        />
      </div>

      <!-- Points décoratifs of the image -->
      <div class="absolute right-5 top-1/2 -translate-y-1/2 flex flex-col gap-2.5">
        <div class="h-3 w-3 rounded-full bg-[#E8A0A0] transition-all cursor-pointer"></div>
        <div class="h-3 w-3 rounded-full bg-[#E8A0A0] transition-all cursor-pointer"></div>
        <div class="h-3 w-3 rounded-full bg-[#4A2C2A] transition-all cursor-pointer"></div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="min-h-screen px-20 pb-[100px] scroll-mt-[120px]">
    <h2 class="mb-7 text-center text-[48px] text-[#4A2C2A] font-bold">About Me</h2>
    <div class="mx-auto max-w-[900px]">
      <p class="mb-16 text-center text-[20px] leading-8 text-[#6B4F4F]">
        A web developer transitioning from a career in electronics to a career in web and mobile development. Passionate about creating powerful and intuitive applications, I'm looking to leverage my technical skills to support innovative projects.
      </p>

      <div class="mt-16">
        <div class="mb-7 rounded-2xl bg-white p-7 shadow-[0_10px_40px_rgba(232,160,160,0.15)] transition-all hover:translate-x-[10px] hover:shadow-[0_15px_50px_rgba(232,160,160,0.25)]">
          <h3 class="mb-2 text-[24px] text-[#E8A0A0] font-bold">Final Year Internship - Web Developer</h3>
          <p class="mb-3 italic text-[14px] text-[#6B4F4F]">July 2025 | Invision Pixels - Tangier</p>
          <p class="leading-7 text-[#6B4F4F]">
            Development of a REST API (Python/Flask) and database management (SQLite, SQLAlchemy, CRUD). Integration of responsive web interfaces (HTML, CSS, Bootstrap) and code versioning with Git/GitHub.
          </p>
        </div>

        <div class="mb-7 rounded-2xl bg-white p-7 shadow-[0_10px_40px_rgba(232,160,160,0.15)] transition-all hover:translate-x-[10px] hover:shadow-[0_15px_50px_rgba(232,160,160,0.25)]">
          <h3 class="mb-2 text-[24px] text-[#E8A0A0] font-bold">End-of-Study Internship - Electronics</h3>
          <p class="mb-3 italic text-[14px] text-[#6B4F4F]">May 2022 - June 2022 | TE Connectivity - Tangier</p>
          <p class="leading-7 text-[#6B4F4F]">
            Contribute to the design and testing of electronic component prototypes. Maintain, troubleshoot, and optimize production processes.
          </p>
        </div>

        <div class="mb-7 rounded-2xl bg-white p-7 shadow-[0_10px_40px_rgba(232,160,160,0.15)] transition-all hover:translate-x-[10px] hover:shadow-[0_15px_50px_rgba(232,160,160,0.25)]">
          <h3 class="mb-2 text-[24px] text-[#E8A0A0] font-bold">Assistant Project Manager</h3>
          <p class="mb-3 italic text-[14px] text-[#6B4F4F]">May 2021 - June 2021 | TE Connectivity - Tangier</p>
          <p class="leading-7 text-[#6B4F4F]">
            Analysis of cabling systems and discovery of production processes.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section  -->
  <section id="projects" class="min-h-screen px-20 pb-[100px] scroll-mt-[120px]">
    <h2 class="mb-5 text-center text-[48px] text-[#4A2C2A] font-bold">Main Project</h2>
    <p class="mx-auto mb-16 max-w-[700px] text-center text-[18px] text-[#6B4F4F]">
      My main project during my internship at Invision Pixels
    </p>

    <div class="mt-16 grid grid-cols-[repeat(auto-fit,minmax(350px,1fr))] gap-10">
      <div class="overflow-hidden rounded-2xl bg-white shadow-[0_10px_40px_rgba(232,160,160,0.15)] transition-all hover:-translate-y-2.5 hover:shadow-[0_20px_50px_rgba(232,160,160,0.25)]">
        <div class="flex h-[250px] w-full items-center justify-center bg-gradient-to-br from-[#FFB8C8] to-[#E8A0A0]">
          <span class="material-symbols-outlined text-[60px]">electric_bolt</span>
        </div>
        <div class="p-7">
          <h3 class="mb-3 text-[24px] text-[#4A2C2A] font-bold">REST API & Data Management</h3>
          <p class="mb-5 leading-7 text-[#6B4F4F]">
            Development of a complete REST API with Python and Flask, including SQLite database management with SQLAlchemy. Implementation of CRUD operations and integration of responsive web interfaces with Bootstrap.
          </p>
          <a href="details.html" class="project-link text-[#E8A0A0] font-bold hover:text-[#D88C8C] transition-colors" target="_blank">See project details →</a>
          <div class="mb-5 flex flex-wrap gap-2"></div>
        </div>
      </div>
    </div>
  </section>
@endsection
