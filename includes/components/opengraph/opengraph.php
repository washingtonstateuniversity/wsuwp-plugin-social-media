<?php namespace WSUWP\Social;

?>
<?php if ( ! empty( $search_snippet ) ) : ?><meta name="description" content="<?php echo esc_html( $search_snippet ); ?>"><?php endif; ?>
<?php if ( ! empty( $search_keywords ) ) : ?><meta name="keywords" content=""><?php endif; ?>
<?php if ( ! empty( $fb_title ) ) : ?><meta property="og:title" content="<?php echo esc_html( $fb_title ); ?>" /><?php endif; ?>
<meta property="og:type" content="article" />
<?php if ( ! empty( $fb_url ) ) : ?><meta property="og:url" content="<?php echo esc_url( $fb_url ); ?>" /><?php endif; ?>
<?php if ( ! empty( $fb_snippet ) ) : ?><meta property="og:description" content="<?php echo esc_html( $fb_snippet ); ?>" /><?php endif; ?>
<?php if ( ! empty( $fb_img_src ) ) : ?><meta property="og:image" content="<?php echo esc_url( $fb_img_src ); ?>" /><?php endif; ?>
<?php if ( ! empty( $tw_title ) ) : ?><meta name="twitter:title" content="<?php echo esc_html( $tw_title ); ?>" /><?php endif; ?>
<?php if ( ! empty( $tw_snippet ) ) : ?><meta name="twitter:description" content="<?php echo esc_html( $tw_snippet ); ?>" /><?php endif; ?>
<?php if ( ! empty( $tw_url ) ) : ?><meta name="twitter:url" content="<?php echo esc_url( $tw_url ); ?>" /><?php endif; ?>
<?php if ( ! empty( $tw_img_src ) ) : ?><meta name="twitter:image" content="<?php echo esc_url( $tw_img_src ); ?>" /><?php endif; ?>
