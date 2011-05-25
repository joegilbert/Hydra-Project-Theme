<?php if ( is_front_page() && ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) ) : ?>

<?php elseif ( !is_front_page() ): ?>

<article id="sub-side" class="widget widget_text">
  <div class="container">
    <h3>Connect</h3>
    <ul class="util_links">
      <li class="news-events"><a href="<?php echo get_category_link( 5 ); ?>">News &amp; Events</a></li>
      <li class="github"><a href="">Hydra on Github</a></li>
      <li class="wiki"><a href="">Hydra Wiki</a></li>
      <li class="jira"><a href="">Hydra JIRA</a></li>
      <li class="jenkins"><a href="http://hudson.projecthydra.org/">Hydra Continuous Integration</a></li>
      <li class="contact"><a href="">Contact Us</a></li>
    </ul>
  </div>
</article>

<?php endif; ?>
