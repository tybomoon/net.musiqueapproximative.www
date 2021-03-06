<?php if ($list_title): ?>
<h4><?php echo $list_title ?> (<?php echo link_to('retour', '@homepage') ?>)</h4>
<?php endif; ?>

<ul>
  <?php foreach ($posts as $post): ?>

    <li>
      <a href="<?php echo url_for('@post_show?slug='.$post->slug) ?>">
        <span class="number">Itération <?php echo $post->id ?></span>
        <span id="t-trax">
          <?php echo $post->track_author ?> - <?php echo $post->track_title ?>
          <span class="author">(<?php echo $post->getContributorDisplayName() ?>)</span>
        </span>
      </a>
    </li>

  <?php endforeach; ?>
</ul>
