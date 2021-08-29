<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });
        }

    });
</script>

<body>
<nav class="navbar" role="navigation" aria-label="main navigation" style="background-color: #1D1E23">
    <div class="navbar-brand" style="background-color: #1D1E23">
        <a class="navbar-item" href="index.php">
            <p>Het Tij</p>
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu" style="background-color: #1D1E23">
        <div class="navbar-start">
            <a class="navbar-item" href="doelen.php">
                <span class="icon">
                <i class="fas fa-info-circle"></i>
                </span>
                <span>Doelen</span>
            </a>

            <a class="navbar-item" href="contact.php">
                <span class="icon">
                    <i class="fas fa-question-circle"></i>
                </span>
                <span>Contact</span>
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Meer
                </a>

                <div class="navbar-dropdown" style="background-color: #1D1E23">
                    <a class="navbar-item" href="legaal.php">
                        <span class="icon">
                            <i class="fas fa-balance-scale"></i>
                        </span>
                        <span>Legaal</span>
                    </a>
                    <a class="navbar-item" href="projecten.php">
                        <span class="icon">
                            <i class="fas fa-tools"></i>
                        </span>
                        <span>Projecten</span>
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item" href="mailto:joshuaslui0203@gmail.com">
                        <span class="icon">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                        <span>Problemen met website?</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button button-dark hvr-grow-rotate" target="_blank" href="https://www.yulius.nl/locatie/het-tij/">
                        <strong>Website 't Tij</strong>
                    </a>
                    <a class="button button-dark hvr-grow-rotate" target="_blank" href="https://github.com/GlenntWebs/htll">
                        Website Repository
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>