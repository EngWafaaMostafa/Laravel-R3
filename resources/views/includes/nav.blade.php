<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/laravel-R3/public/Cars">Cars</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/laravel-R3/public/Cars">Home</a></li>
            <li><a href="/laravel-R3/public/createCar">add Car</a></li>
            <li><a href="{{ route('trashedCar') }}">Trashed Cars</a></li>
            <!-- <li><a href="#">Page 3</a></li> -->
        </ul>
    </div>
</nav>