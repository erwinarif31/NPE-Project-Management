@extends('Layout.sidebar', ['title' => 'Project/Detail Project'])
<link rel="stylesheet" href="{{ asset('css/Admin/project.css') }}">
@section('content')

<div class="card">
  <div class="card-body">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb p-2">
        <li class="breadcrumb-item"><a href="#">Project</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sistem Informasi Farmasi</li>
      </ol>
    </nav>
    <p class="h4 mt-4"> {{ $project->nama }}
      <span class="status-op p-2" id="statusProject{{ $project->status }}"><svg width="12" height="12" viewBox="0 0 12 12"
          fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="6" cy="6" r="6" fill="#0061C7" />
        </svg> 
      @if($project -> status == 0)
        In Progress
      @elseif($project -> status == 1)
        Completed
      @elseif($project -> status == 2)
        Revision Needed
      @elseif($project -> status == 3)
        Pending
      @endif
      </span>
    </p>
    <p class="mt-3" id="detail-project">
      {{ $project->detail }}
    </p>
    <div class="col col-md-6 p-0 mb-4">
      <p class="p2">Klien</p>
      <p class="p1">{{ $project->klien }}</p>
    </div>
    <div class="col col-md-6 p-0 mb-4">
      <p class="p2">Tipe</p>
      <p class="p1">{{ $project->tipe }}</p>
    </div>
    <div class="col col-md-6 p-0 mb-4">
      <p class="p2">Deadline</p>
      <p class="p1">{{ $project->deadline }}</p>
    </div>

    <hr>

    <p class="h3 mt-5 mb-3">Team</p>
    <div class="col col-md-6 p-0 mb-4">
      <p class="p2">Project Manager</p>
      <div class="row m-0">
        <p class="p1 mr-3">{{ $project->pm->nama }}</p>
        <span><i class="fas fa-medal text-warning"></i> {{ $project->pm->credit }}</span>
      </div>
    </div>
    <div class="col p-0 mb-4">
      <p class="p2 mb-2">Programmer</p>
      <ul class="list-group list-group-flush">
        @foreach ($project->employees as $programmer)
        <li class="list-group-item">
          <div class="row">
            <p class="p1 mr-3">{{ $programmer->nama }} <span class="p2">({{ $programmer->jabatan }})</span></p>
            <span><i class="fas fa-medal text-warning"></i> {{ $programmer->credit }}</span>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection