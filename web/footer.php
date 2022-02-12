</main>
    <footer>
        <nav>

            <div>
                <div class="strong">Bert van Stam, organist&nbsp;en&nbsp;componist</div>
                <div><input type="checkbox" id="themeswitch"><label for="themeswitch"><span id="themeswitch-labeltext">Donker thema</span>&ensp;<i
							class="bi bi-lightbulb-fill"></i></label></div>
            </div>
            <ul>
                <li>
                    <a href="mailto:info@bertvanstam.org"><i class="bi bi-envelope"></i>&ensp;E-mail</a>
                </li>
                <li><a href="https://wa.me/31624795014" target="_blank" rel="noopener noreferrer"><i
							class="bi bi-whatsapp"></i>&ensp;WhatsApp</a></li>
                <li><a href="https://www.youtube.com/channel/UCdPF_RqksIFIJuHUwqkRbFQ" target="_blank" rel="noopener noreferrer"><i class="bi bi-youtube"></i>&ensp;YouTube</a></li>
            </ul>
            <div class="smallcaps">
                <div><a href="https://en.bertvanstam.org">English</a></div>
                <div><a href="#">Terug naar boven&ensp;<i class="bi bi-arrow-up-circle"></i></a></div>
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
                    label.innerHTML = "Licht thema";
                }
            } else {
                document.body.removeAttribute('data-theme');
                localStorage.setItem('themeSwitch', 'light');
                if (label) {
                    label.innerHTML = "Donker thema";
                }
            }
        };
    }
</script>

</html>