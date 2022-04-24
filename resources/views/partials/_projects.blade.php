

<section class="resume-section" id="projects">
    <div class="resume-section-content container">        
        <h2 class="mb-5">My Latest Work</h2>        
        <div class="row">
        
        @foreach ($projects  as $project)
        <div class="col-md-4">
            <div class="flex-grow-1">      
                <h3 class="mb-0">{{$project->title}}</h3>
                <div class="subheading mb-3">
                    <img src="{{asset('storage/'.$project->photo)}}" style="width:300px;height:300px">
                </div>
                <p>{{$project->description}}</p>
                <p>  <a href="{{$project->repository}}" target="_blank" rel="noopener noreferrer">  <i class="fab fa-github h4"></i> </a> </p>
            </div>
            
        </div>
        @endforeach
    </div>
    </div>
</section>