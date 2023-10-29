<aside id="default-sidebar" class="h-screen" aria-label="Sidebar">
    <form method="GET" action="{{ url('/search') }}">
        <label for="default-search" class="mb-2 sr-only">Search</label>
        <div class="relative">
            <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm border border-gray-300 rounded-lg @error('search') is-invalid @enderror" name="search" value="{{ isset($search) ? $search : old('search') }}" placeholder="Search">

            @error('search')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <button type="submit" class="absolute right-16 inset-y-0 rounded-lg px-4 py-2">Search</button>
        </div>
    </form>
</aside>
