<!DOCTYPE html>
<html>
  <head>
      <?php include 'head.php'; ?>
  </head>
  <body>
      <div class="shizzo-header" id="app">
        <?php $header_title = "We're Shizzo"; $header_subtitle = "an upcoming game launcher."; include 'nav.php'; ?>
        <template>
          <section id="page">
            <p class="title has-text-centered">Shizzo is Coming Soon.</p>
            <p class="subtitle has-text-centered">Check back Later</p> 
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