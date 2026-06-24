<?php

declare(strict_types=1);

$basePath = '../';
$currentPage = 'rental-space';
$currentNav = 'rental-space';

require __DIR__ . '/../includes/bootstrap.php';

$extraHead = <<<'HTML'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"複数時間の予約は可能ですか？","acceptedAnswer":{"@type":"Answer","text":"可能です。ご利用は1時間からです。ご希望の時間をあらかじめご予約ください。当日の延長はできません。"}}
  ]
}
</script>
HTML;

require __DIR__ . '/../includes/head.php';
require __DIR__ . '/../includes/header.php';
?>

    <section class="page-hero page-hero--space">
      <div class="container page-hero__inner">
        <div class="page-hero__content">
          <div class="section-heading">
            <h1 class="section-heading__jp">レンタルスペースゆう</h1>
            <p class="section-heading__en">Rental Space Yuu</p>
          </div>
          <p class="page-hero__lead">健康セミナー・美容講座・ヨガ／ピラティスなどのワークショップ、女性向け勉強会まで。心身を整える活動にご利用いただけるセミナールームです。</p>
        </div>
        <img class="page-hero__image" src="<?php echo asset('images/room01.jpg'); ?>" alt="セミナールームの室内写真">
      </div>
    </section>

    <?php require __DIR__ . '/../includes/rental-space-body.php'; ?>

    <section class="section">
      <div class="container">
        <div class="home-section-label"><p>RESERVATION</p><h2>ご予約</h2></div>
        <?php reservation_placeholder(); ?>
        <p class="reservation-fallback"><a href="<?php echo page_url('/contact/'); ?>" class="btn btn--outline">お問い合わせフォームから予約する</a></p>
      </div>
    </section>

    <section class="section section--soft">
      <div class="container">
        <div class="home-section-label"><p>FAQ</p><h2>よくある質問</h2></div>
        <div class="faq-stack">
          <details class="faq-item"><summary class="faq-item__question"><span class="faq-item__q-text">何名まで利用できますか？</span><span class="faq-item__icon" aria-hidden="true">+</span></summary><div class="faq-item__answer"><p>レイアウトにより異なりますが、少人数から最大30名程度までご利用いただけます。</p></div></details>
          <details class="faq-item"><summary class="faq-item__question"><span class="faq-item__q-text">備品の持ち込みはできますか？</span><span class="faq-item__icon" aria-hidden="true">+</span></summary><div class="faq-item__answer"><p>内容によりご相談可能です。詳細はお問い合わせください。</p></div></details>
          <details class="faq-item"><summary class="faq-item__question"><span class="faq-item__q-text">複数時間の予約は可能ですか？</span><span class="faq-item__icon" aria-hidden="true">+</span></summary><div class="faq-item__answer"><p>可能です。ご利用は1時間からです。ご希望の時間をあらかじめご予約ください。当日の延長はできません。追加でご利用を希望される場合は、事前に別途ご予約ください。</p></div></details>
          <details class="faq-item"><summary class="faq-item__question"><span class="faq-item__q-text">キャンセルポリシーは？</span><span class="faq-item__icon" aria-hidden="true">+</span></summary><div class="faq-item__answer"><p>当日キャンセルのみ返金不可となります。前日までのキャンセルにより返金が発生した場合、振込手数料は利用者負担となります。</p></div></details>
        </div>
      </div>
    </section>

    <?php require __DIR__ . '/../includes/access-nishi.php'; ?>

<?php
require __DIR__ . '/../includes/cta-contact.php';
require __DIR__ . '/../includes/footer.php';
