<x-layout>
    <h1>Explore Art work</h1>
    <div class="grid-container">
        <?php $posts = [1, 2, 3, 4, 5, 6, 7, 8, 9]; ?>

        @foreach ($posts as $data)
        <div class="grid-item">
            <div class="img-wrapper">
                <img src="https://images.unsplash.com/photo-1634942536846-e9863ef9e78f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" />
            </div>
            <div class="mini-logo">
                <img src="https://images.unsplash.com/photo-1633354931133-27ac1ee5d853?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" />
            </div>
            <p>cyber ghost <br> by Jack {{$data}}</p>
            <h3>Come play with us</h3>
        </div>
        @endforeach
    </div>


</x-layout>