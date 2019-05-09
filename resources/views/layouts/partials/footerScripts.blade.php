<script>
    const navMenu = {
        toggle() {
            const menu = document.getElementById('js-nav-menu');
            menu.classList.toggle('hidden');
            menu.classList.toggle('md:block');
            document.getElementById('js-nav-menu-hide').classList.toggle('hidden');
            document.getElementById('js-nav-menu-show').classList.toggle('hidden');
        },
    }
    const navContact = {
        toggle() {
            const menu = document.getElementById('js-nav-contact');
            menu.classList.toggle('hidden');
        },
    }
</script>