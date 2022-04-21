<section class="resume-section" id="experience">
    <div class="resume-section-content">        
        <h2 class="mb-5">Experience</h2>        
        
        
        @foreach ($experiences  as $experience)
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">      
                <h3 class="mb-0">{{$experience->title}}</h3>
                <div class="subheading mb-3">{{$experience->company_name}}</div>
                <p>{{$experience->description}}</p>
            </div>
            
            <div class="flex-shrink-0"><span class="text-primary">{{date('j F,Y',strtotime($experience->start_date))}} - {{date('j F,Y',strtotime($experience->end_date))}}</span></div>
        </div>
        @endforeach

    </div>
</section>