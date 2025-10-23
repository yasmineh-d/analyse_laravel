@extends('layouts.app')

@section('title', 'Project Details - REST API')

@section('content')
  <main class="w-full max-w-[900px] mx-auto flex justify-center px-5 py-16">
    <div class="w-full rounded-[30px] bg-white p-12 shadow-[0_30px_80px_rgba(74,44,42,0.15)] mb-15">
      <a href="{{ route('home') }}" class="inline-block rounded-[20px] bg-[#FFF5F0] px-5 py-2 text-[#E8A0A0] font-semibold no-underline transition-all duration-300 mb-7 hover:bg-[#E8A0A0] hover:text-white hover:-translate-x-[5px]">← Back</a>

      <div class="mb-10 text-center">
        <h1 class="text-[42px] text-[#4A2C2A] font-bold">REST API & Data Management</h1>
      </div>

      <div class="mb-10 flex h-[350px] w-full items-center justify-center rounded-[20px] bg-gradient-to-br from-[#FFB8C8] to-[#E8A0A0]">
        <span class="material-symbols-outlined text-[100px]">electric_bolt</span>
      </div>

      <p class="mb-10 text-center text-[18px] leading-8 text-[#6B4F4F]">
        Project completed during my internship at Invision Pixels in Tangier. I developed a full REST API
        using Python and Flask for data management, with a responsive and modern web interface.
        This project allowed me to put into practice my skills in both back-end and front-end development.
      </p>

      <div class="mb-9">
        <h3 class="mb-5 border-b-2 border-[#FFF5F0] pb-2 text-[24px] text-[#E8A0A0] font-bold">Technologies & Frameworks</h3>
        <div class="grid grid-cols-[repeat(auto-fit,minmax(150px,1fr))] gap-4">
          @php($tech = [
            ['icon' => 'code', 'name' => 'Python'],
            ['icon' => 'science', 'name' => 'Flask'],
            ['icon' => 'database', 'name' => 'SQLite'],
            ['icon' => 'table_chart', 'name' => 'SQLAlchemy'],
            ['icon' => 'html', 'name' => 'HTML/CSS'],
            ['icon' => 'grid_view', 'name' => 'Bootstrap'],
            ['icon' => 'javascript', 'name' => 'JavaScript'],
            ['icon' => 'commit', 'name' => 'Git/GitHub'],
          ])
          @foreach($tech as $t)
            <div class="rounded-[15px] bg-[#FFF5F0] p-5 text-center transition-all duration-300 hover:-translate-y-[5px] hover:bg-[#E8A0A0] hover:text-white">
              <span class="material-symbols-outlined text-[32px] mb-2 block">{{ $t['icon'] }}</span>
              <div class="text-[16px] font-semibold">{{ $t['name'] }}</div>
            </div>
          @endforeach
        </div>
      </div>

      <div class="mb-9">
        <h3 class="mb-5 border-b-2 border-[#FFF5F0] pb-2 text-[24px] text-[#E8A0A0] font-bold">Main Features</h3>
        <ul class="list-none pl-0">
          @php($features = [
            'Development of a complete REST API with Python and Flask',
            'SQLite database management with SQLAlchemy (ORM)',
            'Implementation of CRUD operations (Create, Read, Update, Delete)',
            'Responsive web interfaces with HTML, CSS, and Bootstrap',
            'MVC architecture for better code organization',
            'Version control and collaboration with Git/GitHub',
            'API documentation and endpoint testing',
          ])
          @foreach($features as $f)
            <li class="relative pl-8 text-[#6B4F4F] leading-7 mb-2 before:content-['✓'] before:absolute before:left-0 before:top-2 before:text-[#E8A0A0] before:font-bold before:text-[20px]">{{ $f }}</li>
          @endforeach
        </ul>
      </div>

      <a href="https://github.com/yasmineh-d/application_python_web_simple.git" target="_blank"
         class="mt-5 inline-flex items-center gap-2 rounded-full bg-[#4A2C2A] px-9 py-4 font-semibold text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-[#E8A0A0] hover:shadow-[0_10px_25px_rgba(232,160,160,0.3)]">
        View on GitHub
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8 0C3.58 0 0 3.58 0 8a8 8 0 0 0 5.47 7.59c.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2 .37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52 0-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82a7.5 7.5 0 0 1 2-.27c.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8 8 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
        </svg>
      </a>
    </div>
  </main>
@endsection
