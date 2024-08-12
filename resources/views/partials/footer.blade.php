<footer class="py-6 px-8 bg-red-400 text-white font-bold rounded"> 
        @if ($user)
            <a class="footer-link" href="https://github.com/mmpp1997/">{{ $user->email }}</a>
        @else
            <p class="footer-link">No user is logged in.</p>
        @endif
</footer>
