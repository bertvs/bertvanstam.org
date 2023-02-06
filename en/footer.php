</main>
    <footer>
        <nav>

            <div>
                <div class="strong">Bert van Stam, organist&nbsp;and&nbsp;composer</div>
                <div><input type="checkbox" id="themeswitch"><label for="themeswitch"><span id="themeswitch-labeltext">Dark theme</span>&ensp;<i
							class="bi bi-lightbulb-fill"></i></label></div>
            </div>
            <h4>Listen</h4>
            <ul>
                <li>
                    <a href="https://music.apple.com/us/artist/bert-van-stam/1639463577" target="_blank" rel="noopener noreferrer"><i class="bi bi-apple"></i>&ensp;Apple Music</a>
                </li>
                <li><a href="https://open.spotify.com/artist/04K42M6p1kLsLFVcfOKlFI" target="_blank" rel="noopener noreferrer"><i
							class="bi bi-spotify"></i>&ensp;Spotify</a></li>
                <li><a href="https://www.youtube.com/channel/UCdPF_RqksIFIJuHUwqkRbFQ" target="_blank" rel="noopener noreferrer"><i class="bi bi-youtube"></i>&ensp;YouTube</a></li>
            </ul>
            <h4>Contact</h4>
            <ul>
                <li>
                    <a href="mailto:info@bertvanstam.org"><i class="bi bi-envelope"></i>&ensp;E-mail</a>
                </li>
                <li><a href="https://wa.me/31624795014" target="_blank" rel="noopener noreferrer"><i
							class="bi bi-whatsapp"></i>&ensp;WhatsApp</a></li>
            </ul>
            <div>
                <div><h4><a href="https://bertvanstam.org">Nederlands</a><h4></div>
                <div><a href="#">Back to top&ensp;<i class="bi bi-arrow-up-circle"></i></a></div>
            </div>
        </nav>
    </footer>
</body>
<script>
    const themeSwitch = document.getElementById('themeswitch');

    if (themeSwitch) {
        let label = document.getElementById('themeswitch-labeltext');
        const event = new Event('change');

        themeSwitch.addEventListener('change', function(event) {
            changeTheme();
        });

        initTheme();

        function initTheme() {
            let darkThemeSelected = false;
            let storedPreference = localStorage.getItem('themeSwitch');
            if (storedPreference !== null) {
                darkThemeSelected = storedPreference === 'dark';
            } else {
                darkThemeSelected = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            }

            if (darkThemeSelected) {
                themeSwitch.checked = true;
                themeSwitch.dispatchEvent(event);
            }
        };

        function changeTheme() {
            if (themeSwitch.checked) {
                document.body.setAttribute('data-theme', 'dark');
                localStorage.setItem('themeSwitch', 'dark');
                if (label) {
                    label.innerHTML = "Light theme";
                }
            } else {
                document.body.removeAttribute('data-theme');
                localStorage.setItem('themeSwitch', 'light');
                if (label) {
                    label.innerHTML = "Dark theme";
                }
            }
        };
    }
</script>

</html>