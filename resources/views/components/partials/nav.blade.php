<x-splade-data default="{ open: false }">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container px-5">
            <Link class="navbar-brand" href="{{ route('home') }}"><span class="fw-bolder text-primary">Abdelrazek Sayed</span></Link>
            <div  class="fw-bolder text-primary" >
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                    <li class="nav-item"><Link class="nav-link" href="{{ route('home') }}">Home</Link></li>
                    <li class="nav-item"><Link  class="nav-link" href="{{ route('resume') }}">Resume</Link></li>
                    <li class="nav-item"><Link class="nav-link" href="{{ route('projects') }}">Projects</Link></li>
                    <li class="nav-item"><Link class="nav-link" href="{{ route('contact') }}">Contact</Link></li>
                    <li class="nav-item"><Link class="nav-link" href="{{ route('posts.index') }}">Posts</Link></li>
                </ul>
            </div>
        </div>
    </nav>

</x-splade-data>
