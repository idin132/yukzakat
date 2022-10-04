<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
                <i class="nav-icon bi bi-clipboard-fill"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('muzakkip.index') }}" class="nav-link">
                <i class="nav-icon bi bi-people-fill"></i>
                <p>
                    Muzakki
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('mustahiqp.index') }}" class="nav-link">
                <i class="nav-icon bi bi-people-fill"></i>
                <p>
                    Mustahiq
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('zakatp.index') }}" class="nav-link">
                <i class="nav-icon bi bi-people-fill"></i>
                <p>
                    Zakat
                </p>
            </a>
        </li>
        </li>
        <li class="nav-item">
            <a href="{{ route('pembayaranp.index') }}" class="nav-link">
                <i class="nav-icon bi bi-people-fill"></i>
                <p>
                    Pembayaran
                </p>
            </a>
        </li>
        {{-- <li class="nav-item">
        <a href="{{ route('pegawai.index')}}" class="nav-link">
          <i class="nav-icon bi bi-people-fill"></i>
          <p>
           Data Pegawai
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('kartu.index')}}" class="nav-link">
          <i class="nav-icon bi bi-card-text"></i>
        <p>
          Kartu Pelajar
        </p>
        </a>
      </li>
      --}}

    </ul>
</nav>

<script>
    $('#ok').click(function() {
        $('#sip').toggle("slow");

    });
    var toggler = document.getElementsByClassName("caret");
    var i;

    for (i = 0; i < toggler.length; i++) {
        toggler[i].addEventListener("click", function() {
            this.parentElement.querySelector(".nested").classList.toggle("active");
            this.classList.toggle("caret-down");
        });
    }
</script>
