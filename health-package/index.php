<?php

declare(strict_types=1);

$basePath = '../';
$currentPage = 'health-package';
$currentNav = 'health-package';

require __DIR__ . '/../includes/bootstrap.php';

if (HEALTH_PACKAGE_COMING_SOON) {
    $pageDescription = '健康パッケージの詳細ページは現在準備中です。公開までしばらくお待ちください。';
    $robotsMeta = 'noindex, follow';
    $extraHead = '';
} else {
    $extraHead = <<<'HTML'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "健康パッケージとは何ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "健康補助食品とよもぎ蒸し、コンサルサポートを組み合わせた、ゆうダイモニア独自の体質改善プログラムです。"
      }
    }
  ]
}
</script>
HTML;
}

require __DIR__ . '/../includes/head.php';
require __DIR__ . '/../includes/header.php';

if (HEALTH_PACKAGE_COMING_SOON) {
    ?>

    <section class="page-hero page-hero--simple">
      <div class="container page-hero__inner">
        <div class="section-heading">
          <h1 class="section-heading__jp">健康パッケージ</h1>
          <p class="section-heading__en">Health Package</p>
        </div>
        <p class="page-hero__lead">ゆうダイモニアの中核事業として、健康コンサルティングと温活を組み合わせたプログラムをご用意しています。</p>
      </div>
    </section>

    <section class="section page-coming-soon">
      <div class="container">
        <div class="coming-soon card page-coming-soon__card">
          <p class="page-coming-soon__badge">COMING SOON</p>
          <h2>現在準備中です</h2>
          <p>プラン内容・料金の詳細を調整しております。<br>公開まで今しばらくお待ちください。</p>
          <p class="page-coming-soon__note">よもぎ蒸し・レンタルスペースなど、他のサービスは通常どおりご利用いただけます。</p>
          <a href="<?php echo page_url('/contact/'); ?>" class="btn btn--outline">お問い合わせはこちら</a>
        </div>
      </div>
    </section>

    <?php
} else {
    require __DIR__ . '/../includes/health-package-body.php';
}

require __DIR__ . '/../includes/cta-contact.php';
require __DIR__ . '/../includes/footer.php';
