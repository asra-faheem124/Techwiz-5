    <!-- navbar -->
    <nav class="navbar navbar-expand-lg w-100 fixed-top">
      <div class="container mt-2">
        <!-- Logo -->
        <a class="navbar-brand ms-3" href="#">
          <img src="images/logo.png" height="40"/>
        </a>
        <!-- Toogler Button -->
        <button
          class="navbar-toggler shadow-none border-0"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Sidebar -->
        <div
          class="offcanvas offcanvas-start sidebar"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <!-- Sidebar Header -->
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            Expense Voyage</h5>
            <button
              type="button"
              class="btn-close shadow-none border-0"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <!-- Sidebar Body -->
          <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
            <ul
              class="navbar-nav justify-content-center align-items-center flex-grow-1 pe-3"
            >
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Courses
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
            </ul>
            <a href=""><button class="login">Login</button></a>
            <a href=""><button class="login">Signup</button></a>
          </div>
        </div>
      </div>
    </nav>