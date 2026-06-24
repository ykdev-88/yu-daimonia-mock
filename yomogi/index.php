<?php

declare(strict_types=1);

$basePath = '../';
$currentPage = 'yomogi';
$currentNav = 'yomogi';

require __DIR__ . '/../includes/bootstrap.php';

$extraHead = <<<'HTML'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"1回の所要時間はどのくらいですか？","acceptedAnswer":{"@type":"Answer","text":"よもぎ蒸しは1回40分です。お着替え等含めますと、60分が目安となります。"}},
    {"@type":"Question","name":"持ち物は何が必要ですか？","acceptedAnswer":{"@type":"Answer","text":"水分補給用のお水をご用意しています。タオルやマント（店頭購入可）の持込で最大1500円OFFになります。"}}
  ]
}
</script>
HTML;

require __DIR__ . '/../includes/head.php';
require __DIR__ . '/../includes/header.php';
?>

    <section class="yomogi-hero">
      <div class="container yomogi-hero__inner">
        <div class="yomogi-hero__content">
          <h1><span class="phrase-keep">よもぎ蒸し</span></h1>
          <p class="yomogi-hero__en">Yomogi Steam</p>
          <p class="page-hero__lead">よもぎの蒸気で内側からじんわり温める温活サービス。名古屋西店でご提供しています。</p>
          <div class="yomogi-notice">
            <span aria-hidden="true">!</span>
            <p>よもぎ蒸しは民間療法です。<br>体調に不安がある方は事前にご相談ください。</p>
          </div>
        </div>
        <img class="yomogi-hero__image" src="<?php echo asset('images/kanpou-steam-main.jpg'); ?>" alt="よもぎ蒸しの蒸気が立ちのぼる写真">
      </div>
    </section>

    <section class="yomogi-concept section">
      <div class="container yomogi-concept__grid">
        <div class="yomogi-concept__text">
          <p class="home-eyebrow">CONCEPT</p>
          <h2><span class="phrase-keep">よもぎ蒸し</span>とは？</h2>
          <p>よもぎの蒸気に包まれ、内側からじんわり温まるよもぎ蒸し。女性特有のゆらぎや冷え、疲れを癒し、めぐりのよい毎日へ。自分をいたわる温活習慣を、ゆうダイモニア名古屋西店で。</p>
        </div>
      </div>
    </section>

    <section class="yomogi-features section section--soft">
      <div class="container">
        <div class="home-section-label">
          <p>FEATURES</p>
          <h2>特長</h2>
        </div>
        <div class="yomogi-feature-grid">
          <article class="feature-card yomogi-feature-card">
            <div class="feature-card__icon" aria-hidden="true">♨</div>
            <h3 class="feature-card__title">3台完備</h3>
            <p class="feature-card__text">ゆったり使える3台をご用意。お一人でも、グループでも快適にご利用いただけます。</p>
          </article>
          <article class="feature-card yomogi-feature-card">
            <div class="feature-card__icon" aria-hidden="true">◎</div>
            <h3 class="feature-card__title">ペア予約可能</h3>
            <p class="feature-card__text">お友達やご家族と一緒に。ペア予約で楽しい温活時間を過ごせます。</p>
          </article>
          <article class="feature-card yomogi-feature-card">
            <div class="feature-card__icon" aria-hidden="true">♡</div>
            <h3 class="feature-card__title">女性にやさしい温活時間</h3>
            <p class="feature-card__text">厳選したよもぎの蒸気でじんわり温め、心も体もリラックス。</p>
          </article>
        </div>
      </div>
    </section>

    <section class="yomogi-menu section">
      <div class="container">
        <div class="home-section-label">
          <p>MENU</p>
          <h2>料金メニュー</h2>
        </div>
        <!-- TODO: 料金メニュー確定後に更新 -->
        <div class="yomogi-menu-grid">
          <article class="yomogi-price-card">
            <h3>メニューA（仮）</h3>
            <p>基本コース</p>
            <strong>¥3,300<span>（税込）</span></strong>
            <small>40分 / お着替え含め約60分</small>
          </article>
          <article class="yomogi-price-card">
            <h3>メニューB（仮）</h3>
            <p>じっくり温活コース</p>
            <strong>¥4,400<span>（税込）</span></strong>
            <small>内容・時間は確定後に更新</small>
          </article>
          <article class="yomogi-price-card">
            <h3>ペアメニュー（仮）</h3>
            <p>お二人で温活</p>
            <strong>¥8,000<span>（税込）</span></strong>
            <small>内容・時間は確定後に更新</small>
          </article>
        </div>
      </div>
    </section>

    <section class="section section--soft">
      <div class="container">
        <div class="home-section-label">
          <p>RESERVATION</p>
          <h2>ご予約</h2>
        </div>
        <p class="section-lead">ご予約はこちらから。予約システム稼働まではお問い合わせフォームをご利用ください。</p>
        <?php reservation_placeholder(); ?>
        <p class="reservation-fallback">
          <a href="<?php echo page_url('/contact/'); ?>" class="btn btn--outline">お問い合わせフォームから予約する</a>
        </p>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="home-section-label">
          <p>FAQ</p>
          <h2>よくある質問</h2>
        </div>
        <div class="faq-stack">
          <details class="faq-item"><summary class="faq-item__question"><span class="faq-item__q-text">初めてでも大丈夫ですか？</span><span class="faq-item__icon" aria-hidden="true">+</span></summary><div class="faq-item__answer"><p>スタッフがご案内しますので、初めての方も安心してお越しください。</p></div></details>
          <details class="faq-item"><summary class="faq-item__question"><span class="faq-item__q-text">1回の所要時間はどのくらいですか？</span><span class="faq-item__icon" aria-hidden="true">+</span></summary><div class="faq-item__answer"><p>よもぎ蒸しは1回40分です。お着替え等含めますと、60分が目安となります。</p></div></details>
          <details class="faq-item"><summary class="faq-item__question"><span class="faq-item__q-text">持ち物は何が必要ですか？</span><span class="faq-item__icon" aria-hidden="true">+</span></summary><div class="faq-item__answer"><p>水分補給用のお水をご用意しています。タオルやマント（店頭購入可）の持込で最大1500円OFFになります。</p></div></details>
          <details class="faq-item"><summary class="faq-item__question"><span class="faq-item__q-text">よもぎ蒸しの効果はどのようなものですか？</span><span class="faq-item__icon" aria-hidden="true">+</span></summary><div class="faq-item__answer"><p>よもぎ蒸しは粘膜を通して内臓を温めることができる韓国発祥の民間療法です。リラックス効果で自然免疫力もアップし、心地よく温まることで自律神経にもはたらきかけます。</p></div></details>
          <details class="faq-item"><summary class="faq-item__question"><span class="faq-item__q-text">生理中でも利用できますか？</span><span class="faq-item__icon" aria-hidden="true">+</span></summary><div class="faq-item__answer"><p>はい。ご利用いただけます。生理中も足蒸しという方法で温まることが可能です。生理のトラブルがある方は定期的に温まることをおすすめします。</p></div></details>
          <details class="faq-item"><summary class="faq-item__question"><span class="faq-item__q-text">お支払い方法を教えてください。</span><span class="faq-item__icon" aria-hidden="true">+</span></summary><div class="faq-item__answer"><p>クレジットカード、交通系、QRコード決済が可能です。</p></div></details>
        </div>
      </div>
    </section>

    <?php require __DIR__ . '/../includes/access-nishi.php'; ?>

<?php
require __DIR__ . '/../includes/cta-contact.php';
require __DIR__ . '/../includes/footer.php';
