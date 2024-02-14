<div class="d-flex flex-column">
  @auth
      <div class="bg-success d-flex p-4 justify-content-center align-items-center" style="--bs-bg-opacity: .3;">
          <h2 style="margin-left: 25rem">Amazing E-Grocery</h2>

          <div class="bg-warning p-1 px-2" style="margin-left: 15rem">
              <a href="/logout" class="text-decoration-none text-black">Logout</a>
          </div>
      </div>

      @if (auth()->user()->role_id == 1)
          <div class="bg-warning d-flex justify-content-center">
              <a href="/home" class="text-bold text-decoration-none text-black p-2">Home</a>
              <a href="/order" class="text-bold text-decoration-none text-black p-2">Cart</a>
              <a href="/profile" class="text-bold text-decoration-none text-black p-2">Profile</a>
              <a href="/account-maintenance" class="text-bold text-decoration-none text-black p-2">Account Maintenance</a>
          </div>
      @else
          <div class="bg-warning d-flex justify-content-center" style="gap: 3rem">
              <a href="/home" class="text-bold text-decoration-none text-black p-2">Home</a>
              <a href="/order" class="text-bold text-decoration-none text-black p-2">Cart</a>
              <a href="/profile" class="text-bold text-decoration-none text-black p-2">Profile</a>
          </div>
      @endif
  @else
      <div class="bg-success d-flex p-4 justify-content-center align-items-center" style="--bs-bg-opacity: .3;">
          <h2 style="margin-left: 25rem">Amazing E-Grocery</h2>

          <div class="bg-warning p-1 px-2" style="margin-left: 15rem">
              <a href="/register" class="text-decoration-none text-black">Register</a>
              <a href="/login" class="text-decoration-none text-black" style="margin-left: 1rem">Login</a>
          </div>
      </div>
  @endauth
</div>