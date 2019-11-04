<?php namespace WSUWP\Social;

?>
<?php if ( ! empty( $snippet ) ) : ?><meta name="description" content="<?php echo esc_attr( $snippet ); ?>"><?php endif; ?>
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article" />
<?php if ( ! empty( $title ) ) : ?><meta property="og:title" content="<?php echo esc_attr( $title ); ?>" /><?php endif; ?>
<?php if ( ! empty( $snippet ) ) : ?><meta property="og:description" content="<?php echo esc_attr( $snippet ); ?>" /><?php endif; ?>
<?php if ( ! empty( $url ) ) : ?><meta property="og:url" content="<?php echo esc_url( $url ); ?>" /><?php endif; ?>
<meta property="og:site_name" content="<?php echo esc_attr( $site_name ); ?>">
<?php if ( ! empty( $img_src ) ) : ?><meta property="og:image" content="<?php echo esc_url( $img_src ); ?>" /><?php endif; ?>
<?php if ( ! empty( $img_width ) ) : ?><meta property="og:image:width" content="<?php echo esc_attr( $img_width ); ?>" /><?php endif; ?>
<?php if ( ! empty( $img_height ) ) : ?><meta property="og:image:height" content="<?php echo esc_attr( $img_height ); ?>" /><?php endif; ?>
<meta name="twitter:card" content="summary">
<?php if ( ! empty( $snippet ) ) : ?><meta name="twitter:description" content="<?php echo esc_attr( $snippet ); ?>" /><?php endif; ?>
<?php if ( ! empty( $title ) ) : ?><meta name="twitter:title" content="<?php echo esc_attr( $title ); ?>" /><?php endif; ?>
<?php if ( ! empty( $img_src ) ) : ?><meta name="twitter:image" content="<?php echo esc_url( $img_src ); ?>" /><?php endif; ?>
