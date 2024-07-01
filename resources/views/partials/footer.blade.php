<footer class="footer">
    <div class="container">
        @if ($user)
            <a class="footer-link" href="https://github.com/mmpp1997/">{{ $user->email }}</a>
        @else
            <p class="footer-link">No user is logged in.</p>
        @endif

    </div>
</footer>
