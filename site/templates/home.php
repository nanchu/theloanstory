<?php snippet('header') ?>

    <section class="main">
      <header><h1></h1></header>
      <div class="main-banner">
</div>
<div class="cta">
  <h1><?= $page->heading() ?> <?= $page->subheading() ?></h1>
  <p><?= $page->text() ?></p>
  <br/>
  <a class="text-link">LINK PLACEHOLDER</a>
</div>
<div class="help-links">
  <span class="grid-33">
    <span class="icon icon-refresh"></span>
    <h2>What is the loan Process?</h2>
    <p>From organizing your documents
to closing your loan.</p>
    <a class="primary text-link">FIND OUT WHAT'S INVOLVED</a>
  </span>
  <span class="grid-33">
    <span class="icon icon-search"></span>
    <h2>Which Loan is Right for Me?</h2>
    <p>Fixed rate, Adjustable rate, or first time homebuyer?</p>
    <a class="primary text-link">FIND OUT WHAT'S INVOLVED</a>
  </span>
  <span class="grid-33">
    <span class="icon icon-calculator"></span>
    <h2>What is My Monthly Payment?</h2>
    <p>Calculate your monthly payment and budget your cashflow.</p>
    <a class="primary text-link">FIND OUT WHAT'S INVOLVED</a>
  </span>
</div>
<div class="customer-reviews">
  <h2>Five Star Ratings For All Loan Advisors On Yelp</h2>
  <br/>
  <div class="quote-box grid-33">
   <p><?= $page->review1() ?></p>
   <span class="icon-user"></span>
   <span>David R.</span>
  </div>
  <div class="quote-box grid-33">
    <p><?= $page->review2() ?></p>
    <span class="icon-user"></span>
    <span>Dennis N. </span>
  </div>
  <div class="quote-box grid-33">
    <p><?= $page->review3() ?></p>
    <span class="icon-user"></span>
    <span>Zach L.</span>
  </div>
  <a class="primary text-link">READ MORE REVIEWS ON YELP</a>
</div>
    </section>

<?php snippet('footer') ?>