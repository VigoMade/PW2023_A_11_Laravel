@extends('navbarDashboard')
@section ('content')
<style>
    body {
        background-color: #04192E;

        color: white;

    }
</style>
<div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                Gofit Indonesia<br />
                <span style="color: hsl(218, 81%, 75%)">Make Your Body Perfect</span>
            </h1>
            <p class="mb-4 opacity-70 justify-content-center" style="color: hsl(218, 81%, 85%); text-align: justify">
                Are you tired of feeling sluggish and out of shape? Do you want to
                improve your health and fitness level? Look no further than your
                local gym!
            </p>
            <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%); text-align: justify;">
                At the gym, you'll have access to state-of-the-art equipment and a
                variety of fitness classes to help you reach your fitness goals.
                Whether you're looking to build muscle, lose weight, or simply
                improve your overall health, our gym has everything you need to
                succeed. Our experienced and knowledgeable trainers are on hand to
                provide guidance and support every step of the way. They can help
                you develop a personalized workout plan that's tailored to your
                specific needs and goals, and they'll be there to encourage and
                motivate you to push yourself to new heights. And with a community
                of like-minded individuals, you'll have the support and
                encouragement you need to stay motivated and committed to your
                fitness journey. You'll make new friends, have fun, and most
                importantly, see results.
            </p>
        </div>
        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
            <div class="card bg-glass">
                <div class="card-body px-4 py-5 px-md-5">
                    <form class="form" action="{{ url('gyms') }}">
                        <div>
                            <h4 class="mb-3 text-center">LOGIN</h4>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput" name="nama_pegawai" placeholder="Nama Pegawai" required />
                            <label for="floatingInput">Nama Pegawai</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required />
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button type="submit" style="width: 100%;" class="btn btn-primary btn-block mb-2 mt-3">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection