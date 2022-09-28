<script src="<?php echo base_url();?>/assets/js/lightslider-new.js"></script>
    <script>
        function myFunction() {
            var element = document.getElementById("vtMenu");
            element.classList.toggle("open");
        }
        window.addEventListener('click', function (e) {
            if (document.getElementById('vtMenu').contains(e.target)) {
                // Clicked in box
            } else {
                var element = document.getElementById("vtMenu");
                element.classList.remove("open");
            }
        });
    </script>
</body>

</html>