<footer id="footer" class="footer">
    <span class="copyrights">&copy; 2021 - Reservation et Vol</span>
    <a href="#" class="conditions">Contact</a>
    <a href="#" class="conditions">Condition générales de vente</a>
</footer>

<script>
    const burgerContainer = document.querySelector('.burger-container');
    const navLinks = document.querySelector('.nav-links');

    burgerContainer.addEventListener('click', () => {
        burgerContainer.classList.toggle('active');
        navLinks.classList.toggle('active');
    })
</script>

       
</body>
</html>