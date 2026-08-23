<?php
/**
 * Plugin Name: HAM TAIL Site Style
 * Description: Styles WordPress pages to match the HAM TAIL / HaM Soft static site.
 * Version: 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_enqueue_scripts', function () {
    if (is_admin()) {
        return;
    }

    wp_register_style('hamtail-site-style', false, [], '1.0.0');
    wp_enqueue_style('hamtail-site-style');

    $css = <<<'CSS'
:root {
  --ham-bg:#0b1222;
  --ham-bg2:#0f172a;
  --ham-card:#111c32;
  --ham-card2:#17243d;
  --ham-text:#f8fafc;
  --ham-muted:#94a3b8;
  --ham-primary:#2563eb;
  --ham-sky:#38bdf8;
  --ham-line:rgba(255,255,255,.09);
}

html { scroll-behavior:smooth; }
body {
  background:
    radial-gradient(circle at 20% 0, rgba(56,189,248,.12), transparent 30%),
    linear-gradient(180deg,var(--ham-bg) 0%,var(--ham-bg2) 100%) !important;
  color:var(--ham-text) !important;
}
body, button, input, select, textarea {
  font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Hiragino Kaku Gothic ProN","Yu Gothic UI",sans-serif !important;
}
.wp-site-blocks { padding-top:0 !important; padding-bottom:0 !important; }

/* Header */
header.wp-block-template-part {
  position:sticky;
  top:0;
  z-index:40;
  background:rgba(11,18,34,.84) !important;
  backdrop-filter:blur(14px);
  border-bottom:1px solid var(--ham-line);
}
header.wp-block-template-part > * {
  max-width:1160px !important;
  margin-left:auto !important;
  margin-right:auto !important;
}
header.wp-block-template-part .wp-block-site-title a {
  font-weight:900 !important;
  letter-spacing:.08em;
  text-decoration:none !important;
  background:linear-gradient(90deg,#bfdbfe,#7dd3fc,#c4b5fd);
  -webkit-background-clip:text;
  color:transparent !important;
}
header.wp-block-template-part a { color:#dbeafe !important; text-decoration:none !important; }
header.wp-block-template-part nav a {
  padding:.55rem .85rem;
  border-radius:9px;
}
header.wp-block-template-part nav a:hover { background:rgba(255,255,255,.06); color:white !important; }

/* Main article/page area */
main,
main.wp-block-group,
.wp-block-post-content,
.wp-block-query {
  color:var(--ham-text);
}
main.wp-block-group,
body.single main,
body.page main {
  max-width:1160px !important;
  margin-left:auto !important;
  margin-right:auto !important;
  padding-left:22px !important;
  padding-right:22px !important;
}

body.single .wp-block-post-title,
body.page .wp-block-post-title {
  max-width:900px;
  margin:64px auto 18px !important;
  font-size:clamp(2rem,5vw,4rem) !important;
  line-height:1.12 !important;
  letter-spacing:-.035em;
  color:#fff !important;
}

body.single .wp-block-post-date,
body.single .wp-block-post-terms,
body.page .wp-block-post-date,
body.page .wp-block-post-terms {
  max-width:900px;
  margin-left:auto !important;
  margin-right:auto !important;
  color:var(--ham-muted) !important;
}

.wp-block-post-content {
  max-width:900px !important;
  margin:28px auto 72px !important;
  padding:32px clamp(20px,4vw,48px) 46px !important;
  background:linear-gradient(180deg,rgba(23,36,61,.93),rgba(15,23,42,.96));
  border:1px solid var(--ham-line);
  border-radius:24px;
  box-shadow:0 30px 70px -45px rgba(0,0,0,.95);
}
.wp-block-post-content > * { max-width:100% !important; }
.wp-block-post-content p,
.wp-block-post-content li { color:#d6deea !important; font-size:1.02rem; line-height:1.9; }
.wp-block-post-content h2,
.wp-block-post-content h3,
.wp-block-post-content h4 { color:#fff !important; line-height:1.35; }
.wp-block-post-content h2 {
  margin-top:2.4em !important;
  margin-bottom:.8em !important;
  padding-bottom:.45em;
  border-bottom:1px solid rgba(96,165,250,.24);
  font-size:clamp(1.6rem,3vw,2.2rem) !important;
}
.wp-block-post-content h3 {
  margin-top:1.9em !important;
  color:#bfdbfe !important;
}
.wp-block-post-content a { color:#7dd3fc !important; text-decoration-thickness:1px; text-underline-offset:3px; }
.wp-block-post-content a:hover { color:#bfdbfe !important; }
.wp-block-post-content strong { color:#fff; }
.wp-block-post-content img {
  border-radius:16px;
  border:1px solid var(--ham-line);
  box-shadow:0 18px 40px -28px #000;
}
.wp-block-post-content figure { margin-top:1.6rem !important; margin-bottom:1.8rem !important; }
.wp-block-post-content figcaption { color:var(--ham-muted) !important; font-size:.85rem; }
.wp-block-post-content blockquote {
  border-left:4px solid var(--ham-sky) !important;
  background:rgba(56,189,248,.07);
  padding:18px 20px !important;
  border-radius:0 12px 12px 0;
}
.wp-block-post-content pre,
.wp-block-post-content code {
  background:#07101f !important;
  color:#dbeafe !important;
}
.wp-block-post-content pre {
  border:1px solid var(--ham-line);
  border-radius:12px;
  padding:18px !important;
  overflow:auto;
}
.wp-block-post-content table {
  width:100%;
  border-collapse:separate;
  border-spacing:0;
  overflow:hidden;
  border:1px solid var(--ham-line);
  border-radius:12px;
}
.wp-block-post-content th { background:rgba(37,99,235,.14); color:#fff; }
.wp-block-post-content td,
.wp-block-post-content th { border-color:var(--ham-line) !important; padding:.75rem .9rem; }

/* Lists / archive */
.wp-block-post-template { gap:18px !important; }
.wp-block-post-template > li,
.wp-block-query .wp-block-post {
  background:linear-gradient(180deg,rgba(23,36,61,.92),rgba(15,23,42,.95));
  border:1px solid var(--ham-line);
  border-radius:18px;
  padding:22px !important;
}
.wp-block-post-template .wp-block-post-title a,
.wp-block-query .wp-block-post-title a { color:#fff !important; text-decoration:none !important; }
.wp-block-post-excerpt__excerpt { color:var(--ham-muted) !important; }

/* Buttons */
.wp-element-button,
.wp-block-button__link {
  background:linear-gradient(135deg,var(--ham-primary),#0ea5e9) !important;
  color:#fff !important;
  border-radius:10px !important;
  font-weight:800;
  border:0 !important;
  box-shadow:0 12px 24px rgba(37,99,235,.18);
}

/* Footer */
footer.wp-block-template-part {
  margin-top:56px !important;
  border-top:1px solid var(--ham-line);
  background:#08111f !important;
  color:var(--ham-muted) !important;
}
footer.wp-block-template-part a { color:#bfdbfe !important; }

/* Remove default white backgrounds and oversized spacing from TT5 */
.wp-block-group.has-background,
.wp-block-cover,
.wp-block-template-part { color:inherit; }
body .has-base-background-color { background:transparent !important; }
body .has-contrast-color { color:var(--ham-text) !important; }

@media (max-width:700px) {
  body.single .wp-block-post-title,
  body.page .wp-block-post-title { margin-top:38px !important; }
  .wp-block-post-content { padding:24px 18px 34px !important; border-radius:18px; }
  header.wp-block-template-part { position:relative; }
}
CSS;

    wp_add_inline_style('hamtail-site-style', $css);
}, 99);
