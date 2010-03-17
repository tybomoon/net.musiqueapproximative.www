<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <p><?php echo link_to('Browse all tracks', '@post_list') ?></p>
    <p>
      <form method="get" action="<?php echo url_for('@post_search') ?>">
        <input type="text" name="q" value="<?php echo $sf_request->getParameter('q') ?>"/>
        <input type="submit" value="Search !" />
      </form>
    </p>
    <?php echo $sf_content ?>
  </body>
</html>
