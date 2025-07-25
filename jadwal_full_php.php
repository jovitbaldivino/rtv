<?php
include 'header.php';
include 'namaprogram.php';
?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GD84TTG2TP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GD84TTG2TP');
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104233800-1', 'auto');
  ga('send', 'pageview');
</script>

<style>
.list {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.list--ordered {
  counter-reset: list-counter;
  display: block;
}
@media (min-width: 40em) {
  .list--ordered {
    -webkit-columns: 2 auto;
       -moz-columns: 2 auto;
            columns: 2 auto;
    -webkit-column-gap: 2rem;
       -moz-column-gap: 2rem;
            column-gap: 2rem;
  }
}
.list--ordered .list__item {
  background-image: -webkit-linear-gradient(top, #ddd 0%, #ddd 100%);
  background-image: linear-gradient(180deg, #ddd 0%, #ddd 100%);
  background-repeat: no-repeat;
  background-size: 2px 100%;
  background-position: 1rem center;
  display: block;
  min-height: 2rem;
  padding-top: 1rem;
  padding-bottom: 1rem;
  padding-left: 3rem;
  position: relative;
}
.list--ordered .list__item:nth-child(1)::before {
  background-position: center 10%;
}
.list--ordered .list__item:nth-child(2)::before {
  background-position: center 20%;
}
.list--ordered .list__item:nth-child(3)::before {
  background-position: center 30%;
}
.list--ordered .list__item:nth-child(4)::before {
  background-position: center 40%;
}
.list--ordered .list__item:nth-child(5)::before {
  background-position: center 50%;
}
.list--ordered .list__item:nth-child(6)::before {
  background-position: center 60%;
}
.list--ordered .list__item:nth-child(7)::before {
  background-position: center 70%;
}
.list--ordered .list__item:nth-child(8)::before {
  background-position: center 80%;
}
.list--ordered .list__item:nth-child(9)::before {
  background-position: center 90%;
}
.list--ordered .list__item:nth-child(10)::before {
  background-position: center 100%;
}
.list--ordered .list__item:nth-child(10)::before {
  background-position: center 10%;
}
.list--ordered .list__item:nth-child(11)::before {
  background-position: center 20%;
}
.list--ordered .list__item:nth-child(12)::before {
  background-position: center 30%;
}
.list--ordered .list__item:nth-child(13)::before {
  background-position: center 40%;
}
.list--ordered .list__item:nth-child(14)::before {
  background-position: center 50%;
}
.list--ordered .list__item:nth-child(15)::before {
  background-position: center 60%;
}
.list--ordered .list__item:nth-child(16)::before {
  background-position: center 70%;
}
.list--ordered .list__item:nth-child(17)::before {
  background-position: center 80%;
}
.list--ordered .list__item:nth-child(18)::before {
  background-position: center 90%;
}
.list--ordered .list__item:nth-child(19)::before {
  background-position: center 100%;
}
.list--ordered .list__item:nth-child(20)::before {
  background-position: center 10%;
}
.list--ordered .list__item:nth-child(21)::before {
  background-position: center 20%;
}
.list--ordered .list__item:nth-child(22)::before {
  background-position: center 30%;
}
.list--ordered .list__item:nth-child(23)::before {
  background-position: center 40%;
}
.list--ordered .list__item:nth-child(24)::before {
  background-position: center 50%;
}
.list--ordered .list__item:nth-child(25)::before {
  background-position: center 60%;
}
.list--ordered .list__item:nth-child(26)::before {
  background-position: center 70%;
}
.list--ordered .list__item:nth-child(27)::before {
  background-position: center 80%;
}
.list--ordered .list__item:nth-child(28)::before {
  background-position: center 90%;
}
.list--ordered .list__item::before {
  background: #0082d5;
  background: -webkit-linear-gradient(top, #0082d5 0%, #a234d5 50%, #d74059 100%);
  background: linear-gradient(180deg, #0082d5 0%, #a234d5 50%, #d74059 100%);
  background-repeat: no-repeat;
  background-size: 2rem 20rem;
  border-radius: 50%;
  color: white;
  content: counter(list-counter);
  counter-increment: list-counter;
  display: block;
  height: 2rem;
  left: 0;
  line-height: 2;
  position: absolute;
  text-align: center;
  width: 2rem;
}
</style>

<header class="site-header-jadwal d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <!--   <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-0">SCHEDULE</h2>
            </div> -->
        </div>
    </div>
</header>

<section class="about-section section-padding" id="section_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 mx-auto">
                <div class="pb-5 mb-5">
                    <div class="section-title-wrap mb-4">
                        <h4 class="section-title">Acara Hari Ini</h4>
                    </div>

                    <ol class="list list--ordered" >
                        <?php foreach ($schedules as $item): ?>
                            <li class="list__item" style='font-family:"Open Sans",Arial,sans-serif;text-decoration:none;font-size:20px;'>
                                <?php echo htmlspecialchars($item['event_name']); ?><br>
                                <?php echo htmlspecialchars($item['event_time']); ?>
                            </li>
                        <?php endforeach; ?>
                    </ol>

                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- IKLAN SABUK -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-9604343670113678"
                         data-ad-slot="2106089140"
                         data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>

            <section class="topics-section section-padding pb-0" id="section_3">
                <div class="container">
                    <div class="row">
                        <a href="https://wa.me/62881024656050">
                        <img src="https://rtv.co.id/dev/Footer_MUX.jpg" width="100%">
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
</main>

<?php
include 'footer.php';
?>
