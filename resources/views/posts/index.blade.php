<body>
    <section>
        <h2>Posts:</h2>
        @foreach($posts as $post)
            <p>{{ $post['text'] }}</p>
        @endforeach
    </section>
</body>
