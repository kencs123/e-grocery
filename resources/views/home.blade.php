@include('header')
<nav class="navbar navbar-expand-lg navbar-light bg-warning font-weight-bold text-dark">
  <div class="container-fluid d-flex justify-content-center text-dark">

    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
      <ul class="nav d-flex justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">{{ __('Home') }}</a>
        </li>
        <li class="nav-item">

        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cart">{{ __('Cart') }}</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/profile">{{ __('Profile') }}</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

  <div class="container mt-5">
      <div class="row">
      <div class="col-4">
      <div class="card" style="width: 18rem;height: 10rem">
  <img class="rounded-circle" src="https://thumbs.dreamstime.com/b/grape-logo-template-vector-icon-illustration-bunch-wine-grapes-leaf-food-apps-websites-128021883.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Buah 1</p>
    <p class="card-text"><a href="/detailitem">Detail</a></p>
  </div>
</div>
      <div class="card" style="width: 18rem;">
  <img class="rounded-circle" src="https://thumbs.dreamstime.com/b/grape-logo-template-vector-icon-illustration-bunch-wine-grapes-leaf-food-apps-websites-128021883.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Buah 1</p>
    <p class="card-text"><a href="/detailitem">Detail</a></p>
  </div>
</div>
      <div class="card" style="width: 18rem;">
  <img class="rounded-circle" src="https://thumbs.dreamstime.com/b/grape-logo-template-vector-icon-illustration-bunch-wine-grapes-leaf-food-apps-websites-128021883.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Buah 1</p>
    <p class="card-text"><a href="/detailitem">Detail</a></p>
  </div>
</div>
      </div>
      </div>
  </div>
@include('footer')
