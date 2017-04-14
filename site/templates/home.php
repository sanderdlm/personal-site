<?php snippet('header') ?>

<main class="main" role="main">
  
  <!-- Header -->
  <header>
    <h1 class='comment'><?= $page->header_text()->html() ?></h1>
  </header>
  
  <!-- Bio -->
  <section class='bio'>
    <h2><span class='classname'>.bio</span><span class='bracket'>{</span></h2>
    <ul class="properties">
      <li>age: <span class="value"><?= date('Y') - $page->birth_year()->int() ?></span>;</li>
      <li>interests:
      <?php foreach($page->interests()->split(',') as $tag_index => $tag): ?>
          <span class="value"><?=$tag?></span><?=($tag_index != (count($page->interests()->split(','))-1)) ? ' /' : ';';?>
      <?php endforeach ?></li>
      <li>job: <span class="string">"<?= $page->job_title()->text() ?>"</span> [<a href="<?= $page->job_link()->text() ?>">@<?= $page->job_company()->text() ?></a>];</li>
    </ul>
    <span class='bracket closing'>}</span>
  </section>

  <!-- Work/Projects -->
  <section class='work'>
    <h2><span class='classname'>.work</span><span class='bracket'>{</span></h2>
    <ul>
      <?php foreach($pages->find('projects')->children() as $project): ?>
        <li>
          <a href="<?= $project->live_link() ?>" target='_blank'><h3><span class='project-id'>#<?= $project->title()->html() ?></span><span class='bracket'>{</span></h3></a>
          <ul class="properties">
            <li>year: <span class="value"><?= $project->year() ?></span>;</li>
            <li>technologies: 
            <?php foreach($project->tags()->split(',') as $tag_index => $tag): ?>
              <span class="value"><?=$tag?></span><?=($tag_index != (count($project->tags()->split(','))-1)) ? ' / ' : ';';?>
            <?php endforeach ?></li>
            <li><span>description:</span> <span class="description"><span class="string">"<?= $project->description() ?>"</span>;</span></li>
          </ul>
          <span class='bracket closing'>}</span>
        </li>
      <?php endforeach ?>
      <li>
        <h3><a href='<?= $page->github_link()->text() ?>' target='_blank'>> more on my github</a></h3>
      </li>
    </ul>
    <span class='bracket closing'>}</span>
  </section>

    <!-- Contact -->
    <section class='contact'>
      <h2><span class='classname'>.contact</span><span class='bracket'>{</span></h2>
      <ul>
        <li>mail: inbox at sanderdlm.be > <a href='Sander%20De%20la%20Marche%20inbox@sanderdlm.be%20(0x5244A7CA)%20pub.asc'>[PGP key]</a>;</li>
      </ul>
      <span class='bracket closing'>}</span>
    </section>

</main>

<?php snippet('footer') ?>