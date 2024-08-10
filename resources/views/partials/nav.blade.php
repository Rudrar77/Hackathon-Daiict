<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Farming Equipments</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/buyer">Buy</a>
                    </li>
                    <li class="nav-item">   
                        <a class="nav-link text-white" href="/renter">Rent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/contact-us">Contact Us</a>
                    </li>
                    <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                          @csrf
                      <button  class="nav-link text-white" type="submit" name="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>