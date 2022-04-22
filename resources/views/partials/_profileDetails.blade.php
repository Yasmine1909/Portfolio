


<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-3">
            <ul class="list-group">
                <li class="list-group-item"><span class="fw-bold"></span>
                    <form action="" method="post">
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        <a href="" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                    </form>
                </li>
                <li class="list-group-item text-center">
                        <span>
                            <img class=" rounded-circle w-25" src="{{asset('storage/'.$profile->photo)}}" alt="..." />
                        </span>
                </li>
                <li class="list-group-item"><span class="fw-bold"> First name:   </span>{{$profile->first_name}}</li>
                <li class="list-group-item"><span class="fw-bold"> Last Name:   </span>{{$profile->last_name}}</li>
                <li class="list-group-item"><span class="fw-bold"> Email:   </span>{{$profile->email}}</li>
                <li class="list-group-item"><span class="fw-bold"> Phone:   </span>{{$profile->phone}}</li>
                <li class="list-group-item"><span class="fw-bold"> Address:   </span>{{$profile->adress}}</li>
                <li class="list-group-item"><span class="fw-bold"> Bio:   </span>{{$profile->bio}}</li>
                <li class="list-group-item d-flex justify-content-around"><span class="fw-bold"> Linkedin:   </span>
                    <a class="social-icon mx-2" href="{{$profile->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <span class="fw-bold"> Github:   </span>
                    <a class="social-icon mx-2" href="{{$profile->github}}" target="_blank"><i class="fab fa-github"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>