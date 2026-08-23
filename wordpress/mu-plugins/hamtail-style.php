<?php
/**
 * Plugin Name: HAM TAIL Site Style
 * Description: Styles WordPress pages to match the HAM TAIL / HaM Soft static site.
 * Version: 1.1.0
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_enqueue_scripts', function () {
    if (is_admin()) {
        return;
    }

    wp_register_style('hamtail-site-style', false, [], '1.1.0');
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
body.page main,
body.archive main,
body.search main,
body.blog main {
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

/* Archive / category / tag / search headings */
body.archive main > .wp-block-group:first-child,
body.search main > .wp-block-group:first-child,
body.blog main > .wp-block-group:first-child {
  padding-top:54px !important;
}
body.archive h1,
body.search h1,
body.blog h1,
body.archive .wp-block-query-title,
body.search .wp-block-query-title {
  color:#fff !important;
  font-size:clamp(2.1rem,5vw,3.8rem) !important;
  line-height:1.1 !important;
  letter-spacing:-.035em;
  margin-bottom:12px !important;
}
body.archive .taxonomy-description,
body.archive .term-description,
body.search .wp-block-query-title + p,
body.blog main p:first-of-type {
  color:var(--ham-muted) !important;
}

/* Article cards */
.wp-block-post-template {
  display:grid !important;
  grid-template-columns:repeat(2,minmax(0,1fr));
  gap:22px !important;
  padding-left:0 !important;
}
.wp-block-post-template > li,
.wp-block-query .wp-block-post {
  position:relative;
  overflow:hidden;
  background:linear-gradient(180deg,rgba(23,36,61,.94),rgba(15,23,42,.98));
  border:1px solid var(--ham-line);
  border-radius:20px;
  padding:0 0 22px !important;
  box-shadow:0 24px 55px -42px rgba(0,0,0,.95);
  transition:transform .18s ease,border-color .18s ease,box-shadow .18s ease;
}
.wp-block-post-template > li:hover,
.wp-block-query .wp-block-post:hover {
  transform:translateY(-3px);
  border-color:rgba(96,165,250,.28);
  box-shadow:0 30px 64px -38px rgba(0,0,0,.95);
}
.wp-block-post-template .wp-block-post-featured-image,
.wp-block-query .wp-block-post-featured-image {
  margin:0 0 18px !important;
}
.wp-block-post-template .wp-block-post-featured-image a,
.wp-block-query .wp-block-post-featured-image a {
  display:block;
  overflow:hidden;
}
.wp-block-post-template .wp-block-post-featured-image img,
.wp-block-query .wp-block-post-featured-image img {
  width:100% !important;
  aspect-ratio:16/9;
  object-fit:cover;
  border-radius:0 !important;
  transition:transform .25s ease;
}
.wp-block-post-template > li:hover .wp-block-post-featured-image img,
.wp-block-query .wp-block-post:hover .wp-block-post-featured-image img {
  transform:scale(1.025);
}
.wp-block-post-template .wp-block-post-title,
.wp-block-query .wp-block-post-title,
.wp-block-post-template .wp-block-post-date,
.wp-block-query .wp-block-post-date,
.wp-block-post-template .wp-block-post-terms,
.wp-block-query .wp-block-post-terms,
.wp-block-post-template .wp-block-post-excerpt,
.wp-block-query .wp-block-post-excerpt {
  margin-left:22px !important;
  margin-right:22px !important;
}
.wp-block-post-template .wp-block-post-title,
.wp-block-query .wp-block-post-title {
  margin-top:8px !important;
  margin-bottom:10px !important;
  font-size:clamp(1.15rem,2vw,1.5rem) !important;
  line-height:1.4 !important;
}
.wp-block-post-template .wp-block-post-title a,
.wp-block-query .wp-block-post-title a {
  color:#fff !important;
  text-decoration:none !important;
}
.wp-block-post-template .wp-block-post-title a:hover,
.wp-block-query .wp-block-post-title a:hover {
  color:#bfdbfe !important;
}
.wp-block-post-template .wp-block-post-date,
.wp-block-query .wp-block-post-date,
.wp-block-post-template .wp-block-post-terms,
.wp-block-query .wp-block-post-terms {
  color:#7dd3fc !important;
  font-size:.8rem !important;
}
.wp-block-post-template .wp-block-post-terms a,
.wp-block-query .wp-block-post-terms a {
  color:#7dd3fc !important;
  text-decoration:none !important;
}
.wp-block-post-excerpt__excerpt {
  color:var(--ham-muted) !important;
  line-height:1.75;
}
.wp-block-post-excerpt__more-link {
  display:inline-flex;
  margin-top:8px;
  color:#bfdbfe !important;
  font-weight:700;
  text-decoration:none !important;
}
.wp-block-post-excerpt__more-link::after {
  content:' →';
}

/* Pagination */
.wp-block-query-pagination {
  margin-top:34px !important;
  padding:18px 0 10px;
  gap:10px !important;
}
.wp-block-query-pagination a,
.wp-block-query-pagination .page-numbers,
nav.navigation.pagination a,
nav.navigation.pagination span {
  display:inline-flex;
  align-items:center;
  justify-content:center;
  min-width:42px;
  min-height:42px;
  padding:8px 13px;
  border-radius:10px;
  border:1px solid var(--ham-line);
  background:rgba(255,255,255,.035);
  color:#dbeafe !important;
  text-decoration:none !important;
}
.wp-block-query-pagination .current,
nav.navigation.pagination .current {
  background:linear-gradient(135deg,var(--ham-primary),#0ea5e9) !important;
  border-color:transparent;
  color:#fff !important;
}

/* Search form */
.wp-block-search__inside-wrapper {
  border:1px solid var(--ham-line) !important;
  border-radius:12px;
  overflow:hidden;
  background:rgba(255,255,255,.035);
}
.wp-block-search__input {
  background:transparent !important;
  color:#fff !important;
  border:0 !important;
}
.wp-block-search__input::placeholder { color:#64748b; }
.wp-block-search__button {
  background:linear-gradient(135deg,var(--ham-primary),#0ea5e9) !important;
  color:#fff !important;
  border:0 !important;
}

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

@media (max-width:820px) {
  .wp-block-post-template { grid-template-columns:1fr !important; }
}

@media (max-width:700px) {
  body.single .wp-block-post-title,
  body.page .wp-block-post-title { margin-top:38px !important; }
  .wp-block-post-content { padding:24px 18px 34px !important; border-radius:18px; }
  header.wp-block-template-part { position:relative; }
  .wp-block-post-template .wp-block-post-title,
  .wp-block-query .wp-block-post-title,
  .wp-block-post-template .wp-block-post-date,
  .wp-block-query .wp-block-post-date,
  .wp-block-post-template .wp-block-post-terms,
  .wp-block-query .wp-block-post-terms,
  .wp-block-post-template .wp-block-post-excerpt,
  .wp-block-query .wp-block-post-excerpt {
    margin-left:18px !important;
    margin-right:18px !important;
  }
}
CSS;

    wp_add_inline_style('hamtail-site-style', $css);
}, 99);
