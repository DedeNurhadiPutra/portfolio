<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Jumbotron -->
<section class="jumbotron text-center">
    <img src="img/IMG_4337.JPG" alt="Dede Nurhadi Putra" width="200" class="rounded-circle img-thumbnail">
    <h1 class="display-4">Dede Nurhadi Putra</h1>
    <p class="lead">Student | Web Developer</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffff" fill-opacity="1" d="M0,96L40,122.7C80,149,160,203,240,197.3C320,192,400,128,480,112C560,96,640,128,720,160C800,192,880,224,960,213.3C1040,203,1120,149,1200,112C1280,75,1360,53,1400,42.7L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
</section>

<!-- About -->
<section id="about">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>About Me</h2>
            </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
            <div class="col-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius minus esse dolorum expedita repellat consectetur! Laudantium repellendus, voluptas facilis enim porro quasi voluptate! Ex repellendus, perspiciatis veniam exercitationem deserunt ab.
            </div>
            <div class="col-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aliquam dolore cumque perferendis illo modi in ullam quas corrupti earum magni atque nobis porro voluptas accusantium, eaque saepe rem laboriosam voluptatum? asperiores quaerat.
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#e2edff" fill-opacity="1" d="M0,160L40,149.3C80,139,160,117,240,128C320,139,400,181,480,176C560,171,640,117,720,117.3C800,117,880,171,960,192C1040,213,1120,203,1200,192C1280,181,1360,171,1400,165.3L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
</section>

<?= $this->endSection(); ?>