<?php
/**
 * @file
 * Default template for feed displays that use the RSS style.
 *
 * @ingroup views_templates
 */
?>
<?php print "<?xml"; ?> version="1.0" encoding="utf-8" <?php print "?>"; ?>
<rss version="2.0" xml:base="<?php print $link; ?>"<?php print $namespaces; ?> xmlns:redia-rss="http://xml.redia.dk/rss">
  <channel>
    <title><?php print $title; ?></title>
    <link><?php print $link; ?></link>
    <content-rss:subheadline><?php print $subheadline; ?></content-rss:subheadline>
    <description><?php print $description; ?></description>
    <language><?php print $langcode; ?></language>
    <?php print $channel_elements; ?>
    <?php print $items; ?>
  </channel>
</rss>