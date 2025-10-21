<?php
/**
 * Title: Featured Insights Grid
 * Slug: mendrix-consultancy/blog-grid
 * Categories: mendrix-media
 * Description: Blog posts grid with excerpts.
 */
?>
<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date"},"displayLayout":{"type":"flex","columns":3},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-query"><!-- wp:heading {"textAlign":"center","fontSize":"3xl"} -->
<h2 class="wp-block-heading has-text-align-center has-3xl-font-size">Latest insights</h2>
<!-- /wp:heading -->

<!-- wp:post-template -->
<!-- wp:group {"className":"animate-on-scroll","style":{"spacing":{"blockGap":"1rem","padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}},"border":{"radius":"16px"},"shadow":"var(--mendrix-shadow-card)"}} -->
<div class="wp-block-group card-shadow" style="padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem"><!-- wp:post-featured-image {"isLink":true,"height":"220px"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"lg"} /-->

<!-- wp:post-excerpt {"moreText":"Read more"} /-->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"},"fontSize":"xs"} -->
<div class="wp-block-group has-xs-font-size"><!-- wp:post-date /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
