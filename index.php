<!DOCTYPE html>
<html>
  <head>
      <?php include 'head.php'; ?>
  </head>
  <body>
      <div class="shizzo-header" id="app">
        <?php include 'nav.php'; ?>
        <?php $header_title = "We're Kojavv"; $header_subtitle = "an upcoming game launcher"; include 'page-banner.php'; ?>
        <template>
          <section class="container" id="page">
              <div class="columns">
                <div class="column is-two-fifths">
                  <p class="title">About Us</p>
                  <div class="card">
                    <p class="card-header-title">What is Kojavv?</p>
                    <div class="card-content"><p class="content">Kojavv is a game launcher where you can download your favourite games for money or for free, there is also a platform aspect of it similar to the popular game launcher Steam, developed by Valve Corporation.</p></div>
                  </div>
                  <div style="height: 10px;"></div>
                  <div class="card">
                    <p class="card-header-title">Who founded Shizzo?</p>
                    <div class="card-content"><p class="content">Kojavv (previously named Shizzo) was founded in the year 2020 by the current CEO - Joshua Gleeson.</p></div>
                  </div>
                  <div style="height: 10px;"></div>
                  <div class="card">
                    <p class="card-header-title">Have a question for us?</p>
                    <div class="card-content"><p class="content">Submit a question for us to answer <a href="#" onclick="modal('Submit a question & we will answer it', 'Go to [insert link] to submit a question to us and we will answer it.', 'Close')">here</a>.</p></div>
                  </div>
                </div>
                <div class="column is-two-fifths">
                  [insert featured games]
                </div>
                <div class="column is-two-fifths">
                  [insert social stats]
                </div>
              </div>
            </section>
        </template>
      </div>
      <script src="https://unpkg.com/vue"></script>
      <script src="https://unpkg.com/buefy/dist/buefy.min.js"></script>
      <script src="https://unpkg.com/buefy/dist/components/table"></script>
      <script src="https://unpkg.com/buefy/dist/components/input"></script>
      <script>
          new Vue({
              el: '#app'
          })
      </script>
    </div>
  </body>
</html>