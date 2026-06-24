<?php

declare(strict_types=1);

$basePath = '../';
$currentPage = 'shop';
$currentNav = 'shop';

require __DIR__ . '/../includes/bootstrap.php';

$extraHead = <<<'HTML'
<script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": "HealthAndBeautyBusiness",
    "name": "ゆうダイモニア 覚王山店",
    "address": {"@type":"PostalAddress","streetAddress":"末盛通3-17 ハーベイレジデンス覚王山2階","addressLocality":"名古屋市千種区","addressRegion":"愛知県","postalCode":"464-0821","addressCountry":"JP"},
    "url": "https://yu-daimonia.com/shop/"
  },
  {
    "@context": "https://schema.org",
    "@type": "HealthAndBeautyBusiness",
    "name": "ゆうダイモニア 岐阜店",
    "address": {"@type":"PostalAddress","streetAddress":"金町1-4 プライム岐阜金町 1F","addressLocality":"岐阜市","addressRegion":"岐阜県","postalCode":"500-8842","addressCountry":"JP"},
    "url": "https://yu-daimonia.com/shop/"
  },
  {
    "@context": "https://schema.org",
    "@type": "HealthAndBeautyBusiness",
    "name": "ゆうダイモニア 名古屋西店",
    "address": {"@type":"PostalAddress","streetAddress":"新道１丁目２−９","addressLocality":"名古屋市西区","addressRegion":"愛知県","postalCode":"451-0043","addressCountry":"JP"},
    "url": "https://yu-daimonia.com/shop/"
  }
]
</script>
HTML;

