<?php require 'partials/header.php';?></head><body>
<?php require 'partials/nav.php'?>

<div class="container">
  <div class="row">
    <?php require 'partials/user-profile-col.php'?>
    <div class="posts-col col-12 col-sm-12 col-md-12 col-lg-6">

      <h1>Feed</h1>
      <?php
        $data=[
          [
            'author'=>'Zane',
            'content'=>'Welcome to my dummy text',
            'posted_at'=>'24:01 Pacific Time',
            'comments'=>[
              'author'=>'John',
              'content'=>'lol so dummb'
            ]
          ],
        ];
        foreach($data as $key){
          echo<<<ND
          <div class="post">
            <div class="origin">
              <a href="/">{$key['author']}</a> at {$key['posted_at']}
            </div>
            <p>{$key['content']}</p>
          </div>
ND;
        }
      ?>

      <div class="post">
        <div class="origin">
          <a href="/">Zanny</a> at 12:34 PM Pacific
        </div>
        <p>This is a sample post provided by the creator</p>
        <div class="comments">
          <div class="single">
            <div class="origin">
              <a href="/">Zanny</a> at 12:34 PM Pacific
            </div>
            <p>okay, true, but this is a reply.</p>
          </div>
          <div class="single">
            <div class="origin">
              <a href="/">Zanny</a> at 12:34 PM Pacific
            </div>
            <p>okay, true, but this is a reply.</p>
          </div>
        </div>
      </div>
      <div class="post">
        <div class="origin">
          <a href="/">Zanny</a> at 12:34 PM Pacific
        </div>
        <p>This is a sample post provided by the creator</p>
        <div class="comments">
          <div class="single">
            <div class="origin">
              <a href="/">Zanny</a> at 12:34 PM Pacific
            </div>
            <p>okay, true, but this is a reply.</p>
          </div>
          <div class="single">
            <div class="origin">
              <a href="/">Zanny</a> at 12:34 PM Pacific
            </div>
            <p>okay, true, but this is a reply.</p>
          </div>
        </div>
      </div>
      <div class="post">
        <div class="origin">
          <a href="/">Zanny</a> at 12:34 PM Pacific
        </div>
        <p>This is a sample post provided by the creator</p>
        <div class="comments">
          <div class="single">
            <div class="origin">
              <a href="/">Zanny</a> at 12:34 PM Pacific
            </div>
            <p>okay, true, but this is a reply.</p>
          </div>
          <div class="single">
            <div class="origin">
              <a href="/">Zanny</a> at 12:34 PM Pacific
            </div>
            <p>okay, true, but this is a reply.</p>
          </div>
        </div>
      </div>
      <div class="post">
        <div class="origin">
          <a href="/">Zanny</a> at 12:34 PM Pacific
        </div>
        <p>This is a sample post provided by the creator</p>
        <div class="comments">
          <div class="single">
            <div class="origin">
              <a href="/">Zanny</a> at 12:34 PM Pacific
            </div>
            <p>okay, true, but this is a reply.</p>
          </div>
          <div class="single">
            <div class="origin">
              <a href="/">Zanny</a> at 12:34 PM Pacific
            </div>
            <p>okay, true, but this is a reply.</p>
          </div>
        </div>
      </div>
      <div class="post">
        <div class="origin">
          <a href="/">Zanny</a> at 12:34 PM Pacific
        </div>
        <p>This is a sample post provided by the creator</p>
        <div class="comments">
          <div class="single">
            <div class="origin">
              <a href="/">Zanny</a> at 12:34 PM Pacific
            </div>
            <p>okay, true, but this is a reply.</p>
          </div>
          <div class="single">
            <div class="origin">
              <a href="/">Zanny</a> at 12:34 PM Pacific
            </div>
            <p>okay, true, but this is a reply.</p>
          </div>
          <div class="single">
            <div class="origin">
              <a href="/">Zanny</a> at 12:34 PM Pacific
            </div>
            <p>okay, true, but this is a reply.</p>
          </div>
        </div>
      </div>
      <div class="post">
        <div class="origin">
          <a href="/">Zanny</a> at 12:34 PM Pacific
        </div>
        <p>This is a sample post provided by the creator</p>
        <div class="comments">
          <div class="single">
            <div class="origin">
              <a href="/">Zanny</a> at 12:34 PM Pacific
            </div>
            <p>okay, true, but this is a reply.</p>
          </div>
          <div class="single">
            <div class="origin">
              <a href="/">Zanny</a> at 12:34 PM Pacific
            </div>
            <p>okay, true, but this is a reply.</p>
          </div>
        </div>
      </div>


    </div>
    <?php require 'partials/discover-col.php'?>
  </div>
</div>
<?php require 'partials/footer.php';?>