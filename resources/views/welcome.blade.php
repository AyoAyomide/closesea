<x-layout>
    <h1>Explore Art work</h1>
    <div class="grid-container">
        <?php $posts = [1, 2, 3, 4, 5, 6, 7, 8, 9]; ?>

        @foreach ($artworks as $artwork)
        <div class="grid-item">
            <div class="img-wrapper">
                <img src={{$artwork->image}} />
            </div>
            <div class="mini-logo">
                <img src={{$artwork->user->profilePicture}} />
            </div>
            <p>{{$artwork->user->userName}} <br> by {{$artwork->designerName}} </p>
            <h3> {{$artwork->title}} </h3>
        </div>
        @endforeach
    </div>


</x-layout>