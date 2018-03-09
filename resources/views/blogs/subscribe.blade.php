@if (Auth::user())
    <form action="{{ route('toggleSubscription') }}" method="POST">
      @csrf
      <input type="hidden" name="blog_id" value="{{ $blog->id }}">
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
      <button class="btn btn-outline-primary mt-2 px-3">
        @if ($blog->subscribed(Auth::user()))
          Unsubscribe
        @else
          Subscribe
        @endif
      </button>
    </form>
@endif
