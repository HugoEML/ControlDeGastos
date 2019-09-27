<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <h1 class="navbar-brand"> @yield('NavTitle', 'Billetera Web') </h1>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('categoryexpense.index')}}">Categoria de Gastos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('categoryincome.index')}}">Categoria de Ingresos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('expense.index')}}">Gastos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('income.index')}}">Ingresos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contacto</a>             
                    </li>
                </ul>
            </div>  
        </div>
</nav><br><br> 