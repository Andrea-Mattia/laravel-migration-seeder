@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>OUR PACKAGES</h1>

        @foreach ($packages as $package)
            <article>
                <h2 class="text-primary">{{ $package->structure_name }}</h2>
                <h4>{{ $package->address }}</h4>
                <div>{{ $package->state }}</div>
                <div>{{ $package->city }}</div>
                <br>
                <div>Type of structure: {{ $package->type_of_structure }}</div>
                <div>Rooms: {{ $package->rooms }}</div>
                <div>Square meters: {{ $package->square_meters }}</div>
                <div>Description: {{ $package->description }}</div>
                <div>Activities: {{ $package->activities }}</div>
                <div>Price for night: {{ $package->price_for_night }}€</div>
                @if (! $loop->last)
                    <hr>
                @endif
            </article>
        @endforeach

        <section class="mt-4">
            {{ $packages->links() }}
        </section>
    </div>
@endsection