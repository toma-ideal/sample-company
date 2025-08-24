<?php
$jaTitle = $pageJaTitle ?? 'ページタイトル';
$enTitle = $pageEnTitle ?? 'Page Title';
$imagePath = '../assets/img/' . $currentPage . '/mv.webp';
?>

<div class="page-header">
  <div class="inner page-header__inner">
    <hgroup class="page-header__ttl-wrap">
      <p class="page-header__ttl--en f60">
        <?php echo htmlspecialchars($enTitle, ENT_QUOTES, 'UTF-8'); ?>
      </p>
      <h2 class="page-header__ttl--ja f13">
        <?php echo htmlspecialchars($jaTitle, ENT_QUOTES, 'UTF-8'); ?>
      </h2>
    </hgroup>

    <div class="page-header__img">
      <img src="<?php echo htmlspecialchars($imagePath, ENT_QUOTES, 'UTF-8'); ?>"
        alt="<?php echo htmlspecialchars($jaTitle, ENT_QUOTES, 'UTF-8'); ?>">
    </div>
  </div>
</div>