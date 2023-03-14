@extends('Homepage.layout.master')
@section('content')
    <section id="" class="features section">
        <div class="container">
            <div class="row">
                <div>
                    <a href="{{ url('/') }}" class="btn"> Go Back to website</a>
                    <hr>
                </div>
                <h3>Lorem, ipsum dolor.</h3>
                <p class="mb-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error neque assumenda sint repellat placeat
                    et est maiores saepe similique nihil suscipit quis eaque voluptatem, nesciunt quibusdam expedita
                    facere iste esse!
                </p>
                <div class="d-flex justify-content-around">

                    <a class="btn btn-outline-info w-100 mb-3 mx-2" href="{{ url('online-reporting') }}">
                        For Student / Guardian / Parents
                    </a>
                    <a class="btn btn-outline-info w-100 mb-3 mx-2" href="{{ route('login') }}">
                        For Faculty
                    </a>

                </div>
            </div>

        </div>
    </section>
    </div>
@endsection
