<?php
  $currentPage = 'top'; //ページフラグ
  $pageJaTitle = 'トップ'; // 日本語タイトル
  $pageEnTitle = 'TOP';  // 英語タイトル
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
    include_once(dirname(__FILE__).'/parts/head.php');
  ?>
  <!-- このページにのみ読み込ませるもの -->
  <link rel="stylesheet" href="/assets/css/top.css" />
</head>

<body class="top-body">
  <?php include_once(dirname(__FILE__).'/parts/header.php');?>

  <main class="top-main" id="top-main">
    <section class="top-mv">
      TOP-MV
    </section>

    <!-- INTRO -->
    <section class="top-intro sec">
      <div class="inner">
        <hgroup class="sec__ttl-wrap sec__ttl-wrap--left">
          <h2 class="sec__ttl--ja f24">
            イントロ
          </h2>
          <p class="sec__ttl--en f18">
            INTRO
          </p>
        </hgroup>
      </div>
    </section>

    <!-- ABOUT -->
    <section class="top-about sec">
      <div class="inner">
        <hgroup class="sec__ttl-wrap sec__ttl-wrap--center">
          <h2 class="sec__ttl--ja f24">
            私たちについて
          </h2>
          <p class="sec__ttl--en f18">
            ABOUT
          </p>
        </hgroup>
      </div>
    </section>


  </main>

  <?php include_once(dirname(__FILE__).'/parts/footer.php');?>
  <!-- このページにのみ読み込ませるもの -->
  <script src="/assets/js/top.js"></script>
</body>

</html>