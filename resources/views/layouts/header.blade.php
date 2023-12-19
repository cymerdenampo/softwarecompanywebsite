    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                <a class="navbar-brand" href="/">
                    <span>
                        <img width="100px" style="border-radius: 30px" src="{{ asset('cymer/images/software.jpg') }}" alt="software.jpg">
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link {{ request()->is('index') ? 'active' : '' }}"
                                    href="{{ '/' }}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                                    href="{{ asset('contact') }}">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    @push('css')
        <style>
            .navbar span img {
                border-radius: 50%;
            }
        </style>
    @endpush
