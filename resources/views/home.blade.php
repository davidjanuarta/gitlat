@extends('layout.app')
@section('content')
    <section class="jumbotron text-center">
        <img src={{ asset('image/foto.jpeg') }} alt="David" width="250" class="rounded-circle img-thumbnail">
        <h1 class="display-4">David Januarta </h1>
        <p class="lead">Mahasiswa |HOBI</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="10" d="M0,64L30,106.7C60,149,120,235,180,229.3C240,224,300,128,360,122.7C420,117,480,203,540,234.7C600,267,660,245,720,197.3C780,149,840,75,900,58.7C960,43,1020,85,1080,117.3C1140,149,1200,171,1260,160C1320,149,1380,107,1410,85.3L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
    </section>
      {{-- akhir jumbotron --}}


      {{-- section ke 2 --}}
      <div class="container text-center mt-5">
        <div class="row">
            <div class="col">
                <h2>About Me</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-5 fs-5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel eius a minima, atque aliquam tenetur recusandae, dolorem nam eum sunt quidem quasi aperiam ea dicta!</div>
            <div class="col-5 fs-5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, dolore illo natus distinctio laudantium id quia. Enim iure assumenda fugiat voluptate mollitia consequatur totam, fuga quis, rerum cupiditate harum ipsam?</div>
        </div>
    </div>
    <footer class="py-5 bg-black">
        <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Your Website 2023</p></div>
    </footer>

@endsection