require __DIR__ . '/../includes/head.php';
require __DIR__ . '/../includes/header.php';
?>

    <section class="page-hero page-hero--simple">
      <div class="container page-hero__inner">
        <div class="section-heading">
          <h1 class="section-heading__jp">店舗案内</h1>
          <p class="section-heading__en">Shop</p>
        </div>
        <p class="page-hero__lead">ゆうダイモニアは覚王山店・岐阜店・名古屋西店の3店舗で、地域に合わせたサービスを提供しています。</p>
      </div>
    </section>

    <section class="section shop-nav-section" aria-labelledby="shop-nav-label">
      <div class="container">
        <div class="contact-shop-select shop-shop-select">
          <p class="contact-tabs__label" id="shop-nav-label">店舗を選んでください</p>
          <nav class="contact-tabs shop-nav" data-shop-nav aria-label="店舗一覧">
            <a class="contact-tab is-active" href="#sakae" data-shop-link="sakae" aria-current="true">
              <span class="contact-tab__name">覚王山店</span>
            </a>
            <a class="contact-tab" href="#gifu" data-shop-link="gifu">
              <span class="contact-tab__name">岐阜店</span>
            </a>
            <a class="contact-tab" href="#nishi" data-shop-link="nishi">
              <span class="contact-tab__name">名古屋西店</span>
            </a>
          </nav>
        </div>
      </div>
    </section>

    <section class="section shop-block" id="sakae">
      <div class="container shop-block__grid">
        <div class="shop-block__media">
          <img src="<?php echo asset('images/shop-kakuozan-sign.png'); ?>" alt="ゆうダイモニア 覚王山店の店舗サイン（健美ガーデン）" width="1200" height="800" loading="lazy">
        </div>
        <div class="shop-block__body">
          <h2>ゆうダイモニア 覚王山店</h2>
          <dl class="shop-info-list">
            <div><dt>住所</dt><dd>〒464-0821 愛知県名古屋市千種区末盛通3-17 ハーベイレジデンス覚王山2階</dd></div>
            <div><dt>アクセス</dt><dd>地下鉄東山線「覚王山」駅 2番出口から徒歩約7分<br>地下鉄東山線「本山」駅 1番出口から徒歩約5分</dd></div>
            <div><dt>駐車場</dt><dd>当店専用の駐車場はございません。お車でお越しの際は近隣のコインパーキングをご利用ください。</dd></div>
          </dl>
          <p class="shop-contact-note">お問い合わせは<a href="<?php echo page_url('/contact/'); ?>">メールフォーム</a>よりご連絡ください。サロンの機器・プログラムは<a href="<?php echo page_url('/'); ?>#salon">TOPページ</a>をご覧ください。</p>
          <div class="access-map">
            <iframe
              class="access-map__iframe"
              src="https://www.google.com/maps?q=%E3%80%92464-0821%20%E6%84%9B%E7%9F%A5%E7%9C%8C%E5%90%8D%E5%8F%A4%E5%B1%8B%E5%B8%82%E5%8D%83%E7%A8%AE%E5%8C%BA%E6%9C%AB%E7%9B%9B%E9%80%9A3-17%20%E3%83%8F%E3%83%BC%E3%83%99%E3%82%A4%E3%83%AC%E3%82%B8%E3%83%87%E3%83%B3%E3%82%B9%E8%A6%9A%E7%8E%8B%E5%B1%B12%E9%9A%8E&output=embed"
              width="100%"
              height="300"
              style="display:block;width:100%;height:300px;border:0;"
              title="覚王山店のGoogleマップ"
              loading="lazy"
              allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>
    </section>

    <section class="section section--soft shop-block" id="gifu">
      <div class="container shop-block__grid shop-block__grid--reverse">
        <div class="shop-block__media">
          <img src="<?php echo asset('images/shop-gifu-exterior.png'); ?>" alt="ゆうダイモニア 岐阜店の外観。モダンなガラス張りの店舗入口と緑の植栽。" width="1200" height="800" loading="lazy">
        </div>
        <div class="shop-block__body">
          <h2>ゆうダイモニア 岐阜店</h2>
          <dl class="shop-info-list">
            <div><dt>住所</dt><dd>〒500-8842 岐阜県岐阜市金町1-4 プライム岐阜金町 1F</dd></div>
            <div><dt>アクセス</dt><dd>JR「岐阜」駅 北口から徒歩約20分</dd></div>
          </dl>
          <p class="shop-contact-note">お問い合わせは<a href="<?php echo page_url('/contact/'); ?>">Instagram・公式LINE</a>よりご連絡ください。サロンの機器・プログラムは<a href="<?php echo page_url('/'); ?>#salon">TOPページ</a>をご覧ください。</p>
          <div class="access-map">
            <iframe
              class="access-map__iframe"
              src="https://www.google.com/maps?q=%E3%80%92500-8842%20%E5%B2%90%E9%98%9C%E7%9C%8C%E5%B2%90%E9%98%9C%E5%B8%82%E9%87%91%E7%94%BA1-4%20%E3%83%97%E3%83%A9%E3%82%A4%E3%83%A0%E5%B2%90%E9%98%9C%E9%87%91%E7%94%BA%201F&output=embed"
              width="100%"
              height="300"
              style="display:block;width:100%;height:300px;border:0;"
              title="岐阜店のGoogleマップ"
              loading="lazy"
              allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>
    </section>

    <section class="section shop-block" id="nishi">
      <div class="container shop-block__grid">
        <div class="shop-block__media">
          <img src="<?php echo asset('images/shop-entrance.jpg'); ?>" alt="ゆうダイモニア名古屋西店の外観" width="640" height="480" loading="lazy">
        </div>
        <div class="shop-block__body">
          <h2>ゆうダイモニア 名古屋西店</h2>
          <dl class="shop-info-list">
            <div><dt>住所</dt><dd>〒451-0043 愛知県名古屋市西区新道１丁目２−９</dd></div>
            <div><dt>最寄り駅</dt><dd>地下鉄鶴舞線「浅間町」駅 徒歩約2分</dd></div>
            <div><dt>営業時間</dt><dd>09:30〜17:30</dd></div>
            <div><dt>定休日</dt><dd>不定休</dd></div>
          </dl>
          <h3>この店舗のサービス</h3>
          <ul class="shop-service-links">
            <li class="shop-service-link-row">
              <span class="shop-service-link-row__label"><span class="phrase-keep">よもぎ蒸し</span></span>
              <a href="<?php echo page_url('/yomogi/'); ?>" class="btn btn--primary btn--pill btn--sm">ページを見る</a>
            </li>
            <li class="shop-service-link-row">
              <span class="shop-service-link-row__label">レンタルスペースゆう</span>
              <a href="<?php echo page_url('/rental-space/'); ?>" class="btn btn--primary btn--pill btn--sm">ページを見る</a>
            </li>
          </ul>
          <div class="access-map">
            <iframe
              class="access-map__iframe"
              src="https://www.google.com/maps?q=%E3%80%92451-0043%20%E6%84%9B%E7%9F%A5%E7%9C%8C%E5%90%8D%E5%8F%A4%E5%B1%8B%E5%B8%82%E8%A5%BF%E5%8C%BA%E6%96%B0%E9%81%93%EF%BC%91%E4%B8%81%E7%9B%AE%EF%BC%92%E2%88%92%EF%BC%99&output=embed"
              width="100%"
              height="300"
              style="display:block;width:100%;height:300px;border:0;"
              title="名古屋西店のGoogleマップ"
              loading="lazy"
              allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>
    </section>

<?php
require __DIR__ . '/../includes/cta-contact.php';
require __DIR__ . '/../includes/footer.php';
