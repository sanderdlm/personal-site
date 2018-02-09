<?php snippet('header') ?>

<main class="main" role="main">
  
  <!-- Header -->
  <header>
    <h1 class='comment'><?= $page->header_text()->html() ?></h1>
  </header>

  <nav class="languages" role="navigation">
    <ul>
      <?php foreach($site->languages() as $language): ?>
      <li<?php e($site->language() == $language, ' class="active"') ?>>
        use <a href="<?php echo $language->url() ?>"><?= html($language->name())?></a>;
      </li>
      <?php endforeach ?>
    </ul>
  </nav>
  
  <h2>Class <span class='classname'>Portfolio</span><span class='bracket'>{</span></h2>

  
  <!-- Bio -->
  <section class='bio'>
    <ul class="properties">
      <li>public <span class="variable">$<?= l::get('name')?></span> = <span class="string">'<?= $page->name()->text() ?>'</span>;</li>
      <li>public <span class="variable">$<?= l::get('age')?></span> = <span class="value"><?= date('Y') - $page->birth_year()->int() ?></span>;</li>
      <li>public <span class="variable">$<?= l::get('job')?></span> = <span class="string">'<?= $page->job_title()->text() ?>'</span> [<a href="<?= $page->job_link()->text() ?>">@<?= $page->job_company()->text() ?></a>];</li>
      <li class="array">public <span class="variable">$<?= l::get('skills')?></span> =
        [<?php foreach($page->skills()->split(',') as $tag_index => $tag): ?><span class="string">'<?=$tag?>'</span><?php endforeach ?>];
      </li>
      <li class="array-inline">public <span class="variable">$<?= l::get('technologies')?></span> =
        [<?php foreach($page->technologies()->split(',') as $tag_index => $tag): ?><span class="string">'<?=$tag?>'</span><?php endforeach ?>];
      </li>
      
    </ul>
  </section>

  <!-- Work/Projects -->
  <section class='work'>
    <h2>public <span class='function'>function</span> <span class='classname'><?= l::get('work'); ?></span><span class='bracket'>{</span></h2>
    
    <ul class="array">
      <span class='return'>return</span> [
      <?php foreach($pages->find('projects')->children() as $project): ?>
        <li>
          <span class='string'>'<?= $project->title()->html() ?>'</span> => [
          <ul class="properties">
            <li>
              <span class="string">'<?= l::get('link')?>'</span> =
              <?php if($project->live_link()->isNotEmpty()): ?>
                <a href="<?= $project->live_link() ?>" target='_blank'><?= $project->live_link() ?></a>
                <?php else: ?>
                <span class="string">no link</span>
              <?php endif ?>
            </li>
            <li><span class="string">'<?= l::get('year')?>'</span> = <span class="value"><?= $project->year() ?></span>;</li>
            <li class='array-inline'><span class="string">'<?= l::get('technologies')?>'</span> = 
              [<?php foreach($project->tags()->split(',') as $tag_index => $tag): ?><span class="string">'<?=$tag?>'</span><?php endforeach ?>];
            </li>
            <li><span><span class="string">'<?= l::get('description')?>'</span> =</span> <span class="description"><span class="string">"<?= $project->description() ?>"</span>;</span></li>
          </ul>
          ]</li>
      <?php endforeach ?>
      ];
    </ul>
    <span class='bracket closing'>}</span>
  </section>

    <!-- Contact -->
    <section class='contact'>
      <h2>public <span class='function'>function</span> <span class='classname'><?= l::get('contact'); ?></span><span class='bracket'>{</span></h2>
      <ul>
        <li>mail: inbox at sanderdlm.be <a href='<?php echo url('assets/key.asc') ?>'>[PGP key]</a>;</li>
        <li>github: <a href='<?= $page->github_link()->text() ?>'>dreadnip</a>;</li>
        <li>twitter: <a href='<?= $page->twitter_link()->text() ?>'>@dreadnip</a>;</li>
      </ul>
      <span class='bracket closing'>}</span>
    </section>
  
  <span class='bracket closing'>}</span>
</main>

<?php snippet('footer') ?>