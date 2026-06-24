<?php

declare(strict_types=1);

$basePath = '../';
$currentPage = 'contact';
$currentNav = 'contact';

require __DIR__ . '/../includes/bootstrap.php';

require __DIR__ . '/../includes/head.php';
require __DIR__ . '/../includes/header.php';
?>

    <section class="page-hero page-hero--simple">
      <div class="container page-hero__inner">
        <div class="section-heading">
          <h1 class="section-heading__jp">お問い合わせ</h1>
          <p class="section-heading__en">Contact</p>
        </div>
        <p class="page-hero__lead">店舗によって連絡方法が異なります。ご希望の店舗をお選びください。</p>
      </div>
    </section>

    <section class="section contact-main">
      <div class="container">
        <div class="contact-shop-select">
          <p class="contact-tabs__label" id="contact-tabs-label">店舗を選んでください</p>
          <div class="contact-tabs" role="tablist" aria-labelledby="contact-tabs-label">
            <button class="contact-tab is-active" type="button" role="tab" aria-selected="true" data-contact-tab="sakae">
              <span class="contact-tab__name">覚王山店</span>
              <span class="contact-tab__note">メールフォーム</span>
            </button>
            <button class="contact-tab" type="button" role="tab" aria-selected="false" data-contact-tab="gifu">
              <span class="contact-tab__name">岐阜店</span>
              <span class="contact-tab__note">Instagram・LINE</span>
            </button>
            <button class="contact-tab" type="button" role="tab" aria-selected="false" data-contact-tab="nishi">
              <span class="contact-tab__name">名古屋西店</span>
              <span class="contact-tab__note">Instagram・LINE</span>
            </button>
          </div>
        </div>

        <div class="contact-panel is-active" data-contact-panel="sakae" role="tabpanel">
          <h2>覚王山店 — メールフォーム</h2>
          <form class="contact-form card" id="contact-form" data-contact-form action="#" method="post">
            <div class="form-field">
              <label for="name">お名前 <span class="form-required">必須</span></label>
              <input type="text" id="name" name="name" required autocomplete="name">
            </div>
            <div class="form-field">
              <label for="email">メールアドレス <span class="form-required">必須</span></label>
              <input type="email" id="email" name="email" required autocomplete="email">
            </div>
            <div class="form-field">
              <label for="message">お問い合わせ内容 <span class="form-required">必須</span></label>
              <textarea id="message" name="message" rows="6" required></textarea>
            </div>
            <div class="form-field form-field--checkbox">
              <label><input type="checkbox" name="privacy" required> プライバシーポリシーに同意する</label>
            </div>
            <!-- TODO: 本番環境ではPHP（mail()またはSMTP）で覚王山店宛に送信 -->
            <button type="submit" class="btn btn--primary">送信する</button>
          </form>
        </div>

        <div class="contact-panel" data-contact-panel="gifu" role="tabpanel" hidden>
          <h2>岐阜店 — SNS / LINE</h2>
          <div class="contact-sns card">
            <p>岐阜店へのお問い合わせは、以下よりご連絡ください。</p>
            <ul class="contact-sns__list">
              <li>
                <strong>Instagram DM</strong>
                <p>@アカウント名 へDMをお送りください</p>
                <!-- TODO: 岐阜店Instagram URL確定後に更新 -->
                <a href="#" class="btn btn--outline btn--sm">Instagramを開く</a>
              </li>
              <li>
                <strong>公式LINE</strong>
                <p>LINEでお気軽にメッセージをどうぞ</p>
                <!-- TODO: 岐阜店LINE URL確定後に更新 -->
                <a href="#" class="btn btn--outline btn--sm">LINEを開く</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="contact-panel" data-contact-panel="nishi" role="tabpanel" hidden>
          <h2>名古屋西店 — SNS / LINE</h2>
          <div class="contact-sns card">
            <p>名古屋西店へのお問い合わせは、以下よりご連絡ください。</p>
            <ul class="contact-sns__list">
              <li>
                <strong>Instagram DM</strong>
                <p>@アカウント名 へDMをお送りください</p>
                <!-- TODO: 名古屋西店Instagram URL確定後に更新 -->
                <a href="#" class="btn btn--outline btn--sm">Instagramを開く</a>
              </li>
              <li>
                <strong>公式LINE</strong>
                <p>LINEでお気軽にメッセージをどうぞ</p>
                <!-- TODO: 名古屋西店LINE URL確定後に更新 -->
                <a href="#" class="btn btn--outline btn--sm">LINEを開く</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

<?php
require __DIR__ . '/../includes/footer.php';
